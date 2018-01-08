var $ = require('jquery');

$(document).ready(function() {
  var navButton = $("#menu-button");
  var navButtonIcon = $("#menu-button .lnr");
  var navElement = $("#navigation");

  navButton.click(function() {
      navElement.toggleClass("open");
      if (navButtonIcon.hasClass("lnr-menu")) {
        navButtonIcon.removeClass("lnr-menu");
        navButtonIcon.addClass("lnr-cross");
      }
      else {
        navButtonIcon.removeClass("lnr-cross");
        navButtonIcon.addClass("lnr-menu");
      }
  });
});
