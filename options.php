<?php
/* Theme options, based on David Gwyer's implementation from http://www.presscoders.com/ */

add_action('admin_init', 'theme_options_init' );
add_action('admin_menu', 'theme_options_add_page');

function theme_options_init(){
	register_setting( 'theme_options', 'theme_options');
	
	add_settings_section('display_section', 'Display Settings', 'display_section_text', 'theme_options');
	add_settings_field('disable_layout', 'Disable default style', 'disable_layout_setting', 'theme_options', 'display_section');
	add_settings_field('css_font_stack', 'Base font style', 'font_setting', 'theme_options', 'display_section');
	
	add_settings_field('google_web_font_header', '<a href="http://www.google.com/webfonts" target=_blank>Google Web Font</a> for header text', 'google_web_font_header_setting', 'theme_options', 'display_section');
	add_settings_field('google_web_font_paragraph', '<a href="http://www.google.com/webfonts" target=_blank>Google Web Font</a> for paragraph text', 'google_web_font_paragraph_setting', 'theme_options', 'display_section');

	add_settings_section('media_section', 'Media Settings', 'media_section_text', 'theme_options');
	add_settings_field('yahoo_media_player', 'Yahoo Media Player', 'yahoo_media_player_setting', 'theme_options', 'media_section');

	add_settings_section('analytics_section', 'Analytics Settings', 'analytics_section_text', 'theme_options');
	add_settings_field('ga_tracker', 'Google Analytics tracker ID', 'ga_tracker_setting', 'theme_options', 'analytics_section');
	
	add_settings_section('facebook_section', 'Facebook Integration', 'facebook_integration_section_text', 'theme_options');
	add_settings_field('facebook_profile_id', 'Facebook profile ID', 'facebook_profile_id_setting', 'theme_options', 'facebook_section');
	
	
	add_settings_section('integration_section', 'Profile Links', 'integration_section_text', 'theme_options');
	add_settings_field('twitter_id', 'Twitter user name', 'twitter_id_setting', 'theme_options', 'integration_section');
	add_settings_field('facebook_id', 'Facebook user name', 'facebook_id_setting', 'theme_options', 'integration_section');	
	add_settings_field('google_id', 'Google user name', 'google_id_setting', 'theme_options', 'integration_section');

}


function theme_options_add_page() {
	add_theme_page('Theme Settings', 'Theme Settings', 'administrator', 'theme_options', 'options_page_fn');
}

// ************************************************************************************************************
// Callback functions
// Section HTML, displayed before the first option

function  display_section_text() {
	echo '<p>Control the look and feel of your blog, or disable the included styles.</p>';
}
function  analytics_section_text() {
	echo '<p>Usage statistics.</p>';
}
function  media_section_text() {
	echo "<p>Media utilities and librarys.</p>";
}
function  integration_section_text() {
	echo '<p>Enter your user name for any site you are a member of to create a link on the sidebar</p>';
}
function  facebook_integration_section_text() {
	echo "<p>This information is used for Open Graph and Facebook integration (ie, the 'like' button.)</p>";
	echo "<p>Find your profile ID with this tool: <a href='http://graph.facebook.com/USER_NAME'><b>http://graph.facebook.com/<em>USER_NAME</em></b></p></a>";
}


// ************************************************************************************************************
// sample setting render methods

// // DROP-DOWN-BOX - Name: theme_options[dropdown1]
// function  setting_dropdown_fn() {
	// $options = get_option('theme_options');
	// $items = array("Red", "Green", "Blue", "Orange", "White", "Violet", "Yellow");
	// echo "<select id='drop_down1' name='theme_options[dropdown1]'>";
	// foreach($items as $item) {
		// $selected = ($options['dropdown1']==$item) ? 'selected="selected"' : '';
		// echo "<option value='$item' $selected>$item</option>";
	// }
	// echo "</select>";
// }
// 
// // TEXTAREA - Name: theme_options[text_area]
// function setting_textarea_fn() {
	// $options = get_option('theme_options');
	// echo "<textarea id='plugin_textarea_string' name='theme_options[text_area]' rows='7' cols='50' type='textarea'>{$options['text_area']}</textarea>";
// }
// 

// 
// // PASSWORD-TEXTBOX - Name: theme_options[pass_string]
// function setting_pass_fn() {
	// $options = get_option('theme_options');
	// echo "<input id='plugin_text_pass' name='theme_options[pass_string]' size='40' type='password' value='{$options['pass_string']}' />";
