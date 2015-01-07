<?php
/**
 * Admin notices
 */
function cf7_style_admin_notices() {
	global $cf7_style_name;
	
	if ( isset( $_GET['saved'] ) ) echo '<div id="message" class="updated fade"><p><strong>' . $cf7_style_name . ' settings saved.</strong></p></div>';  
	if ( isset( $_GET['reset'] ) ) echo '<div id="message" class="updated fade"><p><strong>' . $cf7_style_name . ' settings reset.</strong></p></div>';
}



/**
 * Output css style for frontend
 */
function cf7_style_frontend_output() {
?>
<style type="text/css">
<?php
	/**
	 * Declare input font-family for frontend
	 */
	$cf7_style_google_font = get_option( 'cf7_style_google_fonts' );
	$google_font_family    =  explode( ':', $cf7_style_google_font );
	if( !empty( $google_font_family[0] ) && $google_font_family[0] != 'Default' ) {
	?>
		.wpcf7 input,
		.wpcf7 textarea,
		.wpcf7 form {
			font-family: "<?php echo $google_font_family[0]; ?>";
		}
	<?php
	}
	
	$cf7_style_font_label  = get_option( 'cf7_style_google_fonts' );
	$cf7_style_font_input  = get_option( 'cf7_style_google_fonts_for_input_text' );

	// Google Fonts Array for label and input
	$google_font_label =  explode( ':', $cf7_style_font_label );
	$google_font_input =  explode( ':', $cf7_style_font_input );
	if( !empty( $google_font_label[0] ) && $google_font_label[0] != 'Default' && !empty( $google_font_input[0] ) && $google_font_input[0] != 'Default' ) {
	?>
		.wpcf7,
		.wpcf7 form,
		.wpcf7 form {
			font-family: "<?php echo $google_font_label[0]; ?>";
		}
		.wpcf7 input,
		.wpcf7 textarea	{
			font-family: "<?php echo $google_font_input[0]; ?>";
		}
	<?php
	}	
	
	
	/**
	 * Change the form background color
	 */
	$cf7_style_form_background = get_option( 'cf7_style_form_bg' );
	$cf7_style_form_background =  explode( ':', $cf7_style_form_background );
	if( !empty( $cf7_style_form_background[0] ) ) {
	?>
		.wpcf7 {
			background-color: <?php echo $cf7_style_form_background[0]; ?>;	
		}
    <?php	
	}
	
	/**
	 * Change the form width
	 */
	$cf7_style_form_width = get_option( 'cf7_style_form_width' );
	$cf7_style_form_width =  explode( ':', $cf7_style_form_width );
	if( !empty( $cf7_style_form_width[0] ) ) {
	?>
		.wpcf7 {
			width: <?php echo $cf7_style_form_width[0]; ?>px;	
		}
    <?php	
	}
	
	
	/**
	 * Change the form border-size, type and color
	 */
	$cf7_style_form_border_size = get_option( 'cf7_style_form_border_size' );
	$cf7_style_form_border_size = explode( ':', $cf7_style_form_border_size );
	$cf7_style_form_border_type = get_option( 'cf7_style_form_border_type' );
	$cf7_style_form_border_type = explode( ':', $cf7_style_form_border_type );
	$cf7_style_form_border_color = get_option( 'cf7_style_form_border_color' );
	$cf7_style_form_border_color = explode( ':', $cf7_style_form_border_color );
	if( !empty( $cf7_style_form_border_size[0] ) && !empty( $cf7_style_form_border_type[0] ) && !empty( $cf7_style_form_border_color[0] ) ) {
	?>
		.wpcf7 {
			border: <?php echo $cf7_style_form_border_size[0]; ?>px <?php echo $cf7_style_form_border_type[0]; ?> <?php echo $cf7_style_form_border_color[0]; ?>;	
		}
	<?php	
	}
	
	/**
	 * Change the form border radius
	 */
	$cf7_style_form_border_radius = get_option( 'cf7_style_form_border_radius' );
	$cf7_style_form_border_radius = explode( ':', $cf7_style_form_border_radius );
	if( !empty( $cf7_style_form_border_radius[0] ) ) {
	?>
		.wpcf7 {
			-webkit-border-radius: <?php echo $cf7_style_form_border_radius[0]; ?>px;	
			-moz-border-radius: <?php echo $cf7_style_form_border_radius[0]; ?>px;	
			border-radius: <?php echo $cf7_style_form_border_radius[0]; ?>px;	
		}
	<?php	
	}
	
	
	/**
	 * Change the background color for input and textarea
	 */
	$cf7_style_input_background = get_option( 'cf7_style_input_bg' );
	$cf7_style_input_background =  explode( ':', $cf7_style_input_background );
	if( !empty( $cf7_style_input_background[0] ) ) {
	?>
		.wpcf7 input,
		.wpcf7 textarea{
			background-color: <?php echo $cf7_style_input_background[0]; ?>;	
		}
	<?php
	}
	
	/**
	 * Change the label color 
	 */
	$cf7_style_label_color = get_option( 'cf7_style_label_color' );	
	$cf7_style_label_color = explode( ':', $cf7_style_label_color );
	if( !empty( $cf7_style_label_color[0] ) ) {
	?>
		.wpcf7 .wpcf7-form p{
			color: <?php echo $cf7_style_label_color[0]; ?>;	
		}
    <?php
	}
	
	/**
	 * Change the text color for input and textarea
	 */
	$cf7_style_input_text_color = get_option( 'cf7_style_input_text_color' );
	$cf7_style_input_text_color = explode( ':', $cf7_style_input_text_color );
	if( !empty( $cf7_style_input_text_color[0] ) ) {
	?>
		.wpcf7 .wpcf7-form input,
		.wpcf7 .wpcf7-form textarea{
			color: <?php echo $cf7_style_input_text_color[0]; ?>;	
		}
	<?php
	}

	/**
	 * Change the form font-size
	 */
	$cf7_style_font_size = get_option( 'cf7_style_font_size' );
	$cf7_style_font_size = explode( ':', $cf7_style_font_size );
	if( !empty( $cf7_style_font_size[0] ) ) {
	?>
		.wpcf7 p {
			font-size: <?php echo $cf7_style_font_size[0]; ?>px;	
		}
	<?php	
	}
	
	/**
	 * Change the form input font-size
	 */
	$cf7_style_input_font_size = get_option( 'cf7_style_input_font_size' );
	$cf7_style_input_font_size = explode( ':', $cf7_style_input_font_size );
	if( !empty( $cf7_style_input_font_size[0] ) ) {
	?>
		.wpcf7 input {
			font-size: <?php echo $cf7_style_input_font_size[0]; ?>px;	
		}
	<?php	
	}
	
	/**
	 * Change the form input border-size, type and color
	 */
	$cf7_style_input_border_size = get_option( 'cf7_style_input_border_size' );
	$cf7_style_input_border_size = explode( ':', $cf7_style_input_border_size );
	$cf7_style_input_border_type = get_option( 'cf7_style_input_border_type' );
	$cf7_style_input_border_type = explode( ':', $cf7_style_input_border_type );
	$cf7_style_input_border_color = get_option( 'cf7_style_input_border_color' );
	$cf7_style_input_border_color = explode( ':', $cf7_style_input_border_color );
	if( !empty( $cf7_style_input_border_size[0] ) && !empty( $cf7_style_input_border_type[0] ) && !empty( $cf7_style_input_border_color[0] ) ) {
	?>
		.wpcf7 input,
		.wpcf7 textarea{
			border: <?php echo $cf7_style_input_border_size[0]; ?>px <?php echo $cf7_style_input_border_type[0]; ?> <?php echo $cf7_style_input_border_color[0]; ?>;	
		}
	<?php	
	}
	
	/**
	 * Change the form input border radius
	 */
	$cf7_style_input_border_radius = get_option( 'cf7_style_input_border_radius' );
	$cf7_style_input_border_radius = explode( ':', $cf7_style_input_border_radius );
	if( !empty( $cf7_style_input_border_radius[0] ) ) {
	?>
		.wpcf7 input,
		.wpcf7 textarea{
			-webkit-border-radius: <?php echo $cf7_style_input_border_radius[0]; ?>px;	
			-moz-border-radius: <?php echo $cf7_style_input_border_radius[0]; ?>px;	
			border-radius: <?php echo $cf7_style_input_border_radius[0]; ?>px;	
		}
	<?php	
	}
	
	/**
	 * Change the form label font style
	 */
	$cf7_style_label_font_style = get_option( 'cf7_style_label_font_style' );
	$cf7_style_label_font_style = explode( ':', $cf7_style_label_font_style );
	if( !empty( $cf7_style_label_font_style[0] ) ) {
		if ($cf7_style_label_font_style[0] === 'Bold') {
			$fontstyle = 'font-weight';
			
		}
		
		elseif ($cf7_style_label_font_style[0] === 'Underline') {
			$fontstyle = 'text-decoration';
		}
		
		elseif ($cf7_style_label_font_style[0] === 'Italic') {
			$fontstyle = 'font-style';
		}
	
	?>
		.wpcf7 p {
			<?php echo $fontstyle; ?>: <?php echo $cf7_style_label_font_style[0]; ?>;
		}
	<?php	
	}
	
	/**
	 * Change the form input font style
	 */
	$cf7_style_input_font_style = get_option( 'cf7_style_input_font_style' );
	$cf7_style_input_font_style = explode( ':', $cf7_style_input_font_style );
	if( !empty( $cf7_style_input_font_style[0] ) ) {
		$fontstyle = '';
		if ($cf7_style_input_font_style[0] === 'Bold') {
			$fontstyle = 'font-weight';
		}
		
		elseif ($cf7_style_input_font_style[0] === 'Underline') {
			$fontstyle = 'text-decoration';
		}
		
		elseif ($cf7_style_input_font_style[0] === 'Italic') {
			$fontstyle = 'font-style';
		}
		
	?>
		.wpcf7 input,
		.wpcf7 textarea{
			<?php echo $fontstyle;?>: <?php echo $cf7_style_input_font_style[0]; ?>;
		}
	<?php	
	}
	
	/**
	 * Change the form input width
	 */
	$cf7_style_input_width = get_option( 'cf7_style_input_width' );
	$cf7_style_input_width = explode( ':', $cf7_style_input_width );
	if( !empty( $cf7_style_input_width[0] ) ) {
	?>
		.wpcf7 input,
		.wpcf7 textarea {
			width: <?php echo $cf7_style_input_width[0]; ?>px;
		}
	<?php	
	}
	
	/**
	 * Change the form input height
	 */
	$cf7_style_input_height = get_option( 'cf7_style_input_height' );
	$cf7_style_input_height = explode( ':', $cf7_style_input_height );
	if( !empty( $cf7_style_input_height[0] ) ) {
	?>
		.wpcf7 input {
			height: <?php echo $cf7_style_input_height[0]; ?>px;
		}
	<?php	
	}
	
	/**
	 * Change the form textarea height
	 */
	$cf7_style_textarea_height = get_option( 'cf7_style_textarea_height' );
	$cf7_style_textarea_height = explode( ':', $cf7_style_textarea_height );
	if( !empty( $cf7_style_textarea_height[0] ) ) {
	?>
		.wpcf7 textarea {
			height: <?php echo $cf7_style_textarea_height[0]; ?>px;
		}
	<?php	
	}
	
	/**
	 * Change the form input padding
	 */
	$cf7_style_input_padding = get_option( 'cf7_style_input_padding' );
	$cf7_style_input_padding = explode( ':', $cf7_style_input_padding );
	if( !empty( $cf7_style_input_padding[0] ) ) {
	?>
		.wpcf7 input
		.wpcf7 textarea {
			padding: <?php echo $cf7_style_input_padding[0]; ?>;
		}
	<?php	
	}
	
	/**
	 * Change the form input margin
	 */
	$cf7_style_input_margin = get_option( 'cf7_style_input_margin' );
	$cf7_style_input_margin = explode( ':', $cf7_style_input_margin );
	if( !empty( $cf7_style_input_margin[0] ) ) {
	?>
		.wpcf7 input,
		.wpcf7 textarea{
			margin: <?php echo $cf7_style_input_margin[0]; ?>;
		}
	<?php	
	}
	
	/**
	 * Change the submit button width
	 */
	$cf7_style_submit_button_width = get_option( 'cf7_style_submit_button_width' );
	$cf7_style_submit_button_width = explode( ':', $cf7_style_submit_button_width );
	if( !empty( $cf7_style_submit_button_width[0] ) ) {
	?>
		.wpcf7-submit {
			width: <?php echo $cf7_style_submit_button_width[0]; ?>px !important;
		}
	<?php	
	}
	
	/**
	 * Change the submit button height
	 */
	$cf7_style_submit_button_height = get_option( 'cf7_style_submit_button_height' );
	$cf7_style_submit_button_height = explode( ':', $cf7_style_submit_button_height );
	if( !empty( $cf7_style_submit_button_height[0] ) ) {
	?>
		.wpcf7-submit {
			height: <?php echo $cf7_style_submit_button_height[0]; ?>px !important;
		}
	<?php	
	}
	
	/**
	 * Change the submit button border-radius
	 */
	$cf7_style_submit_border_radius = get_option( 'cf7_style_submit_border_radius' );
	$cf7_style_submit_border_radius = explode( ':', $cf7_style_submit_border_radius );
	if( !empty( $cf7_style_submit_border_radius[0] ) ) {
	?>
		.wpcf7-submit {
			-webkit-border-radius: <?php echo $cf7_style_submit_border_radius[0]; ?>px !important;
			-moz-border-radius: <?php echo $cf7_style_submit_border_radius[0]; ?>px !important;
			border-radius: <?php echo $cf7_style_submit_border_radius[0]; ?>px !important;
		}
	<?php	
	}
	
	/**
	 * Change the submit button font size
	 */
	$cf7_style_submit_font_size = get_option( 'cf7_style_submit_font_size' );
	$cf7_style_submit_font_size = explode( ':', $cf7_style_submit_font_size );
	if( !empty( $cf7_style_submit_font_size[0] ) ) {
	?>
		.wpcf7-submit {
			font-size: <?php echo $cf7_style_submit_font_size[0]; ?>px !important;
			text-decoration:none !Important;
		}
	<?php	
	}
	
	/**
	 * Change the submit button font size
	 */
	$cf7_style_submit_background_color = get_option( 'cf7_style_submit_background_color' );
	$cf7_style_submit_background_color = explode( ':', $cf7_style_submit_background_color );
	if( !empty( $cf7_style_submit_background_color[0] ) ) {
	?>
		.wpcf7-submit {
			background-color: <?php echo $cf7_style_submit_background_color[0]; ?> !Important;
			background-image:none !important;
		}
	<?php	
	}
	
	/**
	 * Change the form submit border-size, type and color
	 */
	$cf7_style_submit_border_size = get_option( 'cf7_style_submit_border_size' );
	$cf7_style_submit_border_size = explode( ':', $cf7_style_submit_border_size );
	$cf7_style_submit_border_type = get_option( 'cf7_style_submit_border_type' );
	$cf7_style_submit_border_type = explode( ':', $cf7_style_submit_border_type );
	$cf7_style_submit_border_color = get_option( 'cf7_style_submit_border_color' );
	$cf7_style_submit_border_color = explode( ':', $cf7_style_submit_border_color );
	if( !empty( $cf7_style_submit_border_size[0] ) && !empty( $cf7_style_submit_border_type[0] ) && !empty( $cf7_style_submit_border_color[0] ) ) {
	?>
		.wpcf7-submit {
			border: <?php echo $cf7_style_submit_border_size[0]; ?>px <?php echo $cf7_style_submit_border_type[0]; ?> <?php echo $cf7_style_submit_border_color[0]; ?> !important;	
		}
	<?php	
	}
	
?>
</style>
<?php
}
add_action( 'wp_head', 'cf7_style_frontend_output' );



