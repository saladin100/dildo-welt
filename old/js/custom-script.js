$( document ).ready(

  function() {


$( "h1" ).prepend('<i class="fas fa-angle-double-right" style="padding-right:10px;color:#ffb246;"></i>');
$( "h2" ).prepend('<i class="fas fa-angle-right" style="padding-right:10px;color:#ffb246;"></i>');
$( "h3" ).prepend('<i class="fas fa-caret-right" style="padding-right:10px;color:#ffb246;"></i>');




 $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top-80
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


  $(".sticky").sticky({
    topSpacing: 90,
    zIndex: 2,
    stopper: "#YourStopperId"
});


});



