<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top Area Start Here -->
<section class="top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="top-left">

                    <?php

                        $email = get_field('email', 'option');
                        $phone = get_field('phone', 'option');

                        if($email) {?>
                            <a href="mailto:<?php echo $email; ?>"><i class="far fa-envelope"></i> <?php echo $email; ?></a>
                       <?php }
                        
                        if($phone) { ?>
                            <a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-alt"></i> <?php echo $phone; ?></a>
                      <?php  }

                    ?>
                
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="top-social">

                <?php

                    $socials = get_field('header_social', 'option');

                    foreach($socials as $social) {?>

                        <a href="<?php echo $social['social_icon_link'] ?>"><i class="<?php echo $social['social_icon'] ?>"></i></a>

                    <?php } 
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Area End Here -->

<!-- Header Area Start Here -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">Halim</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php  
                            
                        wp_nav_menu(array(
                            'theme_location'       => 'primary_menu',
                            'menu_class'           => '',
                            'container'            => 'div',
                            'container_class'      => 'collapse navbar-collapse justify-content-end',
                            'container_id'         => 'navbarNavAltMarkup',
                            'fallback_cb'          => '__return_false',
                            'items_wrap'           => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                            'depth'                => 2,
                            'walker'               => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->