
 <?php 


//* Full Width
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
//* Remove page titles site wide (posts & pages) (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

 // Remove Footer
 remove_action('genesis_footer', 'genesis_do_footer');
 remove_action('genesis_footer', 'genesis_footer_markup_open', 5);
 remove_action('genesis_footer', 'genesis_footer_markup_close', 15);

?>
<?php get_header(); ?>


<?php get_footer(); ?>