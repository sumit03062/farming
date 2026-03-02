import gsap from "../core/gsap";

export function initCounterAnimation() {

    const counters = document.querySelectorAll(".counter");
    if (!counters.length) return;

    counters.forEach(counter => {

        const target = parseFloat(counter.dataset.target);

        gsap.fromTo(counter,
            { innerText: 0 },
            {
                innerText: target,
                duration: 2,
                ease: "power1.out",
                scrollTrigger: {
                    trigger: "#impact-section",
                    start: "top 80%",
                    once: true
                },
                onUpdate: function () {
                    const value = parseFloat(counter.innerText);

                    if (target % 1 !== 0) {
                        counter.innerText = value.toFixed(1);
                    } else {
                        counter.innerText = Math.floor(value);
                    }
                }
            }
        );

    });
}