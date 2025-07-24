var swiper = new Swiper(".services-we-think-difrnt-cards", {
    slidesPerView: 3,
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
        1024: {
            slidesPerView: 4
        },
        768: {
            slidesPerView: 3
        },
        480: {
            slidesPerView: 1
        },
    },
});