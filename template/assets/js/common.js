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
  $(".hamburger").click(function (e) {
    e.preventDefault();
    $("#header").toggleClass("active");
    $("#overlay").toggleClass("active");
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
  $("#overlay").click(function (e) {
    $(this).toggleClass("active");
    e.preventDefault();
    $("#header").toggleClass("active");
    $(".hamburger").toggleClass("active");
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


//totop
$(document).ready(function () {
  "use strict";
  $(".js-modal").click(function (e) {
    e.preventDefault();
    const $modal = $("#" + $(this).attr("aria-controls"));
    if ($modal.attr("aria-hidden") == "true") {
      $modal.attr("aria-hidden", "false").show("fast");
    } else {
      $modal.attr("aria-hidden", "true").hide("slow");
    }
    var $imgSrc = $(this).parent().find("img").attr("src");
    $(".modal .box-link  .txt p").append($imgSrc);
    $("html").addClass("is-modalOpened");
  });
  $(".modal-close, .modal_overlay").click(function () {
    let $modal = $(this).closest(".modal");
    $modal.attr("aria-hidden", "true");
    $("html").removeClass("is-modalOpened");
  });

  $(document).on("click", ".btn-copy", function () {
    var $imgSrc = $("#txt-link").text();
    navigator.clipboard
      .writeText($imgSrc)
      .then(() => {})
      .catch(() => {});
  });
});
