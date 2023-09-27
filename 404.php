<?php get_header(); ?>


    <!-- Section Area Start -->
    <div class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-area text-center">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/404page-found.avif'; ?>" class="img-fluid" alt="<?php the_title(); ?>">
                        <br>
                        <a href="<?php echo site_url(); ?>" class="btn btn-primary text-white">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Area End -->



<?php get_footer(); ?>