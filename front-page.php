<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>


		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  <h2>About</h2>
		  <?php the_content(); ?>

		<?php endwhile; // end the loop?>
	
<?php get_footer(); ?>