/**
 * Enqueue admin scrips and style
 */  
function cf7_style_add_init() {  

	// Add the color picker
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker-script', plugins_url('/admin/js/color.picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );

	wp_enqueue_style( "cf7_style_admin_css", plugin_dir_url( __FILE__ ) . "/admin/css/admin.css", false, "1.0", "all");  
	wp_enqueue_script( "cf7_style_admin_js", plugin_dir_url( __FILE__ ) . "/admin/js/admin.js", false, "1.0");
	wp_enqueue_script( "cf7_style_admin_ajax_js", plugin_dir_url( __FILE__ ) . "/admin/js/ajax.preview.tool.js", false, "1.0"); 
}
add_action('admin_init', 'cf7_style_add_init'); 


/**
 * Embed Google Fonts
 */
function cf7_style_fonts() { 
	$cf7_style_google_font = get_option( 'cf7_style_google_fonts' );
	if( empty( $cf7_style_google_font ) || $cf7_style_google_font == 'Default' ) {
		$cf7_style_google_font = "Bitter";
	}
	
	$query_args = array(
		'family' => urlencode( $cf7_style_google_font ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	$google_font_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" ); 
	
	return $google_font_url; 
}

/**
 * Embed Google Fonts for input
 */
function cf7_style_fonts_for_inputs() { 
	$cf7_style_google_font = get_option( 'cf7_style_google_fonts_for_input_text' );
	if( empty( $cf7_style_google_font ) || $cf7_style_google_font == 'Default') {
		$cf7_style_google_font = "Open Sans";
	}
	
	$query_args = array(
		'family' => urlencode( $cf7_style_google_font ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	$google_font_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" ); 

	return $google_font_url; 
	
}


/**
 * Enqueues scripts and styles for front end
 */
function cf7_style_scripts_styles() {

	wp_enqueue_script( 'jquery' );

	// Embed Google Fonts
	wp_enqueue_style( 'cf7-xmas-fonts', cf7_style_fonts(), array(), null );
	
	// Embed Google Fonts for input 
	wp_enqueue_style( 'cf7-xmas-fonts-inputs', cf7_style_fonts_for_inputs(), array(), null );

	// Loads our main script.
	wp_enqueue_script( "cf7_style_frontend_js", plugin_dir_url( __FILE__ ) . "/js/frontend.js", false, "1.0"); 
	
	// Loads our main stylesheet
	wp_enqueue_style( "cf7_style_frontend_css", plugin_dir_url( __FILE__ ) . "/css/frontend.css", false, "1.0", "all");
	
}
add_action( 'wp_enqueue_scripts', 'cf7_style_scripts_styles' );


/**
 * Declare selected Google Font for admin area
 */
function cf7_style_admin_font() {
?>
<style type="text/css">
<?php
	$cf7_style_font_label  = get_option( 'cf7_style_google_fonts' );
	$cf7_style_font_input  = get_option( 'cf7_style_google_fonts_for_input_text' );

	// Google Fonts Array for label and input
	$google_font_label =  explode( ':', $cf7_style_font_label );
	$google_font_input =  explode( ':', $cf7_style_font_input );
	if( !empty( $google_font_label[0] ) && $google_font_label[0] != 'Default' ) {
	?>
			.cf7_style_opts .font-viewer,
			.cf7_style_opts .font-viewer3 {
				font-family: "<?php echo $google_font_label[0]; ?>";
			}
	<?php
	}
	if( !empty( $google_font_input[0] ) && $google_font_input[0] != 'Default' ) {
	?>
			.cf7_style_opts .font-viewer2 {
				font-family: "<?php echo $google_font_input[0]; ?>";
			}
	<?php
	}
?>
</style>
<?php
}
add_action( 'admin_head', 'cf7_style_admin_font' );


/**
 * Body class
 *
 * Adds a body class to the $classes array
 * from the selected Contact Style template
 *
 * @param string $cf7_style_templates Contact style template
 * @return $classes
 */
function cf7_style_body_class( $classes ) {

	// Get the selected template
	$cf7_style_templates = get_option( 'cf7_style_templates' );

	// add the template class to the $classes array
	$classes[] = $cf7_style_templates;

	return $classes;
}
add_filter( 'body_class', 'cf7_style_body_class' );


/**
 * Check for updates
 *
 * Display an update notice in the news box
 */
function cf7_style_update() {
	$svn_readme    = file_get_contents("http://plugins.svn.wordpress.org/contact-form-7-style/trunk/readme.txt");
	$svn_pos       = strrpos( $svn_readme, '=' );
	$svn_version   = substr( $svn_readme, $svn_pos-6, 5 );	
	
	$local_readme  = file_get_contents( plugins_url() . "/contact-form-7-style/readme.txt");
	$local_pos     = strrpos( $local_readme, '=' );
	$local_version = substr( $local_readme, $local_pos-6, 5 );	
	
	$local_version = str_replace( '.', '', $local_version );
	$svn_version   = str_replace( '.', '', $svn_version );
	
	if( $local_version !== $svn_version ) {
		$html = "<div class='update-message'>There is a new version of ";
		$html .= "<a href='http://wordpress.org/plugins/contact-form-7-style/'>Contact Form 7 Style.</a> "; 
		$html .= "Please <a href='" . get_bloginfo('url') . "/wp-admin/plugins.php?plugin_status=upgrade'>update now</a>.</div>";
		echo $html;
	}
}