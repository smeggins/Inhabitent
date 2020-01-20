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

            <h1> SHOP STUFF </h1>
            
            <?php 
                $args = array( 'taxonomy' => 'Product_taxonomy', 'hide_empty' => false );
                $terms = get_terms( $args ); 
                
                    if ( $terms ) {
                        echo '<div class="taxonomy-container">';
                            foreach ( $terms as $term ) {
                                    echo '<div class="taxonomy-button-container">';
                                        echo '<a href="' . get_term_link( $term ) . '" class="taxonomy-button">' . $term->name . '</a>';
                                    echo '</div>';
                            };
                        echo '</div>';
                    }
            ?>

            <?php $args = array('orderby' => 'title',
                                'order'   => 'ASC',
                                'post_type' => 'product_type',  
                                'posts_per_page' => 16,);
                $query = new WP_Query( $args ); ?>
            <div class="products-mini-posts-container">
            
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

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
                <?php wp_reset_postdata(); ?>
            </div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
