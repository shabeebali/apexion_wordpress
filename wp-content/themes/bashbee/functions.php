<?php
wp_enqueue_style( 'style', get_stylesheet_uri());
wp_enqueue_style( 'materialize_css', get_template_directory_uri().'/css/materialize.min.css' );
wp_enqueue_script( 'materialize_js', get_template_directory_uri() .'/js/materialize.min.js' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );