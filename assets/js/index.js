// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import "slick-carousel";

$(function () {
  // header
  $("#hum-btn").on("click", function () {
    $(this).toggleClass("active");
    $("#navbar").toggleClass("active");
  });
  $("#calendar-btn").on("click", function () {
    $(".reserve-menu").toggleClass("active");
  });
  // slick
  $(".slick-slider").slick({
    centerMode: true,
    centerPadding: "10vw",
    slidesToShow: 3,
    asNavFor: ".slider-nav",
    prevArrow: '<span class="carousel-control-prev-icon"></span>',
    nextArrow: '<span class="carousel-control-next-icon"></span>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".slider-nav").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: ".slick-slider",
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
  // togle
  $(".faq__list-que").on("click", function () {
    $(this).toggleClass("active");
    $(this).next(".faq__list-ans").slideToggle();
  });
});
