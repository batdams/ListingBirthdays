export function birthdayManager()
{
    getBirthdayManager_FETCH();

    function getBirthdayManager_FETCH() {
        console.log('test');
        const birthdayManagerLinkBtn = document.getElementById('birthday-manager-link');
        birthdayManagerLinkBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('href');
            console.log(url);
        });
    }
}