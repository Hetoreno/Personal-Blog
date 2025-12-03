<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Intro to Home Page -->

    <section id="intro">
    <div class="intro-container" style="background-image: url(<?php the_field('hero_image'); ?>);">
        <div class="overlay"></div>
        <div class="intro-text">
            <h2><?php echo esc_html( get_field('hero_title') ); ?></h2>
            <p>This is where I will update posts of my current everyday activities like my hobbies or my passion to code. </p>
        </div>
    </div>
    <!-- to-top arrow -->
    <a href="#" class="to-top"><i class="fas fa-sort-up"></i></a>
</section>


<!-- Article Section -->
<?php the_content(); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>