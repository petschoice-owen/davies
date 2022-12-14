<div class="top-navigation">
    <div class="wrapper">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a href="/" class="logo-link">
                    <img src="<?php the_field('theme_header_logo', 'option'); ?>" class="logo-image" alt="Logo" />
                </a>
                <div class="account">
                    <div class="holder user-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-user.png" class="icon-user" alt="" />
                        <a class="user-link" href="/my-account" title="Account"></a>
                    </div>
                    <div class="holder cart-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-cart.png" class="icon-cart" alt="" />
                        <?php echo do_shortcode("[woo_cart_but]"); ?>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu( array( 
                        'theme_location'    => 'header_menu', 
                        'container'         => 'ul',
                        'menu_class'        => 'navbar-nav',
                    )); ?>
                </div>
            </div>
        </nav>
    </div>
</div>