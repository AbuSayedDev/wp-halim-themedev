<?php 
/*
    Template Name: Portfolio Page
*/

get_header(); ?>


    <!-- Breadcumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>portfolio</h4>
                    <ul>
                        <li><a href="">home</a></li> / 
                        <li>portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb Area End Here -->

    <!-- Portfolio Area Start Here -->
    <section class="portfolio-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <ul class="portfolio-menu">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".business">business</li>
                        <li data-filter=".finance">finance</li>
                        <li data-filter=".marketing">marketing</li>
                        <li data-filter=".idea">idea</li>
                    </ul>
                </div>
            </div>
            <div class="row g-0 portfolio-items">
                <div class="col-md-4 business finance">
                    <div class="single-portfolio">
                        <img src="assets/images/portfolio/01.jpg" alt="">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4>portfolio name <span>branding</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 marketing idea">
                    <div class="single-portfolio">
                        <img src="assets/images/portfolio/02.jpg" alt="">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4>portfolio name <span>branding</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 business finance idea">
                    <div class="single-portfolio">
                        <img src="assets/images/portfolio/03.jpg" alt="">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4>portfolio name <span>branding</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 idea">
                    <div class="single-portfolio">
                        <img src="assets/images/portfolio/04.jpg" alt="">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4>portfolio name <span>branding</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 marketing finance">
                    <div class="single-portfolio">
                        <img src="assets/images/portfolio/05.jpg" alt="">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4>portfolio name <span>branding</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 idea finance">
                    <div class="single-portfolio">
                        <img src="assets/images/portfolio/06.jpg" alt="">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4>portfolio name <span>branding</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End Here -->


    <?php get_footer(); ?>