import gsap from "../core/gsap";
import Swiper from "swiper";
import { Pagination, Autoplay, EffectFade } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";

export function initHero() {
    const heroSwiperEl = document.querySelector(".heroSwiper");
    if (!heroSwiperEl) return;

    const swiper = new Swiper(".heroSwiper", {
        modules: [Pagination, Autoplay, EffectFade],
        effect: "fade",
        fadeEffect: { crossFade: true },
        loop: true,
        speed: 1200,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    // Initial Animation
    setupSlideAnimations(swiper.slides[swiper.activeIndex]);

    // Transition Animation
    swiper.on("slideChangeTransitionStart", () => {
        setupSlideAnimations(swiper.slides[swiper.activeIndex]);
    });
}

function setupSlideAnimations(slide) {
    if (!slide) return;

    // 1. Cinematic Zoom on the background image
    const bgImage = slide.querySelector(".pixel-perfect-notch img");
    if (bgImage) {
        gsap.fromTo(bgImage,
            { scale: 1 },
            { scale: 1.1, duration: 8, ease: "power1.out" }
        );
    }

    // 2. Counter Animation
    // This looks for elements with the 'stat-number' class
    const counters = slide.querySelectorAll(".stat-number");
    counters.forEach(counter => {
        const target = parseInt(counter.dataset.target);
        counter.innerText = "0";

        gsap.to(counter, {
            innerText: target,
            duration: 2,
            ease: "power2.out",
            snap: { innerText: 1 },
            // Adds the plus sign back after animating
            onComplete: () => counter.innerText += "+" 
        });
    });
}