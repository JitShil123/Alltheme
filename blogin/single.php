<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogin
 */
get_header();
?>


<!---------------------content------------------------>
		<div class="full_wrapper">
			<div class="wrapper">
			     <div class="content_wrapper">
					<div class="article_wrapper">
						<article class="article_content">
						<?php while(have_posts()):the_post();?>
							<div class="article1">
								<?php the_post_thumbnail(); ?>
								<h2><?php the_title() ;?></h2>
								<p><?php the_content();?></p>
								
							</div>
						<?php endwhile; ?>
						</article>
					</div>

<?php get_sidebar(); ?>
	
 <?php get_footer(); 
	
?>

