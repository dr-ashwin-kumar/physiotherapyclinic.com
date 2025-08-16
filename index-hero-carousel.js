var swiper = new Swiper(".hero-carousel-thumbnail", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".hero-carousel", {
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 5000, 
        disableOnInteraction: false, 
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
    on: {
        init: function () {
            // Run animation after slight delay to allow DOM load
            setTimeout(() => {
                animateCharacters(this.slides[this.activeIndex]);
            }, 100);
        },
        slideChangeTransitionEnd: function () {
            // Animate after slide change is fully done
            animateCharacters(this.slides[this.activeIndex]);
        }
    }
});