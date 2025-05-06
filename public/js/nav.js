export function navIconSwitch () {
    const navlinks = document.querySelectorAll('.nav-link');
    navlinks.forEach(element => {
        element.addEventListener('click', function () {
            sessionStorage.setItem('activeNavLink', this.getAttribute('id'));
        });
    });
    document.addEventListener('DOMContentLoaded', () => {
        // Récupérer l'ID de l'élément actif depuis sessionStorage
        const activeNavLinkId = sessionStorage.getItem('activeNavLink');
        // Si un ID est trouvé dans sessionStorage
        if (activeNavLinkId) {
            if (activeNavLinkId !== 'nav-link-logout'){
                // Trouver l'élément actuellement actif et lui retirer la classe
                const navItemActive = document.querySelector('.nav-link-active');
                if (navItemActive) {
                    navItemActive.classList.remove('nav-link-active');
                }
            }
            // Trouver l'élément correspondant et lui appliquer la classe
            const activeNavLink = document.getElementById(activeNavLinkId);
            if (activeNavLink) {
                activeNavLink.classList.add('nav-link-active');
            }

            // Optionnel : Nettoyer sessionStorage pour éviter des effets indésirables
            sessionStorage.removeItem('activeNavLink');
        }
    });
}