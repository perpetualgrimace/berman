// automatic smooth scrolling: https://css-tricks.com/snippets/jquery/smooth-scrolling/
// plus keyboard support: https://css-tricks.com/snippets/jquery/smooth-scrolling/#comment-1594165

$(document).ready(function() {

  $(function() {
    $('target[id]').attr('tabindex', '-1');

    $('a[href*=#]:not([href=#]):not(.nav-toggle):not(.card-meta-link)').click(function() {
      var $linkElem = $(this);
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 800, function() {
            target.focus();
            window.location.hash = $linkElem.attr('href').substring(1);
          });
          return false;
        }
      }
    });
  });

});
