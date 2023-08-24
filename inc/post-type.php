<?php

/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */

 if(! function_exists('halim_slider_custom_posts')){

    function halim_slider_custom_posts(){
        $labels = array(
            'name'                  => __( 'Sliders', 'wphalimtheme' ),
            'singular_name'         => __( 'Slider', 'wphalimtheme' ),
            'menu_name'             => __( 'Sliders', 'wphalimtheme' ),
            'name_admin_bar'        => __( 'Slider', 'wphalimtheme' ),
            'add_new'               => __( 'Add New', 'wphalimtheme' ),
            'add_new_item'          => __( 'Add New Slider', 'wphalimtheme' ),
            'new_item'              => __( 'New Slider', 'wphalimtheme' ),
            'edit_item'             => __( 'Edit Slider', 'wphalimtheme' ),
            'view_item'             => __( 'View Slider', 'wphalimtheme' ),
            'all_items'             => __( 'All Sliders', 'wphalimtheme' ),
            'search_items'          => __( 'Search Sliders', 'wphalimtheme' ),
            'parent_item_colon'     => __( 'Parent Sliders:', 'wphalimtheme' ),
            'not_found'             => __( 'No sliders found.', 'wphalimtheme' ),
            'not_found_in_trash'    => __( 'No sliders found in Trash.', 'wphalimtheme' ),
            'featured_image'        => __( 'Slider Cover Image', 'wphalimtheme' ),
            'set_featured_image'    => __( 'Set cover image', 'wphalimtheme' ),
            'remove_featured_image' => __( 'Remove cover image', 'wphalimtheme' ),
            'use_featured_image'    => __( 'Use as cover image', 'wphalimtheme' ),
            'archives'              => __( 'Slider archives', 'wphalimtheme' ),
            'insert_into_item'      => __( 'Insert into slider','wphalimtheme' ),
            'uploaded_to_this_item' => __( 'Uploaded to this slider', 'wphalimtheme' ),
            'filter_items_list'     => __( 'Filter sliders list', 'wphalimtheme' ),
            'items_list_navigation' => __( 'Sliders list navigation', 'wphalimtheme' ),
            'items_list'            => __( 'Sliders list', 'textdwphalimthemeomain' ),

        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_in_menu'       => true,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'query_var'          => true,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'rewrite'            => array( 'slug' => 'slider' ),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),

        );


        register_post_type('slider', $args);
    }

    add_action('init', 'halim_slider_custom_posts');

 }