$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    if ($(".navbar-collapse").hasClass("active") == true) {
      $(".sub-menu ul").slideUp();
      $(".sub-menu ul ,.dropdown-menu").slideUp();
      $(".dropdown-toggle").removeClass("active");
    }
    $(".navbar-collapse").toggleClass("active");
    $("body").toggleClass("nav-open");
    $(".mobile-menu-background").fadeToggle(500);
  });
  $(".dropdown-toggle").click(function () {
    if ($(window).width() < 992) {
      $(this).toggleClass("active").siblings(".dropdown-menu").slideToggle();
      $(this).parent().siblings().children(".dropdown-menu").slideUp();
      $(this)
        .parent()
        .siblings()
        .children(".dropdown-toggle")
        .removeClass("active");
      $(".sub-menu ul").slideUp();
      $(".sub-title").removeClass("active");
    }
  });
  $(".mega-dropdown .sub-menu .sub-title").click(function () {
    if ($(window).width() < 992) {
      $(this).toggleClass("active");
      $(this).siblings("ul").slideToggle();
      $(this).parent().siblings().children("ul").slideUp();
      $(this).parent().siblings().children(".sub-title").removeClass("active");
    }
  });
  $(window).resize(function () {
    if ($(window).width() > 991) {
      $(".mega-menu").removeAttr("style");
      $(".mega-dropdown .sub-menu ul").removeAttr("style");
      $(".dropdown-toggle").removeClass("active");
      $(".sub-title").removeClass("active");
    }
  });
  var lastScrollTop = 0;

  $(window).scroll(function () {
    var st = $(this).scrollTop();
    var banner = $(".navbar");
    setTimeout(function () {
      if (st > lastScrollTop && st >100) {
        banner.addClass("hide");
        
      } else {
        banner.removeClass("hide");
      }
      lastScrollTop = st;
    }, 100);
 
  });
});
