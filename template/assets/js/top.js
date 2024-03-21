$(document).ready(function () {
  "use strict";
  var parallax, speed;

  parallax = document.querySelectorAll(".block-mainv figure");

  speed = 0.5;

  window.onscroll = function () {
    return [].slice.call(parallax).forEach(function (el, i) {
      var dist;
      dist = $(window).scrollTop();
      return $(el).css("top", dist * speed * -1 + "px");
    });
  };
});
