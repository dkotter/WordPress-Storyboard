<?php get_header(); ?>
      <section id="banner-bottom">
      	<div class="container">
         	<h1>Car Tips</h1>
            <p>Don't run the risk of buying a used car with costly hidden problems. Get a detailed vehicle history report AND learn what 
            to look for when shopping for a used car.</p>
         </div> <!-- end .container -->
         <iframe src="http://www.facebook.com/plugins/like.php?app_id=130407713718629&amp;href&amp;send=false&amp;layout=standard&amp;width=160&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" style="border:none; overflow:hidden; width:160px; height:40px;"></iframe>
      </section>
   </header> <!-- end #banner -->
   
   <div id="content">
   	<div id="main" role="main">
      	<div class="container">
         	<?php get_search_form(); ?>
				<div class="error">
            	<h1><?php _e('Page Not Found', 'roots'); ?></h1>
					<p><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'roots'); ?></p>
               <p><?php _e('Please try the following:', 'roots'); ?></p>
               <ul> 
                  <li><?php _e('Check your spelling', 'roots'); ?> </li>
                  <li><?php printf(__('Return to the <a href="%s">home page</a>', 'roots'), home_url()); ?></li>
                  <li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'roots'); ?></li>
                  <li><?php _e('Use the search above', 'roots'); ?></li>
               </ul>
            </div> <!-- end .error -->
			</div> <!-- end .container -->
      </div> <!-- end #main -->
		
      <?php get_sidebar(); ?>
      
   </div> <!-- end #content -->
</div> <!-- end #wrap/.container -->

<?php get_footer(); ?>