$(document).ready(function(){

  var selector = '[data-js="work-slideshow"]';
  var childSelector = selector + ' > li';

   // work slideshow
   var slideshow = $(selector).bxSlider({
      auto: true,
      pause: 5000,
      easing: 'ease-out',
      autoHover: true,
      pager: true,
      controls: false
   });

   // enable swiping
   $(childSelector).swipe({
      swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
         slideshow.goToNextSlide();
      },
      swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
         slideshow.goToPrevSlide();
      },
      threshold: 30,
   });

});
