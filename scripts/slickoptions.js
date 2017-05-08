function slickoptions() {
	$( document ).ready(function() {

			$('.carousel').slick({
				dots: false,
				infinite: true,
				pauseOnHover: true,
				autoplay: true,
				autoplaySpeed: 5000,
				slidesToShow: 1
			})

	});
}

export default slickoptions
