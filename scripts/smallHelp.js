function smallHelp() {

	// Add span around search input field on homepage to add magnifying glass icon
	$('#searchform').wrapInner("<span class='fieldspan'></span>");

	// normally you dont wanna make redirects like this when you can use a simple a tag, but the tag wasnt working properly so i had to resort to js.
	$('.injury').on('click', function(){
		window.location.href ="practice-areas/personal-injury";
	})

	$('.employment').on('click', function(){
		window.location.href ="practice-areas/employment";
	})

	$('.criminal').on('click', function(){
		window.location.href ="practice-areas/criminal";
	})

	$('.civil').on('click', function(){
		window.location.href ="practice-areas/other-civil-litigation";
	})


}

export default smallHelp