// }
// 
// // CHECKBOX - Name: theme_options[chkbox1]
// function setting_chk1_fn() {
	// $options = get_option('theme_options');
	// if($options['chkbox1']) { $checked = ' checked="checked" '; }
	// echo "<input ".$checked." id='plugin_chk1' name='theme_options[chkbox1]' type='checkbox' />";
// }
// 
// // CHECKBOX - Name: theme_options[chkbox2]
// function setting_chk2_fn() {
	// $options = get_option('theme_options');
	// if($options['chkbox2']) { $checked = ' checked="checked" '; }
	// echo "<input ".$checked." id='plugin_chk2' name='theme_options[chkbox2]' type='checkbox' />";
// }



function font_setting() {
	echo "<style>";
	echo " .font-option { line-height: 1.618em; }";
	echo " .Microsoft { font-family: \"Segoe UI\", Segoe, Tahoma, Geneva, sans-serif; font-size: 1.618em; }";
	echo " .Facebook { font-family: \"Lucida Grande\", \"Lucida Sans Unicode\", \"Lucida Sans\", Verdana, Tahoma, sans-serif; font-size: 1.618em;}";
	echo " .Yahoo { font-family: Arial, sans-serif; font-size: 1.618em; }";
	echo " .ILoveTypography { font-family: Cambria, Georgia, serif; font-size: 1.618em; }";
	echo " .JonTangerine { font-family: Baskerville, Garamond, Palatino, \"Palatino Linotype\", \"Hoefler Text\", \"Times New Roman\", serif; font-size: 1.618em; }";	
	echo " .SushiAndRobots { font-family: \"Hoefler Text\", Garamond, Baskerville, \"Baskerville Old Face\", \"Times New Roman\", serif; font-size: 1.618em; }";
	echo "</style>";
			
	$options = get_option('theme_options');
	$items = array("Microsoft", "Yahoo", "Facebook", "I Love Typography", "Jon Tangerine", "Sushi And Robots");
	foreach($items as $item) {
		$class = str_replace(" ", "", $item);
		$checked = ($options['css_font_stack']==$item) ? ' checked="checked" ' : '';
		echo "<label class=\"font-option ".$class."\"><input ".$checked." value='$item' name='theme_options[css_font_stack]' type='radio' /> $item</label><br />";
	}
	
}
function google_web_font_header_setting() {
	$options = get_option('theme_options');
	echo "<input id='google_web_font_header' name='theme_options[google_web_font_header]' size='40' type='text' value='{$options['google_web_font_header']}' />";
}
function google_web_font_paragraph_setting() {
	$options = get_option('theme_options');
	echo "<input id='google_web_font_paragraph' name='theme_options[google_web_font_paragraph]' size='40' type='text' value='{$options['google_web_font_paragraph']}' />";
}
function ga_tracker_setting() {
	$options = get_option('theme_options');
	echo "<input id='ga_tracker' name='theme_options[ga_tracker]' size='40' type='text' value='{$options['ga_tracker']}' />";
}
function twitter_id_setting() {
	$options = get_option('theme_options');
	echo "<input id='twitter_id' name='theme_options[twitter_id]' size='40' type='text' value='{$options['twitter_id']}' />";
}
function facebook_id_setting() {
	$options = get_option('theme_options');
	echo "<input id='facebook_id' name='theme_options[facebook_id]' size='40' type='text' value='{$options['facebook_id']}' />";
}
function facebook_profile_id_setting() {
	$options = get_option('theme_options');
	echo "<input id='facebook_profile_id' name='theme_options[facebook_profile_id]' size='40' type='text' value='{$options['facebook_profile_id']}' />";
}
function google_id_setting() {
	$options = get_option('theme_options');
	echo "<input id='google_id' name='theme_options[google_id]' size='40' type='text' value='{$options['google_id']}' />";
}
function disable_layout_setting() {
	$options = get_option('theme_options');
	if($options['disable_layout']) { $checked = ' checked="checked" '; }
	echo "<input ".$checked." id='use_layout' name='theme_options[disable_layout]' type='checkbox' />";
}
function yahoo_media_player_setting() {
	$options = get_option('theme_options');
	if($options['yahoo_media_player']) { $checked = ' checked="checked" '; }
	echo "<input ".$checked." id='yahoo_media_player' name='theme_options[yahoo_media_player]' type='checkbox' />";
}

// Display the admin options page
function options_page_fn() {
?>
	<div class="wrap">
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>Theme Settings</h2>
		<form action="options.php" method="post">
		<?php settings_fields('theme_options'); ?>
		<?php do_settings_sections('theme_options'); ?>
		<p class="submit">
			<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
		</p>
		</form>
	</div>
<?php
}

