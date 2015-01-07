<?php
/**
 * Contact Form 7 Style
 *
 * Settings
 */
include_once( 'cf7-style-options.php' );
include_once( 'cf7-style-functions.php' );


/**
 * Contact Style
 *
 * Displays the settings pages in the admin area
 * and saves the options
 */
function cf7_style_add_admin() {

	global $cf7_style_name, $cf7_style, $templates, $valentines, $custom;

	/**
	 * Save Settings
	 *
	 * Update or delete options for
	 * Valentine's Day, Xmas Style and Custom Style 
	 */
	function cf7_style_save_settings( $action, $name, $file ) {	

		global $cf7_style_name, $cf7_style, $templates, $valentines, $custom;
		
		if( $file === true ) {
			$path = basename(__FILE__);
		}else {
			$path = "cf7-style-" . $name . ".php";
		}
		
		if ( isset( $_GET['page'] ) && $_GET['page'] == $path ) {

			if ( isset( $_POST[$action] ) && 'save' == $_POST[$action] ) {
				header( "Location: admin.php?page=cf7-style-". $name .".php&saved=true" );
				foreach ( ${$action} as $value ) {
					if( isset( $_POST[ $value['id'] ] ) ) { update_option( $value['id'], $_POST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); }
				}
				exit;  
			}
			else if( isset( $_POST[$action] ) && 'reset' == $_POST[$action] ) {
				header( "Location: admin.php?page=cf7-style-". $name .".php&reset=true" );
				foreach ( ${$action} as $value ) {
					delete_option( $value['id'] );
				}
				exit;
			}
		}
	}

	/**
	 * Add submenu page
	 *
	 * Display submenu pages for
	 * Xmas Style and Custom Style
	 */
	function cf7_style_add_submenu_page( $name, $template ) {
		add_submenu_page(
			basename(__FILE__),
			$name,
			$name,
			'administrator',
			'cf7-style-'. $template .'.php',
			'cf7_style_'. $template
		);
	}

	cf7_style_save_settings( 'valentines', 'settings', true );
	cf7_style_save_settings( 'templates', 'menu', false );
	cf7_style_save_settings( 'custom', 'custom', false );	 

	add_menu_page(
		basename(__FILE__),	
		'Valentine\'s Day',	
		'administrator',  
		'cf7-style-settings.php',
		'cf7_style_valentines',
		'',
		'28.555'
	);

	// Add "Xmas Style" and "Custom Style" submenu pages
	cf7_style_add_submenu_page( 'Xmas Style', 'menu' );
	cf7_style_add_submenu_page( 'Custom Style', 'custom' );
}
 
/**
 * Xmas Style
 *
 * Displays fields for the Xmas Style area of the admin area
 */
function cf7_style_menu() {

	global $cf7_style_name, $cf7_style, $templates;
	$i=0;

	cf7_style_admin_notices();
?>
<div class="wrap cf7_style_admin">
	<div id="icon-themes" class="icon32"></div>
	<h2>Xmas Style</h2>

	<div class="cf7_style_opts">
		<form method="post">

        <?php foreach ( $templates as $value ) {
        switch ( $value['type'] ) {

			case "open":
 
			break;
			case "close":
        ?>
        
	</div>  
</div>
		<?php
			break;
			case "title":
        ?>

		<p>To easily set up <?php echo $cf7_style_name; ?> addon, you can use the menu below.</p>

		<?php
			break;
			case "text":
		?>
  
	<div class="cf7_style_input cf7_style_text">  
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
		<small><?php echo $value['desc']; ?></small>
		<div class="clearfix"></div>
    </div>

		<?php
            break;
            case "textarea":
        ?>

    <div class="cf7_style_input cf7_style_textarea">  
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
        <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>  
        <small><?php echo $value['desc']; ?></small>
        <div class="clearfix"></div>
    </div>

		<?php
            break;
            case "select":
        ?>
  
    <div class="cf7_style_input cf7_style_select">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
            <?php foreach ( $value['options'] as $option ) { ?>  
            <option class="font-load" <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $option; ?></option><?php } ?>
        </select>
    
        <small><?php echo $value['desc']; ?></small>
        <div class="clearfix"></div>
    
        <small class="preview">Preview</small>
        <div id="font-viewer" class="font-viewer3">
            <div class="style-select"></div>
            <p class="wpcf7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

		<?php
			break;
			case "section":

			$i++;
		?>

    <div class="cf7_style_section">
    	<div class="cf7_style_title">
			<h3><?php echo $value['name']; ?></h3>
			<div class="clearfix"></div>
        </div>
		<div class="cf7_style_options">  
			<ul class="cf7_style_templates">
				<li class="selected">
					<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/images/cf7_xmas_classic.jpg'; ?>" />
					<span>Xmas Classic</span>
				</li>
				<li>
					<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/images/cf7_xmas_red.jpg'; ?>" />
					<span>Xmas Red</span>
				</li>
				<li>
					<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/images/cf7_xmas_simple.jpg'; ?>" />
					<span>Xmas Simple</span>
				</li>
			</ul>

		<?php 
			break;  
			}  
		} 
		?>
				<p class="submit">
                	<input name="save<?php echo $i; ?>" type="submit" value="Save changes"  class="button-primary" />
					<input type="hidden" name="templates" value="save" />
                </p>
			</form>
            
			<form method="post">
				<p class="reset"> 				
                    <input name="reset" type="submit" value="Reset to default" class="button-secondary" />  
                    <input type="hidden" name="templates" value="reset" />  
				</p>  
			</form>  

		</div>
	</div>
	<div id="about-section" class="cf7_style_section">
		<?php include_once( 'cf7-style-feed-box.php' );?>
	</div>
<?php
}


