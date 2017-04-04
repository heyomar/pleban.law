function consultationForm() {
	$('.bar, .form-cross').on('click', function() {
		if ($('.form-closed')[0]) {
			$('.form-ctn') .removeClass('form-closed');
			$('.form-ctn').slideDown();
		} else {
			$('.form-ctn').addClass('form-closed');
			$('.form-ctn').slideUp();
		}
	})
}

export default consultationForm
