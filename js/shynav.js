const shyNav = document.querySelector('#shy-nav');
let lastScrollTop = 0;

//When user is scrolling 
window.addEventListener('scroll', function() {
const isScrolling = window.scrollY;
let scrollingUp = isScrolling;

    if (scrollingUp >= lastScrollTop) {
        shyNav.style.top = '-220px';
    } else {
        shyNav.style.top = '0';
    }
    lastScrollTop = scrollingUp;
})