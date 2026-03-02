import gsap from "../core/gsap";

export function initAboutAnimations() {
    const section = document.querySelector(".about-section");
    if (!section) return;

    gsap.context(() => {

        const text = section.querySelector(".reveal-text");
        const content = section.querySelectorAll(".reveal-content p, .reveal-content button");
        const leftImage = section.querySelector(".reveal-image-left");
        const rightImage = section.querySelector(".reveal-image-right");

        if (text) {
            gsap.from(text, {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: text,
                    start: "top 80%",
                },
            });
        }

        if (content.length) {
            gsap.from(content, {
                y: 30,
                opacity: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: section.querySelector(".reveal-content"),
                    start: "top 75%",
                },
            });
        }

        if (leftImage) {
            gsap.from(leftImage, {
                y: 60,
                opacity: 0,
                duration: 1.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: leftImage,
                    start: "top 80%",
                },
            });
        }

        if (rightImage) {
            gsap.from(rightImage, {
                y: 100,
                opacity: 0,
                duration: 1.4,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: rightImage,
                    start: "top 80%",
                },
            });
        }

    }, section);
}
