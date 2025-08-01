var swiper = new Swiper(".services-we-think-difrnt-cards", {
    slidesPerView: 4,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 3000,         
        disableOnInteraction: false, 
    },
    pagination: {
        el: ".services-we-think-difrnt .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".services-we-think-difrnt-card-prev",
        prevEl: ".services-we-think-difrnt-card-next",
    },
    breakpoints: {
        1500: {
            slidesPerView: 4
        },
        1000: {
            slidesPerView: 3
        },
        700: {
            slidesPerView: 2
        },
        320: {
            slidesPerView: 1
        },
    },
});