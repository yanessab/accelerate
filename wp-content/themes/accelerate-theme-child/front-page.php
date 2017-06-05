<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- <pre></*?php print_r($wp_query); exit; ?*/></pre> -->

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->



	<section class="featured-work">
		<div class="site-content">
			<h6>Featured Work</h6>

			<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC');	?>
					<?php while ( have_posts() ) : the_post();
						$image_1 = get_field ('image_1');
						$size = "front-page-featured-work";
					?>
					<li class="individual-featured-work">
						<figure>
							<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>
							<!-- loop content here -->
							<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					</li>

					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>

		</div> <!-- site-content -->

	</section> <!-- featured-work -->

	<section class="our-services">
		<h6 class="our-services-frontpage">Our Services</h6>
		<ul class="frontpage-services">
			<?php query_posts('posts_per_page=4&post_type=about_services');	?>
			<?php while ( have_posts() ) : the_post();
				$icon = get_field ('icon');
				$size = "full";
			?>
			<li class="individual-services">
				<figure>
					<?php echo wp_get_attachment_image($icon, $size); ?>
				</figure>
					<!-- loop content here -->
					<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
			</li>

			<?php endwhile; ?>
		</ul>
	</section> <!-- end our services frontpage -->


	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
					<?php query_posts('posts_per_page=1'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
		    			<!-- loop content here -->
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
							<a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>

	  				<?php endwhile; ?>
			</div> <!-- recent blog posts -->

			<div class="recent-twitter">
					<h4>Recent Tweet</h4>
						<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
							<div id="secondary" class="widget-area" role="complementary">
								<?php dynamic_sidebar( 'sidebar-2' ); ?>
								<a class="follow-us-link" href="https://twitter.com/iPlanetUK">Follow Us <span>&rsaquo;</span></a>
							</div>
						<?php endif; ?>
					<?php wp_reset_query(); ?>

			</div> <!-- recent twitter -->

		</div> <!-- site content -->

	</section><!-- recent posts -->

<?php get_footer(); ?>
