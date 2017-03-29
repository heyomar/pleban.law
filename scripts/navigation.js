function navigation() {
	$('.bars, .cross').on('click', function() {
		if ($('.menu-open')[0]) {
				$('body, html').css({'overflow-y': 'scroll'});
				$('.menu-header-navigation-container').removeClass('menu-open');
				$('.menu-header-navigation-container').animate({right:'-350px'});
				$('.cross').animate({right:'-80px'}, 'fast');
				$('.bars').animate({right:'0px'}, 'fast');
		} else {
				$('body, html').css({'overflow-y': 'hidden'});
				$('.menu-header-navigation-container').animate({right:'0px'});
				$('.cross').animate({right:'0px'});
				$('.bars').animate({right:'-80px'}, 'fast');
				$('.menu-header-navigation-container').addClass('menu-open');
		}
	})
}
export default navigation
