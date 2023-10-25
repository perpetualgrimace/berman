// make thumbnails accessible

$(document).ready(function() {

  // add keyboard focus for thumbnails
  $('.thumb-link').focus(function() {
    $(this).closest('.thumb-list').addClass('is-focused-container');
    $(this).closest('.thumb-item').addClass('is-focused-parent');
  });
  $('.thumb-link').blur(function() {
    $(this).closest('.thumb-list').removeClass('is-focused-container');
    $(this).closest('.thumb-item').removeClass('is-focused-parent');
  });

});
