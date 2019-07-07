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
								<p><?php echo wp_trim_words(get_the_content(),'40','');?></p>
								<button><a href="<?php the_permalink(); ?>"><?php echo esc_html__('Read more..')?></a></button>
							</div>
						<?php endwhile; ?>
						</article>
					</div>

<?php get_sidebar(); ?>
	
	
		<div class="full_wrapper">
			<div class="wrapper">
				<footer class="footer_wrap">
					<div class="upper_footer">
						<?php  

						$pagination= get_the_posts_pagination(array(
			                    'show_all'=> false,
			                    'prev_text'=>__('previous','praxis'),
			                    'next_text'=>__('next','praxis'),
			                    'screen_reader_text'=>' ',
			                    
			                        ));
						$pagination = str_replace('navigation pagination', ' ', $pagination);
						
						$pagination =str_replace('nav-links', 'nav-allx', $pagination);
						$pagination = str_replace('span', 'a', $pagination); 
								echo $pagination;
	                    ?>
					</div>
			</footer></div>
			</div>
		

 <?php get_footer(); 
	
?>

