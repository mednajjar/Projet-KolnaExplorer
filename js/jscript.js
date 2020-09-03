// demmarer bxslider
$('.sliderHero').bxSlider({
    controls: false,
    auto: true,
    pager: false,
    border: 0,


});

// $('.multiple_slider').bxSlider({
//     adaptiveHeight: true,
//     controls: false,
//     auto: true,
//     slideMargin: 24,
//     moveSlides: 5,
//     pager: false,
//     maxSlides: 5,
//     minSlides: 1,
//     speed: 5500,
//     adaptiveHeight: true,
//     oneToOneTouch: false,
//     slideWidth: 240,


// });
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    spaceBetween: 30,
    slidesPerView: 3,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    pagination: {
        el: '.swiper-pagination',
    },

});



