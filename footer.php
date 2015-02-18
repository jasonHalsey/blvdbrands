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
			      <li><a href="<?php echo get_page_link( get_page_by_title( '/story' )->ID ); ?>">Story</a></li>

			      <li><a href="<?php echo get_page_link( get_page_by_title( '/our-brands' )->ID ); ?>">Brands</a></li>
			      <li><a href="<?php echo get_page_link( get_page_by_title( '/contact-us' )->ID ); ?>">Contact</a></li>
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

