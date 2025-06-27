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

    const swiperPrice = new Swiper('.js-swiper-price', {
        lazy: true,
        direction: 'horizontal',
        slidesPerView: 4,
        spaceBetween: 22,
        loop: false,

        breakpoints: {
            320: {
                spaceBetween: 10,
                slidesPerView: 1,
                grabCursor: true,
                // Параметры для блокировки вертикального скролла на мобильном
                touchAngle: 30,
                threshold: 5,
                touchMoveStopPropagation: true,
            },
            641: {
                spaceBetween: 10,
                slidesPerView: 2,
                grabCursor: true,
                // Параметры для блокировки вертикального скролла на планшете
                touchAngle: 35,
                threshold: 4,
                touchMoveStopPropagation: true,
            },
            1024: {
                spaceBetween: 22,
                slidesPerView: 4,
                grabCursor: false,
            },
        },
    });

});
