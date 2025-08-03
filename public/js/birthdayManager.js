export function birthdayManager()
{
    getBirthdayManager_FETCH();

    function getBirthdayManager_FETCH() {
        const birthdayManagerLinkBtn = document.getElementById('birthday-manager-link');
        birthdayManagerLinkBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('href');
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    const content = document.getElementById('main-container');
                    if (content) {
                        content.innerHTML = data;
                        displayBirthdaysToModify();
                    } else {
                        console.error("Error: Element with ID 'main-container' not found.");
                    }
                })
            .catch(error => console.error('Error:', error));
        });
    }

    function displayBirthdaysToModify() {
        let birthdaySelect = document.getElementById('birthday-modificator');
        birthdaySelect.addEventListener('change', function() {
            let selectedOption = this.options[this.selectedIndex];
            console.log(selectedOption.getAttribute('data-name'));
        })
    }
}