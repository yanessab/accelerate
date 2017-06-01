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

			<?php while ( have_posts() ) : the_post();
        $size = "full";
        $icon = get_field ('icon');
        $about_service = get_field ('about_service');
				$service_description = get_field ('service_description');
      ?>

			<article class="about-services">
				<div class="about-service-img">

					<?php if ($icon) { ?>
						<?php echo wp_get_attachment_image( $icon, $size ); ?>
					<?php } ?>


				</div> <!-- about services img sidebar -->

				<aside class="about-services-text">
					<h2><?php echo $about_service; ?></h2>

					<h5><?php echo $service_description; ?></h5>

				</aside> <!-- about services text end -->

			</article>

			<?php endwhile; // end of the loop. ?>

		</div> <!-- site-content -->

	</section> <!-- featured-work -->


<?php get_footer(); ?>
