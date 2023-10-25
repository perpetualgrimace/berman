$(document).ready(function(){

  // set number of booklets allowed
  var maxNum = 2;

  // may the loop begin
  for(var i = 1; i <= maxNum; i++) {

    // assign selector based on loop iteration
    var selector = '[data-js="one-pager-' + i + '"]';

    $(selector).magnificPopup({
      delegate: 'a',
      type: 'image',
      closeOnContentClick: true,
      navigateByImgClick: false,
      closeBtnInside: false,
      mainClass: 'js-one-pager-zoom-gallery-lightbox-' + i + ' mfp-with-zoom mfp-img-mobile fade-in',
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
