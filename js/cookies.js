const bodyHTML = document.querySelector('body')
const manageConsent = document.querySelector('.manage-consent')
const cookiesPopup = document.getElementById('cookies-consent')
const cookiesAccepted = document.querySelector('.cookies-accepted')


// -- Cookies show up on window load 
window.onload = function () {
    // Only load IF cookies were accepted already
    // if(localStorage.getitem("Accepted") === false ){
        cookiesPopup.classList.toggle('cookie-popup');
    // }

};

// -- IF cookies are accepted set "Accepted" in local storage



// -- Cookies popup on manage button click
manageConsent.addEventListener('click', function () {
    cookiesPopup.classList.toggle('cookie-popup');
});






