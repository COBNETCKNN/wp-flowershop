<?php 


function flowershop_files() {
    //enqueing CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');

    //enqueing JS
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . 'js/main.js', array(), 1.0, true);
    wp_enqueue_script('fontAwesomeJS', 'https://kit.fontawesome.com/24bc428ad4.js');

}
add_action('wp_enqueue_scripts', 'flowershop_files');


function flowers_features() {
    //ading theme features
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails'); 
    add_theme_support('menus');

    //custom image sizes
    add_image_size('frontpageSize', 1900, 450, true);
    add_image_size('aboutUSSize', 400, 450, true);
}

add_action('after_setup_theme', 'flowers_features');




// DECLARING WOOCOMMERCE
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

    // Remove WooCommerce Styles
    // add_filter( 'woocommerce_enqueue_styles', '__return_false' );

    // Remove Shop Title
    add_filter( 'woocommerce_show_page_title', '__return_false' );

    // Add Support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );







?>