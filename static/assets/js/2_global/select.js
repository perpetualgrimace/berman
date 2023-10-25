$(document).ready(function() {

  // add a focus class to the parent
  parentFocus('.select-container select', '.select-container');

  // select by series only
  $('[data-series-select], [data-author-select]').change(function() {
    // update hash
    window.location.hash = $(this).val();
  });

});
