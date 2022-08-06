$(function () {
  $(".bike-slider").slick({
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
  });

  $(".slider__items").slick({
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
  });
});

$('.bike__btn').on( 'click', function(){ 
  var el = $(this);
  var dest = el.attr('href');
  if(dest !== undefined && dest !== '') {
      $('html').animate({ 
        scrollTop: $(dest).offset().top 
      }, 1000 
      );
  }
  return false;
});
