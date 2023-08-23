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
                    <a href="mailto:info@halim.com"><i class="far fa-envelope"></i> info@halim.com</a>
                    <a href="tel:+123456789"><i class="fas fa-phone-alt"></i> +123456789</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="top-social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
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
                    <a class="navbar-brand" href="index.html">Halim</a>
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
                            'depth'                => 2,
                            'menu_class'           => 'navbar-nav',
                            'fallback_cb'          => '__return_false',
                            'walker'               => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->
