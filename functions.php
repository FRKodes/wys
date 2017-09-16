<?php
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