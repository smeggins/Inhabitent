<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
if ( ! is_active_sidebar( 'sidebar-1' ) || ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>


			</div>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class='contactinfo'>
						<ul>
							<li class="footer-brand-color">CONTACT INFO</li>
							<?php
							if ( is_active_sidebar( 'sidebar-2' ) ) : //check the sidebar if used.
								dynamic_sidebar( 'sidebar-2' );  // show the sidebar.
							endif;
							?>
							<li><span class="icon-facebook2"></span> <span class="icon-twitter"></span> <span class="icon-google-plus2"></span></li>
						</ul>
					</div>
					<div class='Buisnesshours'>
						<ul>
							<li class="footer-brand-color">BUISNESS HOURS</li>
							<?php
							if ( is_active_sidebar( 'sidebar-1' ) ) : //check the sidebar if used.
								dynamic_sidebar( 'sidebar-1' );  // show the sidebar.
							endif;
							?>
						</ul>

					</div>
					<div class='branding'>
						<div class='footerlogocontainer'>
							<a href='http://localhost/InhabitentSite/'></a>
						</div>
					</div>
					<div class='copyrightcontainer'>COPYRIGHT © 2019 INHABITENT</div>
					
				</div>
			</footer>
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
