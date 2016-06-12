<?php get_header(); ?>

<!-- NAVIGATION STARTS-->
<div class="burger-menu">
    <span class="menu-line menu-top-line"></span>
    <span class="menu-line menu-middle-line"></span>
    <span class="menu-line menu-bottom-line"></span>
</div>
<nav class="top-nav top-nav-single">
    <div class="wrapper-nav main-wrapper-nav">
        <ul class="main-nav">
            <li>
                <a href="http://jennyngo.io">Home</a>
            </li>
            <li>
                <a href="http://jennyngo.io#about">About</a>
            </li>
            <li>
                <a href="http://jennyngo.io#work">Work</a>
            </li>
            <li>
                <a href="http://jennyngo.io#skills">Skills</a>
            </li>
            <li>
                <a href="http://jennyngo.io#contact">Contact</a>
            </li>
        </ul>

        <ul class="social-media footer-nav">
            <li>
                <a href="https://twitter.com/_jennyngo"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="https://ca.linkedin.com/in/jennyngo1"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="https://github.com/ngojenny"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="http://codepen.io/jenobot/"><i class="fa fa-codepen" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="https://medium.com/@_jennyngo"><i class="fa fa-medium" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div> <!-- /.wrapper -->
</nav>

<section class="portfolio-single">
    <?php 
        if(have_posts()) {
            while(have_posts()) {
                the_post();
            ?>
            
            <p class="portfolio-title"><?php the_title() ?></p>
            <div class="main-gallery">
                <?php  
                while(has_sub_field('images')) {
                ?>
                <div class="gallery-item" style="background:<?php echo get_field('background_color') ?>">
                    <?php $portfolioImage = get_sub_field('image') ?>
                    <img src="<?php echo $portfolioImage['url'] ?> " alt="">
                </div>
                <?php   
                }
                ?>
            </div>
            <a class="btn btn-single" href="<?php the_field('view_live')?>">View live</a>
   </section>

   <section class="about-portfolio-single">
        <div class="wrapper">
            <h3>About project</h3>
            <p><?php the_content(); ?></p>

            <?php 
            $tagField = get_field_object('tags');
            $value = $tagField['value'];
            $choices = $tagField['choices'];
            if($value): ?>
            <ul class="tag-single-page wow flipInX">
                <?php foreach( $value as $v ): ?>
                <li>
                    <?php echo $choices[$v]; ?>
                </li>
                <?php endforeach; ?>

            </ul>
            <?php endif; ?>
        </div> <!-- /.wrapper -->
            <?php
            }
        }
    ?>


</section>

<?php get_footer(); ?>

