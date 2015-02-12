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
function get_predefined_cf7_style_template_data() {
	return array ( 
		array (
			'title'		=> 'Christmas Classic',
			'category'	=> 'christmas style',
			'image'		=> '/admin/images/cf7_xmas_classic.jpg'
		),
		array (
			'title'		=> 'Christmas Red',
			'category'	=> 'christmas style',
			'image'		=> '/admin/images/cf7_xmas_red.jpg',
		),
		array (
			'title'		=> 'Christmas Simple',
			'category'	=> 'christmas style',
			'image'		=> '/admin/images/cf7_xmas_simple.jpg'
		),
		array (
			'title'		=> "Valentine's Day Classic",
			'category'	=> "valentine's day style",
			'image'		=> '/admin/images/cf7_vday_classic.jpg'
		),
		array (
			'title'		=> "Valentine's Day Roses",
			'category'	=> "valentine's day style",
			'image'		=> '/admin/images/cf7_vday_roses.jpg'
		),
		array (
			'title'		=> "Valentine's Day Birds",
			'category'	=> "valentine's day style",
			'image'		=> '/admin/images/cf7_vday_birds.jpg'
		),
		array (
			'title'		=> "Valentine's Day Blue Birds",
			'category'	=> "valentine's day style",
			'image'		=> '/admin/images/cf7_vday_blue_birds.jpg'
		)
	);
}// end of get_predefined_cf7_style_template_data
function get_cf7style_slug( $post, $id ) {
	$post_content = ( !empty( $post ) ) ? $post->post_content : "";
	if ( has_shortcode( $post_content, 'contact-form-7' ) ) {
		preg_match('/\[contact-form-7.*id=.(.*).\]/', $post->post_content, $cf7_id );
		$cf7_id = explode( '"', $cf7_id[1] );
		$cf7_style_id 	= get_post_meta( $cf7_id[0], 'cf7_style_id' );
		$cf7_style_data = get_post( $cf7_style_id[0], ARRAY_A );
		return ( $id == "yes" ) ? $cf7_style_id[0] : $cf7_style_data['post_name'];
	} else {
		return false;
	}
}// end of get_cf7style_slug
function count_element_settings( $elements, $checks ){
	$inner = 0;
	$arr = array();
	foreach ( $checks as $index => $check ) {
		$inner = 0;
		foreach ( $elements as $key => $element ) {
			 if ( strpos( $key, $check ) === 0 ) {
			 	$arr[ $index ] = $inner++;
			 }
		}
	}
	return $arr;
}
function cf7_style_custom_css_generator(){
	global $post;
	$style 					= "<style class='cf7-style' media='screen' type='text/css'>";
	$cf7s_id 				= get_cf7style_slug( $post, "yes" );
	$cf7s_slug 				= get_cf7style_slug( $post, "no" );
	$custom_cat 				= get_the_terms( $cf7s_id, "style_category" );
	$custom_cat_name 			= ( !empty( $custom_cat ) ) ? $custom_cat[ 0 ]->name : "";
	if (  $custom_cat_name == "custom style" ) {
		$cf7s_custom_settings 		= unserialize( get_post_meta( $cf7s_id, 'cf7_style_custom_styles', true ) );
		$temp 				= 0; 
		$temp_1 			= 0;
		$temp_2                         		= 0; 
		$temp_3 			= 0; 
		$temp_4 			= 0;
		$form_set_nr 			= count_element_settings( $cf7s_custom_settings, array( "form", "input", "label", "submit", "textarea" ) );
		foreach( $cf7s_custom_settings as $setting_key => $setting ){
			$setting_key_part 	= explode( "-", $setting_key );
			$second_part		= ( $setting_key_part[0] != "submit" ) ? $setting_key_part[1] : "";
			$third_part		= ( !empty( $setting_key_part[2] ) ) ? ( ( $setting_key_part[0] != "submit" ) ? "-" : "" ) . $setting_key_part[2] : "";
			$fourth_part 		= ( !empty( $setting_key_part[3] ) && $setting_key_part[0] == "submit" ) ? "-" . $setting_key_part[3] : "";
			$classelem = "cf7-style." . $cf7s_slug;
			switch ( $setting_key_part[ 0 ]) {
				case 'form':
					$startelem 	= $temp;
					$allelem 	= $form_set_nr[ 0 ];
					$temp++;
					break;
				case 'input':
					$startelem 	= $temp_1;
					$allelem 	= $form_set_nr[ 1 ];
					$classelem 	.= " input";
					$temp_1++;
					break;
				case 'label':
					$startelem 	= $temp_2;
					$allelem 	= $form_set_nr[ 2 ];
					$classelem 	.= " label,\n.".$classelem." > p";
					$temp_2++;
					break;
				case 'submit':
					$startelem 	= $temp_3;
					$allelem 	= $form_set_nr[ 3 ];
					$classelem 	.= " .wpcf7-submit";
					$temp_3++;
					break;
				case 'textarea':
					$startelem 	= $temp_4;
					$allelem 	= 1;
					$classelem 	.= " textarea";
					$temp_4++;
					break;
				default:
					# code...
					break;
			}
			$style .= ( $startelem == 0 ) ? "." . $classelem . " {\n" : "";
			$style .= ( !empty( $setting ) && $setting != "Default" ) ? "\t" . $second_part . $third_part . $fourth_part . ": ". ( ( !is_numeric( $setting ) ) ? $setting : $setting . "px" ) . ";\n" : "";
			$style .= ( $startelem == $allelem || $allelem == 1 ) ? "}\n" : "";

		}
		$style .= '.cf7-style.' . $cf7s_slug . "{\n\t font-family: " . return_font_name( $post->ID ) . ";\n} ";
                //$style = $cf7s_custom_settings;
		$style .= "</style>";
		echo $style;
	}	
}// end of cf7_style_custom_css_generator

