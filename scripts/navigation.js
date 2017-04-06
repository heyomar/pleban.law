function navigation() {
	$('.bars, .cross').on('click', function() {
		if ($('.menu-open')[0]) {
				$('.menu-header-navigation-container').removeClass('menu-open');
				$('.menu-header-navigation-container').animate({right:'-350px'});
				$('.cross').animate({right:'-80px'}, 'fast');
				$('.bars').animate({right:'0px'}, 'fast');
		} else {
				$('.menu-header-navigation-container').animate({right:'0px'});
				$('.cross').animate({right:'0px'});
				$('.bars').animate({right:'-80px'}, 'fast');
				$('.menu-header-navigation-container').addClass('menu-open');
		}
	})

	$(window).resize(function () {
		if (window.innerWidth >= 860) {
			$('.menu-header-navigation-container').css('right', '25px');
		}else {
			$('.menu-header-navigation-container').css('right', '-350px');
		}
	});

}

export default navigation
