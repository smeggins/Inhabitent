<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="contact-us-container">
		<h2>Contact Info</h2>
		<ul>
			<li><span class="icon-phone"></span> <span class="sidebar-branding">778-456-7891</span></li>
			<li><span class="icon-envelop"></span> <span class="sidebar-branding">info@inhabitent.com</span></li>
			<li><span class="icon-location"></span> 1490 W Broadway Vancouver, BC V6H 1H5</li>
		</ul>
	</div>
	<div class="business-hours-container">
		<h2>Business Hours</h2>
		<ul>
			<li><b>Monday-Friday:</b> 9am to 5pm</li>
			<li><b>Saturday:</b> 10am to 2pm</li>
			<li><b>Sunday:</b> Closed</li>
		</ul>
	</div>
	<div>
		<h2>Archives</h2>
		<ul>
			<li>
				<a>April 2016</a>
			</li>
			<li>
				<a>March 2016</a>
			</li>
		</ul>
	</div>

</div><!-- #secondary -->
