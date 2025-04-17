/**
 * This function handles the navigation link clicks.
 * handler events with .then & .catch (simple operation)
 * It prevents the default action of the link, fetches the content from the URL,
 * and updates the main container with the fetched content.
 * It also manages the active class for the navigation links.
 * @returns {void}
 */
export function navLinkConnection() {
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const url = this.getAttribute('href');

            // Select the currently active nav item
            let navItemActive = document.querySelector('.nav-link-active');

            // Remove the active class from the currently active item
            if (navItemActive) {
                navItemActive.classList.remove('nav-link-active');
            }

            // Add the active class to the clicked item
            this.classList.add('nav-link-active');

            // AJAX request to fetch the content and update the main container
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    const content = document.getElementById('main-container');
                    if (content) {
                        content.innerHTML = data;
                    } else {
                        console.error("Error: Element with ID 'main-container' not found.");
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });
}