//include_once( 'cf7-style-settings.php' );
function cf7_style_admin_scripts(){
	wp_enqueue_style( 'wp-color-picker' ); 
	wp_enqueue_style( "cf7-style-admin-style", plugin_dir_url( __FILE__ ) . "admin/css/admin.css", false, "1.0", "all");  
	wp_enqueue_script( "cf7_style_admin_js", plugin_dir_url( __FILE__ ) . "admin/js/admin.js", array( 'wp-color-picker' ), false, true );
}
function cf7_style_add_class( $class ){
	global $post;
	$class .= " cf7-style ".get_cf7style_slug( $post, "no" );
	return $class;
}// end of cf7_style_add_class
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
		} else {
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

function cf7_style_create_post( $slug, $title, $image) {
	// Initialize the page ID to -1. This indicates no action has been taken.
	$post_id = -1;
	// If the page doesn't already exist, then create it
	if( null == get_page_by_title( $title, "OBJECT", "cf7_style" ) ) {
	// Set the post ID so that we know the post was created successfully
		$post_id = wp_insert_post(
			array(
				'comment_status'  	=> 'closed',
				'ping_status'   		=> 'closed',
				'post_name'   		=> $slug,
				'post_title'    		=> $title,
				'post_status'   		=> 'publish',
				'post_type'   		=> 'cf7_style'
			)
		);
		//if is_wp_error doesn't trigger, then we add the image
		if ( is_wp_error( $post_id ) ) {
			$errors = $post_id->get_error_messages();
			foreach ($errors as $error) {
				echo $error . '<br>'; 
			}
		} else {
			//wp_set_object_terms( $post_id, $category, 'style_category', false );
			update_post_meta( $post_id, 'cf7_style_image_preview', $image );
		}
	// Otherwise, we'll stop
	} else {
	// Arbitrarily use -2 to indicate that the page with the title already exists
		$post_id = -2;
	} // end if
} // end cf7_style_create_post
function cf7_style_add_taxonomy_filters() {
	global $typenow;
	// an array of all the taxonomyies you want to display. Use the taxonomy name or slug
	$taxonomies = array( 'style_category' );
	// must set this to the post type you want the filter(s) displayed on
	if( $typenow == 'cf7_style' ){
		foreach ( $taxonomies as $tax_slug ) {
			$tax_obj = get_taxonomy( $tax_slug );
			
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms( $tax_slug );
			if( count( $terms ) > 0 ) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Show All $tax_name</option>";
				foreach ( $terms as $term ) {
					$resultA = "<option value='".$term->slug."' selected='selected'>".$term->name .' (' . $term->count .')'."</option>";
					$resultB = "<option value='".$term->slug."'>".$term->name .' (' . $term->count .')'."</option>";
					echo ( isset( $_GET[$tax_slug] ) ) ? ( ( $_GET[$tax_slug] == $term->slug ) ? $resultA : $resultB ) : $resultB;
				}
				echo "</select>";
			}
		}
	}
}// end cf7_style_add_taxonomy_filters
function cf7_style_set_style_category_on_publish(  $ID, $post ) {
	$temporizator = 0;
	foreach ( get_predefined_cf7_style_template_data() as $predefined_post_titles ) {
		if( $post->post_title == $predefined_post_titles[ "title" ] ){
			$temporizator++;
		}	
	}
	if( 0 == $temporizator ) {
		wp_set_object_terms( $ID, 'custom style', 'style_category' );
	}
} // end cf7_style_set_style_category_on_publish
function cf7_style_create_posts(){

	foreach ( get_predefined_cf7_style_template_data() as $style ) {
		cf7_style_create_post( strtolower( str_replace( " ", "-", $style['title'] ) ), $style['title'], $style['image'] );
	}
}
// Hook into the 'cf7_style_create_posts' action
register_activation_hook( __FILE__, 'cf7_style_create_posts' ); 

