;(function($, undefined) {
	"use strict";

	var htmlClasses = document.querySelectorAll('html')[0].getAttribute('class'),
		jsEnabled = (htmlClasses.indexOf('no-js') === -1) ? true : false;

	if (jsEnabled) {
		console.log('js is enabled');

		var menuToggle = $('.menuToggle'),
			navItems = $('.navItems');

		menuToggle.on('click', function() {
			// TODO, implement requestAnimationFrame() instead of jQuery for this
			navItems.slideToggle(200);
		});
	}
})(jQuery);