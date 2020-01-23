<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area side-bar-widget-area" role="complementary">
	<div class="contact-us-container">
		<h2>Contact Info</h2>
		<ul>
			<?php
			if ( is_active_sidebar( 'sidebar-2' ) ) : //check the sidebar if used.
				dynamic_sidebar( 'sidebar-2' );  // show the sidebar.
			endif;
			?>
			<li><span class="icon-location"></span> 1490 W Broadway Vancouver, BC V6H 1H5</li>
		</ul>
	</div>
	<div class="business-hours-container">
		<h2>Business Hours</h2>
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) : //check the sidebar if used.
			dynamic_sidebar( 'sidebar-1' );  // show the sidebar.
		endif;
		?>
	</div>
	<div class="archive-sidebar-container">
		<?php
		if ( is_active_sidebar( 'sidebar-3' ) ) : //check the sidebar if used.
			dynamic_sidebar( 'sidebar-3' );  // show the sidebar.
		endif;
		?>
	</div>



</div><!-- #secondary -->
