<?php
/**
 * @package WordPress
 * @subpackage blvd
 */

get_header(); ?>


<div id="main-content" class="main-content">

	<main>
      
      <section class="module parallax parallax-1">
        <div class="home_container">
          <a href="<?php echo get_page_link( get_page_by_title( "abbot-main" )->ID ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/brand/am.svg" class="" id="drop-shadow"/></a>
        </div>
      </section>


      <section class="module parallax parallax-2">
        <div class="home_container">
          <a href="<?php echo get_page_link( get_page_by_title( "caelum" )->ID ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/brand/caelum.svg" class="" id="drop-shadow"/></a>
        </div>
      </section>



      <section class="module parallax parallax-3">
        <div class="home_container">
         <a href="<?php echo get_page_link( get_page_by_title( "one bxwd" )->ID ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/brand/one_bxwd.svg" class="" id="drop-shadow"/></a>
        </div>
      </section>

  </main><!-- /main -->

  
</div><!-- #main-content -->

<?php get_footer(); ?>
