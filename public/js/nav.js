export function navIconSwitch() {
    const navlinks = document.querySelectorAll('.nav-link');
    navlinks.forEach(element => {
        element.addEventListener('click', function () {
            sessionStorage.setItem('activeNavLink', this.getAttribute('id'));
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        // Récupérer la page depuis la classe
        const containerInfo = document.querySelector('.page-id');
        if (!containerInfo) {
            console.error("Aucun élément avec la classe 'page-id' trouvé.");
            return;
        }

        // Déterminer l'élément actif en fonction de la classe de la page
        let activeNavLinkId;
        switch (true) {
            case containerInfo.classList.contains('home-container'):
                activeNavLinkId = 'nav-link-home';
                break;
            case containerInfo.classList.contains('page-about'):
                activeNavLinkId = 'nav-link-about';
                break;
            case containerInfo.classList.contains('api-container'):
                activeNavLinkId = 'nav-link-API';
                break;
            case containerInfo.classList.contains('connection-container'):
                activeNavLinkId = 'nav-link-connection';
                break;
            default:
                console.warn("Aucune correspondance trouvée pour les classes de 'page-id'.");
                return;
        }

        // Stocker l'élément actif dans sessionStorage
        sessionStorage.setItem('activeNavLink', activeNavLinkId);

        // Appliquer la classe 'nav-link-active' à l'élément correspondant
        if (activeNavLinkId) {
            const navItemActive = document.querySelector('.nav-link-active');
            if (navItemActive) {
                navItemActive.classList.remove('nav-link-active');
            }

            const newActiveNavLink = document.getElementById(activeNavLinkId);
            if (newActiveNavLink) {
                newActiveNavLink.classList.add('nav-link-active');
            } else {
                console.warn(`Aucun élément trouvé avec l'ID '${activeNavLinkId}'.`);
            }
        }
    });
}