/**
 * Valentine's Day Style
 *
 * Displays fields for the Valentines Style area of the admin area
 */
function cf7_style_valentines() {

	global $cf7_style_name, $cf7_style, $valentines;
	$i=0;

	cf7_style_admin_notices();
?>
<div class="wrap cf7_style_admin">
	<div id="icon-themes" class="icon32"></div>
	<h2>Valentine's Day Style</h2>

	<div class="cf7_style_opts">
		<form method="post">

        <?php foreach ( $valentines as $value ) {
        switch ( $value['type'] ) {

			case "open":
 
			break;
			case "close":
        ?>
        
	</div>  
</div>
		<?php
			break;
			case "title":
        ?>

		<p>To easily set up <?php echo $cf7_style_name; ?> addon, you can use the menu below.</p>

		<?php
			break;
			case "text":
		?>
  
	<div class="cf7_style_input cf7_style_text">  
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
		<small><?php echo $value['desc']; ?></small>
		<div class="clearfix"></div>
    </div>

		<?php
            break;
            case "textarea":
        ?>

    <div class="cf7_style_input cf7_style_textarea">  
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
        <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>  
        <small><?php echo $value['desc']; ?></small>
        <div class="clearfix"></div>
    </div>

		<?php
            break;
            case "select":
        ?>
  
    <div class="cf7_style_input cf7_style_select">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
            <?php foreach ( $value['options'] as $option ) { ?>  
            <option class="font-load" <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $option; ?></option><?php } ?>
        </select>
    
        <small><?php echo $value['desc']; ?></small>
        <div class="clearfix"></div>
    
        <small class="preview">Preview</small>
        <div id="font-viewer" class="font-viewer3">
            <div class="style-select"></div>
            <p class="wpcf7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

		<?php
			break;
			case "section":

			$i++;
		?>

    <div class="cf7_style_section">
    	<div class="cf7_style_title">
			<h3><?php echo $value['name']; ?></h3>
			<div class="clearfix"></div>
        </div>
		<div class="cf7_style_options">  
			<ul class="cf7_style_templates">
				<li class="selected">
					<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/images/cf7_vday_classic.jpg'; ?>" />
					<span>Valentine's Day Classic</span>
				</li>
				<li>
					<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/images/cf7_vday_roses.jpg'; ?>" />
					<span>Valentine's Day Roses</span>
				</li>
				<li>
					<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/images/cf7_vday_birds.jpg'; ?>" />
					<span>Valentine's Day Birds</span>
				</li>
				<li>
					<img src="<?php echo plugin_dir_url( __FILE__ ) . 'admin/images/cf7_vday_blue_birds.jpg'; ?>" />
					<span>Valentine's Day Blue Birds</span>
				</li>
			</ul>

		<?php 
			break;  
			}  
		} 
		?>
				<p class="submit">
                	<input name="save<?php echo $i; ?>" type="submit" value="Save changes"  class="button-primary" />
					<input type="hidden" name="valentines" value="save" />
                </p>
			</form>
            
			<form method="post">
				<p class="reset"> 				
                    <input name="reset" type="submit" value="Reset to default" class="button-secondary" />  
                    <input type="hidden" name="valentines" value="reset" />  
				</p>  
			</form>  

		</div>
	</div>
	<div id="about-section" class="cf7_style_section">
		<?php include_once( 'cf7-style-feed-box.php' );?>
	</div>
<?php
}





/**
 * Custom Style
 *
 * Displays fields for the Custom Style area of the admin area
 */
