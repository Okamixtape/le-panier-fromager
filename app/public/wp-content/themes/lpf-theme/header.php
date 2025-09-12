<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link" href="#main-content">Aller au contenu</a>
    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-placeholder.svg" 
                    alt="Le Panier Fromager - Logo" 
                    loading="eager"
                    fetchpriority="high">
                </a>
            </div>

            <nav class="site-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <svg class="hamburger-icon" viewBox="0 0 100 80" width="30" height="30" fill="#376397"><rect width="100" height="15"></rect><rect y="30" width="100" height="15"></rect><rect y="60" width="100" height="15"></rect></svg>
                    <svg class="close-icon" viewBox="0 0 100 100" width="30" height="30" fill="none" stroke="#376397" stroke-width="15" stroke-linecap="round" stroke-linejoin="round"><line x1="10" y1="10" x2="90" y2="90" /><line x1="90" y1="10" x2="10" y2="90" /></svg>
                </button>
                
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main-menu', // Doit correspondre à ce qui est dans functions.php
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav>
        </div>
    </header>
    
    <main id="main-content" class="site-content">
