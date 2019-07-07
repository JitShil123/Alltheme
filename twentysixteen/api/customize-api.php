<?php 

add_action('customize_register','customizer');
function customizer($can_customize){
	$can_customize->add_section('general_section',array(
		'title'=>'General options',
		'priority'=>10
	));

	$can_customize->add_setting('logo_image',array(
		'default'=>'',
		'transport'=>'refresh'
	));

	$can_customize->add_control(
		new WP_Customize_Image_Control($can_customize,'logo_image',array(
			'section'=>'general_section',
			'label'=>'Upload Your copy',
			'setting'=>'logo_image'

	))
	);

	$can_customize->add_setting('copy_right',array(
		'default'=>'I am the boss',
		// 'transport'=>'refresh'
		'transport'=>'postMessage' //using this tranport must be used customize-api.js file with 111111
	));

	$can_customize->add_control('copy_right',array(
		'section'=>'general_section',
		'label'=>'copyright text',
		'type'=>'text'
	));
	$can_customize->add_setting('copyright_visibility',array(
		'default'=>true,
		'transport'=>'postMessage'
	));

	$can_customize->add_control('copyright_visibility',array(
		'section'=>'general_section',
		'label'=>'copyright visibilty',
		'type'=>'checkbox'
	));

//----------------color section---------------------------------------
	$can_customize->add_section('color_section',array(
		'title'=>'Color section',
		'priority'=>20
	));
	$can_customize->add_setting('copyright_color',array(
		'default'=>'green',
		'transport'=>'postMessage'
	));
	$can_customize->add_control(
		new WP_Customize_Color_Control($can_customize,'copyright_color',array(
			'section'=>'color_section',
			'label'=>'copyright color',
			'setting'=>''

		))
	);
}
//------------------------------1111111111--------------------------
function scripts_customizer(){
	wp_enqueue_script('customize-api',get_template_directory_uri().'/api/customize-api.js',array('jquery','customize-preview'));

}
add_action('customize_preview_init','scripts_customizer');