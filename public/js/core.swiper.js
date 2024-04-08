var $ = jQuery;

$(function() {


    const swiperGame = new Swiper('.js-swiper-games', {
        lazy: true,
        direction: 'horizontal',
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        pagination: {
            el: '.js-swiper-games-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<button class="' + className + '">' + (index + 1) + "</button>";
            },
        },
        navigation: {
            nextEl: '.js-swiper-games-next',
            prevEl: '.js-swiper-games-prev',
        },
        hashNavigation: {
            watchState: true,
        },
    });

    const swiperGallery = new Swiper('.js-swiper-gallery', {
        lazy: true,
        direction: 'horizontal',
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        navigation: {
            nextEl: '.js-swiper-gallery-next',
            prevEl: '.js-swiper-gallery-prev',
        },
        hashNavigation: {
            watchState: true,
        },
    });

});
