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

<header>
	<div class="container">
		<h1>Jenny Ngo</h1>
		<h2>Front-End Developer</h2>
		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'primary'
		)); ?>
	</div> <!-- /.container -->
</header><!--/.header-->

