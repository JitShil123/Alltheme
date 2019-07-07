<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogin
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<div class="full_wrapper header_bg">
			<div class="wrapper">
				<header>
					<div class="header_wrapper">
						<div class="logo floatleft">
							<h2><?php bloginfo('name');?></h2>
						</div>
						
							<div class="menu floatright">

								<?php 
								if(function_exists('wp_nav_menu')){

									wp_nav_menu(array(
									'theme_location'=> 'menu_menu',
									
								));
								}

									
								
								?>
							</div>	
							<!-- <ul>
									<li><a href="#">Journal</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Work</a></li>
									<li><a href="#">Contact</a></li>
								</ul> -->	
							
						
					</div>
				</header>
			</div>
		</div>