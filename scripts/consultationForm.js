function consultationForm() {

		if (window.innerWidth >= 960) {
			$('.vbar').on('click', function(){
				if ($('.side-closed')[0]) {
					$('.vbar .icon').css('transform', 'rotate(180deg)');
					$('.consultation-form').removeClass('side-closed');
					$('.consultation-form').animate({right:'-365px'}, 'fast');
				} else {
					$('.vbar .icon').css('transform', 'rotate(0deg)');
					$('.consultation-form').addClass('side-closed');
					$('.consultation-form').animate({right:'0px'}, 'fast');
				}
			})
		}

		if (window.innerWidth <= 960) {
			$('.bar, .form-cross').on('click', function() {
				if ($('.form-closed')[0]) {
					$('.bar .icon').css('transform', 'rotate(0deg)');
					$('.form-ctn').removeClass('form-closed');
					$('.form-ctn').slideDown();
				} else {
					$('.bar .icon').css('transform', 'rotate(180deg)');
					$('.form-ctn').addClass('form-closed');
					$('.form-ctn').slideUp();
				}
			});
		}

}

export default consultationForm
