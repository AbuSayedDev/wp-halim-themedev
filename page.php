<?php 
/*
    Template Name: Page Template
*/

get_header(); ?>


    <!-- Breadcumb Area Start Here -->

    <?php get_template_part('inc/breadcumb'); ?>
    
    <!-- Breadcumb Area End Here -->



    <!-- Section Area Start -->
    <div class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4><?php esc_attr(the_title()); ?></h4>
                    <?php esc_attr(the_content()); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Area End -->



<?php get_footer(); ?>