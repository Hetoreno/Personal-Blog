<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>
<section id="intro">

        <div class="intro-container">
            <div class="overlay"></div>
            <div class="intro-text">
                <h2>Welcome to my Blog!</h2>
                <p>This is where I will update posts of my current everyday activities like my hobbies or my passion to code. </p>
            </div>
        </div>
        
        <!-- to-top arrow -->
        <a href="#" class="to-top"><i class="fas fa-sort-up"></i></a>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>