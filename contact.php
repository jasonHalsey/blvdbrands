<?php
/*
Template Name: contact_us
 */

get_header(); ?>


<div id="main-content" class="main-content">
	<section class="contact-mod contact-banner">
		<img src="<?php bloginfo('template_directory'); ?>/images/contact_banner.jpg" />
	</section>

	<section class="contact-mod contact-row">
		<a href="mailto:sales@blvdbrandsllc.com"></a>
		<div class="contact_path">
			<div class="icon_contact outline-outward">
				<span class="sales_icon"><img src="<?php bloginfo('template_directory'); ?>/images/sales_icon.svg" /></span>
			</div>
			<h2>sales</h2>
			<p>sales@blvdbrandsllc.com</p>
		</div>

		<div class="contact_path">
			<a href="mailto:pr@blvdbrandsllc.com"></a>
			<div class="icon_contact outline-outward">
				<span class="pr_icon"><img src="<?php bloginfo('template_directory'); ?>/images/pr_icon.svg" /></span>
			</div>
			<h2>pr</h2>
			
			<p>pr@blvdbrandsllc.com</p>
		</div>

		<div class="center_path">
			<a href="https://maps.google.com?daddr=1901+Avenue+of+the+Stars+%23630,+Los+Angeles,+CA+90067" target="_blank"></a>
			<div class="icon_contact outline-outward">
				<a href="https://maps.google.com?daddr=1901+Avenue+of+the+Stars+%23630,+Los+Angeles,+CA+90067"> </a>
				<span class="blvd_icon"><img src="<?php bloginfo('template_directory'); ?>/images/blvd_icon.svg" /></span>
			
			</div>
			<h2>headquarters</h2>
			<p>1901 Avenue of the Stars, Ste 630</p>
			<p>Century City CA, 90067</p>
		</div>

		<div class="contact_path">
			<a href="tel://1-310-277-4160"></a>
			<div class="icon_contact outline-outward">
				<span class="phone_icon"><img src="<?php bloginfo('template_directory'); ?>/images/phone_icon.svg" /></span>
			</div>
			<h2>phone</h2>
			<p>310-277-4160</p>
		</div>

		<div class="contact_path">
			<a href="mailto:info@blvdbrandsllc.com"></a>
			<div class="icon_contact outline-outward">
				<span class="email_icon"><img src="<?php bloginfo('template_directory'); ?>/images/email_icon.svg" /></span>
			</div>
			<h2>email</h2>
			<p>info@blvdbrandsllc.com</p>
		</div>

	</section>

	<section class="contact-mod">
		<?php
			echo do_shortcode("[wpgmza id='1']");
		?>
	</section>
  
</div><!-- #main-content -->

<?php get_footer(); ?>