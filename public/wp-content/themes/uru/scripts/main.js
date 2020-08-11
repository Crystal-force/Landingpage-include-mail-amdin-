jQuery(function($) {

  $('.faq dl dt').on('click',function(){
    $(this).next('dd').slideToggle();
    $(this).toggleClass('active');
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.scrollTop').fadeIn();
    } else {
      $('.scrollTop').fadeOut();
    }
  });
  $('.scrollTop').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 300);
    return false;
  });
});