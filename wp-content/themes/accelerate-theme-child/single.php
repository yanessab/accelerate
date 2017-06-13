<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="blog-page site-content">

	<section class="single-page">
		<div class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>

		<?php get_sidebar(); ?>

		<div id="navigation" class="container">
			<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
	    </div>
	</section>

</section>

<?php get_footer(); ?>
