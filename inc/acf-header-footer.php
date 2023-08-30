<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Options', 'wphalimtheme',
        'menu_title'    => 'Theme Options', 'wphalimtheme',
        'menu_slug'     => 'halim_theme_option',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Top Option',
        'menu_title'    => 'Header Top',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'halim_theme_option',
    ));

}


if(! function_exists('acf_options_page_css') ) {

    function acf_options_page_css(){ ?>

        <style>
            .top-area {
                background-color: <?php the_field('background_color', 'option' ); ?>
            }
        
        </style>

    <?php }

    add_action('wp_head', 'acf_options_page_css');

}