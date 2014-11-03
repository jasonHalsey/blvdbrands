<?php
/**
 * @package WordPress
 * @subpackage blvd
 */

get_header(); ?>


<div id="main-content" class="main-content">




	<main>
      
      <section class="module parallax parallax-1">
        <div class="container">
          <a href="<?php echo get_page_link( get_page_by_title( "abbot-main" )->ID ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/brand/am.svg" class="shadowed" id="drop-shadow"/></a>
        </div>
      </section>


      <section class="module parallax parallax-2">
        <div class="container">
          <a href="http://cnn.com"><img src="<?php bloginfo('template_directory'); ?>/images/brand/caelum.svg" class="shadowed" id="drop-shadow"/></a>
        </div>
      </section>



      <section class="module parallax parallax-3">
        <div class="container">
          <a href="http://cnn.com"><img src="<?php bloginfo('template_directory'); ?>/images/brand/one_bxwd.svg" class="shadowed" id="drop-shadow"/></a>
        </div>
      </section>


  </main><!-- /main -->


  
</div><!-- #main-content -->

<?php get_footer(); ?>
