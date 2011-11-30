<?php get_header(); ?>
	
   <?php get_sidebar(); ?>
<?php
query_posts( array( 'posts_per_page' => 1, 'order' => 'ASC', 'paged' => get_query_var('paged') ) ); 
while ( have_posts() ) : the_post(); 
	$storyboard = get_post_meta($post->ID, '_dkk_story_board', $single = true);
	$script = get_post_meta($post->ID, '_dkk_script', $single = true);
	$shot = get_post_meta($post->ID, '_dkk_shot_description', $single = true);
	$soundFX = get_post_meta($post->ID, '_dkk_sound_fx', $single = true);
	$music = get_post_meta($post->ID, '_dkk_music_file', $single = true);
	$storyboardLink = explode('-600x165', $storyboard);
?>
	<div class="container">
   <article id="storyboard">
   	<header class="info">
      	<p class="left">Client Storyboard:</p>
         <h1 class="right">CARFAX - Super Hero's Campaign - "Batman"</h1>
      </header>
      <div class="image">
      	<a href="<?php echo $storyboardLink[0] . $storyboardLink[1]; ?>"><img src="<?php echo $storyboard; ?>" alt="Storyboard"></a>
      	<a href="<?php echo $storyboard; ?>"><img src="<?php echo $storyboard; ?>" width="600" height="166" alt="Shot 1"></a>
      </div> <!-- end .image -->
      <?php if ($script) : ?>
      <div class="info">
      	<p class="left">Script:</p>
         <p class="right"><?php echo $script; ?></p>
      </div>
      <?php endif;
      if ($shot) : ?>
      <div class="info">
      	<p class="left">Shot Description:</p>
         <p class="right"><?php echo $shot; ?></p>
      </div>
      <?php endif;
      if ($soundFX) : ?>
      <div class="info">
      	<p class="left">Sound FX:</p>
         <p class="right"><?php echo $soundFX; ?></p>
      </div>
      <?php endif;
      if ($music) : ?>
      <div class="audio">
      	<?php #mp3j_put( '[mp3j track="http://localhost:8888/storyboard/wp-content/themes/storyboard/adolescents.mp3"]' ); ?>
         <?php echo do_shortcode('[audio src="'.$music.'"]'); ?>
      </div> <!-- end .audio -->
      <?php endif; ?>
   </article>
   <?php endwhile; ?>
	<div id="post-nav">
		<div class="post-next"><?php next_posts_link( __( 'NEXT', 'storyboard' ) ); ?></div>
	</div>
   </div> <!-- end .container -->
</div> <!-- end #center -->

<?php get_footer(); ?>