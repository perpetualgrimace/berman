$(document).ready(function(){

  // assign selectors based on loop iteration
  var selector = '[data-js="video-slider"]';
  var nextSelector = '[data-js="video-slider-next"]';
  var prevSelector = '[data-js="video-slider-prev"]';

  // active bx-slider
  $(selector).bxSlider({
     auto: false,
     mode: 'fade',
     speed: 0,
     controls: true,
     pager: false,
     nextSelector: nextSelector,
     prevSelector: prevSelector,
     nextText: 'Next slide',
     prevText: 'Previous slide',
  });

});
