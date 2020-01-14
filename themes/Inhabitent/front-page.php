<?php get_header() ?>

<!-- <div class=posts-container> -->

    <?php while ( have_posts() ) : the_post(); ?>

        <div class='posts-container home-hero'>
            <?php the_content() ?>
        </div>

    <?php endwhile; // End of the loop. ?>

<!-- </div> -->

<?php get_footer() ?>