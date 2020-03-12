(function($) {
  //pop-up video
  let popup = $("#myPopup"),
    splashContainer = $("#splash-container");

  $('.top-banner__youtube-link').on('click', function () {
    popup.addClass("show");
    splashContainer.addClass("show");
  });
  $('.close_pop-up').on('click', function () {
    popup.removeClass("show");
    splashContainer.removeClass("show");
  });


  //mob menu
  let hamburger = $('#hamburger-icon'),
    showMenu = $('.main-nav');
  hamburger.click(function() {
    hamburger.toggleClass('active');
    showMenu.toggleClass('show');
    return false;
  });
  showMenu.on("click", "li", function() {
    if(showMenu.hasClass('show')) {
      showMenu.toggleClass('show');
      hamburger.toggleClass('active');
    }
  });
})(jQuery);
