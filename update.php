<?php
/*
Template Name: Update Template
*/

$page = $_GET['page'];
?>

<?php query_posts( array( 'posts_per_page' => 1, 'order' => 'ASC', 'paged' => $page ) ); 
while ( have_posts() ) : the_post(); 
	$storyboard = get_post_meta($post->ID, '_dkk_story_board', $single = true);
	$script = get_post_meta($post->ID, '_dkk_script', $single = true);
	$shot = get_post_meta($post->ID, '_dkk_shot_description', $single = true);
	$soundFX = get_post_meta($post->ID, '_dkk_sound_fx', $single = true);
	$music = get_post_meta($post->ID, '_dkk_music_file', $single = true);
	$storyboardLink = explode('-600x165', $storyboard);
?>
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
         <?php echo do_shortcode('[audio src="'.$music.'"]'); ?>
      </div> <!-- end .audio -->
      <?php endif; ?>
   </article>
   <?php endwhile; ?>
   <?php $page = $_GET['page']; ?>
	<div id="post-nav">
	<?php if ($page != 1) : ?>
		<div class="post-previous"><a href="<?php echo get_site_url() . '/'; echo $page - 1; ?>/">PREVIOUS</a></div>
  	<?php endif; ?>
  	<?php if ($wp_query->max_num_pages > $page) : ?>
		<div class="post-next"><a href="<?php echo get_site_url() . '/'; echo $page + 1; ?>/">NEXT</a></div>
  	<?php endif; ?>
	</div>
   
   <script>
	jQuery(document).ready(function() {
		jQuery.ajaxSetup({cache:false});
		jQuery('#post-nav a').click(function(e) {
			e.preventDefault();
			
			var page = jQuery(this).attr('href');
			page = page.split('/');
			page = page[5];
			//page = page.charAt(page.length-2);
			page = page.charAt(page.length-2);
			var data = '?page=' + page;
			
			jQuery('.container').html('<img src="assets/ajax-loader.gif" alt="Loading...">');
			jQuery('.container').fadeOut('slow', function() {
				jQuery(this).load('update/' + data, function() {
					jQuery(this).fadeIn('slow');
				});
				return false;
			});
			
			jQuery('#sidebar li').removeClass();
			jQuery('#sidebar li').filter(function() {
				return jQuery(this).text() === page;
			}).addClass('active');
		});
	});
	</script>