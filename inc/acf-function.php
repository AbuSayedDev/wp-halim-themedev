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
        'page_title'    => 'Theme Header Top Option', 'wphalimtheme',
        'menu_title'    => 'Header Top', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer', 'wphalimtheme',
        'menu_title'    => 'Footer', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme About Us', 'wphalimtheme',
        'menu_title'    => 'About Us', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Our Services', 'wphalimtheme',
        'menu_title'    => 'Our Services Heading', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Creative Team', 'wphalimtheme',
        'menu_title'    => 'Creative Team Heading', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Clients Say', 'wphalimtheme',
        'menu_title'    => 'Clients Say Heading', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Latest News', 'wphalimtheme',
        'menu_title'    => 'Latest News Heading', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));


    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Faq and Skills ', 'wphalimtheme',
        'menu_title'    => 'Faq and Skills', 'wphalimtheme',
        'parent_slug'   => 'halim_theme_option',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme CTA Setting', 'wphalimtheme',
        'menu_title'    => 'CTA Setting', 'wphalimtheme',
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
