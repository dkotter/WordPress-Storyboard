<aside id="sidebar" role="complementary">
   <ol>
      <?php
		$i = 1; 
		while ( have_posts() ) : the_post(); ?>
      <li><?php echo $i; ?></li>
      <?php $i++;
		endwhile; ?>
   </ol>
</aside>