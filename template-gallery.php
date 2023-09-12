<?php 
/*
    Template Name: Gallery Page
*/

get_header(); ?>


    <!-- Breadcumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url( ); ?>">home</a></li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb Area End Here -->

    <section class="gallery-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery1.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery1.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery2.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery2.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery3.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery3.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery4.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery4.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery5.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery5.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery6.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery6.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>