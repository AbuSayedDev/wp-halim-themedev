<?php 
/*
    Template Name: Contact Page
*/

get_header(); ?>


    <!-- Breadcumb Area Start Here -->

    <?php get_template_part('inc/breadcumb'); ?>
    
    <!-- Breadcumb Area End Here -->

    <!-- Contact Area Start Here -->
    <section class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-md-12 mx-auto">
                    <div class="row">

                    <?php 

                        if(class_exists('ACF')){
                            $contact_address = get_field('contact_address', 'option');

                            foreach($contact_address as $contact_addres){

                            ?>
                                <div class="col-md-4">
                                    <div class="contact-address">

                                    <?php
                                        if($contact_addres['icon']){ ?>
                                            <i class="<?php echo esc_attr($contact_addres['icon']); ?>"></i>
                                    <?php  }
                                    ?>
                                        
                                        <h4><?php echo esc_attr($contact_addres['name']); ?> <span><?php echo esc_attr($contact_addres['descriptions']); ?></span></h4>
                                    </div>
                                </div>

                        <?php }
                        }
                    
                    ?>

                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact-form">
                                <?php echo do_shortcode( '[contact-form-7 id="9768046" title="Contact Us Form"]' ); ?>
                            </div>
                        </div>


                        <div class="col-md-5">
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.325587665938!2d91.86642381497002!3d24.920975984025414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750551e7da58bcd%3A0x7cd35cba3faa14e7!2sSylhet%20International%20Cricket%20Stadium!5e0!3m2!1sen!2sbd!4v1618568732799!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End Here -->

    <?php get_footer(); ?>