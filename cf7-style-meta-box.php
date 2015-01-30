<?php 
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
		//custom style meta box1
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box_style_customizer' ), 10, 2 );
		add_action( 'save_post', array( $this, 'save_style_customizer' ) );
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
		if ( in_array( $post_type, $post_types ) && $custom_cat[0]->name == "custom style" ) {
			add_meta_box(
			'cf7_style_meta_box_style_customizer'
			,__( 'General settings', 'myplugin_textdomain' )
			,array( $this, 'render_meta_box_style_customizer' )
			,$post_type
			,'advanced'
			,'high'
			);
		}
	}
	public function render_meta_box_style_customizer( $post ) {
		wp_nonce_field( 'cf_7_style_style_customizer_inner_custom_box', 'cf_7_style_customizer_custom_box_nonce' );
		?>
		<div class="general-settings">
			<h3><?php  echo __('Here you can customize the contact form 7 form\'s style used.', "cf7style_text_domain"); ?></h3>
			<div class="element">
				<label for="cf7s-form-background">
					<strong><?php  echo __('Form background:', "cf7style_text_domain"); ?></strong>
					<input type="text" id="cf7s-form-background" name="Form Background" value="" class="cf7-style-color-field" />
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Choose the background color of the form', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-width">
					<strong><?php  echo __('Form width:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-width" name="Form width" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form width in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-size">
					<strong><?php  echo __('Form border size:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-border-size" name="Form border size" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form border size in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-type">
					<strong><?php  echo __('Form border type:', "cf7style_text_domain"); ?></strong>
					<select id="cf7s-form-border-type" name="Form border type">
            						<option>Default</option>
                					<option value="none">none</option>
                					<option value="solid">solid</option>
                					<option value="dotted">dotted</option>
                					<option value="double">double</option>
                					<option value="groove">groove</option>
                					<option value="ridge">ridge</option>
                					<option value="inset">inset</option>
                					<option value="outset">outset</option>
                				</select>
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Type of the Form border', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-color">
					<strong><?php  echo __('Form border color:', "cf7style_text_domain"); ?></strong>
					<input type="text" id="cf7s-form-border-color" name="Form Border Color" value="" class="cf7-style-color-field" />
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Choose the form border color', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-radius">
					<strong><?php  echo __('Form border radius:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-border-radius" name="Form border radius" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form border radius in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
		</div><!-- /.general-settings -->
		<div class="general-settings">
			<div class="element">
				<label for="cf7s-form-background">
					<strong><?php  echo __('Form background:', "cf7style_text_domain"); ?></strong>
					<input type="text" id="cf7s-form-background" name="Form Background" value="" class="cf7-style-color-field" />
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Choose the background color of the form', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-width">
					<strong><?php  echo __('Form width:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-width" name="Form width" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form width in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-size">
					<strong><?php  echo __('Form border size:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-border-size" name="Form border size" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form border size in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-type">
					<strong><?php  echo __('Form border type:', "cf7style_text_domain"); ?></strong>
					<select id="cf7s-form-border-type" name="Form border type">
            						<option>Default</option>
                					<option value="none">none</option>
                					<option value="solid">solid</option>
                					<option value="dotted">dotted</option>
                					<option value="double">double</option>
                					<option value="groove">groove</option>
                					<option value="ridge">ridge</option>
                					<option value="inset">inset</option>
                					<option value="outset">outset</option>
                				</select>
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Type of the Form border', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-color">
					<strong><?php  echo __('Form border color:', "cf7style_text_domain"); ?></strong>
					<input type="text" id="cf7s-form-border-color" name="Form Border Color" value="" class="cf7-style-color-field" />
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Choose the form border color', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-radius">
					<strong><?php  echo __('Form border radius:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-border-radius" name="Form border radius" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form border radius in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
		</div><!-- /.general-settings -->
		<div class="general-settings">
			<div class="element">
				<label for="cf7s-form-background">
					<strong><?php  echo __('Form background:', "cf7style_text_domain"); ?></strong>
					<input type="text" id="cf7s-form-background" name="Form Background" value="" class="cf7-style-color-field" />
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Choose the background color of the form', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-width">
					<strong><?php  echo __('Form width:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-width" name="Form width" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form width in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-size">
					<strong><?php  echo __('Form border size:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-border-size" name="Form border size" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form border size in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-type">
					<strong><?php  echo __('Form border type:', "cf7style_text_domain"); ?></strong>
					<select id="cf7s-form-border-type" name="Form border type">
            						<option>Default</option>
                					<option value="none">none</option>
                					<option value="solid">solid</option>
                					<option value="dotted">dotted</option>
                					<option value="double">double</option>
                					<option value="groove">groove</option>
                					<option value="ridge">ridge</option>
                					<option value="inset">inset</option>
                					<option value="outset">outset</option>
                				</select>
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Type of the Form border', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-color">
					<strong><?php  echo __('Form border color:', "cf7style_text_domain"); ?></strong>
					<input type="text" id="cf7s-form-border-color" name="Form Border Color" value="" class="cf7-style-color-field" />
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Choose the form border color', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
			<div class="element">
				<label for="cf7s-form-border-radius">
					<strong><?php  echo __('Form border radius:', "cf7style_text_domain"); ?></strong>
					<input type="number" id="cf7s-form-border-radius" name="Form border radius" value="" class="" />px
					<span class="clear"></span>
				</label>
				<small><?php  echo __('Form border radius in pixels', "cf7style_text_domain"); ?></small>
			</div><!-- /.element -->
		</div><!-- /.general-settings -->
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
			echo '<p class="description">' . __( 'Please create a form. You can do it by clicking') . '<a href="' . admin_url() . 'admin.php?page=wpcf7-new" target="_blank">' . __(' here') . '</a></p>';
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
			$image = '';
			echo '<img src="' . plugins_url() . '/contact-form-7-style/' . $image . '" alt="' . $post->title . '" />';
		}
	}
	
	/**
	 *IMAGE META BOX ENDS HERE
	 ***************************
	 */

	
}

function cf7_style_the_slug() {
	global $post; 
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}