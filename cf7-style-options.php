<?php
/**
 * Options
 *
 * Generate fields for admin area
 */
$cf7_style_name = "Contact Style";  
$cf7_style = "cf7_style";


/**
 * Valentine's Day Templates
 */
$valentines = array (
	array( 	"name" 		=> $cf7_style_name." Options",  
			"type" 		=> "title"),  
       
      
    array( 	"name" 		=> "Valentines Day Templates",  
			"type" 		=> "section"),  
    array( 	"type" 		=> "open"),  
       
	array(  "name"    	=> "Valentines day templates",  
			"desc"    	=> "Choose one of the templates",  
			"id"      	=> $cf7_style."_templates",  
			"type"    	=> "select",
			"options" 	=> array( 
							'vday-classic',
							'vday-roses',
							'vday-birds',
							'vday-blue-birds'
						),  
			"std"		=> "vday-blue-birds"
	), 
	
	array(  "name"		=> "Label Fonts",
			"desc"		=> "Choose from the following Google fonts",  
			"id"		=> $cf7_style."_google_fonts",  
			"type"		=> "select",
			"options"	=> array( 
							'Emilys Candy',
							'Henny Penny',
							'Joti One',
							'Open Sans:400,300,600,700',
							'Pirata One'
						),  
			"std"		=> "Emilys Candy"
	),

    array( "type"		=> "close")  
);



/**
 * Xmas Templates
 */
$templates = array (  
       
    array( 	"name" 		=> $cf7_style_name." Options",  
			"type" 		=> "title"),  
       
      
    array( 	"name" 		=> "General",  
			"type" 		=> "section"),  
    array( 	"type" 		=> "open"),  
       
	array(  "name"    	=> "Xmas templates",  
			"desc"    	=> "Choose one of the templates",  
			"id"      	=> $cf7_style."_templates",  
			"type"    	=> "select",
			"options" 	=> array( 
							'xmas-classic',
							'xmas-red',
							'xmas-simple'
						),  
			"std"		=> "xmas-classic"
	), 
	
	array(  "name"		=> "Label Fonts",
			"desc"		=> "Choose from the following Google fonts",  
			"id"		=> $cf7_style."_google_fonts",  
			"type"		=> "select",
			"options"	=> array( 
							'Emilys Candy',
							'Henny Penny',
							'Joti One',
							'Open Sans:400,300,600,700',
							'Pirata One'
						),  
			"std"		=> "Open Sans:400,300,600,700"
	),

    array( "type"		=> "close")  
       
); 



/**
 * Custom Style
 */
