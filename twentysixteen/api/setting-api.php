<?php 
//-----------------------admin init--------------------
add_action('admin_init','setting_section_and_field');
function setting_section_and_field(){
register_setting('field_group','value_group');

add_settings_section('footer-section',
					'footer section',
					'footer_section_callback',
					'special_plugin_option');

add_settings_field('footer-text',
					'footer text',
					'footer_text_callback',
					'special_plugin_option',
					'footer-section');
add_settings_field('header-text',
					'header text',
					'header_text_callback',
					'special_plugin_option',
					'footer-section');

}
function header_text_callback(){
	$value = get_option('value_group');
	$header_text = $value['header-text']; 

	?>
	<input type="text" name="value_group[header-text]" value="<?php echo $header_text; ?>">

	<?php
}

function footer_text_callback(){
	$value = get_option('value_group');
	 $footer_text = $value['footer-text']; 
	?>
	<input type="text" name=" value_group[footer-text]" value="<?php echo $footer_text; ?>">
	<?php
}

function footer_section_callback(){
	echo "jit shil";
}




//--------------------------admin menu--------------------------
add_action('admin_menu','admin_menu_add');
function admin_menu_add(){
	add_theme_page('plugin_options',
					'plugin_options',
					'manage_options',
					'special_plugin_option',
					'plugin_option_edit');
	add_menu_page('plugin_options',
					'plugin_options',
					'manage_options',
					'special_plugin_option',
					'plugin_option_edit',
				    '');

}

function plugin_option_edit(){
	?>
<div class="wrap">
	<h2>Plugins option</h2>
	<?php settings_errors(); ?>
	<form action="options.php" method="POST">
		<?php 
		settings_fields('field_group');
		do_settings_sections('special_plugin_option');
		submit_button(); 

		?>
	</form>
</div>

	<?php
}












































































































?>