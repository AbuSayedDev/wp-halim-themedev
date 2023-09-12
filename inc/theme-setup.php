<?php

/**
 * Proper way to theme setup
 */

 if(! function_exists('halim_theme_setup')){
    function halim_theme_setup() {

        // Title
        add_theme_support( 'title-tag');

        // Thumbnails image
        add_theme_support('post-thumbnails', array('post', 'slider', 'service', 'teams', 'testimonials', 'portfolio', 'gallery'));

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