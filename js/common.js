// Popups Add and Close
document.addEventListener('DOMContentLoaded', function () {
	// Handle open popup
	document.querySelectorAll('.home-content-info-item-trigger').forEach(function (trigger) {
		trigger.addEventListener('click', function () {
			const popup = this.closest('.home-content-info-item').querySelector('.home-content-info-item-popups');
			popup.classList.add('active');
		});
	});

	// Handle close popup
	document.querySelectorAll('.home-content-info-item-popups-close').forEach(function (closeBtn) {
		closeBtn.addEventListener('click', function () {
			const popup = this.closest('.home-content-info-item-popups');
			popup.classList.remove('active');
		});
	});
});