import gsap from "../core/gsap";

export function initHeroAnimation() {
    const heroSection = document.querySelector("#hero-section");
    if (!heroSection) return;
    // --- 1. THE HERO CORN ANIMATION ---
    let mm = gsap.matchMedia();
            mm.add("(min-width: 1024px)", () => {
                let heroTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#hero-section",
                        start: "top top",      
                        end: "+=1500",
                        pin: true,             
                        scrub: 1,
                    }
                });

                heroTl.to("#hero-text-1", { opacity: 0, y: -50, duration: 2 }) 
                .to("#corn-fill-crop", { clipPath: "inset(0% 0% 0% 0%)", duration: 4 }, "-=1") 
                .to("#hero-text-2", { opacity: 1, y: 0, duration: 2 }, "-=2"); 
            });

            // SUBTLE FADE-UP FOR SECTIONS
            const fadeElements = gsap.utils.toArray('.gsap-fade-up');
            fadeElements.forEach(element => {
                gsap.from(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    },
                    y: 40,
                    opacity: 0,
                    duration: 1.2,
                    ease: "power3.out"
                });
            })
}
