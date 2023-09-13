<?php get_header(); ?>

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
    
    <section class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <h2><?php the_title(); ?></h2>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php the_content(); ?>
                    </div>

                    <div class="related_posts">
                        <h5>related posts</h5>
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="single-blog">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog2.jpg" alt="">
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
                            <div class="col-xxl-6">
                                <div class="single-blog">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog3.jpg" alt="">
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

                    <div class="comments">
                        <h5>leave a reply</h5>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Subject">
                            <input type="text" placeholder="Email">
                            <textarea placeholder="Message"></textarea>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>


                <!-- sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <h5>latest post</h5>
                        <div class="sidebar-post">
                            <h6><a href="">Lorem ipsum dolor sit amet.</a></h6>
                            <a href="">10 april 2021</a> / <a href="">admin</a>
                        </div>
                        <div class="sidebar-post">
                            <h6><a href="">Lorem ipsum dolor sit amet.</a></h6>
                            <a href="">10 april 2021</a> / <a href="">admin</a>
                        </div>
                        <div class="sidebar-post">
                            <h6><a href="">Lorem ipsum dolor sit amet.</a></h6>
                            <a href="">10 april 2021</a> / <a href="">admin</a>
                        </div>
                        <div class="sidebar-post">
                            <h6><a href="">Lorem ipsum dolor sit amet.</a></h6>
                            <a href="">10 april 2021</a> / <a href="">admin</a>
                        </div>
                        <div class="sidebar-post">
                            <h6><a href="">Lorem ipsum dolor sit amet.</a></h6>
                            <a href="">10 april 2021</a> / <a href="">admin</a>
                        </div>
                    </div>

                    <div class="sidebar">
                        <h5>category</h5>
                        <ul>
                            <li><a href="">web design</a></li>
                            <li><a href="">web development</a></li>
                            <li><a href="">software development</a></li>
                            <li><a href="">digital mrketing</a></li>
                            <li><a href="">graphics design</a></li>
                        </ul>
                    </div>
                    
                    <div class="sidebar">
                        <h5>latest comments</h5>
                        <ul>
                            <li><a href="">admin</a> on  <a href="">Lorem ipsum dolor sit amet.</a></li>
                            <li><a href="">david</a> on  <a href="">Lorem ipsum dolor sit amet.</a></li>
                            <li><a href="">john</a> on  <a href="">Lorem ipsum dolor sit amet.</a></li>
                            <li><a href="">wick</a> on  <a href="">Lorem ipsum dolor sit amet.</a></li>
                            <li><a href="">mick</a> on  <a href="">Lorem ipsum dolor sit amet.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

   


    <?php get_footer(); ?>