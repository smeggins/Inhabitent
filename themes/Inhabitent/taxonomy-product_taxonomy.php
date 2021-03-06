<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main store-container" role="main">

		<?php if ( have_posts() ) : ?>

			<h1 class="page-header">
				<?php
					single_term_title();
				?>
			</h1>
			<?php the_archive_description( '<div class="taxonomy-container">', '</div>' ); ?>


            <div class="products-mini-posts-container">
			
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="products-mini-posts">
                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>" class="products-mini-post-image">
                        <?php the_post_thumbnail()?>
                    </a>
                    <div class="products-mini-post-content">
                        <h3 class="products-mini-post-title">
                            <?php the_title() ?>
                        </h3>
                        <div class="dotted-line"></div>
                        <p class="products-mini-post-price">
                            <?php echo get_post_meta($post->ID, 'price', true); ?>
                        </p>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

