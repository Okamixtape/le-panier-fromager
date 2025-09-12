<?php get_header(); ?>

<main id="primary" class="site-main">

<!-- Section 1: Impact visuel -->
<section class="hero-visual-section" id="accueil">
    <div class="visual-layers">
        <!-- Couche 1: Lignes organiques -->
        <div class="organic-lines">
            <svg viewBox="0 0 1200 600" class="lines-svg">
                <path d="M0,100 Q300,50 600,200 T1200,150" stroke="#333" stroke-width="1" fill="none"/>
                <path d="M0,200 Q400,150 800,300 T1200,250" stroke="#333" stroke-width="1" fill="none"/>
                <path d="M0,300 Q200,250 400,400 T1200,350" stroke="#333" stroke-width="1" fill="none"/>
            </svg>
        </div>
        
        <!-- Placeholder pour couches 2 et 3 (à implémenter ensuite) -->
        <div class="image-layer">
            <!-- Images produits - À développer -->
        </div>
        
        <div class="circles-layer">
            <!-- Cercles icônes - À développer -->
        </div>
    </div>
</section>

<!-- Section 2: Contenu principal -->
<section class="hero-content-section">
    <div class="container">
        <div class="hero-text-block">
            <div class="hero-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-magasin.svg" alt="Le Panier Fromager - Magasin">
            </div>
            <h1>Mon fromager et épicerie<br>au cœur de Compreignac</h1>
            <a href="#le-magasin" class="cta-button">Découvrir le magasin</a>
        </div>
    </div>
</section>

    <section id="le-magasin" class="site-section">
        <div class="container">
            <h2>Le Magasin</h2>
            <p>Découvrez notre boutique et notre passion pour le fromage.</p>
        </div>
    </section>

    <section id="les-produits" class="site-section">
        <div class="container">
            <h2>Les Produits</h2>
            <p>Une sélection rigoureuse des meilleurs fromages de nos régions.</p>
        </div>
    </section>

    <section id="evenements" class="site-section">
        <div class="container">
            <h2>Événements</h2>
            <p>Participez à nos dégustations et ateliers.</p>
        </div>
    </section>

    <section id="info-pratique" class="site-section">
        <div class="container">
            <h2>Infos Pratiques</h2>
            <p>Horaires, adresse et plan d'accès.</p>
        </div>
    </section>

    <section id="contact" class="site-section">
        <div class="container">
            <h2>Contact</h2>
            <p>Contactez-nous pour toute question ou commande.</p>
        </div>
    </section>

</main><!-- .site-main -->

<?php get_footer(); ?>