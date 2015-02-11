<?php
function cf7_style_general_settings_array(){
	return array(
	
	"general_settings" => array(
		/*!!! labels have to be unique*/
		array(
			"type" 		=> "color-selector",
			"label" 		=> "Form background",
			"description" 	=> "Choose the background color of the form"
		),array(
			"type" 		=> "number",
			"label" 		=> "Form width",
			"description" 	=> "Form width in pixels"
		),array(
			"type" 		=> "number",
			"label" 		=> "Form border width",
			"description" 	=> "Form border width in pixels"
		),array(
			"type" 		=> "selectbox",
			"label" 		=> "Form border style",
			"value" 		=> array( "none", "solid", "dotted","double", "groove", "ridge", "inset", "outset" ), // ???
			"description" 	=> "Style of the Border of the Form"	
		),array(
			"type" 		=> "text",
			"label" 		=> "Form padding",
			"description" 	=> "hover here for example",
			"title"		=> "Ex 1: 25px 50px 75px 100px;  top padding is 25px right padding is 50px bottom padding is 75px left padding is 100px   Ex 2: 25px 50px 75px;  top padding is 25px right and left paddings are 50px bottom padding is 75px   Ex 3: 25px 50px;  top and bottom paddings are 25px right and left paddings are 50px   Ex 4: 25px;  all four paddings are 25px  "
		),array(
			"type" 		=> "text",
			"label" 		=> "Form margin",
			"description" 	=> "hover here for example",
			"title"		=> "Ex 1: 25px 50px 75px 100px;  top margin is 25px right margin is 50px bottom margin is 75px left margin is 100px   Ex 2: 25px 50px 75px;  top margin is 25px right and left margin are 50px bottom margin is 75px   Ex 3: 25px 50px;  top and bottom margin are 25px right and left margin are 50px   Ex 4: 25px;  all four margin are 25px"
		),array(
			"type" 		=> "color-selector",
			"label" 		=> "Form border color",
			"description" 	=> "Choose the form's border color"
		),array(
			"type" 		=> "number",
			"label" 		=> "Form border radius",
			"description" 	=> "Choose the form's border radius in pixels"
		)
	),
	"inputs_and_labels_settings" => array(
		array(
			"type" 		=> "color-selector",
			"label" 		=> "Input Background",
			"description" 	=> "Choose the background color of the input"
		),array(
			"type" 		=> "color-selector",
			"label" 		=> "Input Color",
			"description" 	=> "Choose the color for the input text"
		),array(
			"type" 		=> "color-selector",
			"label" 		=> "Input Border Color",
			"description" 	=> "Choose a color for the input border"
		)/*,array(
			"type" 		=> "selectbox",
			"label" 		=> "Input Fonts",
			"value" 		=> array( "none", "solid", "dotted","double", "groove", "ridge", "inset", "outset" ), // ???
			"description" 	=> "Choose from the following Google Fonts"	
		)*/,array(
			"type" 		=> "number",
			"label" 		=> "Input font size",
			"description" 	=> "Size of the input fonts in pixels"
		),array(
			"type" 		=> "number",
			"label" 		=> "Input border width",
			"description" 	=> "Size of the input border in pixels"
		),array(
			"type" 		=> "selectbox",
			"label" 		=> "Input border style",
			"value" 		=> array( "none", "solid", "dotted","double", "groove", "ridge", "inset", "outset" ), // ???
			"description" 	=> "style of the input border"	
		),array(
			"type" 		=> "number",
			"label" 		=> "Input border radius",
			"description" 	=> "Border radius in px"
		),array(
			"type" 		=> "selectbox",
			"label" 		=> "Input font style",
			"value" 		=> array( "normal", "italic", "oblique" ), // ???
			"description" 	=> "Choose from the following font styles"	
		),array(
			"type" 		=> "selectbox",
			"label" 		=> "Input font weight",
			"value" 		=> array( "normal", "bold", "bolder", "lighter", "initial", "inherit" ), // ???
			"description" 	=> "Choose from the following font weights"	
		),array(
			"type" 		=> "number",
			"label" 		=> "Input width",
			"description" 	=> "Input width in pixels"
		),array(
			"type" 		=> "number",
			"label" 		=> "Input height",
			"description" 	=> "Input height in pixels"
		),array(
			"type" 		=> "text",
			"label" 		=> "Input padding",
			"description" 	=> "hover here for example",
			"title"		=> "Ex 1: 25px 50px 75px 100px;  top padding is 25px right padding is 50px bottom padding is 75px left padding is 100px   Ex 2: 25px 50px 75px;  top padding is 25px right and left paddings are 50px bottom padding is 75px   Ex 3: 25px 50px;  top and bottom paddings are 25px right and left paddings are 50px   Ex 4: 25px;  all four paddings are 25px  "
		),array(
			"type" 		=> "text",
			"label" 		=> "Input margin",
			"description" 	=> "hover here for example",
			"title"		=> "Ex 1: 25px 50px 75px 100px;  top margin is 25px right margin is 50px bottom margin is 75px left margin is 100px   Ex 2: 25px 50px 75px;  top margin is 25px right and left margin are 50px bottom margin is 75px   Ex 3: 25px 50px;  top and bottom margin are 25px right and left margin are 50px   Ex 4: 25px;  all four margin are 25px"
		),array(
			"type" 		=> "number",
			"label" 		=> "Textarea height",
			"description" 	=> "Textarea height in pixels"
		),array(
			"type" 		=> "selectbox",
			"label" 		=> "Label font style",
			"value" 		=> array( "normal", "italic", "oblique" ),
			"description" 	=> "Choose from the following font styles"	
		),array(
			"type" 		=> "selectbox",
			"label" 		=> "Label font weight",
			"value" 		=> array( "normal", "bold", "bolder", "lighter", "initial", "inherit" ), // ???
			"description" 	=> "Choose from the following label font weights"	
		),array(
			"type" 		=> "number",
			"label" 		=> "Label font size",
			"description" 	=> "Size of the label fonts in pixels"
		),array(
			"type" 		=> "color-selector",
			"label" 		=> "Label Color",
			"description" 	=> "Choose the color for the label text"
		)/*,array(
			"type" 		=> "selectbox",
			"label" 		=> "Label Fonts",
			"value" 		=> array( "none", "solid", "dotted","double", "groove", "ridge", "inset", "outset" ), // ???
			"description" 	=> "Choose from the following Google fonts"	
		)*/
	),
	"submit_button_settings" => array(
		array(
			"type" 		=> "number",
			"label" 		=> "Submit button width",
			"description" 	=> "Submit button width in px"
		),array(
			"type" 		=> "number",
			"label" 		=> "Submit button height",
			"description" 	=> "Submit button height in px"
		),array(
			"type" 		=> "number",
			"label" 		=> "Submit button border radius",
			"description" 	=> "Border radius in px"
		),array(
			"type" 		=> "number",
			"label" 		=> "Submit button font size",
			"description" 	=> "Border radius in px"
		),array(
			"type" 		=> "number",
			"label" 		=> "Submit button border width",
			"description" 	=> "Size of the submit button border in pixels"
		),array(
			"type" 		=> "selectbox",
			"label" 		=> "Submit button border style",
			"value" 		=> array( "none", "solid", "dotted","double", "groove", "ridge", "inset", "outset" ), // ???
			"description" 	=> "Type of the submit button border"	
		),array(
			"type" 		=> "color-selector",
			"label" 		=> "Submit button border color",
			"description" 	=> "Choose a color for the submit border"
		),array(
			"type" 		=> "color-selector",
			"label" 		=> "Submit button background color",
			"description" 	=> "Choose a color for the submit background"
		),
	));
}
/**
* renders the custom meta box's inputs
*/
function cf7_style_render_settings( $type, $label, $options, $value, $description, $title ){

	$cf7s_id = strtolower( str_replace( " ", "-", $label ) );
	?>
	<div class="element">
		<label for="cf7s-<?php  echo $cf7s_id; ?>">
			<table>
				<tr>
					<td>
						<strong>
							<?php  echo __( $label, "cf7style_text_domain"); ?>
						</strong>
					</td>
					<td>
						<?php $class  = ( "color-selector" == $type ) ? "cf7-style-color-field" : "";
						if( "selectbox" == $type ){ ?>
							<select id="cf7s-<?php  echo $cf7s_id; ?>" name="cf7stylecustom[<?php  echo $cf7s_id; ?>]">
								<option>Default</option>
								<?php foreach( $options as $option ) {?>
			                					<option value="<?php echo $option; ?>"<?php if($option == $value) echo " selected='selected'";?>><?php echo $option; ?></option>
			                				<?php }//foreach end ?>	
			                			</select>	
						<?php } else { ?>
							<input type="<?php  echo ( $type == 'color-selector' ) ? 'text' : $type; ?>" id="cf7s-<?php  echo $cf7s_id; ?>" name="cf7stylecustom[<?php  echo $cf7s_id; ?>]" value="<?php  echo $value; ?>" <?php if( $class != "" ) echo 'class="'.$class.'"';?>/>
						<?php }//else end ?>
						<small <?php echo ( isset( $title ) ? "title='".$title."'" : "" ); ?>><?php  echo __( $description, "cf7style_text_domain"); ?></small>
					</td>
				</tr>
			</table>
		</label>
	</div><!-- /.element -->
	<?php
}
/**
 * Calls the class the meta box. Used for selecting forms for each style.
 */
