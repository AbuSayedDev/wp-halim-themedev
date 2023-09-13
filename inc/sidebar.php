<?php 

/**
 * Add a sidebar.
 */

if(! function_exists ('halim_theme_slug_widgets_init')){
    function halim_theme_slug_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'wphalimtheme' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wphalimtheme' ),
            'before_widget' => '<div class="sidebar">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5>',
            'after_title'   => '</h5>',
        ) );


        register_sidebar( array(
            'name'          => __( 'Footer 1', 'wphalimtheme' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wphalimtheme' ),
            'before_widget' => '<div class="single-footer">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer 2', 'wphalimtheme' ),
            'id'            => 'footer-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wphalimtheme' ),
            'before_widget' => '<div class="single-footer">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );


        register_sidebar( array(
            'name'          => __( 'Footer 3', 'wphalimtheme' ),
            'id'            => 'footer-3',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wphalimtheme' ),
            'before_widget' => '<div class="single-footer">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );
    }

    add_action( 'widgets_init', 'halim_theme_slug_widgets_init' );
}