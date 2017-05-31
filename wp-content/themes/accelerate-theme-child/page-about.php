<?php
/**
 * The template for about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-hero'>
				<?php the_content(); ?>
				<h2><span class="main-color">Accelerate</span> is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br> businesses by making our clients visible and<br> making their customers smile.</h2>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->



	<section class="about-services">
		<div class="site-content">
			<h6>Our Services</h6>
			<p>We take pride in our clients and the content we create for them.<br> Here's a brief overview of our offered services.</p>
			<ul class="featured-about-services">
				<?php query_posts('posts_per_page=4&post_type=about_services');	?>
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


<?php get_footer(); ?>
