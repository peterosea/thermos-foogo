(($) => {
  if (!document.querySelector('body').classList.contains('home')) {
    try {
      var myElement = document.querySelector('nav.GNB');
      var options = {};
      var headroom = new Headroom(myElement, options);
      headroom.init();

      // var myElement2 = document.querySelector('.MobilesubMegaMenu');
      // var options = {};
      // var headroom2 = new Headroom(myElement2, options);
      // headroom2.init();

      var myElement3 = document.querySelector('.subMegaMenu._fixed');
      var options = {};
      var headroom3 = new Headroom(myElement3, options);
      headroom3.init();
    } catch {}
  }

  var getMenuPD = document.querySelector('.menu-item-product');
  var subMegaMenu = document.querySelector('.subMegaMenu');
  var subMegaMenuFix = document.querySelector('.subMegaMenu._fixed');

  if (document.querySelector('body').classList.contains('page-template-page-tkfd200') || document.querySelector('body').classList.contains('page-template-page-tkfe280') || document.querySelector('body').classList.contains('page-template-page-tkfe350') || document.querySelector('body').classList.contains('page-template-page-tkff-280') || document.querySelector('body').classList.contains('page-template-page-jnx501k')) {
    // 제품페이지일때 서브메가메뉴 고정
    $(subMegaMenuFix).addClass('_display');
  } else {
    // 제품페이지가 아니면 서브메가메뉴 비고정
    $(subMegaMenuFix).removeClass('_display');
    $(getMenuPD).hover(function(){
      $(subMegaMenu).toggleClass('_active');
    });
    $(subMegaMenu).hover(function(){
      $(this).toggleClass('_active');
    });
  }

  // mobile
  var shrinkHeader = 10;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('nav.GNB').addClass('shrink');
    } else {
      $('nav.GNB').removeClass('shrink');
    }
    // if (scroll >= shrinkHeader) {
    //   $('nav.GNB, .MobilesubMegaMenu').addClass('shrink');
    // } else {
    //   $('nav.GNB, .MobilesubMegaMenu').removeClass('shrink');
    // }
  });
  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
})(jQuery);
