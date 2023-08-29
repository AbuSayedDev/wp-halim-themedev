<?php 
/*
    Template Name: Home Page
*/

get_header(); ?>


    <!-- Slider Area Start Here -->
    <section class="slider-area">
        <div class="sliders owl-carousel">


        <?php 
            $args = array(
                'post_type'      => 'slider',
                // 'posts_per_page' => 3,
                'order' => 'DESC',
            );

            $query = new WP_Query($args);

            while ($query -> have_posts()) {
                $query -> the_post();

                ?>

                <div class="single-slide bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="slide-content">

                                    <?php 

                                        if(get_field('slider_subtitle')){

                                        ?>
                                            <h4><?php the_field('slider_subtitle'); ?></h4>
                                       <?php }
                                    ?>

                                    
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>

                                    <?php 
                                        if(get_field('slider_button_text')){
                                            
                                        ?>

                                            <a href="<?php the_field('slider_button_url'); ?>" class="box-btn" target="_blink"><?php the_field('slider_button_text'); ?></a>
                                       
                                       <?php }
                                    ?>
                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

            <?php 

            }

            wp_reset_postdata();

        ?>

        </div>
    </section>
    <!-- Slider Area End Here -->

    <!-- About Area Start Here -->
    <div class="section about-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>about us</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="about-content">
                        <h4>welcome to halim</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ipsa! Officia, nihil accusantium perspiciatis officiis assumenda odio nemo amet cupiditate.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ipsa! Officia, nihil accusantium perspiciatis officiis assumenda odio nemo amet cupiditate.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ipsa! Officia, nihil accusantium perspiciatis officiis assumenda odio nemo amet cupiditate.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ipsa! Officia, nihil accusantium perspiciatis officiis assumenda odio nemo amet cupiditate.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ipsa! Officia, nihil accusantium perspiciatis officiis assumenda odio nemo amet cupiditate.</p>
                        <a href="" class="box-btn">read more</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 mt-5 mt-lg-0">
                    <div class="single-about">
                        <div class="icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div>
                            <h4>our mission</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam corrupti sunt quibusdam, error amet ex excepturi neque at! Dolor, atque.</p>
                        </div>
                    </div>
                    <div class="single-about">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h4>our vission</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam corrupti sunt quibusdam, error amet ex excepturi neque at! Dolor, atque.</p>
                        </div>
                    </div>
                    <div class="single-about">
                        <div class="icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <div>
                            <h4>our history</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam corrupti sunt quibusdam, error amet ex excepturi neque at! Dolor, atque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End Here -->

    <!-- Skill Area Start Here -->
    <section class="skill-area bg pt-100 pb-100" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg-skill.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="skill-title">
                        <h4>faq</h4>
                    </div>
                    <div class="skill-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem Ipsum is simply 1
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem Ipsum is simply 2
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem Ipsum is simply 3
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Lorem Ipsum is simply 4
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt-5 mt-xl-0">
                    <div class="skill-title">
                        <h4>our skills</h4>
                    </div>
                    <div class="single-progress">
                        <h4>html</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                        </div>
                    </div>
                    <div class="single-progress">
                        <h4>css</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">84%</div>
                        </div>
                    </div>
                    <div class="single-progress">
                        <h4>photoshop</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                    <div class="single-progress">
                        <h4>wordpress</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">77%</div>
                        </div>
                    </div>
                    <div class="single-progress">
                        <h4>seo</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skill Area End Here -->

    <!-- Services Area Start Here -->
    <section class="services-area pt-100 pb-100">
        <div class="container">

            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>our services</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>

            <div class="row">

            <?php 

                $args = array(
                    'post_type'      => 'service',
                    'posts_per_page' => 6,
                    'order' => 'DESC'
                );

                $query = new WP_Query($args);

                while( $query -> have_posts()){
                    $query -> the_post();

                ?>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-service">
                            <i class="<?php the_field('service_icon'); ?>"></i>
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                    </div>

                <?php }

                wp_reset_postdata();
            ?>

            </div>
        </div>
    </section>
    <!-- Services Area End Here -->

    <!-- Counter Area Start Here -->
    <section class="counter-area">
        <div class="container-fluid g-0">
            <div class="row g-0">


            <?php
                
                $args = array(
                    'post_type'     => 'counters',
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                );

                $query = new WP_Query($args);

                while($query -> have_posts()){
                    $query -> the_post();

                ?>

                <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="<?php the_field('counter_icon'); ?>"></i>
                        <h4><span class="counter"><?php the_field('counter_number'); ?></span><?php the_title(); ?></h4>
                    </div>
                </div>

              <?php  }

                wp_reset_postdata();
                
            ?>
            </div>
        </div>
    </section>
    <!-- Counter Area End Here -->

    <!-- Team Area Start Here -->
    <section class="team-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>creative team</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>

            <div class="row">

                    
            <?php

                $args = array(
                    'post_type'      => 'teams',
                    'posts_per_page'  => 6,
                    'order' => 'DESC'
                );

                $query = new WP_Query($args);

                while($query -> have_posts()){
                    $query -> the_post();

            ?>


                <div class="col-md-4">  
                    <div class="single-team">

                        <img src="<?php the_post_thumbnail_url();?>">

                        <div class="team-content">
                            <h4><?php the_title(); ?><span><?php the_field('team_designation'); ?></span></h4>
                            <div class="team-con">

                            <?php 
                                if(get_field('team_facebook')){
                                ?>
                                    <a href="<?php the_field('team_facebook'); ?>"><i class="fab fa-facebook-f "></i></a>

                              <?php  }
                            ?>

                            <?php 
                                if(get_field('team_twitter')){
                                ?>
                                    <a href="<?php the_field('team_twitter'); ?>"><i class="fab fa-twitter"></i></a>

                              <?php  }
                            ?>

                            <?php 
                                if(get_field('team_instagram')){
                                ?>
                                    <a href="<?php the_field('team_instagram'); ?>"><i class="fab fa-instagram"></i></a>

                              <?php  }
                            ?>


                            <?php 
                                if(get_field('team_linkedin')){
                                ?>
                                    <a href="<?php the_field('team_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>

                              <?php  }
                            ?>

                            <?php 
                                if(get_field('team_youtube')){
                                ?>
                                    <a href="<?php the_field('team_youtube'); ?>"><i class="fab fa-youtube"></i></a>

                              <?php  }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

             <?php   }
            
                wp_reset_postdata();
            ?>

            </div>
        </div>
    </section>
    <!-- Team Area End Here -->

    <!-- Testimonials Area Start Here -->
    <section class="testimonials-area pt-100 pb-100 bg" style="background-image: url('<?php echo get_template_directory_uri();?>./assets/images/testi_back.jpg');">
        <div class="container-fluid">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>what clients say?</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>
            <div class="row">
                <div class="testimonials owl-carousel">


                <?php 

                    $args = array(
                        'post_type' => 'testimonials',
                        'order' => 'DESC'
                    );

                    $query = new WP_Query($args);

                    while($query-> have_posts()){
                        $query -> the_post();

                    ?>

                        <div class="single-testimonial">
                            <?php the_post_thumbnail()?>
                            <?php the_content(); ?>
                            <h4><?php the_title(); ?> <span><?php the_field('testimonial_designation'); ?></span></h4>
                        </div>


                    <?php }

                        wp_reset_postdata();
                
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End Here -->

    <!-- Blog Area Start Here -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>Latest News</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>

            <div class="row">

            <?php

                $args = array(
                    'post_type'       => 'post',
                    'posts_per_page'  => 3,
                    'order'           => 'DESC'
                );

                $query = new WP_Query($args);

                if($query -> have_posts()){
                    while($query -> have_posts()){
                        $query -> the_post();

                    ?>

                    <div class="col-md-4">
                        <div class="single-blog">

                            <?php the_post_thumbnail(); ?>

                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                                <div class="blog-meta">
                                    <a href="">5 Jan 2020</a>
                                    <a href="">admin</a>
                                </div>
                                <?php the_content(); ?>
                                <a href="<?php the_permalink(); ?>" class="box-btn">read more</a>
                            </div>
                        </div>
                    </div>

                 <?php   }

                }else{ ?>
                    <p style="color:red"> No News</p>
               <?php }

                wp_reset_postdata();

            ?>
            </div>
        </div>
    </section>
    <!-- Blog Area End Here -->

    
    <?php get_footer(); ?>




