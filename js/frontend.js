/*
jQuery functions for the Front end area
*/
jQuery(document).ready( function( $ ) {

	// Valentine's Day Classic
	$(".valentines-day-classic").prepend("<div class='heart'></div>");
	
	//valentine's Day Rose
	$(".valentines-day-roses").append("<div class='letter-box'></div>").find("input[type='text'], input[type='password'], input[type='email']").parent().parent().appendTo($(".letter-box"));
	
	//valentine's Day Birds
	$('.valentines-day-birds').wrap("<div class='valentines-day-birds-container'></div>");
	$('.valentines-day-birds').prepend("<div class='bg-header'></div>").append("<div class='bg-bottom'></div>");
	
	// Valentine's Day Blue Birds
	$('.valentines-day-blue-birds').prepend('<div class="header"></div>').append('<div class="footer"></div>');

	
	// Xmas Classic
	$('.christmas-classic').wrap("<div class='christmas-classic-container'></div>");
	$('.christmas-classic').prepend('<div class="header"></div><div class="left"></div>').append('<div class="footer"></div>');
	
	// Xmas Red
	$('.christmas-red').wrap("<div class='christmas-red-container'></div>");
	$('.christmas-red').prepend('<div class="header"></div><div class="left"></div>').append('<div class="footer"></div>');
	$('.christmas-red .wpcf7-radio .wpcf7-list-item').first().addClass('active');
	$('.christmas-red .wpcf7-radio .wpcf7-list-item input').on( 'click', function() {
		$('.christmas-red .wpcf7-radio .wpcf7-list-item').removeClass('active');
		$(this).parent().addClass('active');
	});
	
	$('.christmas-red .wpcf7-checkbox .wpcf7-list-item input').on( 'click', function() {
		$(this).parent().toggleClass('active');
	});
		
	// Xmas Simple
	$('.christmas-simple').wrap("<div class='christmas-simple-container'></div>");
	$('.christmas-simple').prepend( '<div class="header"></div><div class="middle"></div><div class="ribbon"></div>' ).append('<div class="footer"></div>');

});