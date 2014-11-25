
jQuery(document).ready(function() {
    var $header = $("header.navigation"),
        $clone = $header.before($header.clone().addClass("clone"));
    jQuery('header.navigation').addClass("semi-trans");
    jQuery(window).on("scroll", function() {
        var fromTop = $(window).scrollTop();
        // console.log(fromTop);
        jQuery("body").toggleClass("down", (fromTop > 100));
        jQuery('header.navigation').removeClass("semi-trans", (fromTop > 120));
        jQuery('header.navigation').toggleClass("very-trans", (fromTop > 100));
        jQuery('header.navigation').toggleClass("semi-trans", (fromTop < 100));
    });
});


// Change opacity of svg on hover //
$("img#drop-shadow").hover(
  function () {
    $(this).fadeTo( "slow" , 0.5, function() {
    // Animation complete.
  	});
  }, 
  function () {
    $(this).fadeTo( "slow" , 1.0, function() {
    // Animation complete.
  	});
  }
);


jQuery(document).ready(function() {


	jQuery('body').css('background', 'none');
	
	// Refills Navigation Script //

	  var menu = jQuery('#menu-primary');
	  var menuToggle = jQuery('#js-mobile-menu');
	  var signUp = jQuery('.sign-up');

	  jQuery(menuToggle).on('click', function(e) {
	    e.preventDefault();
	    menu.slideToggle(function(){
	      if(menu.is(':hidden')) {
	        menu.removeAttr('style');
	      }
	    });
	  });

	  // underline under the active nav item
	  jQuery(".nav .nav-link").click(function() {
	    jQuery(".nav .nav-link").each(function() {
	      jQuery(this).removeClass("active-nav-item");
	    });
	    jQuery(this).addClass("active-nav-item");
	    jQuery(".nav .more").removeClass("active-nav-item");
	  });

	  // Page Transitions
        jQuery("body").css("display", "none");
        jQuery("body").fadeIn(2000);

        jQuery("a.transition").click(function(event){
	        event.preventDefault();
	        linkLocation = this.href;
	        jQuery("body").fadeOut(1000, redirectPage);      
	    });
	         
	    function redirectPage() {
	        window.location = linkLocation;
	    }


}); //End document.ready();