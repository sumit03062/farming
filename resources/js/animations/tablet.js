import gsap from "../core/gsap";
import lottie from "lottie-web";

export function initTabletAnimation() {
    const container = document.getElementById("lottie-tablet-container");
    if (!container) return;

    const tabletAnimation = lottie.loadAnimation({
        container,
        renderer: "svg",
        loop: false,
        autoplay: false,
        path: "https://cdn.prod.website-files.com/68b5b8542c5c0a63b1d91b3b/69485a267bf1aac8af5df2aa_croptab%203d%20new.json"
    });

    tabletAnimation.addEventListener("DOMLoaded", () => {
        const playhead = { frame: 0 };

        gsap.timeline({
            scrollTrigger: {
                trigger: "#tablet-section",
                start: "top top",
                end: "+=1500",
                pin: true,
                scrub: 1,
            }
        }).to(playhead, {
            frame: tabletAnimation.totalFrames - 1,
            ease: "none",
            onUpdate: () =>
                tabletAnimation.goToAndStop(playhead.frame, true)
        });
    });
}