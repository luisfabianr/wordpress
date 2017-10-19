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
                    <img src="/suscriptores/wp-content/themes/actualizaclientes/img/logo-centro-corona.svg" alt="">
                </a>
            </div>          
        </div>
    </div>
    <div class="main-panel">
        <div class="content-wrap vertical-center">
            <div class="container-landing text-center">
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
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <?php if (!dynamic_sidebar('Footer Sidebar')) : ?>
                        <h4><?php _e("Footer Sidebar", 'genesis'); ?></h4>
                        <div class="wrap">
                            <p><?php _e("This sidebar displays footer in landing.", 'genesis'); ?></p>
                        </div><!-- end .wrap -->
                <?php endif; ?>
            </div>
        </footer>

    </div>
</div>

</div><!-- end #content -->