<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<?php green_accelerate_footer(); ?>
					<p class="footer-desc"><a href="<?php echo home_url(); ?>"><span class="main-color"><?php bloginfo( 'name' ); ?></span></a> <?php bloginfo('description');?>
					<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>

			<nav class="social-media-navigation" role="navigation">

					<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>

				<!-- <ul class="social-btns">

					<li>
						<a href="https://www.linkedin.com/in/yanessaa/" class="soc-icon ln">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-linkedin fa-stack-1x fa-inverse" aria-hidden="true" ></i>
						</span></a>
					</li>

					<li>
						<a href="https://www.facebook.com/yanessaalvarezbowser" class="soc-icon fb">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse" aria-hidden="true" ></i></a>
						</span></a>
					</li>

					<li>
						<a href="https://www.twitter.com/yanessa/" class="soc-icon in">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse" aria-hidden="true" ></i>
						</span></a>
					</li>

				</ul> -->
			</nav>


			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
