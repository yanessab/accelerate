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

<section id="primary" class="about-page">
	<div id="content" class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-hero'>
				<?php the_content(); ?>
				<h2><span class="main-color">Accelerate</span> is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br> businesses by making our clients visible and<br> making their customers smile.</h2>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</section><!-- about-page -->



	<section class="services-about-page">
		<div class="site-content">
			<h6>Our Services</h6>
			<p>We take pride in our clients and the content we create for them.<br> Here's a brief overview of our offered services.</p>

			<div class="clearfix">
				<?php query_posts('posts_per_page=4&post_type=about_services');	?>
				<?php while ( have_posts() ) : the_post();
	        $size = "full";
	        $icon = get_field ('icon');
	        $about_service = get_field ('about_service');
	      ?>

				<article class="about-services">
					<div class="about-service-img">

						<?php if ($icon) { ?>
							<?php echo wp_get_attachment_image( $icon, $size ); ?>
						<?php } ?>

					</div> <!-- about services img sidebar -->

					<aside class="about-services-text">
						<h2><?php echo $about_service; ?></h2>

						<?php the_excerpt(); ?>

					</aside> <!-- about services text end -->

				</article> <!-- about services end -->

				<?php endwhile; // end of the loop. ?>
			</div>

			<div id="services-about-footer" class="work-with-us-footer">
				<h3>Interested in working with us?</h3>
				<a class="contact-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
			</div>

		</div> <!-- site-content -->

	</section> <!-- services-about-page -->

<?php get_footer(); ?>
