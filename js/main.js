$(document).ready(function() {
  $('.contact-click').click(function() {
    $('html, body').animate({
        scrollTop: $('.contact').offset().top
    }, 2000);
  });

  $(".fa-angle-double-down").hover(function() {
    $(this).effect("bounce", 2000);
  });

  $('.fa-angle-double-down').click(function() {
    $('html, body').animate({
        scrollTop: $('.about').offset().top
    }, 2000);
  });

  $('.card, .card-2, .card-3, .card-4, .card-5').flip({
    trigger: 'hover',
    speed: 1500,
    reverse: true
  });
});