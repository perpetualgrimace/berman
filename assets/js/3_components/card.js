// define function
function blogFilter() {

  // get hash value
  var hashVal = window.location.hash.substr(1);
  var matchSelector = '[data-author="' + hashVal + '"], [data-series="' + hashVal + '"]';

  // check option values against the hash
  $('select option').each(function() {
    if (this.value == hashVal) {
      // set the value of matches
      $(this).parent().val(hashVal);
      // reset the value of non-matches
      $(this).parent().parent().siblings('.select-container').children('select').val('all');
    }
  });

  // hide all by default
  $('[data-series], [data-author]').hide();

  // target is set
  if (hashVal != 'all' && hashVal != 'main' && hashVal !== '' && hashVal != 'nav') {
    $(matchSelector).show();
  }
  // reset
  else {
    $('[data-series], [data-author]').show();
  }

}


// only run the function on the blog-list page
if ( $('body').hasClass('blog-list') ) {
  // run the function on page load
  $(document).ready(function() {
    blogFilter();
  });
  // run the function when the hash changes
  $(window).on('hashchange', function() {
    blogFilter();
  });
}
