// Header scroll class
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('nav').addClass('header-scrolled');
    } else {
      $('nav').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('nav').addClass('header-scrolled');
  }