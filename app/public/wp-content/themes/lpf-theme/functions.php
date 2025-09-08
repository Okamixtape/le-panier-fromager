<?php

function lpf_theme_enqueue_styles() {
    // Enregistre et charge notre feuille de style principale.
    wp_enqueue_style(
        'lpf-main-style', // Un nom unique pour notre style
        get_template_directory_uri() . '/assets/css/main.css', // Le chemin vers notre fichier
        [], // Dépendances (aucune pour l'instant)
        '1.0.0' // Version du fichier, utile pour la mise en cache
    );
}
// Demande à WordPress d'exécuter notre fonction au bon moment.
add_action( 'wp_enqueue_scripts', 'lpf_theme_enqueue_styles' );