function cf7_style_meta_form_init() {
    new cf7_style_meta_boxes();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'cf7_style_meta_form_init' );
    add_action( 'load-post-new.php', 'cf7_style_meta_form_init' );
}

/** 
 * The Class for creating all of the meta boxes
 */
class cf7_style_meta_boxes {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		//selector init
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box_style_selector' ) );
		add_action( 'save_post', array( $this, 'save_style_selector' ) );
		//image meta box init
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box_style_image' ) );
                //add paypal button
                add_action( 'add_meta_boxes', array( $this, 'add_meta_box_style_paypal' ) );
		//custom style meta box1
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box_style_customizer' ), 10, 2 );
		add_action( 'save_post', array( $this, 'save_style_customizer' ) );
                //fonts
                add_action( 'add_meta_boxes', array( $this, 'add_meta_box_font_selector' ) );
                add_action( 'save_post', array( $this, 'save_font_id' ) );
	}

	/**************************************************
	 * Adds the meta box container for style selector.
	 * STYLE SELECTOR STARTS HERE
	 */
	public function add_meta_box_style_selector( $post_type ) {
		$post_types = array('cf7_style');     //limit meta box to certain post types
		if ( in_array( $post_type, $post_types )) {
			add_meta_box(
			'cf7_style_meta_box_form_selector'
			,__( 'Select forms for current style', 'myplugin_textdomain' )
			,array( $this, 'render_meta_box_selector' )
			,$post_type
			,'advanced'
			,'high'
			);
		}
	}
	public function add_meta_box_style_customizer( $post_type, $post ) {

		$post_types = array('cf7_style');     //limit meta box to certain post types
		$custom_cat = get_the_terms( $post->ID, "style_category" );
		$custom_name = ( empty( $custom_cat ) ) ? "custom style" : $custom_cat[0]->name;
		if ( in_array( $post_type, $post_types ) && ( $custom_name == "custom style" ) ) {
			add_meta_box(
			'cf7_style_meta_box_style_customizer'
			,__( 'Custom style settings', 'myplugin_textdomain' )
			,array( $this, 'render_meta_box_style_customizer' )
			,$post_type
			,'advanced'
			,'high'
			);
		}
	}
	public function render_meta_box_style_customizer( $post ) {
		wp_nonce_field( 'cf_7_style_style_customizer_inner_custom_box', 'cf_7_style_customizer_custom_box_nonce' );
		$setting_array = unserialize( get_post_meta( $post->ID, 'cf7_style_custom_styles', true ));
		foreach( cf7_style_general_settings_array() as $key=>$settings) { ?>
			<div class="general-settings">
				<h3><?php  echo __( str_replace( "_", " ", $key ).' for this custom style.', "cf7style_text_domain" ); ?></h3>
				<?php
				foreach( $settings as $setting ){
					$current_val = ( !empty( $setting_array ) ) ? $setting_array[ strtolower( str_replace( " ", "-", $setting["label"] ) ) ] : "";
					$current_option = ( $setting["type"] == "selectbox" ) ? $setting["value"] : "";
					$current_title = ( isset( $setting["title"] ) ) ? $setting["title"] : "";
					cf7_style_render_settings( $setting["type"], $setting["label"], $current_option, $current_val, $setting["description"], $current_title );
				} ?>
			</div><!-- /.general-settings -->
		<?php } ?>
		<div class="clear"></div>
		<?php
	}
	public function save_style_customizer( $post_id ) {

		if ( ! isset( $_POST['cf_7_style_customizer_custom_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['cf_7_style_customizer_custom_box_nonce'];
		

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'cf_7_style_style_customizer_inner_custom_box' ) ) {
			return $post_id;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		if ( 'page' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
				
		}
		$posted_data = $_POST['cf7stylecustom'];
		if ( is_array( $posted_data ) && isset( $posted_data ) ) {
			$serialized_result = serialize( $posted_data );
			update_post_meta( $post_id, 'cf7_style_custom_styles', $serialized_result, "");
		}

	}

	/**
	 * Save the style selector when the post is saved.
	 */
	public function save_style_selector( $post_id ) {
		if ( ! isset( $_POST['cf_7_style_selector_custom_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['cf_7_style_selector_custom_box_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'cf_7_style_selector_inner_custom_box' ) ) {
			return $post_id;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		if ( 'page' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
				
		}
		
		//getting all the cf7 forms
		$cf7formsargs = array(
			'post_type'		=> 'wpcf7_contact_form',
			'posts_per_page'	=> -1
		);
		$cf7forms = get_posts( $cf7formsargs );
		
		//for each checked form, saving the style id
		foreach ( $cf7forms as $cf7form ) {
			if ( isset( $_POST[$cf7form->post_name] ) ) {
				//if ( !empty( $_POST[$cf7form->post_name] ) ) {
					update_post_meta( $cf7form->ID, 'cf7_style_id', $post_id);
				//} 
			} else {
				$getthisstyle = get_post_meta( $cf7form->ID, 'cf7_style_id', $post_id );
				
				if ( !empty( $getthisstyle ) && $post_id == $getthisstyle ) {
					update_post_meta( $cf7form->ID, 'cf7_style_id', '' );
				}
				
				if ( !empty( $getthisstyle ) ) {
					//update_post_meta( $cf7form->ID, 'cf7_style_id', $getthisstyle );
				}
			}
		}
	}

	/**
	 * Render Meta Box content.
	 */
	public function render_meta_box_selector( $post ) {
		wp_nonce_field( 'cf_7_style_selector_inner_custom_box', 'cf_7_style_selector_custom_box_nonce' );

		// Display the form, using the current value.
		$args = array(
			'post_type'		=> 'wpcf7_contact_form',
			'posts_per_page'	=> -1
		);
		$currentpostid = get_the_ID();
		
		//wp_die( 'aaaa' );
		$query = new WP_Query( $args );
		echo '<table class="wp-list-table fixed pages widefat">'; 
			echo '<thead>';
				echo '<tr>';
					echo '<th class="manage-column">' . __('Contact form 7 forms') . '</th>';
					echo '<th class="manage-column different-style"><input type="checkbox" id="select_all"/><label for="select_all">' . __('Select all') . '</label></th>';
				echo '</tr>';
			echo '</thead>';
			echo '<tbody class="cf7style_body_select_all">';
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post(); 
					$cf7stylehas = get_post_meta( get_the_ID(), 'cf7_style_id', true ); 
				?>
					<tr>
						<td>
							<label for="<?php echo cf7_style_the_slug();  ?>"><?php the_title(); ?></label>
						</td>
						<td>
							<input type="checkbox" id="<?php echo cf7_style_the_slug(); ?>" name="<?php echo cf7_style_the_slug(); ?>" value="<?php echo get_the_ID(); ?>" <?php if ( $currentpostid == $cf7stylehas ) { echo 'checked'; } ?>  /> 
							<?php  if ( $currentpostid != $cf7stylehas && !empty( $cf7stylehas ) ) {
								echo '<p class="description">' . __('Notice: This form allready has a selected style. Checking this one will overwrite the ') . '<a href="' . get_admin_url() . '/post.php?post_type=cf7_style&post=' . $cf7stylehas . '&action=edit">' . __('other one.') . '</a></p>'; 
							} ?>
						</td>
					</tr>
				<?php endwhile; wp_reset_postdata();
				echo '</tbody>';
			echo '</table>';
		} else {
			echo '-----------<p class="description">' . __( 'Please create a form. You can do it by clicking') . '<a href="' . admin_url() . 'admin.php?page=wpcf7-new" target="_blank">' . __(' here') . '</a></p>';
		}
	}
	/**
	 *STYLE SELECTOR ENDS HERE
	 *****************************
	 */
	 
	/*************************************************
	 * Adds the meta box container for IMAGE PREVIEW
	 * IMAGE META BOX STARTS HERE
	 */
	public function add_meta_box_style_image( $post_type ) {
		$post_types = array('cf7_style');     //limit meta box to certain post types
		if ( in_array( $post_type, $post_types )) {
			add_meta_box(
				'cf7_style_meta_box_image'
				,__( 'Preview', 'myplugin_textdomain' )
				,array( $this, 'render_meta_box_image' )
				,$post_type
				,'side'
				,'high'
			);
		}
	}
	/*
	 * renders the image
	 */
	public function render_meta_box_image( $post ) {
		$image = get_post_meta( $post->ID, 'cf7_style_image_preview', true );
		if ( !empty( $image ) ) {
			echo '<img src="' . plugins_url() . '/contact-form-7-style/' . $image . '" alt="' . $post->title . '" />';
		} else {
			//here will be the placeholder in case the image is not available
			$image = 'default_form.jpg';
			echo '<img src="' . plugins_url() . '/contact-form-7-style/images/' . $image . '" alt="' . $post->title . '" />';
		}
	}
	
	/**
	 *IMAGE META BOX ENDS HERE
	 ***************************
	 */
        /*
         * Meta box for font selector
         */
        public function add_meta_box_font_selector( $post_type ) {
            $post_types = array('cf7_style');     //limit meta box to certain post types
            if ( in_array( $post_type, $post_types )) {
                    add_meta_box(
                            'cf7_style_meta_box_font_selector'
                            ,__( 'Select a Google Font', 'myplugin_textdomain' )
                            ,array( $this, 'render_font_selector' )
                            ,$post_type
                            ,'advanced'
                            ,'high'
                    );
            }
        }
        /*
         * show za metabox with only 5 google fonts for now. later we will make a search box for this. 
         * Emilys Candy - 196
         * Henny Penny - 275
         * Joti One - 309
         * Open Sans - 458
         * Pirata One - 496
         */
        public function render_font_selector( $post ) {
            wp_nonce_field( 'cf_7_style_font_inner_custom_box', 'cf_7_style_font_custom_box_nonce' );
            //getting all google fonts
            $google_list = file_get_contents( 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBAympIKDNKmfxhI3udY-U_9vDWSdfHrEo' );
            $font_obj = json_decode( $google_list );
            $cf7_style_font = get_post_meta( $post->ID, 'cf7_style_font', true );
            $selected = '';
            echo '<select name="cf7_style_font_selector">';
            echo '<option>None</option>';
            foreach ($font_obj->items as $font) {
                 echo '<option value="' . $font->family . '"' . ( $cf7_style_font == $font->family ? 'selected="selected"' : '' ) . '>' . $font->family . '</option>';
            }
            echo '</select>';
        }
        
        /**
	 * Save the font id
	 */
	public function save_font_id( $post_id ) {
		if ( ! isset( $_POST['cf_7_style_font_custom_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['cf_7_style_font_custom_box_nonce'];

		if ( ! wp_verify_nonce( $nonce, 'cf_7_style_font_inner_custom_box' ) ) {
			return $post_id;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		if ( 'page' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
				
		}
		
                if ( isset ( $_POST['cf7_style_font_selector'] ) ) {
                    update_post_meta( $post_id, 'cf7_style_font', $_POST['cf7_style_font_selector'] );
                }
	}
        /*************************************************
	 * Adds the meta box container for IMAGE PREVIEW
	 * IMAGE META BOX STARTS HERE
	 */
	public function add_meta_box_style_paypal( $post_type ) {
		$post_types = array('cf7_style');     //limit meta box to certain post types
		if ( in_array( $post_type, $post_types )) {
			add_meta_box(
				'cf7_style_meta_box_paypal'
				,__( 'Donate', 'myplugin_textdomain' )
				,array( $this, 'render_meta_paypal' )
				,$post_type
				,'side'
				,'high'
			);
		}
	}
	/*
	 * renders the image
	 */
	public function render_meta_paypal( $post ) { ?>
            <p>Your donation can make us work more and improve this plugin.</p>
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QP48AKYN67WHA" target="_blank">
                <img src="https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom.svg">
            </a>
	<?php }
}

//gets the slug of a post
function cf7_style_the_slug() {
    global $post; 
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}
//enques the font
function enque_selected_font() {
    if ( is_page() || is_single() ) {
        $theid = get_queried_object_id();
        $queried_object = get_queried_object();
        
        if ( has_shortcode( $queried_object->post_content, 'contact-form-7' ) ) {
            $pattern= '~\[contact-form-7.+id="\K([^,]*)~';
            
            preg_match($pattern, $queried_object->post_content, $cf7_id );
            $cf7_idstring = explode( '"', $cf7_id[1] );
            $getstyle = get_post_meta( $cf7_idstring[0], 'cf7_style_id', true );
            $fontid = get_post_meta( $getstyle, 'cf7_style_font', true );
            $googlefont = preg_replace("/ /","+",$fontid);
            $google_list = file_get_contents( 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBAympIKDNKmfxhI3udY-U_9vDWSdfHrEo' );
            $font_obj = json_decode( $google_list );
            
            wp_register_style('googlefont-cf7style', 'http://fonts.googleapis.com/css?family=' . $googlefont . ':100,200,300,400,500,600,700,800,900&subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese', array(), false, 'all');
            wp_enqueue_style('googlefont-cf7style');
            
        } else {
            //echo 'no';
        }
    }
}
add_action( 'wp_enqueue_scripts', 'enque_selected_font' );

/*
 * returns the name of the font on the current page/post
 */
function return_font_name( $postid ) {
    $getpost = get_post( $postid );
    if ( has_shortcode( $getpost->post_content , 'contact-form-7' ) ) {
        $pattern= '~\[contact-form-7.+id="\K([^,]*)~';
        preg_match($pattern, $getpost->post_content, $cf7_id );
        $cf7_idstring = explode( '"', $cf7_id[1] );
        $getstyle = get_post_meta( $cf7_idstring[0], 'cf7_style_id', true );
        $fontname = get_post_meta( $getstyle, 'cf7_style_font', true );
        return ( $fontname );
    } else {
        return false;
    }
}

/*
 * hides change permalink and view buttons on editing screen
 */
add_action('admin_head', 'hide_edit_permalinks_on_style_customizer');
function hide_edit_permalinks_on_style_customizer() {
    $currentScreen = get_current_screen();
    if ( $currentScreen->post_type == 'cf7_style' ) { ?>
        <style type="text/css">
        <!--
        #titlediv {
            margin-bottom: 10px;
        }
        #edit-slug-box, .editinline, .view{
            display: none;
        }
        -->
        </style>
    <?php }
}