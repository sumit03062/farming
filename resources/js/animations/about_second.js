import gsap from "../core/gsap";

export function initSectionFadeUp() {
    const elements = gsap.utils.toArray(
        "section:not(#hero-section) h2, section:not(#hero-section) h3"
    );

    elements.forEach((element) => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 85%",
            },
            y: 30,
            opacity: 0,
            duration: 1,
            ease: "power2.out",
        });
    });
}