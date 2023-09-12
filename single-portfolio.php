
<?php get_header(); ?>


    <!-- Breadcumb Area Start Here -->

    <?php get_template_part('inc/breadcumb'); ?>
    
    <!-- Breadcumb Area End Here -->
    
    <section class="Portfolio-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Portfolio-details">
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>