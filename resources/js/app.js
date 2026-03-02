import "./bootstrap";
import Alpine from "alpinejs";
import lottie from "lottie-web";

import insecticideAnimation from "./animations/insecticide.json";
import footerBgAnimation from "./animations/ft-bg.json";
import growAnimation from "./animations/grow.json";
import cornAnimation from "./animations/corn.json";
import treeAnimation from "./animations/Tree.json";

import { initHeroAnimation } from "./animations/about_hero";
import { initSectionFadeUp } from "./animations/about_second";
import { initTabletAnimation } from "./animations/tablet";

import { initAboutAnimations } from "./animations/about";
import { initHero } from "./animations/hero";
import { initFooterAnimation } from "./animations/footer";
import { initTextObserver } from "./animations/text";
import { initMissionVisionAnimation } from "./animations/missionVision";

import { prefersReducedMotion } from "./core/motion";
import { initCounterAnimation } from "./animations/counter";


import "animate.css";

window.Alpine = Alpine;

document.addEventListener("DOMContentLoaded", () => {
    Alpine.start();

    if (prefersReducedMotion()) return;

    /* ================= GSAP ANIMATIONS ================= */

    initHero();
    initAboutAnimations();
    initMissionVisionAnimation();
    initFooterAnimation();
    initTextObserver();
    initHeroAnimation();
    initSectionFadeUp();
    initTabletAnimation();
    initCounterAnimation();

    /* ================= LOTTIE BACKGROUND ================= */

    loadLottieGroup(".ft-bg", footerBgAnimation, true);
    loadLottieGroup(".insecticide", insecticideAnimation, true);
    loadLottieGroup(".grow", growAnimation, true);
    loadLottieGroup(".corn", cornAnimation, true);
    loadLottieGroup(".tree", treeAnimation, true);
});

/* ================= REUSABLE LOTTIE LOADER ================= */

function loadLottieGroup(selector, animationData, loop = true) {
    document.querySelectorAll(selector).forEach((el) => {
        lottie.loadAnimation({
            container: el,
            renderer: "svg",
            loop,
            autoplay: true,
            animationData,
        });
    });
}
