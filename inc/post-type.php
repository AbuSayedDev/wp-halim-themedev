<?php

/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */

 if(! function_exists('halim_sliders_custom_posts')){

    function halim_sliders_custom_posts(){
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
            'items_list'            => __( 'Sliders list', 'wphalimtheme' ),

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

    add_action('init', 'halim_sliders_custom_posts');

 }


 /**
 * Register a custom post type called "service".
 *
 * @see get_post_type_labels() for label keys.
 */

 if(! function_exists('halim_services_custom_posts')){

    function halim_services_custom_posts(){
        $labels = array(
            'name'                  => __( 'Services', 'wphalimtheme' ),
            'singular_name'         => __( 'Service', 'wphalimtheme' ),
            'menu_name'             => __( 'Services', 'wphalimtheme' ),
            'name_admin_bar'        => __( 'Service', 'wphalimtheme' ),
            'add_new'               => __( 'Add New', 'wphalimtheme' ),
            'add_new_item'          => __( 'Add New Service', 'wphalimtheme' ),
            'new_item'              => __( 'New Service', 'wphalimtheme' ),
            'edit_item'             => __( 'Edit Service', 'wphalimtheme' ),
            'view_item'             => __( 'View Service', 'wphalimtheme' ),
            'all_items'             => __( 'All Services', 'wphalimtheme' ),
            'search_items'          => __( 'Search Services', 'wphalimtheme' ),
            'parent_item_colon'     => __( 'Parent Services:', 'wphalimtheme' ),
            'not_found'             => __( 'No Services found.', 'wphalimtheme' ),
            'not_found_in_trash'    => __( 'No Services found in Trash.', 'wphalimtheme' ),
            'featured_image'        => __( 'Service Cover Image', 'wphalimtheme' ),
            'set_featured_image'    => __( 'Set cover image', 'wphalimtheme' ),
            'remove_featured_image' => __( 'Remove cover image', 'wphalimtheme' ),
            'use_featured_image'    => __( 'Use as cover image', 'wphalimtheme' ),
            'archives'              => __( 'Services archives', 'wphalimtheme' ),
            'insert_into_item'      => __( 'Insert into Service','wphalimtheme' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Service', 'wphalimtheme' ),
            'filter_items_list'     => __( 'Filter Services list', 'wphalimtheme' ),
            'items_list_navigation' => __( 'Services list navigation', 'wphalimtheme' ),
            'items_list'            => __( 'Services list', 'wphalimtheme' ),

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
            'rewrite'            => array( 'slug' => 'service' ),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
        );


        register_post_type('service', $args);
    }

    add_action('init', 'halim_services_custom_posts');

 }


 /**
 * Register a custom post type called "Counters".
 *
 * @see get_post_type_labels() for label keys.
 */

 if(! function_exists('halim_counters_custom_posts')){

    function halim_counters_custom_posts(){
        $labels = array(
            'name'                  => __( 'Counters', 'wphalimtheme' ),
            'singular_name'         => __( 'Counter', 'wphalimtheme' ),
            'menu_name'             => __( 'Counters', 'wphalimtheme' ),
            'name_admin_bar'        => __( 'Counter', 'wphalimtheme' ),
            'add_new'               => __( 'Add New', 'wphalimtheme' ),
            'add_new_item'          => __( 'Add New Counter', 'wphalimtheme' ),
            'new_item'              => __( 'New Counter', 'wphalimtheme' ),
            'edit_item'             => __( 'Edit Counter', 'wphalimtheme' ),
            'view_item'             => __( 'View Counter', 'wphalimtheme' ),
            'all_items'             => __( 'All Counters', 'wphalimtheme' ),
            'search_items'          => __( 'Search Counters', 'wphalimtheme' ),
            'parent_item_colon'     => __( 'Parent Counters:', 'wphalimtheme' ),
            'not_found'             => __( 'No Counters found.', 'wphalimtheme' ),
            'not_found_in_trash'    => __( 'No Counters found in Trash.', 'wphalimtheme' ),
            'featured_image'        => __( 'Counter Cover Image', 'wphalimtheme' ),
            'set_featured_image'    => __( 'Set cover image', 'wphalimtheme' ),
            'remove_featured_image' => __( 'Remove cover image', 'wphalimtheme' ),
            'use_featured_image'    => __( 'Use as cover image', 'wphalimtheme' ),
            'archives'              => __( 'Counters archives', 'wphalimtheme' ),
            'insert_into_item'      => __( 'Insert into Counter','wphalimtheme' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Counter', 'wphalimtheme' ),
            'filter_items_list'     => __( 'Filter Counters list', 'wphalimtheme' ),
            'items_list_navigation' => __( 'Counters list navigation', 'wphalimtheme' ),
            'items_list'            => __( 'Counters list', 'wphalimtheme' ),

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
            'rewrite'            => array( 'slug' => 'counters' ),
            'supports'           => array( 'title', 'author', 'custom-fields'),
        );


        register_post_type('counters', $args);
    }

    add_action('init', 'halim_counters_custom_posts');

 }