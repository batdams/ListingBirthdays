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
        const nameModifInput = document.getElementById('nameBdayModif');
        const surnameModifInput = document.getElementById('surnameBdayModif');
        const birthdayModifInput = document.getElementById('birthdayBdayModif');
        const IDModifInput = document.getElementById('IDBdayModif');
        const birthdaySelect = document.getElementById('birthday-modificator');

        birthdaySelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];

            const selectedName = selectedOption.getAttribute('data-name');
            const selectedSurname = selectedOption.getAttribute('data-surname');
            const selectedBirthday = selectedOption.getAttribute('data-birthday');
            const selectedID = selectedOption.getAttribute('data-Id');

            nameModifInput.value = selectedName;
            surnameModifInput.value = selectedSurname;
            birthdayModifInput.value = selectedBirthday;
            IDModifInput.value = selectedID;
        })
    }
}