function cf7style_load_elements(){

	$labels = array(
			'name'                		=> _x( 'Contact Styles', 'Post Type General Name', 'cf7_style' ),
			'singular_name'       	=> _x( 'Contact Style', 'Post Type Singular Name', 'cf7_style' ),
			'menu_name'           	=> __( 'Contact Style', 'cf7_style' ),
			'parent_item_colon'   	=> __( 'Parent Style:', 'cf7_style' ),
			'all_items'           	=> __( 'All Styles', 'cf7_style' ),
			'view_item'           	=> __( 'View Style', 'cf7_style' ),
			'add_new_item'        	=> __( 'Add New Style', 'cf7_style' ),
			'add_new'             	=> __( 'Add New', 'cf7_style' ),
			'edit_item'           	=> __( 'Edit Style', 'cf7_style' ),
			'update_item'         	=> __( 'Update Style', 'cf7_style' ),
			'search_items'        	=> __( 'Search Style', 'cf7_style' ),
			'not_found'           	=> __( 'Not found', 'cf7_style' ),
			'not_found_in_trash'  	=> __( 'Not found in Trash', 'cf7_style' )
		);
	$args = array(
		'label'               		=> __( 'cf7_style', 'cf7_style' ),
		'description'         	=> __( 'Add/remove contact style', 'cf7_style' ),
		'labels'              		=> $labels,
		'supports'            	=> array( 'title' ),
		'hierarchical'        	=> false,
		'taxonomies' 		=> array('style_category'), 
		'public'              		=> true,
		'show_ui'             	=> true,
		'show_in_menu'        	=> true,
		'show_in_nav_menus'   	=> true,
		'show_in_admin_bar'   	=> true,
		'menu_position'       	=> 28.555555,
		'can_export'          	=> true,
		'has_archive'         	=> false,
		'exclude_from_search' 	=> true,								
		'publicly_queryable'  	=> false,
		'capability_type'     	=> 'page'
	);
	/*register custom post type CF7_STYLE*/
	register_post_type( 'cf7_style', $args );

	$labels = array(
		'name'                       		=> _x( 'Categories', 'Taxonomy General Name', 'cf7_style' ),
		'singular_name'              		=> _x( 'Categories', 'Taxonomy Singular Name', 'cf7_style' ),
		'menu_name'                  		=> __( 'Categories', 'cf7_style' ),
		'all_items'                  		=> __( 'All Categories', 'cf7_style' ),
		'parent_item'                		=> __( 'Parent Categories', 'cf7_style' ),
		'parent_item_colon'    		=> __( 'Parent Categories:', 'cf7_style' ),
		'new_item_name'        		=> __( 'New Categories Name', 'cf7_style' ),
		'add_new_item'               	=> __( 'Add New Categories', 'cf7_style' ),
		'edit_item'                  		=> __( 'Edit Categories', 'cf7_style' ),
		'update_item'                		=> __( 'Update Categories', 'cf7_style' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'cf7_style' ),
		'search_items'               		=> __( 'Search Categories', 'cf7_style' ),
		'add_or_remove_items'        	=> __( 'Add or remove Categories', 'cf7_style' ),
		'choose_from_most_used'     	=> __( 'Choose from the most used Categories', 'cf7_style' ),
		'not_found'                  		=> __( 'Not Found', 'cf7_style' ),
	);
	$args = array(
		'labels'                     	=> $labels,
		'hierarchical'               	=> true,
		'public'                     	=> true,
		'show_ui'                    	=> false,
		'show_admin_column' 	=> true,
		'show_in_nav_menus' 	=> true,
		'show_tagcloud'              => true,
	);
	//register tax
	register_taxonomy( 'style_category', array( 'cf7_style' ), $args );

	if( get_option( 'cf7_style_add_categories', 0 ) == 0 ){
		$cf7_style_args = array(
			'post_type' => 'cf7_style'
		);
		$cf7_style_query = new WP_Query( $cf7_style_args );
		if ( $cf7_style_query->have_posts() ) {
			while ( $cf7_style_query->have_posts() ) {
				$cf7_style_query->the_post();
				$temp_title = get_the_title();
				$temp_ID = get_the_ID();

				foreach ( get_predefined_cf7_style_template_data() as $style ) {
					if( $temp_title == wptexturize( $style[ 'title' ] ) ) {
						wp_set_object_terms( $temp_ID, $style[ 'category' ], 'style_category' );
					}
				}
			}
			update_option( 'cf7_style_add_categories', 1 );
		}
	}
	require_once( 'cf7-style-meta-box.php' );
	if ( ! is_admin() ) {
		wp_enqueue_script('jquery');
		wp_enqueue_style( "cf7-style-frontend-style", plugin_dir_url( __FILE__ ) . "css/frontend.css", false, "1.0", "all");
		wp_enqueue_script( "cf7-style-frontend-script", plugin_dir_url( __FILE__ ) . "js/frontend.js", false, "1.0");
		add_action('wp_head', 'cf7_style_custom_css_generator');  
	}
}

add_action( 'admin_init', 'cf7_style_admin_scripts' );
add_action( 'init', 'cf7style_load_elements' );
add_action( 'restrict_manage_posts', 'cf7_style_add_taxonomy_filters' );
add_action(  'publish_cf7_style',  'cf7_style_set_style_category_on_publish', 10, 2 );
add_filter( 'wpcf7_form_class_attr', 'cf7_style_add_class' );

 
/**
 * Reset the cf7_style_cookie option
 */
function cf7_style_deactivate() {
	update_option( 'cf7_style_cookie', false );
	update_option( 'cf7_style_add_categories', 0 );
}
register_deactivation_hook( __FILE__, 'cf7_style_deactivate' );