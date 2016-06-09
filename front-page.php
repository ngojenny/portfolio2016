<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

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
							<p><?php the_title() ?></p>
						

							<div class="portfolio-image">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="Macbook Pro displaying header of Project">
							</div>
							<p><?php the_field('buzz_words') ?></p>
							<p><?php the_field('short_desc') ?></p>

							<div class="portfolio-overlay">
								<a class="btn btn-front btn-live" href="<?php the_permalink() ?>">More info</a>
								<a class="btn btn-front btn-live" href="">View live</a>
							</div>
						</div>
					<?php
					}
				}
		?>

</section>

<!-- SKILLS SECTION STARTS -->
<section class="skills" id="skills">
	<div class="wrapper clearfix">
		<h2 class="wow fadeInUp">Skills</h2>
		<h3 class="wow fadeInUp">I know...</h3>
			<div class="container wow fadeInUp clearfix">
				<div class="skills-item">
					<span class="devicons devicons-html5"></span>
					<p>HTML5</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-css3"></span>
					<p>CSS3</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-wordpress"></span>
					<p>Wordpress</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-sass"></span>
					<p>Sass</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-github_alt"></span>
					<p>Github</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-javascript_badge"></span>
					<p>Javascript</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-jquery"></span>
					<p>Jquery</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-gulp"></span>
					<p>Gulp</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-responsive"></span>
					<p>Responsive</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-sublime"></span>
					<p>Sublime</p>
				</div>
			</div> <!-- /.container -->
		
		
		<h3 class="wow fadeInUp">I want to learn...</h3>
			<div class="container wow fadeInUp clearfix">
				<div class="skills-item">
					<span class="devicons devicons-ruby"></span>
					<p>Ruby</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-ruby_on_rails"></span>
					<p>Rails</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-nodejs_small"></span>
					<p>Node.js</p>
				</div>
				<div class="skills-item">
					<span class="devicons devicons-angular"></span>
					<p>AngularJS</p>
				</div>
			</div>
		</div>
	</div> <!-- /.wrapper -->
</section>

<!-- CONTACT SECTION STARTS -->
<section class="contact" id="contact">
	<div class="wrapper">
		<h2>Contact</h2>
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
		<p>Drop me a line</p>
		<?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]') ?>
	</div> <!-- /.wrapper -->
</section>
	
<?php get_footer(); ?>