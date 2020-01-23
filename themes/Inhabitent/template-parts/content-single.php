<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-product-container">
		<div class="single-image-container">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div>
		<div class="single-content-container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p class="price">
					<?php echo CFS()->get( 'price' ); ?>
			</p>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>

			</div>
			<div class="single-buttons-container">
				<div class="journal-mini-post-button-container read-more single-product-button">
					<a href="" class="journal-mini-post-button"><span class="icon-facebook2"></span> LIKE</a>
				</div>
				<div class="journal-mini-post-button-container read-more single-product-button">
					<a href="" class="journal-mini-post-button"><span class="icon-twitter"></span> TWEET</a>
				</div>
				<div class="journal-mini-post-button-container read-more single-product-button">
					<a href="" class="journal-mini-post-button"><span class="icon-pinterest"></span> PIN</a>
				</div>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
