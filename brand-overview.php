<?php
/*
Template Name: brand-overview
 */

get_header(); ?>


	<div class="brand-container">
		
		<div class="hover-tile-outer abbot_overview">
			<a href="<?php echo get_page_link( get_page_by_title( "abbot-main" )->ID ); ?>"></a>
		  <div class="hover-tile-container">
		    <div class="hover-tile hover-tile-visible">
		    	<div class="hover-logo">
		     		<img src="<?php bloginfo('template_directory'); ?>/images/brand/am_brand_white.svg" class="" />
		 		</div>
		    </div>
		    <div class="hover-tile hover-tile-hidden">
		      <h4>Hidden Copy</h4>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, hic, dolore, labore,provident eligendi fugiat ad exercitationem.</p>
		    </div>
		  </div>
		</div>

		<div class="hover-tile-outer caelum_overview">
			<a href="<?php echo get_page_link( get_page_by_title( "caelum" )->ID ); ?>"></a>
		  <div class="hover-tile-container">
		    <div class="hover-tile hover-tile-visible">
		    	<div class="hover-logo">
		      		<img src="<?php bloginfo('template_directory'); ?>/images/brand/caelum_brand_white.svg" class="" />
		      	</div>
		    </div>
		    <div class="hover-tile hover-tile-hidden">
		      <h4>Hidden Copy</h4>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, hic, dolore, labore,provident eligendi fugiat ad exercitationem.</p>
		    </div>
		  </div>
		</div>

		<div class="hover-tile-outer onebxwd_overview">
			<a href="<?php echo get_page_link( get_page_by_title( "one bxwd" )->ID ); ?>"></a>
		  <div class="hover-tile-container">
		    <div class="hover-tile hover-tile-visible">
		    	<div class="hover-logo">
		      		<img src="<?php bloginfo('template_directory'); ?>/images/brand/onebxwd_brand_white.svg" class="" />
		      	</div>
		    </div>
		    <div class="hover-tile hover-tile-hidden">
		      <h4>Hidden Copy</h4>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, hic, dolore, labore,provident eligendi fugiat ad exercitationem.</p>
		    </div>
		  </div>
		</div>

		<div class="hover-tile-outer pasion_overview">
			<a href="<?php echo get_page_link( get_page_by_title( "pasion" )->ID ); ?>"></a>
		  <div class="hover-tile-container">
		    <div class="hover-tile hover-tile-visible">
		    	<div class="hover-logo">
			      <img src="<?php bloginfo('template_directory'); ?>/images/brand/pasion_brand_white.svg" class="" />
			    </div>
		    </div>
		    <div class="hover-tile hover-tile-hidden">
		      <h4>Hidden Copy</h4>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, hic, dolore, labore,provident eligendi fugiat ad exercitationem.</p>
		    </div>
		  </div>
		</div>	

<!-- 		<div class="hover-tile-outer dg_overview">
			<a href="<?//php echo get_page_link( get_page_by_title( "dylangeorge" )->ID ); ?>"></a>
		  <div class="hover-tile-container">
		    <div class="hover-tile hover-tile-visible">
		    	<div class="hover-logo">
			      <img src="<?//php bloginfo('template_directory'); ?>/images/brand/dg_brand_scroll.svg" class="" />
			    </div>
		    </div>
		    <div class="hover-tile hover-tile-hidden">
		      <h4>Hidden Copy</h4>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, hic, dolore, labore,provident eligendi fugiat ad exercitationem.</p>
		    </div>
		  </div>
		</div> -->

		<div class="hover-tile-outer blvd_overview">
			<a href="<?php bloginfo('url');?>"></a>
		  <div class="hover-tile-container">
		    <div class="hover-tile hover-tile-visible">
		    	<div class="hover-logo">
			      <img src="<?php bloginfo('template_directory'); ?>/images/blvd_brands_logo.png" class="" />
			    </div>
		    </div>
		    <div class="hover-tile hover-tile-hidden">
		      <h4>Back to Home</h4>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, hic, dolore, labore,provident eligendi fugiat ad exercitationem.</p>
		    </div>
		  </div>
		</div>

	</div><!-- end .brand-container -->




<?php get_footer(); ?>