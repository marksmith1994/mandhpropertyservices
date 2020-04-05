//@prepros-prepend plugins/slick.js

$(document).ready(function () {
    $('body').addClass('loaded');

    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

    $('.gallery-button').click(function () {
        $('.gallery-modal').addClass("open");
    });

    $('.close').click(function () {
        $('.gallery-modal').removeClass("open");
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
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slide: 'div',
        fade: true,
        cssEase: 'linear',
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                }
            }
        ]
    });

    $("#target").click(function () {
        alert("Handler for .click() called.");
    });

});