<?php
add_theme_support( 'post-thumbnails' );

function wys_enqueue_styles() {
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
	wp_enqueue_script( 'all.js', get_template_directory_uri() . '/all.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wys_enqueue_styles' );

register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu'
) );

add_action( 'init', 'create_banner_home_post_type' );
function create_banner_home_post_type() {
  register_post_type( 'banner_home',
    array(
      'labels' => array(
        'name' => __( 'Banners Home' ),
        'singular_name' => __( 'Banner Home' ),
        'add_new' => __( 'Agregar Banner Home' )
      ),
      'public' => true,
      'has_archive' => false,
      'supports'=> array('title', 'editor', 'thumbnail', 'page-attributes'),
    )
  );
}

add_action( 'init', 'create_product_post_type' );
function create_product_post_type() {
  register_post_type( 'product',
    array(
      'labels' => array(
        'name' => __( 'Productos' ),
        'singular_name' => __( 'Producto' ),
        'add_new' => __( 'Agregar Producto' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports'=> array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'),
    )
  );
  flush_rewrite_rules();
}
add_action( 'init', 'create_product_taxonomy', 0 );

function create_product_taxonomy() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Categorías de producto', 'taxonomy general name', 'textdomain' ),
    'singular_name'     => _x( 'Categoría de producto', 'taxonomy singular name', 'textdomain' ),
    'search_items'      => __( 'Buscar Categorías de producto', 'textdomain' ),
    'all_items'         => __( 'Todas las categorías de producto', 'textdomain' ),
    'parent_item'       => __( 'Categoría padre', 'textdomain' ),
    'parent_item_colon' => __( 'Categoría padre:', 'textdomain' ),
    'edit_item'         => __( 'Editar Categoría de producto', 'textdomain' ),
    'update_item'       => __( 'Actualizar Categoría de producto', 'textdomain' ),
    'add_new_item'      => __( 'Agregar nueva Categoría de producto', 'textdomain' ),
    'new_item_name'     => __( 'Nombre de la nueva categoría de producto', 'textdomain' ),
    'menu_name'         => __( 'Categoría de producto', 'textdomain' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'categoria-producto' ),
  );

  register_taxonomy( 'product_category', array( 'product' ), $args );
}

add_action( 'init', 'create_project_post_type' );
function create_project_post_type() {
  register_post_type( 'proyecto',
    array(
      'labels' => array(
        'name' => __( 'Proyectos' ),
        'singular_name' => __( 'Proyecto' ),
        'add_new' => __( 'Agregar Proyecto' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports'=> array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'),
    )
  );
  flush_rewrite_rules();
}
add_action( 'init', 'create_project_taxonomy', 0 );

function create_project_taxonomy() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Categorías de proyecto', 'taxonomy general name', 'textdomain' ),
    'singular_name'     => _x( 'Categoría de proyecto', 'taxonomy singular name', 'textdomain' ),
    'search_items'      => __( 'Buscar Categorías de proyecto', 'textdomain' ),
    'all_items'         => __( 'Todas las categorías de proyecto', 'textdomain' ),
    'parent_item'       => __( 'Categoría padre', 'textdomain' ),
    'parent_item_colon' => __( 'Categoría padre:', 'textdomain' ),
    'edit_item'         => __( 'Editar Categoría de proyecto', 'textdomain' ),
    'update_item'       => __( 'Actualizar Categoría de proyecto', 'textdomain' ),
    'add_new_item'      => __( 'Agregar nueva Categoría de proyecto', 'textdomain' ),
    'new_item_name'     => __( 'Nombre de la nueva categoría de proyecto', 'textdomain' ),
    'menu_name'         => __( 'Categoría de proyecto', 'textdomain' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'categoria' ),
  );

  register_taxonomy( 'project_category', array( 'proyecto' ), $args );
}