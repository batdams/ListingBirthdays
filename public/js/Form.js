export function formControl ()
{
    //formConnection();
    formBirthday();

    function formConnection() 
    {
        const formConnexion = document.querySelector("#form-connexion");
        const emailInput = document.querySelector("#email");
        const passwordInput = document.querySelector("#password");
        const hideSection = document.querySelector('.hideSection');

        // vérification de l'email lors de la saisie (format)
        emailInput.addEventListener('input', () => {
            if(isValidEmail(emailInput)){
                emailInput.classList.remove('isNotValid');
                emailInput.classList.add('isValid');
            } else {
                emailInput.classList.add('isNotValid');
            };
        });

        emailInput.addEventListener('blur', () => {
            if(emailInput.value === '') {
                emailInput.classList.remove('isValid');
                emailInput.classList.remove('isNotValid');
            }
        })

        // vérification du mot de passe lors de la saisie (longueur et caractères)
        passwordInput.addEventListener('input', () => {
            if(isValidPassword(passwordInput)) {
                passwordInput.classList.remove('isNotValid');
                passwordInput.classList.add('isValid');
            } else {
                passwordInput.classList.add('isNotValid');
            }
        })

        passwordInput.addEventListener('blur', () => {
            if(passwordInput.value === '') {
                passwordInput.classList.remove('isValid');
                passwordInput.classList.remove('isNotValid');
            }
        })

        // verification de l'email et du mot de passe lors de l'envoi
        formConnexion.addEventListener('submit', (e) => {
            if (!isValidEmail(emailInput)) {
                e.preventDefault();
                hideSection.innerHTML = 'format de l\'email non valide';
            } else if (!isValidPassword(passwordInput)) {
                e.preventDefault();
                hideSection.innerHTML = 'format mot de passe non valide';
            } else {
                console.log('ok');
            }
        })

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const emailContent = email.value.trim();
            return emailRegex.test(emailContent); 
        }

        function isValidPassword(password) {
            // regex                 min        maj       chiffre non alphanum       L>12
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d]).{12,}$/;
            const passwordContent = password.value.trim();
            return passwordRegex.test(passwordContent)
        }
    }

    function formBirthday ()
    {
        const fieldsList = Array.from(document.getElementsByClassName('bdayField'));
        const formBday = document.querySelector('#form-bday');

        formBday.addEventListener('submit', (e) => {
            const fieldsCheck = fieldEmptyCheck(fieldsList);
            if (fieldsCheck == 'NOK') {
                e.preventDefault();
                console.log('NOK');
            }
        });

        function fieldEmptyCheck(fieldsList) {
            let result = 'OK';

            fieldsList.forEach(element => {
                if (element.value.trim() === ''){
                    result = 'NOK';
                }
            });

            return result;
        }
    }
}