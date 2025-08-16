// hero carousel animation for the texts

function splitTextToSpans(element) {
    if (element.dataset.split === "true") return; // Prevent re-splitting

    const nodes = Array.from(element.childNodes);
    element.innerHTML = '';

    nodes.forEach(node => {
        if (node.nodeType === Node.TEXT_NODE) {
            [...node.textContent].forEach(char => {
                const span = document.createElement('span');
                span.textContent = char === ' ' ? '\u00A0' : char;
                span.style.display = 'inline-block';
                element.appendChild(span);
            });
        } else {
            element.appendChild(node); // preserve <br>
        }
    });

    element.dataset.split = "true"; // Mark as split
}
function animateCharacters(slide) {
    const h2 = slide.querySelector('.hero-carousel-text-onebyone h2');
    const p = slide.querySelector('.hero-carousel-text-onebyone p');

    if (!h2 || !p) return;

    splitTextToSpans(h2); // Do only if not already split

    // Reset span positions
    gsap.set(h2.querySelectorAll('span'), { opacity: 0, x: 0 });
    gsap.set(p, { opacity: 0, y: 20 });

    // Animate h2 characters
    gsap.to(h2.querySelectorAll('span'), {
        opacity: 1,
        y: 0,
        stagger: 0.03,
        duration: 0.9,
        ease: "power3.out"
    });

    // Animate paragraph
    gsap.to(p, {
        opacity: 1,
        y: 0,
        delay: 0.4,
        duration: 0.8,
        ease: "power2.out"
    });
}