$custom = array (  

    array(	"name"		=> $cf7_style_name." Options",
			"type"		=> "title"),
	
    array(	"name"		=> "Settings",
			"type"		=> "section"),
    array(	"type"		=> "open"),
	
	array(
			"type"		=> 'generalssetpanel'
	),
	
	array(
			"type"		=> 'openinggeneraldiv'
	),
	
	array(  "name"		=> "Form Background",
			"desc"		=> "Choose the background color of the form",  
			"id"		=> $cf7_style."_form_bg",  
			"type"		=> "color-picker", 
			"std"		=> "#fff"
	), 
	
	array(	"name"		=> "Form width",
			"desc"		=> "Form width in pixels",
			"id"		=> $cf7_style."_form_width",
			"type"		=> "number",
			"std"		=> "600"
	),
	
	array(	"name"		=> "Form border size",
			"desc"		=> "Form border size in pixels",
			"id"		=> $cf7_style."_form_border_size",
			"type"		=> "number",
			"std"		=> "1"
	),
	
	array(	"name"		=> "Form border type",
			"desc"		=> "Type of the Form border",
			"id"		=> $cf7_style."_form_border_type",
			"type"		=> "simple_select",
			"options"	=> array (
							'none',
							'solid',
							'dotted',
							'double',
							'groove',
							'ridge',
							'inset',
							'outset'
						   ),
			"std"		=> "solid"
	),
	
	array(  "name"		=> "Form border color",  
			"desc"		=> "Choose the form border color",  
			"id"		=> $cf7_style."_form_border_color",  
			"type"		=> "color-picker", 
			"std"		=> "#ffffff"
	),
	
	array(	"name"		=> "Form border radius",
			"desc"		=> "Form border radius in pixels",
			"id"		=> $cf7_style."_form_border_radius",
			"type"		=> "number",
			"std"		=> "1"
	),
	
	array (
		"type"			=> 'closingdiv'
	),
	
	array(
		"type"			=> 'inputsandlabelspanel'
	),
	
	array(
		"type"			=> 'openinglabelsandinputsdiv'
	),
	
	array(  "name"		=> "Input Background",  
			"desc"		=> "Choose the background color of the input",  
			"id"		=> $cf7_style."_input_bg",  
			"type"		=> "color-picker", 
			"std"		=> "#f2f2f2"
	),
	
	
	
	array(	"name"		=> "Input Text Color",
			"desc"		=> "Choose the color for the input text",
			"id"		=> $cf7_style."_input_text_color",
			"type"		=> "color-picker",
			"std"		=> "#000000"
	),
	
	array(	"name"		=> "Input Border Color",
			"desc"		=> "Choose a color for the input border",
			"id"		=> $cf7_style."_input_border_color",
			"type"		=> "color-picker",
			"std"		=> "#ffffff"
	),
	
	array(	"name"		=> "Input Fonts",
			"desc"		=> "Choose from the following Google Fonts",
			"id"		=> $cf7_style."_google_fonts_for_input_text",
			"type"		=> "select_input_font",
			"options"	=> array(
							'Emilys Candy',
							'Henny Penny',
							'Joti One',
							'Open Sans:400,300,600,700',
							'Pirata One'
						   ),
			"std"		=> "Open Sans:400,300,600,700"
	
	),
	
	array(	"name"		=> "Input font size",
			"desc"		=> "Size of the input fonts in pixels",
			"id"		=> $cf7_style."_input_font_size",
			"type"		=> "number",
			"std"		=> "16"
	),
	
	array(	"name"		=> "Input border size",
			"desc"		=> "Size of the input border in pixels",
			"id"		=> $cf7_style."_input_border_size",
			"type"		=> "number",
			"std"		=> "1"
	),
	
	array(	"name"		=> "Input border type",
			"desc"		=> "Type of the input border",
			"id"		=> $cf7_style."_input_border_type",
			"type"		=> "simple_select",
			"options"	=> array (
							'none',
							'solid',
							'dotted',
							'double',
							'groove',
							'ridge',
							'inset',
							'outset'
						   ),
			"std"		=> "solid"
	),
	
	array(	"name"		=> "Input border radius",
			"desc"		=> "Border radius in px",
			"id"		=> $cf7_style."_input_border_radius",
			"type"		=> "number",
			"std"		=> "1"
	),
	
	
	
	array(	"name"		=> "Input font-style",
			"desc"		=> "Choose from the following font styles",
			"id"		=> $cf7_style."_input_font_style",
			"type"		=> "simple_select",
			"options"	=> array(
							'Bold',
							'Italic',
							'Underline',
							'Normal'
						   ),
			"std"		=> "Normal"
	),
	
	array(	"name"		=> "Input width",
			"desc"		=> "Input width in pixels",
			"id"		=> $cf7_style."_input_width",
			"type"		=> "number",
			"std"		=> "100"
	),
	
	array(	"name"		=> "Input height",
			"desc"		=> "Input height in pixels",
			"id"		=> $cf7_style."_input_height",
			"type"		=> "number",
			"std"		=> "100"
	),
	
	array(	"name"		=> "Textarea height",
			"desc"		=> "Textarea height in pixels",
			"id"		=> $cf7_style."_textarea_height",
			"type"		=> "number",
			"std"		=> "200"
	),
	
	array(	"name"		=> "Input padding",
			"desc"		=> "<span class='paddingex' title='Ex 1: 25px 50px 75px 100px;

top padding is 25px
right padding is 50px
bottom padding is 75px
left padding is 100px


Ex 2: 25px 50px 75px;

top padding is 25px
right and left paddings are 50px
bottom padding is 75px


Ex 3: 25px 50px;

top and bottom paddings are 25px
right and left paddings are 50px


Ex 4: 25px;

all four paddings are 25px

'>hover here for example</span>",
			"id"		=> $cf7_style."_input_padding",
			"type"		=> "numbernopxneeded",
			"std"		=> "0"
	),
	
	array(	"name"		=> "Input margin",
			"desc"		=> "<span class='paddingex' title='Ex 1: 25px 50px 75px 100px;

top margin is 25px
right margin is 50px
bottom margin is 75px
left margin is 100px


Ex 2: 25px 50px 75px;

top margin is 25px
right and left margin are 50px
bottom margin is 75px


Ex 3: 25px 50px;

top and bottom margin are 25px
right and left margin are 50px


Ex 4: 25px;

all four margin are 25px

'>hover here for example</span>",
			"id"		=> $cf7_style."_input_margin",
			"type"		=> "numbernopxneeded",
			"std"		=> "0"
	),
	
	array(	"name"		=> "Label font-style",
			"desc"		=> "Choose from the following font styles",
			"id"		=> $cf7_style."_label_font_style",
			"type"		=> "simple_select",
			"options"	=> array(
							'Bold',
							'Italic',
							'Underline',
							'Normal'
						   ),
			"std"		=> "Normal"
	),
	
	array(	"name"		=> "Label font size",
			"desc"		=> "Size of the label fonts in pixels",
			"id"		=> $cf7_style."_font_size",
			"type"		=> "number",
			"std"		=> "16"
	),
	
	array(	"name"		=> "Label Color",
			"desc"		=> "Choose the color for the label text",
			"id"		=> $cf7_style."_label_color",
			"type"		=> "color-picker",
			"std"		=> "#000000"
	),
	
	array(  "name"		=> "Label Fonts", 
			"desc"		=> "Choose from the following Google fonts",  
			"id"		=> $cf7_style."_google_fonts",  
			"type"		=> "select",
			"options"	=> array( 
							'Emilys Candy',
							'Henny Penny',
							'Joti One',
							'Open Sans:400,300,600,700',
							'Pirata One'
						 ),  
			"std"  => "Open Sans:400,300,600,700"
	),
	
	array (
		"type"			=> 'closingdiv'
	),
	
	array (
		"type"			=> 'openingsubmitbuttondivpanel'
	),
	
	array (
		"type"			=> 'openingsubmitbuttondiv'
	),
	
	array(	"name"		=> "Submit button width",
			"desc"		=> "Submit button width in px",
			"id"		=> $cf7_style."_submit_button_width",
			"type"		=> "number",
			"std"		=> "100"
	),
	
	array(	"name"		=> "Submit button height",
			"desc"		=> "Submit button height in px",
			"id"		=> $cf7_style."_submit_button_height",
			"type"		=> "number",
			"std"		=> "100"
	),
	
	array(	"name"		=> "Submit button border radius",
			"desc"		=> "Border radius in px",
			"id"		=> $cf7_style."_submit_border_radius",
			"type"		=> "number",
			"std"		=> "1"
	),
	
	array(	"name"		=> "Submit button font size",
			"desc"		=> "The size of the submit button font in px",
			"id"		=> $cf7_style."_submit_font_size",
			"type"		=> "number",
			"std"		=> "16"
	),
	
	array(	"name"		=> "Submit button border size",
			"desc"		=> "Size of the submit button border in pixels",
			"id"		=> $cf7_style."_submit_border_size",
			"type"		=> "number",
			"std"		=> "1"
	),
	
	array(	"name"		=> "Submit button border type",
			"desc"		=> "Type of the submit button border",
			"id"		=> $cf7_style."_submit_border_type",
			"type"		=> "simple_select",
			"options"	=> array (
							'none',
							'solid',
							'dotted',
							'double',
							'groove',
							'ridge',
							'inset',
							'outset'
						   ),
			"std"		=> "solid"
	),
	
	array(	"name"		=> "Submit button border color",
			"desc"		=> "Choose a color for the submit border",
			"id"		=> $cf7_style."_submit_border_color",
			"type"		=> "color-picker",
			"std"		=> "#ffffff"
	),
	
	array(	"name"		=> "Submit button background color",
			"desc"		=> "Choose a color for the submit background",
			"id"		=> $cf7_style."_submit_background_color",
			"type"		=> "color-picker",
			"std"		=> "#ffffff"
	),
	
	array (
		"type"			=> 'closingdiv'
	),
	
    array( "type"		=> "close")  
       
); 