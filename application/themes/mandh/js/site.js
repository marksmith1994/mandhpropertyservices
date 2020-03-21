//@prepros-prepend plugins/slick.js

$(document).ready(function () {
    $('body').addClass('loaded');

});

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


//add in the mobile 
$('.review-container').slick({
    dots: true,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slide: 'div',
    // autoplay: true,
    // autoplaySpeed: 3000,
    fade: true,
    cssEase: 'linear'
});

$("#target").click(function () {
    alert("Handler for .click() called.");
});