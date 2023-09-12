<?php 
/*
    Template Name: Gallery Page
*/

get_header(); ?>


    <!-- Breadcumb Area Start Here -->

    <?php get_template_part('inc/breadcumb'); ?>
    
    <!-- Breadcumb Area End Here -->

    <section class="gallery-area pt-100 pb-100">
        <div class="container">
            <div class="row">

            <?php 

                $args = array(
                    'post_type'         => 'gallery',
                    'posts_per_page'    => 10,
                    'order'             => 'DESC'
                );

                $query = new WP_Query($args);

                if($query->have_posts()){
                    while($query->have_posts()){
                        $query-> the_post();

                    ?>
                        <div class="col-md-4">
                            <div class="single-gallery">
                                <?php the_post_thumbnail( ); ?>
                                <div class="gallery-overlay">
                                    <a href="<?php the_post_thumbnail_url(); ?>" class="gallery"><i class="fas fa-plus"></i></a>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </div>
                        </div>

              <?php    }

                }else{ ?>

                    <p>No Gallery Post</p>

             <?php }

             wp_reset_postdata();

            ?>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>