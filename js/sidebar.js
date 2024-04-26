window.onload = function () {
	// Variables 
	const bodyHTML = document.querySelector('body')
	const hamburger = document.querySelector('.hamburger');
	const sideBar = document.querySelector('#sidebar');
	const pageContent = document.querySelector('#container');
	let openMenu = false;

	//=== BURGER ANIMATION & SIDE BAR ON BURGER CLICK ===//
	hamburger.addEventListener('click', function openSidebar() {
		setTimeout(() => {
			hamburger.classList.toggle('is-active');
		  }, 50);

		//Menu is Open
		setTimeout(() => {
			openMenu = true;
		}, 50);

		//push content and show menu
		sideBar.classList.toggle('sidebar-visible');
		pageContent.classList.toggle('sidebar-visible');

		//stop page from scrolling when menu is open
		bodyHTML.classList.toggle('no-scrolling');
	});

	//=== CLOSE THE SIDE BAR ==//
	pageContent.addEventListener('click', function () {
		if(openMenu === true) {
			setTimeout(() => {
				hamburger.classList.remove('is-active');
			}, 50);

			// push content over side bar
			pageContent.classList.remove('sidebar-visible');
			sideBar.classList.remove('sidebar-visible');

			//allow page scroll
			bodyHTML.classList.remove('no-scrolling');

			// Menu is now Closed
			openMenu = false;

		} 
	});


}