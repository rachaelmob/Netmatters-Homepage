
const shyNav = document.querySelector('#shy-nav');

//When user is scrolling 
window.addEventListener('scroll', function() {
let lastScrollTop = 0;
const isScrolling = window.scrollY;
let scrollingUp = isScrolling;

    if (scrollingUp >= lastScrollTop) {
        shyNav.style.top = '-220px';
    } else {
        shyNav.style.top = '0';
    }
    lastScrollTop = scrollingUp;
})