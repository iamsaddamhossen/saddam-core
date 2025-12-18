<article <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('medium'); ?>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>