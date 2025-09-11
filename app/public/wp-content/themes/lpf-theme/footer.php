</main><!-- .site-content -->

<footer id="colophon" class="site-footer">
    <div class="footer-widgets-container">
        <div class="container">
            <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="site-info">
        <div class="container">
            <div class="footer-menus">
                <?php
                if ( has_nav_menu( 'footer-menu-1' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu-1',
                        'menu_class'     => 'footer-menu',
                        'depth'          => 1,
                    ) );
                }
                ?>
                <?php
                if ( has_nav_menu( 'footer-menu-2' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu-2',
                        'menu_class'     => 'footer-menu',
                        'depth'          => 1,
                    ) );
                }
                ?>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. Tous droits réservés.</p>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
