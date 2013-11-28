$(document).ready(function() {
	var h = $(window).height();

	$('#home').on('click', function() {
		$('html, body').animate({
			scrollTop : 0
		}, 1000);
	});

	$('#cv').on('click', function() {
		$('html, body').animate({
			scrollTop : h
		}, 1000);
	});

	$('#cosa').on('click', function() {
		$('html, body').animate({
			scrollTop : h * 2
		}, 1000);
	});

	$('#contatti').on('click', function() {
		$('html, body').animate({
			scrollTop : h * 3
		}, 1000);
	});

}); 