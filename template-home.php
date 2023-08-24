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
                'post_per_pages' => 3
            );

            $query = new WP_Query($args);

            while ($query -> have_posts()) {
                $query -> the_post();



                $slider_subtitle = get_post_meta(get_the_ID(), 'slider_subtitle', true );
                $slider_btn = get_post_meta(get_the_ID(), 'slider_btn', true );
                $slider_btn_link = get_post_meta(get_the_ID(), 'slider_btn_link', true );


                ?>

                <div class="single-slide bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="slide-content">

                                    <?php 

                                        if($slider_subtitle){
                                            
                                            ?>

                                            <h4><?php echo $slider_subtitle; ?></h4>
                                      <?php  }
                                    ?>

                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>

                                    <?php if($slider_btn){

                                        ?>
                                            <a href="<?php echo $slider_btn_link; ?>" class="box-btn" target="_blink"><?php echo $slider_btn; ?></a>
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
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service">
                        <i class="fas fa-laptop"></i>
                        <h4>web design</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service">
                        <i class="fas fa-cogs"></i>
                        <h4>web development</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>responsive design</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service">
                        <i class="fas fa-magic"></i>
                        <h4>graphics design</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service">
                        <i class="fas fa-pencil-alt"></i>
                        <h4>creative design</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service">
                        <i class="fas fa-flag"></i>
                        <h4>branding</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End Here -->

    <!-- Counter Area Start Here -->
    <section class="counter-area">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="fas fa-user"></i>
                        <h4><span class="counter">567</span>customers</h4>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="fas fa-code"></i>
                        <h4><span class="counter">50,000</span>line of codes</h4>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="far fa-file"></i>
                        <h4><span class="counter">45</span>projects completed</h4>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="fas fa-coffee"></i>
                        <h4><span class="counter">2,000</span>cup of coffees</h4>
                    </div>
                </div>
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
                <div class="col-md-4">
                    <div class="single-team">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/team/1.jpg" alt="">
                        <div class="team-content">
                            <h4>john doe <span>web developer</span></h4>
                            <div class="team-con">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-team">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/team/2.jpg" alt="">
                        <div class="team-content">
                            <h4>john doe <span>web developer</span></h4>
                            <div class="team-con">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-team">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/team/3.jpg" alt="">
                        <div class="team-content">
                            <h4>john doe <span>web developer</span></h4>
                            <div class="team-con">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="single-testimonial">
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonilas/01.png" alt="">
                        </div>
                        <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                        <h4>john doe <span>web developer</span></h4>
                    </div>
                    <div class="single-testimonial">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonilas/02.png" alt="">
                        <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                        <h4>john doe <span>web developer</span></h4>
                    </div>
                    <div class="single-testimonial">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonilas/03.png" alt="">
                        <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                        <h4>john doe <span>web developer</span></h4>
                    </div>
                    <div class="single-testimonial">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonilas/04.png" alt="">
                        <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                        <h4>john doe <span>web developer</span></h4>
                    </div>
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
                    <h4>what clients say?</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog1.jpg" alt="">
                        <div class="blog-content">
                            <div class="blog-title">
                                <h4><a href="">blog title</a></h4>
                            </div>
                            <div class="blog-meta">
                                <a href="">5 Jan 2020</a>
                                <a href="">admin</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam a, culpa quis illum aut sint at. Nesciunt tempora officiis labore ducimus laborum saepe dicta?</p>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog2.jpg" alt="">
                        <div class="blog-content">
                            <div class="blog-title">
                                <h4><a href="">blog title</a></h4>
                            </div>
                            <div class="blog-meta">
                                <a href="">5 Jan 2020</a>
                                <a href="">admin</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam a, culpa quis illum aut sint at. Nesciunt tempora officiis labore ducimus laborum saepe dicta?</p>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog3.jpg" alt="">
                        <div class="blog-content">
                            <div class="blog-title">
                                <h4><a href="">blog title</a></h4>
                            </div>
                            <div class="blog-meta">
                                <a href="">5 Jan 2020</a>
                                <a href="">admin</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam a, culpa quis illum aut sint at. Nesciunt tempora officiis labore ducimus laborum saepe dicta?</p>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End Here -->

    
    <?php get_footer(); ?>