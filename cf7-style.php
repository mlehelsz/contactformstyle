<?php
/*
Plugin Name: Contact Form 7 Style
Plugin URI: http://wordpress.reea.net/contact-form-7-style/
Description: Contact form 7 Style 
Version: 1.1.1
Author: REEA
Author URI: http://www.reea.net/
License: GPL2
*/

/**
 *	Include the plugin options
 */
include_once( 'cf7-style-settings.php' );

/**
 *	Check if Contact Form 7 is activated
 */
function contact_form_7_check() {
	
	// WordPress active plugins
	$active_plugins = get_option( 'active_plugins' );
	
	if ( $active_plugins ) {
		// plugins to active
		$required_plugin = 'contact-form-7/wp-contact-form-7.php';

		if ( ! in_array( $required_plugin, $active_plugins ) ) {

			$html = '<div class="updated">';
			$html .= '<p>';
			$html .= 'Contact form 7 - Style is an addon. Please install <a href="http://wordpress.org/plugins/contact-form-7/" target="_blank">Contact form 7</a>.';
			$html .= '</p>';
			$html .= '</div><!-- /.updated -->';            

			echo $html;
			
		}else {
			// Get the cf7_style_cookie 
			$cf7_style_cookie = get_option( 'cf7_style_cookie' );

			if( $cf7_style_cookie != true ) {

				$html = '<div class="updated">';
				$html .= '<p>';
				$html .= 'Contact Form 7 - Style addon is now activated. Navigate to <a href="' . get_bloginfo( "url" ) . '/wp-admin/admin.php?page=cf7-style-settings.php">Contact Style</a> to get started.';
				$html .= '</p>';
				$html .= '</div><!-- /.updated -->';

				echo $html; 

				update_option( 'cf7_style_cookie', true );
			} // end if !$cf7_style_cookie		
		}		
	} // end if $active_plugins	
}
add_action( 'admin_notices', 'contact_form_7_check' );


/**
 * Reset the cf7_style_cookie option
 */
function cf7_style_deactivate() {
	update_option( 'cf7_style_cookie', false );
}
register_deactivation_hook( __FILE__, 'cf7_style_deactivate' );