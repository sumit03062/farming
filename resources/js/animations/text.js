export function initTextObserver() {

    const elements = document.querySelectorAll(".scroll-animate");

    const observer = new window.IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {

                const animation =
                    entry.target.dataset.animation || "animate__fadeInDown";

                entry.target.classList.add(
                    "animate__animated",
                    animation
                );

                entry.target.classList.remove("opacity-0");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
}
