window.onload = function () {
	// window.addEventListener('scroll', function (e) {
	// 	if (window.scrollY > 100) {
	// 		document.querySelector("#sidebar").classList.add('is-scrolling');
	// 	} else {
	// 		document.querySelector("#sidebar").classList.remove('is-scrolling');
	// 	}
	// });

	// Variables 
	const hamburger = document.querySelector('.hamburger');
	const sideBar = document.querySelector('#sidebar');
	const pageContent = document.querySelector('#container');
	let openMenu = false;

	// Activate sidebar on click
	hamburger.addEventListener('click', function openSidebar() {
		setTimeout(() => {
			hamburger.classList.toggle('is-active');
		  }, 50);

		//Set OpenMenu to True
		setTimeout(() => {
			openMenu = true;
		}, 50);

		//push content side bar
		sideBar.classList.toggle('sidebar-visible');
		pageContent.classList.toggle('sidebar-visible');
	});

	//CLOSE that sidebar!
	pageContent.addEventListener('click', function () {
		if(openMenu === true) {
			setTimeout(() => {
				hamburger.classList.remove('is-active');
			}, 50);

			// push content over side bar
			pageContent.classList.remove('sidebar-visible');
			sideBar.classList.remove('sidebar-visible');

			// //Menu is now Closed
			openMenu = false;
		} 
	});


}