function cf7_style_custom() {
	global $cf7_style_name, $cf7_style, $custom;
	$i=0;

	cf7_style_admin_notices();
?>
<div class="wrap cf7_style_custom">
	<div class="icon32" id="icon-options-general"></div>
	<h2>Custom Style</h2>

	<div class="cf7_style_opts">
		<form method="post">
		<?php foreach ( $custom as $value ) {
			switch ( $value['type'] ) {
	
			case "open":
	
			break;
			case "close":
		?>
	</div>
</div>
		<?php
			break;
			case "title":
		?>
			<p>Here you can customize the template selected in the "Xmas Style" area.</p>
		<?php
			break;
			case "color-picker":
		?>

	<div class="cf7_style_input cf7_style_text">  
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
		<input type="text" name="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes( get_option( $value['id'] )  ); } else { echo $value['std']; } ?>"  class="wp-color-picker-field" />
		<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	</div>
	
		<?php	
			break;
			case "text":  
		?>  
  
    <div class="cf7_style_input cf7_style_text">  
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes( get_option( $value['id'] )  ); } else { echo $value['std']; } ?>" />
		<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>  
    </div>  

		<?php
            break;
			case "number":  
		?>  
  
    <div class="cf7_style_input cf7_style_text">  
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes( get_option( $value['id'] )  ); } else { echo $value['std']; } ?>" /> px
		<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>  
    </div>  

		<?php
            break;
			case "numbernopxneeded":  
		?>  
  
    <div class="cf7_style_input cf7_style_text">  
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="number" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes( get_option( $value['id'] )  ); } else { echo $value['std']; } ?>" />
		<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>  
    </div>  

		<?php
            break;
            case "select":  
        ?>

    <div class="cf7_style_input cf7_style_select">  
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
            <option>Default</option>
    <?php foreach ( $value['options'] as $option ) { ?>
            <option class="font-load" <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $option; ?></option><?php } ?>
        </select>
        <small><?php echo $value['desc']; ?></small>
        <small class="preview">Preview</small>
        <div id="font-viewer" class="font-viewer">
            <div class="style-select"></div>
            <p class="wpcf7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

		<?php
			break;
			case "simple_select":  
        ?>

    <div class="cf7_style_input cf7_style_select">  
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
            <option>Default</option>
    <?php foreach ( $value['options'] as $option ) { ?>
            <option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $option; ?></option><?php } ?>
        </select>
        <small><?php echo $value['desc']; ?></small>
    </div>

		<?php
			break;
			case "select_input_font":
        ?>

    <div class="cf7_style_input cf7_style_select">  
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
            <option>Default</option>
    <?php foreach ( $value['options'] as $option ) { ?>
            <option class="font-load2" <?php if ( get_option( $value['id'] ) == $option ) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $option; ?></option><?php } ?>
        </select>
        <small><?php echo $value['desc']; ?></small>
        <small class="preview">Preview</small>
        <div id="font-viewer2" class="font-viewer2">
            <div class="style-select2"></div>
            <p class="wpcf7-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div> 
    </div>
      
		<?php 
            break;  
			case "closingdiv": //only for styling the setting page - START
        ?>
		</div>
		<?php 
            break;
			case "openinginputdiv":
        ?>
		<div class="inputsection">
		<?php 
            break;
			case "openinggeneraldiv":
        ?>
		<div class="generals">
		<?php 
            break;
			case "generalssetpanel":
        ?>
		<div class="generalssetpanel panel">Generals settings</div>
		<?php 
            break;
			case "openingsubmitbuttondivpanel":
        ?>
		<div class="submitbuttonsetpanel panel">Submit button settings</div>
		<?php 
            break;
			case "inputsandlabelspanel":
        ?>
		<div class="inputsandlabelspanel panel">Inputs and labels settings</div>
		<?php 
            break;
			case "openingsubmitbuttondiv":
        ?>
		<div class="submitbuttonset">
		<?php 
            break;
			case "openinglabelsandinputsdiv":
        ?>
		<div class="labelsandinputsset">
		<?php 
            break;//only for styling the setting page - END//only for styling the setting page - END
            case "section":  
              
            $i++;     
        ?>

	<div class="cf7_style_section"> 
    	<div class="cf7_style_title">
        	<h3><?php echo $value['name']; ?></h3>
    		
            <div class="clearfix"></div>
        </div>  
    <div class="cf7_style_options">  
    </div>
		
		<?php
			break;
		}  
	}
    ?>  
        <p class="submit">
            <input name="save<?php echo $i; ?>" type="submit" value="Save changes"  class="button-primary" />
            <input type="hidden" name="custom" value="save" />
        </p> 
    </form> 
     
    <form method="post">  
		<p class="reset">  
			<input name="reset" type="submit" value="Reset to default" class="button-secondary" />
			<input type="hidden" name="custom" value="reset" />
		</p>
    </form>  

	</div>   
<?php
}
add_action('admin_menu', 'cf7_style_add_admin');


/**
 * Change the menu label to Contact Style
 */
function cf7_style_change_menu_label() {
  global $menu;

  $menu['28.555'][0] = 'Contact Style';
}
add_action( 'admin_menu', 'cf7_style_change_menu_label' );