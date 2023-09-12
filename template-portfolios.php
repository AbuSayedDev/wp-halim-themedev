<?php 
/*
    Template Name: Portfolios Page
*/

get_header(); ?>


    <!-- Breadcumb Area Start Here -->

    <?php get_template_part('inc/breadcumb'); ?>
    
    <!-- Breadcumb Area End Here -->

    

    <!-- Portfolio Area Start Here -->
    <section class="portfolio-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <ul class="portfolio-menu">
                        <li class="active" data-filter="*">All</li>

                        <?php
                            $cats = get_terms('portfolios-cat');

                            foreach($cats as $cat){?>
                            
                                <li data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>

                          <?php  }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row g-0 portfolio-items">

            <?php 

                $args = array(
                    'post_type'      => 'portfolio',
                    'posts_per_page' => 10,
                    'order'          => 'DESC',
                );

                $query = new WP_Query($args);

                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                    ?>

                    <div class="col-md-4 

                        <?php
                            $post_cats = get_the_terms(get_the_ID(), 'portfolios-cat');
                            foreach($post_cats as $post_cat){
                                echo $post_cat->slug. ' ';
                            }
                        ?> ">
                        <div class="single-portfolio">
                            <?php echo the_post_thumbnail(); ?>
                            <div class="portfolio-overlay">

                            <?php 
                                if(get_field('portfolio_icon')){ ?>

                                    <a href="<?php the_field('portfolio_icon_url'); ?>" target="_blink"><i class="<?php the_field('portfolio_icon'); ?>"></i></a>
                              
                              <?php  }else{ ?>

                                    <a href="<?php the_permalink(); ?>">View Details</a>

                               <?php }
                            ?>
                                <h4><?php the_title(); ?> <span><?php the_field('portfolio_designation'); ?></span></h4>
                            </div>
                        </div>
                    </div>

                <?php    }

                }else{?>
                    <p>No Portfolio Post</p>
              <?php  
                
                wp_reset_postdata();
            }
            
            ?>

            </div>
        </div>
    </section>
    <!-- Portfolio Area End Here -->


    <?php get_footer(); ?>