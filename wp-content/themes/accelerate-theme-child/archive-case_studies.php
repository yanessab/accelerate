<?php
/**
 * The template for displaying archive page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post();
        $size = "full";
        $services = get_field ('services');
        $image_1 = get_field ('image_1');
      ?>

      <article class="case-study">
        <aside class="case-study-sidebar">
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
          <h5><?php echo $services; ?></h5>

          <?php the_excerpt(); ?>

          <p><strong><a href="<?php the_permalink();?>">View Project</a></strong></p>

        </aside> <!-- case study sidebar -->

        <div class="case-study-images">
          <a href="<?php the_permalink();?>">
            <?php if ($image_1) { ?>
              <?php echo wp_get_attachment_image( $image_1, $size ); ?>
            <?php } ?>
          </a>

        </div> <!-- case study sidebar images -->

      </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
