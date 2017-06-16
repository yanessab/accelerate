<?php
/**
 * The template for displaying 404 page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

        <div class="page-404 clearfix">

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.png" class="map-404"/>
					<div class="sidebar-404">
		        <h2>WHOOOPS, Took a wrong Turn...</h2>
						<p>Sorry, this page no longer exists, has never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
						<p>Feel free to take a look around our <a href="http://localhost:8888/accelerate/blog/" class="blog-link">blog</a> or some of our <a href="http://localhost:8888/accelerate/blog/" class="work-link">featured work</a>.</p>
					</div>
				</div>


		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
