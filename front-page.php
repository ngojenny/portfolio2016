<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<!-- HEADER STARTS-->
<header id="home">
	<div class="wrapper">
		<h1>Jenny Ngo</h1>
		<h2>Front-End Developer</h2>
	</div> <!-- /.wrapper -->
</header><!--/.header-->

<!-- ABOUT SECTION STARTS -->
<section class="about" id="about">
	<div class="wrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2>About</h2>
			<?php the_content(); ?>
		<?php endwhile; // end the loop?>
	</div> <!-- /.wrapper -->
</section>

<!-- WORK SECTION STARTS -->
<section class="work" id="work">
	<div class="wrapper">
		<h2>Work</h2>
	</div> <!-- /.wrapper -->
</section>

<!-- SKILLS SECTION STARTS -->
<section class="skills" id="skills">
	<div class="wrapper">
		<h2>Skills</h2>
	</div> <!-- /.wrapper -->
</section>

<!-- CONTACT SECTION STARTS -->
<section class="contact" id="contact">
	<div class="wrapper">
		<h2>Contact</h2>
	</div> <!-- /.wrapper -->
</section>
	
<?php get_footer(); ?>