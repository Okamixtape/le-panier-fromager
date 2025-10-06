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
            <!-- Bloc gauche - Diagonale descendante ↘️ -->
            <div class="image-block-left">
                <img class="image-creme" 
                     src="https://images.unsplash.com/photo-1628088062854-d1870b4553da?w=400&h=300&fit=crop" 
                     alt="Crème fraîche artisanale">
                <img class="image-fromage" 
                     src="https://images.unsplash.com/photo-1452195100486-9cc805987862?w=400&h=300&fit=crop" 
                     alt="Fromages artisanaux">
            </div>
            
            <!-- Bloc droite - Diagonale montante ↗️ -->
            <div class="image-block-right">
                <img class="image-epicerie" 
                     src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" 
                     alt="Épicerie fine">
                <img class="image-miel" 
                     src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=400&h=300&fit=crop" 
                     alt="Miels artisanaux">
            </div>
        </div>
        
        <!-- Couche 3: Cercles avec logos -->
        <div class="circles-layer">
            <div class="circles-container">
                <!-- Cercle goutte (bleu foncé) - Premier plan -->
                <div class="icon-circle blue-dark">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-goutte.svg" 
                         alt="Le Panier Fromager - Goutte">
                </div>
                
                <!-- Cercle panier (bleu clair) - Arrière-plan -->
                <div class="icon-circle blue-light">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-panier.svg" 
                         alt="Le Panier Fromager - Panier">
                </div>
            </div>
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
            <h1>Mon fromager et épicier<br>au cœur de Compreignac</h1>
            <a href="#le-magasin" class="cta-button">Découvrir le magasin</a>
        </div>
    </div>
</section>

<section id="le-magasin" class="section-magasin">
    <div class="magasin-content">
        <div class="content-area">
            <h2>Le magasin</h2>
            <p>Quis enim aut eum diligat quem metuat, aut eum a quo se metui putet? Coluntur tamen simulatione dumtaxat ad tempus.</p>
        </div>
        <div class="image-area">
            <img class="store-image" 
                 src="<?php echo get_template_directory_uri(); ?>/assets/images/image-devanture-epicerie.png" 
                 alt="Devanture du Panier Fromager">
        </div>
    </div>
</section>

    <section id="les-produits" class="section-produits">
        <div class="container">
            <h2>Les Produits</h2>
            <div class="produits-grid">
                <!-- Card 1: Fromages -->
                <div class="product-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1452195100486-9cc805987862?w=300&h=200&fit=crop');">
                        <div class="card-overlay">
                            <h3 class="card-title">Fromages</h3>
                        </div>
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-fromage.svg" alt="Icône Fromage">
                        </div>
                    </div>
                    <div class="card-content">
                        <p>Une sélection rigoureuse des meilleurs fromages de nos régions.</p>
                    </div>
                </div>

                <!-- Card 2: Crémerie -->
                <div class="product-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1628088062854-d1870b4553da?w=300&h=200&fit=crop');">
                        <div class="card-overlay">
                            <h3 class="card-title">Crémerie</h3>
                        </div>
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-cremerie.svg" alt="Icône Crémerie">
                        </div>
                    </div>
                    <div class="card-content">
                        <p>Du beurre à la crème fraîche, des produits laitiers de qualité.</p>
                    </div>
                </div>

                <!-- Card 3: Primeur -->
                <div class="product-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1598170845058-32b9d6a5da37?w=300&h=200&fit=crop');">
                        <div class="card-overlay">
                            <h3 class="card-title">Primeur</h3>
                        </div>
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-primeur.svg" alt="Icône Primeur">
                        </div>
                    </div>
                    <div class="card-content">
                        <p>Des fruits et légumes frais, locaux et de saison.</p>
                    </div>
                </div>

                <!-- Card 4: Épicerie -->
                <div class="product-card">
                    <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=300&h=200&fit=crop');">
                        <div class="card-overlay">
                            <h3 class="card-title">Épicerie</h3>
                        </div>
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-epicerie.svg" alt="Icône Épicerie">
                        </div>
                    </div>
                    <div class="card-content">
                        <p>Des produits fins pour accompagner vos dégustations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="info-pratique" class="section-info-pratique">
        <div class="info-container">
            <div class="map-area">
                <div class="map-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-carte-bleu-clair.png" 
                        alt="Plan d'accès au Panier Fromager - Compreignac">
                </div>
            </div>
            <div class="info-content">
                <h2>Info pratique</h2>
                <div class="horaires">
                    <p>Ouvert du <strong>Mardi au Vendredi</strong><br>
                    de <strong>9h à 12H30</strong> et <strong>15h à 18h30</strong></p>
                    <p>et le <strong>Samedi</strong> de <strong>9h à 13h</strong></p>
                </div>
                <div class="separator"></div>
                <div class="adresse">
                    <p>2 Place de l'Église,<br>
                    87140 Compreignac</p>
                    <p><strong>Téléphone :</strong> <a href="tel:+33555000000" class="tel-link">05 55 XX XX XX</a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="actualite" class="section-actualite">
        <div class="actualite-container">
            <div class="content-area">
                <h2>Actualité</h2>
                <p class="subtitle">Tout au long de l'année retrouvez nos événement et bons plans</p>
                <a href="#contact" class="cta-outline">En savoir plus</a>
            </div>
            <div class="image-area">
                <img class="actualite-composite-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/image-evenements.png"
                    alt="Événements et dégustations au Panier Fromager">
            </div>
        </div>
    </section>

<section id="contact" class="section-contact">
    <div class="container">
        <h2>En savoir plus ?</h2>
        
        <?php if (isset($_GET['contact']) && $_GET['contact'] === 'success'): ?>
            <div class="contact-message success">
                <p>✅ Votre message a bien été envoyé ! Nous vous répondrons dans les plus brefs délais.</p>
            </div>
        <?php elseif (isset($_GET['contact']) && $_GET['contact'] === 'error'): ?>
            <div class="contact-message error">
                <p>❌ Une erreur s'est produite. Veuillez réessayer ou nous contacter directement.</p>
            </div>
        <?php endif; ?>
        
        <form class="contact-form" method="post">
            <?php wp_nonce_field('lpf_contact_form', 'lpf_contact_nonce'); ?>
            <div class="form-row">
                <div class="form-field-wrapper">
                    <label for="nom" class="sr-only">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-field" placeholder="Nom" required>
                </div>
                <div class="form-field-wrapper">
                    <label for="prenom" class="sr-only">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-field" placeholder="Prénom" required>
                </div>
            </div>
            <div class="form-field-wrapper">
                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" name="email" class="form-field" placeholder="Email" required>
            </div>
            <div class="form-field-wrapper">
                <label for="message" class="sr-only">Message</label>
                <textarea id="message" name="message" class="form-field form-textarea" placeholder="Mon message" required></textarea>
            </div>
            <button type="submit" name="lpf_contact_submit" class="submit-btn">Envoyer</button>
        </form>
    </div>
</section>

</main><!-- .site-main -->

<?php get_footer(); ?>