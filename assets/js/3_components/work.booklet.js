$(document).ready(function(){

  // set number of booklets allowed
  var maxNum = 2;

  // may the loop begin
  for(var i = 1; i <= maxNum; i++) {

    // assign selectors based on loop iteration
    var selector = '[data-js="booklet-slider-' + i + '"]';
    var nextSelector = '[data-js="booklet-slider-next-' + i + '"]';
    var prevSelector = '[data-js="booklet-slider-prev-' + i + '"]';
    // bx-slider needs a variable
    var sliderVarName = 'booklet-slider-' + i;

    // active bx-slider
    $(selector).bxSlider({
       auto: false,
       adaptiveHeight: false,
       mode: 'fade',
       speed: 0,
       controls: true,
       pager: false,
       nextSelector: nextSelector,
       prevSelector: prevSelector,
       nextText: 'Next slide',
       prevText: 'Previous slide'
    });

    // activate magnificPopup
    $(selector).magnificPopup({
      delegate: 'a',
      type: 'image',
      closeOnContentClick: true,
      navigateByImgClick: false,
      closeBtnInside: false,
      mainClass: 'js-zoom-gallery-lightbox-1 mfp-with-zoom mfp-img-mobile fade-in',

      image: {
        verticalFit: true,
        titleSrc: function(item) {
          return item.el.attr('title') + '<a class="image-source-link" href="'+item.el.attr('data-source')+'"></a>';
        }
      },

      gallery: {
        enabled: true
      },

      zoom: {
        enabled: true,
        duration: 250,
        opener: function(element) {
          return element.find('img');
        }
      }
    });

  } // end for loop

});
