<?php
/*
Template Name: Home
*/
get_header();
?>

<section class="hero">
    <div class="wrap">

        <h1 class="hero-title"><?php the_title(); ?></h1>

        <div class="hero-content">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>