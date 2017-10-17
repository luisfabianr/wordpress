<?php
/**
 * functions.php
 *
 */

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */
add_action( 'genesis_setup', 'bsg_load_lib_files', 15 );

function bsg_load_lib_files() {
    foreach ( glob( dirname( __FILE__ ) . '/lib/*.php' ) as $file ) { include $file; }
}

// CPT docentes **************************************************************************************************************************************
function custom_post_type_landing() {
    
    $labels = array( 
        'name'               => _x( 'Landing', 'general name' ),
        'singular_name'      => _x( 'Landing', 'singular name' ),
        'add_new'            => _x( 'Añadir nuevo', 'landing' ),
        'add_new_item'       => __( 'Añadir nuevo landing' ),
        'edit_item'          => __( 'Editar landing' ),
        'new_item'           => __( 'Nuevo landing' ),
        'all_items'          => __( 'Todos los landings' ),
        'view_item'          => __( 'Ver landing' ),
        'search_items'       => __( 'Buscar landing' ),
        'not_found'          => __( 'No se encontraron landings' ),
        'not_found_in_trash' => __( 'No se encontraron landings en la papalera' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Landings'
    );
    $args = array( 
        'labels'        => $labels,
        'public'        => true,
        'menu_position' => 3,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'genesis-seo', 'genesis-layouts', 'custom-fields' ),      
        'taxonomies'   => array( 'categories_landing' ), 
        'has_archive'   => true,
    );
    register_post_type(__( 'landing' ), $args); 
}
add_action( 'init', 'custom_post_type_landing' );

// Categorias
add_action( 'init', 'build_taxonomies_landing', 0 );
function build_taxonomies_landing() {
    register_taxonomy( 'categories_landing', 'landing', array( 'hierarchical' => true, 'label' => 'Categorías', 'query_var' => true, 'rewrite' => true ) );
}