<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) : ?>
	<div class="notice">
		<p class="bottom"><?php _e('Sorry, no results were found.', 'roots'); ?></p>
	</div>
	<?php get_search_form(); ?>	
	
<?php endif; ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>">
			<header>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<time pubdate datetime="<?php the_time('c'); ?>"><?php printf(__('Posted on %s at %s.', 'roots'), get_the_time('l, F jS, Y'), get_the_time()); ?></time>
			</header>
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
			<footer>
				<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
			</footer>
		</article>

		<?php comments_template('', true); ?>

<?php endwhile; // End the loop ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
	<nav id="post-nav">
		<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'roots' ) ); ?></div>
		<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'roots' ) ); ?></div>
	</nav>
<?php endif; ?>
