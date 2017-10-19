<?php
/**
 * functions.php
 *
 */
//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'actualizaclientes' );
define( 'CHILD_THEME_URL', 'https://www.actualizayremodela.com/' );
define( 'CHILD_THEME_VERSION', '1.0.1' );

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */
add_action( 'genesis_setup', 'bsg_load_lib_files', 15 );

function bsg_load_lib_files() {
    foreach ( glob( dirname( __FILE__ ) . '/lib/*.php' ) as $file ) { include $file; }
}

//* Register widget area
add_action( 'widgets_init', 'footer_register_sidebar' );
function footer_register_sidebar() {
    genesis_register_sidebar( array(
        'id' => 'sidebar-footer',
        'name' => 'Footer Sidebar',
        'description' => 'This sidebar displays footer in landing.'
    ) );
}

//* Support span
function override_mce_options($initArray) 
{
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  return $initArray;
 }
 add_filter('tiny_mce_before_init', 'override_mce_options'); 

//* Front page
 add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {
if ( is_home() && false == $query->query_vars['suppress_filters'] )
$query->set( 'post_type', array(
'post', 'page', 'landing' ) );
    return $query;
 }  
