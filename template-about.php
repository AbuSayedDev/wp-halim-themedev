<?php 
/*
Template Name: About Page
*/

get_header(); ?>


    <!-- Breadcumb Area Start Here -->

    <?php get_template_part('inc/breadcumb'); ?>
    
    <!-- Breadcumb Area End Here -->

    

     <!-- About Area Start Here -->
     <div class="section about-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">

                <?php 

                    if(class_exists('ACF')){

                        $about_us_title = get_field('about_us_title', 'option');
                        $about_us_content = get_field('about_us_content', 'option');

                        ?>

                        <div class="col-md-6 text-md-end text-sm-center">
                            <span><?php echo esc_attr($about_us_title['subtitle']); ?></span>
                            <h4><?php echo esc_attr($about_us_title['title']); ?></h4>
                        </div>
                        <div class="col-md-6">
                            <?php echo esc_attr($about_us_title['description']); ?>
                        </div>

                    <?php  }

                 ?>

            </div>

            <div class="row">

                <div class="col-xl-7 col-lg-6">
                    <div class="about-content">
                        <?php 
                            if(class_exists('ACF')){ ?>
                                <h4><?php echo esc_attr($about_us_content['title']); ?></h4>
                                <?php echo $about_us_content['description']; ?>
                           <?php }
                        ?>
                    </div>
                </div>
                
                <div class="col-xl-5 col-lg-6 mt-5 mt-lg-0">
                    
                    <?php

                        if(class_exists('ACF')){

                            $about_us_features = get_field('about_us_features', 'option');
                        
                            foreach($about_us_features as $about_us_feature){ ?>
    
                                <div class="single-about">
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($about_us_feature['icon']); ?>"></i>
                                    </div>
                                    <div>
                                        <h4><?php echo esc_attr($about_us_feature['title']); ?></h4>
                                        <?php echo esc_attr($about_us_feature['description']); ?>
                                    </div>
                                </div>
    
                         <?php   }

                        }

                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- About Area End Here -->


    <?php get_footer(); ?>