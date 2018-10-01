function formstone(){
  $('.background').background();
  $('.carousel').carousel();
  $('.sticky').sticky();
  $('.swap').swap();
  feather.replace({
    //'stroke-width': 1
  });

  //new universalParallax().init();

  //$('.js-parallax').parallaxBackground({
  //  parallaxBgPosition: 'center bottom',
  //  parallaxDirection: 'up',
  //  parallaxBgSize: 'cover',
  //  parallaxSpeed: 1,
  //  parallaxBgRepeat: 'no-repeat'
  //});
  //$(function() {
  //  var $el = $('.js-parallax');
  //  $(window).on('scroll', function () {
  //      var scroll = $(document).scrollTop();
  //      $el.css({
  //          'background-position':'50% '+(-.325*scroll)+'px'
  //      });
  //  });
  //});
}

function homeCarousel(){
  $('.home-feature__controls .right').on('click',function(){
    $(".home-top-carousel").carousel("next");
  });
  $('.home-feature__controls .left').on('click',function(){
    $(".home-top-carousel").carousel("previous");
  });
}

function init(){
  homeCarousel();
  formstone();
  $(".page-content").fitVids();
}

$(document).ready(function(){
  init();
});
