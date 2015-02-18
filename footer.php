<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage blvd
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer footer-2" role="contentinfo">
			<div id="footer-container">	
			  <div class="footer-logo">
			    <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory'); ?>/images/brand/blvd_brands_icon.png" class="" /></a>
			  </div>
			    <ul>
	     		  <li><a href="story">Story</a></li>
			      <li><a href="our-brands">Brands</a></li>
			      <li><a href="contact-us">Contact</a></li>
			    </ul>

			    <div class="footer-secondary-links">
			      
			    </div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<div class="push"></div>


	<?php wp_footer(); ?>
</body>
</div><!-- #sticky-footer -->
</html>

