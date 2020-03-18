//@prepros-prepend plugins/slick.js

$(document).ready(function () {
    $('body').addClass('loaded');

}

$('.home-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    slide: 'div',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 7000,
    fade: true,
    cssEase: 'linear'
});

$("#target").click(function () {
    alert("Handler for .click() called.");
});