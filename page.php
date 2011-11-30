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
            <?php while (have_posts()) : the_post(); ?>
         	<article id="post-<?php the_ID(); ?>" class="excerpt">
					<header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div> <!-- end .entry-content -->
				</article>
            <?php endwhile; ?>
         </div> <!-- end .container -->
      </div> <!-- end #main -->
      <?php get_sidebar(); ?>
   <div class="clear"></div>   
   </div> <!-- end #content -->
</div> <!-- end #wrap/.container -->

<?php get_footer(); ?>