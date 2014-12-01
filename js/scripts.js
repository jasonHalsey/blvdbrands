
jQuery(document).ready(function() {
    
	if(Modernizr.mq('only all and (min-width: 800px)')){
		
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
	}else {
		jQuery('header.navigation').toggleClass("semi-trans");
	};


});

// $(window).bind('resize', function(){
// 	if(Modernizr.mq('(min-device-width: 800px)')){
// 		console.log("modern if statement");
// 		var $header = $("header.navigation"),
// 	        $clone = $header.before($header.clone().addClass("clone"));
// 	    jQuery('header.navigation').addClass("semi-trans");
// 	    jQuery(window).on("scroll", function() {
// 	        var fromTop = $(window).scrollTop();
// 	        // console.log(fromTop);
// 	        jQuery("body").toggleClass("down", (fromTop > 100));
// 	        jQuery('header.navigation').removeClass("semi-trans", (fromTop > 120));
// 	        jQuery('header.navigation').toggleClass("very-trans", (fromTop > 100));
// 	        jQuery('header.navigation').toggleClass("semi-trans", (fromTop < 100));
// 	    });
// 	};

// });


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

	  var menu = jQuery('#menu-menu-1');
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


	    $(".hover-tile-outer").click(function(){
    		if($(this).find("a").length){
        	window.location.href = $(this).find("a:first").attr("href");
    	}
});

}); //End document.ready();



// jquery(window).load(function(){
jQuery(document).ready(function() {
 /*
   * Replace all SVG images with inline SVG
 */
  jQuery('img.svg').each(function(){
      var $img = jQuery(this);
      var imgID = $img.attr('id');
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');
console.log('SVG fired');
      jQuery.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find('svg');

          // Add replaced image's ID to the new SVG
          if(typeof imgID !== 'undefined') {
              $svg = $svg.attr('id', imgID);
          }
          // Add replaced image's classes to the new SVG
          if(typeof imgClass !== 'undefined') {
              $svg = $svg.attr('class', imgClass+' replaced-svg');
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr('xmlns:a');

          // Replace image with new SVG
          $img.replaceWith($svg);

      }, 'xml');

  });
}); //End window.load();