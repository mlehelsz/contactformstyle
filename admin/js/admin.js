/*
jQuery functions for the Admin area
*/
jQuery(document).ready( function( $ ) {
	
	// Select a Contact style
	$(".cf7_style_templates li").on( "click", function() {
		
		var eq = $(this).index();
		
		$('.cf7_style_templates li').removeClass( 'selected' );
		$(this).addClass( 'selected' );
		 	
		$('.cf7_style_select select > option:eq('+ eq +')').attr( 'selected', true );
	
	});

	var xmasIndex = $('#cf7_style_templates option:selected').index();
	$('.cf7_style_templates li').removeClass( 'selected' ).eq( xmasIndex ).addClass( 'selected' );
	
	$('.cf7_style_admin .cf7_style_select').first().hide();
	
	//controlling the custom style panels
	$('.generalssetpanel').click(function() {
		$('.generals').slideToggle();
	});
	$('.inputsandlabelspanel').click(function() {
		$('.labelsandinputsset').slideToggle();
	});
	$('.submitbuttonsetpanel').click(function() {
		$('.submitbuttonset').slideToggle();
	});
});

