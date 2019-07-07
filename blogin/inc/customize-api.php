<?php 
add_action('customize_register','customizer');
function customizer($can_customize){
	$can_customize->add_section('footer_section',array(
		'title' =>'Footer section',
		'priority' => 10
	));

	$can_customize ->add_setting('copy_right',array(
		'default' =>'@copy right reserved by Physics',
		'transport' => 'refresh'
	));

	$can_customize-> add_control('copy_right',array(
		'section'=> 'footer_section',
		'label'=>'Copy right text',
		'type'=>'text'

	));

	$can_customize ->add_setting('fb',array(
		'default' =>'facebook.com',
		'transport' => 'refresh'
	));

	$can_customize-> add_control('fb',array(
		'section'=> 'footer_section',
		'label'=>'Facebook link',
		'type'=>'link'

	));


	
}