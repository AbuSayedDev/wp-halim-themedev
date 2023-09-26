<?php get_header(); ?>


<!-- Breadcumb Area Start Here -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 text-center">
                <h4><?php the_archive_title(); ?></h4>
                <ul>
                    <li><a href="<?php echo site_url( ); ?>">home</a></li> / 
                    <li><?php the_archive_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcumb Area End Here -->


    <section class="blog-page-area pt-100 pb-100">
        <div class="container">
            <div class="row">

            <?php 

                while(have_posts()){
                    the_post();

                    ?>

                    <div class="col-md-4">
                        <div class="single-blog">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                                <div class="blog-meta">
                                    <a href="<?php the_permalink(); ?>"><?php the_date(); ?>\</a>
                                    <?php the_category(','); ?>\
                                    <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
                                </div>
                                <?php the_content(); ?>
                                <a href="<?php the_permalink(); ?>" class="box-btn">read more</a>
                            </div>
                        </div>
                    </div>
             <?php   }

                wp_reset_postdata();
            ?>

            </div>

            <div class="row">
                <div class="col-xxl-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>