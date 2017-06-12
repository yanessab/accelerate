<article id="post-<?php the_ID(); ?>" class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
			<h3 class="entry-time"><?php the_date(); ?></h3>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-summary">
			<figure>
			  <?php if ( has_post_thumbnail() ) : ?>
			    <?php the_post_thumbnail('full'); ?>
			  <?php endif; ?>
			</figure>
			<?php the_excerpt() ?>
			<a href="<?php the_permalink() ?>" class="read-more">Read More <span>»<span></a>
		</div>
		<footer class="entry-footer">
			<div class="entry-meta">
				<span class="entry-terms comments author">
						Written by <?php the_author_posts_link(); ?>
						|
						Posted in <?php the_category(', '); ?>
						|
					<?php echo get_comments_number(); ?> comments</span>
			</div>
		</footer>
	</div>
</article>
