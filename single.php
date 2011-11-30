<?php get_header(); ?>
</header>
   <div id="content">
   	<div id="main" role="main">
      	<div class="container">
         	<?php get_search_form(); ?>
            <?php while (have_posts()) : the_post(); ?>
         	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<h2><?php the_title(); ?></h2>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div> <!-- end .entry-content -->
				</article>
            <?php endwhile; ?>
            <?php comments_template( '', true ); ?>
         </div> <!-- end .container -->
      </div> <!-- end #main -->
		
      <?php get_sidebar(); ?>
   <div class="clear"></div>     
   </div> <!-- end #content -->
</div> <!-- end #wrap/.container -->

<?php get_footer(); ?>