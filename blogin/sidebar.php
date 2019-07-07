<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogin
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<div class="sidebar_wrapper">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div><!-- #secondary -->
