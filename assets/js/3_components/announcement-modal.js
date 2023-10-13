$(document).ready(function() {


  // DEBUGGING: Remove the cookie
  // Cookies.remove('announcement-dismiss');


  // Show initially hidden modal
  $('.js-announcement:not(.is-dismissed)').addClass('is-visible').removeClass('is-hidden').removeAttr('hidden');


  // About page link
  $('.js-announcement-dismiss').on('click', function(e) {

    var redirectHref = this.href();

    // prevent default link behavior
    e.preventDefault();

    // make the modal not come up again
    Cookies.set('announcement-dismiss', 'yes');

    // okay now follow the link
    window.location.replace(redirectHref);

  });


  // Overdrive link
  $('.js-announcement-link').on('click', function(e) {

    // make the modal not come up again
    Cookies.set('announcement-dismiss', 'yes');

  });


  // Hide the modal
  $('.js-announcement').on('click', function() {

    // hide it
    $('.js-announcement').removeClass('is-visible').addClass('is-hidden').attr('hidden');

    // make the modal not come up again
    Cookies.set('announcement-dismiss', 'yes');

  });

});
