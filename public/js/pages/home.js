$('.slider-base').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    animateOut: 'fadeOut',
    autoplay: true,
    autoplayTimeout: 2000,
    mouseDrag: false,
})
$('.toggleMenu').on('click', function () {
    $('.navigation').slideToggle();
});