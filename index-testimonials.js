var swiper5 = new Swiper(".testimonialSwiper", {
    grabCursor: true,
    centeredSlides: false,
    effect: "creative",
    creativeEffect: {
        prev: {
            shadow: true,
            translate: ["-125%", 0, -800],
            rotate: [0, 0, -90],
        },
        next: {
            shadow: true,
            translate: ["125%", 0, -800],
            rotate: [0, 0, 90],
        },
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
});