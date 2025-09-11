document.addEventListener('DOMContentLoaded', function () {
    // Gestion du menu mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const siteNavigation = document.querySelector('.site-navigation');

    if (menuToggle && siteNavigation) {
        menuToggle.addEventListener('click', function () {
            siteNavigation.classList.toggle('menu-open');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
        });
    }

    // Gestion du défilement fluide (Smooth Scroll)
    const anchorLinks = document.querySelectorAll('.site-navigation a[href^="#"]');

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
});
