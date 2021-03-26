(($) => {
  if (!document.querySelector('body').classList.contains('home')) {
    try {
      var myElement = document.querySelector('nav.GNB');
      var options = {};
      var headroom = new Headroom(myElement, options);
      headroom.init();

      var myElement2 = document.querySelector('.MobilesubMegaMenu');
      var options = {};
      var headroom2 = new Headroom(myElement2, options);
      headroom2.init();
    } catch {}
  }

  // mobile
  var shrinkHeader = 10;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('nav.GNB, .MobilesubMegaMenu').addClass('shrink');
    } else {
      $('nav.GNB, .MobilesubMegaMenu').removeClass('shrink');
    }
  });
  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
})(jQuery);
