const manageConsent = document.querySelector('.manage-consent')
const cookiesPopup = document.getElementById('cookies-consent')

//Show POP up on manage button click

manageConsent.addEventListener('click', function () {
    cookiesPopup.classList.toggle('cookie-popup');
});