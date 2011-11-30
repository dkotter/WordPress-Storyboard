<?php get_header(); ?>
      <section id="banner-bottom">
      	<div class="container">
         	<h1>Car Tips</h1>
            <p>Don't run the risk of buying a used car with costly hidden problems. Get a detailed vehicle history report AND learn what 
            to look for when shopping for a used car.</p>
         </div> <!-- end .container -->
         <iframe src="http://www.facebook.com/plugins/like.php?app_id=130407713718629&amp;href&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:160px; height:40px;" allowTransparency="true"></iframe>
      </section>
   </header> <!-- end #banner -->
   
   <div id="content">
   	<div id="main" role="main">
      	<div class="container">
            <h1><?php _e('Search Results for', 'roots'); ?> <?php echo get_search_query(); ?></h1>
            <?php get_template_part('loop', 'search'); ?>
         </div> <!-- end .container -->
      </div> <!-- end #main -->
      <?php get_sidebar(); ?>
   </div> <!-- end #content -->
</div> <!-- end #wrap/.container -->

<?php get_footer(); ?>