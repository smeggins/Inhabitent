<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main find-us-page-container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<h1>
				<?php the_title() ?>
			</h1>
            <!-- <div class="map-container"> -->
                <iframe class="map" src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683120380863!2d-123.14036234931521!3d49.2634517799535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1460954232707' frameborder="0" ></iframe>
			<!-- </div> -->

                    <?php the_content() ?>

			<?php endwhile; // End of the loop. ?>

			<form method="post" class="user-input">
				<p>name <span class="mandatory">*</span></p>
				<input name="name">
				<p>email <span class="mandatory">*</span></p>
				<input name="email">
				<p>subject <span class="mandatory">*</span></p>
				<input name="subject">
				<p>message <span class="mandatory">*</span></p>
				<textarea name="message" class="user-input-message" cols="40" rows="10"></textarea>
			</form>

			<div class="submit-button">
				<a class="">submit</a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
