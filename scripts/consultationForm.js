function consultationForm() {

		if (window.innerWidth >= 960) {

			console.log('hello');
			$('.vbar').on('click', function(){

				if ($('.side-closed')[0]) {
					$('.consultation-form').removeClass('side-closed');
					$('.consultation-form').animate({right:'-365px'}, 'fast');

				} else {
					$('.consultation-form').addClass('side-closed');
					$('.consultation-form').animate({right:'0px'}, 'fast');
				}
			})

		}else {

			$('.bar, .form-cross').on('click', function() {
				if ($('.form-closed')[0]) {
					$('.form-ctn').removeClass('form-closed');
					$('.form-ctn').slideDown();
				} else {
					$('.form-ctn').addClass('form-closed');
					$('.form-ctn').slideUp();
				}
			});

		}

}

export default consultationForm
