export function formBirthdayManager() 
{
    formBirthday();

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