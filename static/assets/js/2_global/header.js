$(document).ready(function() {
  $('.home-header').on('mousemove', function(e){
    $('.header .hero')
      .css({
        'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'
    });
  });
  $('.home-headline').addClass('with-long-shadow');
});
