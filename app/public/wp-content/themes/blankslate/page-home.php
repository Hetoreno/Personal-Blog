<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Intro to Home Page -->

    <section id="intro">
    <div class="intro-container" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 120%), url(<?php the_field('hero_image'); ?>);">
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
<div class="posts">
  <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 10
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post(); 
      $image = get_field('post_image'); // replace 'post_image' with your field name
      ?>

      
        <div class="post">
            <div class="post-img">
                <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
            </div>
            <div class="post-description">
                <h2><?php the_title(); ?></h2>
                <div><?php the_excerpt(); ?></div>
            </div>

        </div>
      <?php endwhile;
    endif;
    wp_reset_postdata();
  ?>
</div>
























<?php get_footer(); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>