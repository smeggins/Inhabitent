<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main top-page-buffer" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'journal' ); ?>
			<ul class="cat-tag-container">
				<li>POSTED IN &#8594 <?php echo get_the_category_list($separator=', ') ?></li>
				<li>TAGGED &#8594 <?php echo get_the_tag_list('',', ') ?></li>
			</ul>

			<div class="single-buttons-container">
				<div class="journal-mini-post-button-container read-more">
					<a href="" class="journal-mini-post-button"><span class="icon-facebook2"></span> LIKE</a>
				</div>
				<div class="journal-mini-post-button-container read-more">
					<a href="" class="journal-mini-post-button"><span class="icon-twitter"></span> TWEET</a>
				</div>
				<div class="journal-mini-post-button-container read-more">
					<a href="" class="journal-mini-post-button"><span class="icon-pinterest"></span> PIN</a>
				</div>
			</div>

			<div class="comments-container">
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
