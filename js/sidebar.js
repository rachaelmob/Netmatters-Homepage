window.onload = function () {
	// window.addEventListener('scroll', function (e) {
	// 	if (window.scrollY > 100) {
	// 		document.querySelector("#sidenav").classList.add('is-scrolling');
	// 	} else {
	// 		document.querySelector("#sidenav").classList.remove('is-scrolling');
	// 	}
	// });

	// Variables For Toggle .is-active
	const hamburger = document.querySelector('.hamburger');
	const sideBar = document.querySelector('#sidebar');

	// Activate class 'is-active' on click
	hamburger.addEventListener('click', function () {
		setTimeout(() => {
			hamburger.classList.toggle('is-active');
		  }, 50);
		// hamburger.classList.toggle('is-active');
		sideBar.classList.toggle('is-active');
	});
}