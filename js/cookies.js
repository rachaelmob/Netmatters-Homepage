const manageConsent = document.querySelector('.manage-consent')
const cookiesId = document.getElementById('cookies-consent')
const cookiesAccepted = document.querySelector('.cookies-accepted')


// -- Cookies popup on manage button click
manageConsent.addEventListener('click', function () {
    cookiesId.classList.toggle('cookie-popup');
});


// Function to create/set cookie
setCookie = (cName, cValue, expDays) => {
    let date = new Date();
    // calculate date
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    // create and save cookie at root
    document.cookie = cName + "=" + cValue + ";" + expires + "; path=/";
}

// Function to check if cookie is available 
getCookie = (cName) => {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split("; ");

    let value;
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) value = val.substring(name.length);
    })

    return value;
}

// Message disappeares when cookie is accepted
cookiesAccepted.addEventListener("click", () => {
    cookiesId.style.display = "none";

    setCookie("cookieM", true, 365);
})

// check cookie

cookieMessage = () => {
    if (!getCookie("cookieM")) {
        cookiesId.classList.toggle('cookie-popup');
    } else {
        localStorage.setItem("cookieM", true);
    }
}
window.addEventListener("load", cookieMessage);






