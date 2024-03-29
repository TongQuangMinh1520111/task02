// anchor in page
$(window).bind("load", function () {
  "use strict";
  $(function () {
    $('a[href^="#"]').click(function () {
      if ($($(this).attr("href")).length) {
        var p = $($(this).attr("href")).offset();
        if ($(window).width() > 768) {
          $("html,body").animate(
            {
              scrollTop: p.top - 170,
            },
            600
          );
        } else {
          $("html,body").animate(
            {
              scrollTop: p.top - 60,
            },
            600
          );
        }
      }
      return false;
    });
  });
  var _boxes = $(".overlay");
  _boxes.bind("lightup", function () {
    setTimeout(function () {
      $(".overlay").removeClass("overlay-hide");
    }, 400);
  });

  $(".hamburger").click(function (e) {
    e.preventDefault();
    $("#header").toggleClass("active");
    $(this).toggleClass("active");
    var _this = $(".overlay");
    _this.toggleClass("overlay-show");
    if (_this.hasClass("overlay-hide")) {
      _this.trigger("lightup");
    } else {
      $(".overlay").removeClass("overlay-hide");
      _this.addClass("overlay-hide");
    }
  });
});

// anchor top page #
$(window).bind("load", function () {
  "use strict";
  var hash = location.hash;
  if (hash) {
    var p1 = $(hash).offset();
    if ($(window).width() > 768) {
      $("html,body").animate(
        {
          scrollTop: p1.top - 170,
        },
        600
      );
    } else {
      $("html,body").animate(
        {
          scrollTop: p1.top - 60,
        },
        600
      );
    }
  }
});

//totop
$(document).ready(function () {
  "use strict";
  $("#toTop").hide();
  $("#toTop a").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      800
    );
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $("#toTop").fadeIn();
    } else {
      $("#toTop").fadeOut();
    }
  });
});
