<?php 
/*
    Template Name: Service Page
*/

get_header(); ?>

    <!-- Breadcumb Area Start Here -->

    <?php get_template_part('inc/breadcumb'); ?>
    
    <!-- Breadcumb Area End Here -->

    

   <!-- Services Area Start Here -->
   <section class="services-area pt-100 pb-100">
    <div class="container">
        <div class="row section-title align-items-center">

        <?php 
            $our_services_heading = get_field('our_services_heading', 'option');
        ?>

            <div class="col-md-6 text-md-end text-sm-center">
                <span><?php echo $our_services_heading['subtitle']; ?></span>
                <h4><?php echo $our_services_heading['title']; ?></h4>
            </div>
            <div class="col-md-6">
                <?php echo $our_services_heading['description']; ?>
            </div>
        </div>


        <div class="row">

        <?php 

            $args = array(
                'post_type'         => 'service',
                'posts_per_page'    => 10,
                'order'             => 'DESC'
            );

            $query = new WP_Query($args);

            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();

                ?>

                    <div class="col-xl-4 col-lg-6">
                        <div class="single-service">
                            <i class="<?php the_field('service_icon'); ?>"></i>
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                    </div>

              <?php  }
              
            }else{?>

                <p>No Service</p>

           <?php }

            wp_reset_postdata();
        ?>

        </div>
    </div>
</section>
<!-- Services Area End Here -->



<?php get_footer(); ?>