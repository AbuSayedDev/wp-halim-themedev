
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
    
    <section class="Portfolio-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Portfolio-details">
                        <h2>Portfolio title</h2>
                        <img src="assets/images/Portfolio/Portfolio1.jpg" alt="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis ex aspernatur quibusdam et mollitia iure in, fugiat non tempore sapiente dolore cumque a eaque consequatur asperiores vel! Eius, nemo corrupti.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis ex aspernatur quibusdam et mollitia iure in, fugiat non tempore sapiente dolore cumque a eaque consequatur asperiores vel! Eius, nemo corrupti.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis ex aspernatur quibusdam et mollitia iure in, fugiat non tempore sapiente dolore cumque a eaque consequatur asperiores vel! Eius, nemo corrupti.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis ex aspernatur quibusdam et mollitia iure in, fugiat non tempore sapiente dolore cumque a eaque consequatur asperiores vel! Eius, nemo corrupti.</p>
                    </div>
                    <div class="related_posts">
                        <h5>related posts</h5>
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="single-Portfolio">
                                    <img src="assets/images/Portfolio/Portfolio2.jpg" alt="">
                                    <div class="Portfolio-content">
                                        <div class="Portfolio-title">
                                            <h4><a href="">Portfolio title</a></h4>
                                        </div>
                                        <div class="Portfolio-meta">
                                            <a href="">5 Jan 2020</a>
                                            <a href="">admin</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam a, culpa quis illum aut sint at. Nesciunt tempora officiis labore ducimus laborum saepe dicta?</p>
                                        <a href="" class="box-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <div class="single-Portfolio">
                                    <img src="assets/images/Portfolio/Portfolio3.jpg" alt="">
                                    <div class="Portfolio-content">
                                        <div class="Portfolio-title">
                                            <h4><a href="">Portfolio title</a></h4>
                                        </div>
                                        <div class="Portfolio-meta">
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
            </div>
        </div>
    </section>

    <?php get_footer(); ?>