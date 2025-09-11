# Projet : Le Panier Fromager

Ce document est la source de vérité pour le développement du site vitrine "Le Panier Fromager".

---

## 1. Objectif du Projet

- **Type :** Site vitrine d'une seule page (landing page).
- **But :** Asseoir la notoriété de la marque avant l'ouverture officielle (prévue le 10 octobre 2025).
- **Navigation :** La navigation principale se fait via des liens d'ancrage qui défilent vers les sections correspondantes de la page.

---

## 2. Sources de Vérité (Design)

- **Maquettes Figma :** [Lien vers votre projet Figma ici]
- **Charte Graphique :**
  - **Couleurs Principales :**
    - Bleu Foncé : `#376397`
    - Bleu Clair : `#5ba0d1`
  - **Typographies :**
    - Titres (h1, h2...) : "Devin", serif
    - Texte courant (p, a...) : "Manrope", sans-serif

---

## 3. Environnement Technique

- **Plateforme :** WordPress 6.8.2+
- **Méthode :** Thème sur mesure (`lpf-theme`), développé depuis zéro.
- **Environnement Local :** Local by WP Engine (PHP 8.2.27, nginx, MySQL 8.0.35).
- **Structure des Fichiers Clés :**
  - `index.php` : Contient la structure des sections de la page.
  - `header.php` / `footer.php` : Gèrent l'en-tête et le pied de page.
  - `functions.php` : Gère l'enregistrement des menus, scripts et styles.
  - `assets/css/main.css` : Feuille de style principale.
  - `assets/js/main.js` : Scripts pour l'interactivité (menu mobile, etc.).

---

## 4. Bonnes Pratiques

- **CSS :** Utilisation des variables CSS définies dans `:root`. Approche Mobile-First.
- **WordPress :** Les menus et contenus dynamiques (widgets du footer) doivent être gérables depuis l'administration. Les scripts et styles doivent être chargés via `wp_enqueue_script`/`wp_enqueue_style`.

---

## 5. Structure de la Page

La page est composée des sections suivantes, accessibles via les ancres du menu principal.

### a. Header (`header.php`)
- **Logo** à gauche.
- **Menu de navigation principal** géré via l'administration WordPress (`wp_nav_menu`).
  - Le magasin (`#le-magasin`)
  - Les produits (`#les-produits`)
  - Info pratique (`#info-pratique`)
  - Actualité (`#actualite`)
  - En savoir plus ? (`#contact`)
- **Menu mobile** : Un menu hamburger doit apparaître sur les résolutions mobiles.

### b. Section Hero (Introduction)
- **Contenu** : Titre principal, carrousel d'images de produits, et un bouton d'appel à l'action.
- **Bouton "Découvrir la boutique"** : Doit pointer vers l'ancre `#le-magasin`.

### c. Section "Le magasin" (`#le-magasin`)
- **Contenu** : Titre, paragraphe de présentation de la boutique et une image.

### d. Section "Les produits" (`#les-produits`)
- **Contenu** : Titre et une grille présentant les 4 catégories de produits (Fromages, Crémerie, Primeur, Épicerie) avec une image pour chacune.

### e. Section "Info pratique" (`#info-pratique`)
- **Contenu** : Titre, carte (image ou iframe), adresse, horaires et numéro de téléphone.

### f. Section "Actualité" (`#actualite`)
- **Contenu** : Titre, texte d'incitation à suivre les réseaux sociaux et une image.
- **Bouton "Nous suivre"** : Doit pointer vers la page Facebook ou Instagram de l'entreprise (le lien sera à définir).

### g. Section Contact (`#contact`)
- **Titre** : "EN SAVOIR PLUS ?"
- **Contenu** : Un formulaire de contact.
- **Champs du formulaire** : Nom, Email, Sujet, Message.
- **Action** : À la soumission, le formulaire doit envoyer un email à l'administrateur du site.

### h. Footer (`footer.php`)
- **Contenu** : Logo, icônes des réseaux sociaux (Facebook, Instagram, Google), et mentions légales.
- **Contenus administrables** : Les liens des réseaux sociaux et les textes des mentions légales doivent être modifiables depuis le back-office WordPress (probablement via des widgets ou des options du thème).