<?php

function lpf_theme_enqueue_assets() {
    // Enregistre et charge notre feuille de style principale.
    wp_enqueue_style(
        'lpf-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    // Enregistre et charge notre script principal.
    wp_enqueue_script(
        'lpf-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true // Charger dans le footer pour de meilleures performances
    );
}
add_action( 'wp_enqueue_scripts', 'lpf_theme_enqueue_assets' );

function lpf_theme_register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Menu Principal' ),
            'footer-menu-1' => __( 'Menu Pied de page 1' ),
            'footer-menu-2' => __( 'Menu Pied de page 2' ),
        )
    );
}
add_action( 'init', 'lpf_theme_register_menus' );

function lpf_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Pied de page - Colonne 1', 'lpf-theme' ),
        'id'            => 'footer-widget-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Pied de page - Colonne 2', 'lpf-theme' ),
        'id'            => 'footer-widget-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Pied de page - Colonne 3', 'lpf-theme' ),
        'id'            => 'footer-widget-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Pied de page - Colonne 4', 'lpf-theme' ),
        'id'            => 'footer-widget-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'lpf_theme_widgets_init' );