<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>


<!-- HEADER STARTS-->
<header id="home">
	<!-- NAVIGATION STARTS-->
	<nav>
		<div class="wrapper-nav">
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
	<div class="wrapper">
		<div class="header-title">
			<h1>Jenny Ngo</h1>
			<h2>Front-End Developer</h2>	
		</div>
		<img class="notebook" src="wp-content/themes/portfolio2016/images/notebook2.svg" alt="White outline of notebook">
		<img class="iphone" src="wp-content/themes/portfolio2016/images/iphone6.svg" alt="White outline of iPhone6">
		<img class="keyboard" src="wp-content/themes/portfolio2016/images/keyboard.svg" alt="White outline of keyboard">
		<img id="demo" class="paperclip paperclip1" src="wp-content/themes/portfolio2016/images/paperclip.svg" alt="White outline of paperclip">
		<img class="paperclip paperclip2" src="wp-content/themes/portfolio2016/images/paperclip.svg" alt="White outline of paperclip">
		<img class="pencil" src="wp-content/themes/portfolio2016/images/pencil.svg" alt="White outline of mechanical pencil">
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
	<div class="flex-container">
		<?php 
			$portfolioArgs = array(
				'post_type' => 'portfolio',
				'posts_per_page' => 4,
				'order' => 'ASC'
			); 
			$portfolioQuery = new WP_Query($portfolioArgs);
				if($portfolioQuery->have_posts()){
					while($portfolioQuery->have_posts()) {
						$portfolioQuery->the_post();
						?>
						<div class="portfolio-piece" style="background:<?php echo get_field('background_color') ?>;">
							<h3><?php the_title() ?></h3>
						

							<div class="portfolio-image">
								<img src="<?php the_post_thumbnail_url('large'); ?>" alt="Macbook Pro displaying header of Project">
							</div>
							<p class="buzz"><?php the_field('buzz_words') ?></p>
							<p><?php the_field('short_desc') ?></p>

							<div class="portfolio-overlay">
								<a class="btn btn-front btn-live" href="<?php the_permalink() ?>">Details</a>
								<a class="btn btn-front btn-live" href="">View live</a>
							</div>
						</div>
					<?php
					}
				}
		?>
	</div> <!-- /.flex-container -->
</section>

<!-- SKILLS SECTION STARTS -->
<section class="skills" id="skills">
	<div class="wrapper clearfix">
		<h2 class="wow fadeInUp">Skills</h2>
		<h3 class="wow fadeInUp">I know...</h3>
			<div class="container container-know wow fadeInUp clearfix">
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-html5"></span>
					</div>
					<div class="back">
						<p>HTML5</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-css3"></span>
					</div>
					<div class="back">
						<p>CSS3</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-javascript_badge"></span>
					</div>
					<div class="back">
						<p>Javascript</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-jquery"></span>
					</div>
					<div class="back">
						<p>Jquery</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-wordpress"></span>
					</div>
					<div class="back">
						<p>Wordpress</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-php"></span>
					</div>
					<div class="back">
						<p>PHP</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-sass"></span>
					</div>
					<div class="back">
						<p>Sass</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-github_alt"></span>
					</div>
					<div class="back">
						<p>Github</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-gulp"></span>
					</div>
					<div class="back">
						<p>Gulp</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-responsive"></span>
					</div>
					<div class="back">
						<p>Responsive</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-sublime"></span>
					</div>
					<div class="back">
						<p>Sublime</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<i class="fa fa-diamond" aria-hidden="true"></i>
					</div>
					<div class="back">
						<p>Sketch</p>
					</div>
				</div>
			</div> <!-- /.container -->
		
		
		<h3 class="wow fadeInUp">I want to learn...</h3>
			<div class="container container-learn wow fadeInUp clearfix">
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-ruby"></span>
					</div>
					<div class="back">
						<p>Ruby</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-ruby_on_rails"></span>
					</div>
					<div class="back">
						<p>Rails</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-nodejs_small"></span>
					</div>
					<div class="back">
						<p>Node.js</p>
					</div>
				</div>
				<div class="skills-item">
					<div class="front">
						<span class="devicons devicons-angular"></span>
					</div>
					<div class="back">
						<p>AngularJS</p>
					</div>
				</div>
			</div> <!-- /.container -->
	</div> <!-- /.wrapper -->
</section>

<!-- CONTACT SECTION STARTS -->
<section class="contact" id="contact">
	<img class="tinphone" src="wp-content/themes/portfolio2016/images/tinphone.svg" alt="Outline of tin cans connected with string">
	<div class="wrapper">
		<h2>Contact</h2>
		<div class="flex-container">
			<div class="contact-info">
				<div class="contact-method">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<p>hello@jennyngo.io</p>
				</div>
				<div class="contact-method">
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<p>@_jennyngo</p>
				</div>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]') ?>
		</div> <!-- /.contact -->
		<p class="sideways">Drop me a line</p>
	</div> <!-- /.wrapper -->
</section>
	
<?php get_footer(); ?>