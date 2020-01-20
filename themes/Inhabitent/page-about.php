<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<main id="main" class="site-main about-page-container" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

            	<?php the_content() ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

<?php get_footer(); ?>
