<?php

/**
 * Proper way to theme setup
 */

if(! function_exists('halim_theme_setup')){
    function halim_theme_setup() {

        // Title
        add_theme_support( 'title-tag');

        // Textdomain Register
        load_theme_textdomain('wphalimtheme', get_template_directory() . '/languages');
    

        // Nav Menu Register
        register_nav_menus(array(
            'primary_menu' => __( 'Primary Menu', 'wphalimtheme' ),
            'footer_menu'  => __( 'Footer Menu', 'wphalimtheme' ),
        ));
    }

    add_action( 'after_setup_theme', 'halim_theme_setup' );
}




/**
 * Proper way to enqueue scripts and styles
 */

if( ! function_exists('halim_theme_scripts')){

    function halim_theme_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    
        // Main Style CSS
        wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    
        // Responsive CSS
        wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
    
        // Bootstrap CSS
        wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    
        // Font Awesome CSS
        wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    
        // Googleapis Font Awesome CSS
        wp_enqueue_style( 'Googleapis_fontawesome_css', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '1.0.0', 'all');
    
        // Owl Carousel Main CSS
        wp_enqueue_style( 'owlcarousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    
        // Owl Carousel Default CSS
        wp_enqueue_style( 'owlcarousel_theme_default_css', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '1.0.0', 'all');
    
        // Magnific Popup CSS
        wp_enqueue_style( 'magnific_popup_css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    
    
    
        // Jquery JS
        wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1.0.0', true );
    
        // Main JS
        wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
    
        // Bootstrap JS
        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    
        // Popper JS
        wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    
        // Owl Carousel JS
        wp_enqueue_script( 'owlcarousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    
        // Waypoint JS
        wp_enqueue_script( 'waypoint_js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    
        // CounterUp JS
        wp_enqueue_script( 'counterup_js', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0.0', true );
    
        // Isotope JS
        wp_enqueue_script( 'isotope_js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    
        // Magnific Popup JS
        wp_enqueue_script( 'magnific_popup_js', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '1.0.0', true );
    
    }

    add_action( 'wp_enqueue_scripts', 'halim_theme_scripts' );
}





