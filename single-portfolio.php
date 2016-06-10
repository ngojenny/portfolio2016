<?php get_header(); ?>

<!-- NAVIGATION STARTS-->
<nav>
    <ul class="main-nav">
        <li>
            <a href="http://localhost:3000/portfolio">Home</a>
        </li>
        <li>
            <a href="http://localhost:3000/portfolio#about">About</a>
        </li>
        <li>
            <a href="http://localhost:3000/portfolio#work">Work</a>
        </li>
        <li>
            <a href="http://localhost:3000/portfolio#skills">Skills</a>
        </li>
        <li>
            <a href="http://localhost:3000/portfolio#contact">Contact</a>
        </li>
    </ul>

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
            <a class="btn btn-single" href="">View live</a>
            <div class="wrapper">
                <h3>About project</h3>
                <p><?php the_content(); ?></p>

                <?php 
                $tagField = get_field_object('tags');
                $value = $tagField['value'];
                $choices = $tagField['choices'];
                if($value): ?>
                <ul class="tag-single-page">
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

