<!-- CTA Area Start Here -->
<section class="cta-area">
    <div class="container">
        <div class="row align-items-center">

            <?php

                $cta_setting = get_field('cta_setting', 'option'); 
                $cta_button = $cta_setting['cta_button'];

            ?>
                <div class="col-md-6">
                    <h4><?php echo $cta_setting['cta_title']; ?></h4>
                    <?php echo $cta_setting['cta_descriptions']; ?>
                </div>

                <div class="col-md-6 text-center">
                    <?php 
                        if( $cta_button ){ ?>

                            <a href="<?php echo $cta_setting['cta_button_url']; ?>" class="box-btn"><?php echo $cta_button ; ?> <i class="fas fa-angle-double-right"></i></a>

                    <?php }else{?>

                        <span>Please Add to CTA Button</span>
                  <?php  }

                    ?>
                    
                </div>

            <?php ?>

        </div>
    </div>
</section>
<!-- CTA Area End Here -->

<!-- Footer Area Start Here -->
<footer class="footer-area bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/footer-bg.png');">
    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <?php
                    if( is_active_sidebar( 'footer-1' )){
                        dynamic_sidebar( 'footer-1' );
                    }
                ?>
            </div>

            <div class="col-xl-2 col-lg-3 mt-5 mt-lg-0">
                <?php
                    if( is_active_sidebar( 'footer-2' )){
                        dynamic_sidebar( 'footer-2' );
                    }
                ?>
            </div>

            <div class="col-xl-4 col-lg-3 mt-5 mt-lg-0">
                <?php
                    if( is_active_sidebar( 'footer-3' )){
                        dynamic_sidebar( 'footer-3' );
                    }
                ?>
            </div>

            <div class="col-lg-3 mt-5 mt-sm-0">
                <div class="single-footer">

                <?php 
                    $footer_heading = get_field('footer_heading', 'option');
                    $footer_contacts = get_field('footer_contact', 'option');
                ?>


                    <h4><?php echo $footer_heading; ?></h4>

                    <ul>
                        <?php 

                            foreach($footer_contacts as $footer_contact){ ?>

                                <li><i class="<?php echo $footer_contact['footer_contact_icon']; ?>"></i> <?php echo $footer_contact['footer_contact_text']; ?></li>

                            <?php }

                        ?>

                    </ul>

                </div>
            </div>
        </div>

        <!-- copyright -->
        <div class="row footer-bottom">
            <div class="col-sm-6">
                <div class="footer-copy">

                <?php

                    $footer_copyright_text = get_field('footer_copyright_text','option');

                    echo $footer_copyright_text;
                ?>
                </div>
            </div>
            <div class="col-sm-6 text-end">
                <div class="footer-social">

                    <?php

                        $footer_copyright_icons = get_field('footer_copyright_icon','option');

                        foreach($footer_copyright_icons as $footer_copyright_icon){
                            ?>

                            <a href="<?php echo $footer_copyright_icon['copyright_icon_link']; ?>" target="_blink"><i class="<?php echo $footer_copyright_icon['copyright_icon']; ?>"></i></a>

                       <?php }
                
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
    
    <?php wp_footer(); ?>
</body>
</html>