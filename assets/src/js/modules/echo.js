'use strict';

module.exports = string => {
	var activateResizeHandler = function() {
		var win = jQuery(window),
		doc = jQuery('html'),
		resizeClass = 'resize-active',
		flag, timer;

		var removeClassHandler = function() {
			flag = false;
			doc.removeClass(resizeClass);
		};

		var resizeHandler = function() {
			if (!flag) {
				flag = true;
				doc.addClass(resizeClass);
			}

			clearTimeout(timer);
			timer = setTimeout(removeClassHandler, 500);
		};

		win.on('resize orientationchange', resizeHandler);
	};

	function initBurgerMenu() {
		var burger = jQuery('.burger-menu'),
		body = jQuery('body');
		
		burger.on('click', function(e) {
			e.preventDefault();
			jQuery(this).toggleClass('active');
			body.toggleClass('nav-active');
		});
	}

	jQuery(function() {
		initBurgerMenu();
		activateResizeHandler();
	});
}