import gsap from "../core/gsap";

export function initMissionVisionAnimation() {
    const section = document.querySelector(".mission-section");
    if (!section) return;

    gsap.context(() => {

        const missionBlock = section.querySelector(".mission-block");
        const visionBlock = section.querySelector(".vision-block");

        if (missionBlock) {
            gsap.from(section.querySelector(".mission-card"), {
                x: 120,
                opacity: 0,
                duration: 1.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: missionBlock,
                    start: "top 75%",
                },
            });

            gsap.from(section.querySelector(".mission-image"), {
                scale: 1.1,
                duration: 1.5,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: missionBlock,
                    start: "top 75%",
                },
            });
        }

        if (visionBlock) {
            gsap.from(section.querySelector(".vision-card"), {
                x: -120,
                opacity: 0,
                duration: 1.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: visionBlock,
                    start: "top 75%",
                },
            });

            gsap.from(section.querySelector(".vision-image"), {
                scale: 1.1,
                duration: 1.5,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: visionBlock,
                    start: "top 75%",
                },
            });
        }

    }, section);
}
