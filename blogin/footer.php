<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogin
 */

?>

	<!--------------------footer---------------------->			
			
					<div class="main_foot ">
						<h2><?php bloginfo('title'); ?></h2>
						<p><?php echo get_theme_mod('copy_right');?></p>
					</div>
		<?php dynamic_sidebar('fwidget'); ?>

	
	
	
<!--
		<div class="full_wrapper">
			<div class="wrapper">
			
			
			</div>
		</div>


-->
<script src="<?php echo get_template_directory_uri();?>/assets/js/fontawesome.js"></script>
<?php wp_footer(); ?>


</body>
</html>
