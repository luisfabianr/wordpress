<?php 
$featured_query = new WP_Query( $args );
$count = 0;
 while ( $featured_query->have_posts()); 
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
 ?>

<div class="wrapper">
    <div class="sidebar-datos"  style="background-image: url(<?php echo $image[0];?>); ">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="/">
                    <img src="/wp-content/themes/actualizaclientes/img/logo-centro-corona.svg" alt="">
                </a>
            </div>          
        </div>
    </div>
    <div class="main-panel">
        <div class="content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center pagination-centered">
                        <?php 
                            $id= get_the_id(); 
                            $post = get_post($id); 
                            $content = apply_filters('the_content', $post->post_content); 
                            echo $content;  
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>

</div><!-- end #content -->