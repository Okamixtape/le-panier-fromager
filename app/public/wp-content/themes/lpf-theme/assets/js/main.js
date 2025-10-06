document.addEventListener('DOMContentLoaded', function () {
    try {
        // Gestion du menu mobile
        const menuToggle = document.querySelector('.menu-toggle');
        const siteNavigation = document.querySelector('.site-navigation');

        if (!menuToggle || !siteNavigation) {
            console.warn('Menu elements not found');
            return; // Stop execution if essential elements are missing
        }

        menuToggle.addEventListener('click', function () {
            siteNavigation.classList.toggle('menu-open');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
        });

        // Gestion du défilement fluide (Smooth Scroll) - Navigation + Boutons CTA
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                let targetId = this.getAttribute('href');
                // Assurons-nous que la cible est plus qu'un simple '#'
                if (targetId.length > 1) {
                    let targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        // Ferme le menu mobile si ouvert avant de scroller
                        if (siteNavigation.classList.contains('menu-open')) {
                            siteNavigation.classList.remove('menu-open');
                            menuToggle.setAttribute('aria-expanded', 'false');
                        }

                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Réinitialise le menu si la fenêtre est redimensionnée en mode bureau
        window.addEventListener('resize', function () {
            if (window.innerWidth > 768 && siteNavigation.classList.contains('menu-open')) {
                siteNavigation.classList.remove('menu-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });

    } catch (error) {
        console.error('Menu initialization failed:', error);
    }
});
