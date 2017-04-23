$('.slider-for').slick({
  asNavFor: '.slider-nav',
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  autoplay: true,
  pauseOnFocus: true,
});
$('.slider-nav').slick({
  asNavFor: '.slider-for',
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true,
  dots: true,
  autoplay: true,
  centerMode: true,
  focusOnSelect: true,
  centerMode: true,
  variableWidth: true,
});