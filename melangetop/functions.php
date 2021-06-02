<?php 

add_action('wp_enqueue_scripts', 'melangetop_styles');
add_action('wp_enqueue_scripts', 'melangetop_scripts');
add_action('wp_enqueue_scripts', 'melangetop_commentsscript');
add_action('wp_enqueue_scripts', 'melangetop_singlepagescript');

function melangetop_styles() {
    wp_enqueue_style('melangetop-style', get_stylesheet_uri() );
}

function melangetop_scripts() {
    wp_enqueue_script('melangetop-script', get_template_directory_uri() . '/assets/js/bundle.js', array(), null, true);
}

function melangetop_commentsscript() {
    if ( is_page(341) ) {
        wp_enqueue_script('melangetop_commentsscript', get_template_directory_uri() . '/assets/js/commentsscript.js', array(), null, true);    
    }

    
}

function melangetop_singlepagescript() {
    if ( is_single() ) {
        wp_deregister_script('melangetop-script', get_template_directory_uri() . '/assets/js/bundle.js', array(), null, true);
        wp_enqueue_script('melangetop_singlepagescript', get_template_directory_uri() . '/assets/js/singlepagescript.js', array(), null, true);    
    }

    
}

add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );

//woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
if (class_exists('Woocommerce')){
 
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
 
}


add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if($args->menu === 'Main') {
        $atts['class'] = 'navigation__link';
        if($item->current) {
            $atts['class'] .= ' navigation__link_active';
        }
    };
    return $atts;
}

?>