const bodyHTML = document.querySelector('body')
const manageConsent = document.querySelector('.manage-consent')
const cookiesPopup = document.getElementById('cookies-consent')
const cookiesAccepted = document.querySelector('.cookies-accepted')

//Cookies show up on window load 
window.onload = function () {
    if(localStorage.getitem("Accepted") === false){
        cookiesPopup.classList.toggle('cookie-popup');
    }
}


//Cookies popup on manage button click
manageConsent.addEventListener('click', function () {
    cookiesPopup.classList.toggle('cookie-popup');
});