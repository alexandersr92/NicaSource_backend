<?php

add_theme_support('post-thumbnails');

register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    )
);

function get_menu() {
    
    return wp_get_nav_menu_items('main_menu');
}

add_action( 'rest_api_init', function () {
        register_rest_route( 'wp/v2', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );

function get_nicasource() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    $arr = [
        'logo' => $image[0] ,
        'title' => get_bloginfo('name'),
        'description' => get_bloginfo('description'),
    ];
    return $arr;
}

add_action( 'rest_api_init', function () {
        register_rest_route( 'wp/v2', '/nicasource', array(
        'methods' => 'GET',
        'callback' => 'get_nicasource',
    ) );
} );

	
add_theme_support( 'custom-logo' );