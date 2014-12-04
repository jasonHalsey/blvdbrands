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
			    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="">
			  </div>
			    <ul>
			      <li><a href="<?php echo get_page_link( get_page_by_title( "story" )->ID ); ?>">Story</a></li>
			      <li><a href="<?php echo get_page_link( get_page_by_title( "brands" )->ID ); ?>">Brands</a></li>
			      <li><a href="<?php echo get_page_link( get_page_by_title( "contact" )->ID ); ?>">Contact</a></li>
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

