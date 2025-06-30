// Menu scroll function

(function () {
	let menuHeight = 0;

	function updateMenuHeight() {
		const menu = document.querySelector('.main-menu');
		menuHeight = menu ? menu.offsetHeight : 0;
	}

	function handleScroll() {
		const header = document.querySelector('.main-menu')?.closest('.site-header');
		if (!header) return;

		if (window.scrollY >= menuHeight) {
			header.classList.add('after-scroll', 'fixed-top');
		} else {
			header.classList.remove('after-scroll', 'fixed-top');
		}
	}

	// Initialize and bind events
	window.addEventListener('load', () => {
		updateMenuHeight();
		handleScroll();
	});
	window.addEventListener('resize', updateMenuHeight);
	window.addEventListener('scroll', handleScroll);
})();


// Popups Add and Close
// document.addEventListener('DOMContentLoaded', function () {
// 	// Handle open popup
// 	document.querySelectorAll('.home-content-info-item-trigger').forEach(function (trigger) {
// 		trigger.addEventListener('click', function () {
// 			const popup = this.closest('.home-content-info-item').querySelector('.home-content-info-item-popups');
// 			popup.classList.add('active');
// 		});
// 	});
//
// 	// Handle close popup
// 	document.querySelectorAll('.home-content-info-item-popups-close').forEach(function (closeBtn) {
// 		closeBtn.addEventListener('click', function () {
// 			const popup = this.closest('.home-content-info-item-popups');
// 			popup.classList.remove('active');
// 		});
// 	});
// });