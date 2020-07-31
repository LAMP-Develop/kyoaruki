// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";

$(function () {
  // header
  $("#hum-btn").on("click", function () {
    $(this).toggleClass("active");
    $("#navbar").toggleClass("active");
  });
  $("#calendar-btn").on("click", function () {
    $(".reserve-menu").toggleClass("active");
  });
});
