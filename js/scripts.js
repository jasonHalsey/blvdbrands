// // Create a clone of the menu, right next to original.
// $('.navigation').addClass('original').clone().insertAfter('.navigation').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

// scrollIntervalID = setInterval(stickIt, 10);


// function stickIt() {

//   var orgElementPos = $('.original').offset();
//   orgElementTop = orgElementPos.top;               

//   if ($(window).scrollTop() >= (orgElementTop)) {
//     // scrolled past the original position; now only show the cloned, sticky element.

//     // Cloned element should always have same left position and width as original element.     
//     orgElement = $('.original');
//     coordsOrgElement = orgElement.offset();
//     leftOrgElement = coordsOrgElement.left;  
//     widthOrgElement = orgElement.css('width');

//     $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement+'px').css('opacity',0.5).show();
//     $('.original').css('visibility','hidden');
//   } else {
//     // not scrolled past the menu; only show the original menu.
//     $('.cloned').hide();
//     $('.original').css('visibility','visible');
//   }
// }


$("img#drop-shadow").hover(
  function () {
    $(this).addClass('shadowed', 250);
  }, 
  function () {
    $(this).removeClass('shadowed', 250);
  }
 );


jQuery(document).ready(function() {
	
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