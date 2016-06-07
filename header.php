<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jenny Ngo | Front-End Developer</title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- NAVIGATION STARTS-->
<nav>
	<div class="wrapper">
		<ul class="main-nav">
			<li>
				<a href="#home">Home</a>
			</li>
			<li>
				<a href="#about">About</a>
			</li>
			<li>
				<a href="#work">Work</a>
			</li>
			<li>
				<a href="#skills">Skills</a>
			</li>
			<li>
				<a href="#contact">Contact</a>
			</li>
		</ul>
	</div> <!-- /.wrapper -->
</nav>

