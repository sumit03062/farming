export function initFooterAnimation() {
    const footer = document.querySelector("footer");
    const elements = document.querySelectorAll(".footer-reveal");

    if (!footer || !elements.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                elements.forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.remove("translate-y-12", "opacity-0");
                        el.classList.add("translate-y-0", "opacity-100");
                    }, index * 150); // stagger effect
                });

                observer.disconnect();
            });
        },
        { threshold: 0.2 }
    );

    observer.observe(footer);
}
