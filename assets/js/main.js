document.addEventListener('DOMContentLoaded', () => {
    
    // Config: Trigger when 15% of the item is on screen
    const observerOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Optional: Stop observing once revealed for better performance
                observer.unobserve(entry.target); 
            }
        });
    }, observerOptions);

    // Watch all elements with these classes
    const elementsToAnimate = document.querySelectorAll('.reveal-text, .reveal-card, .reveal-image');
    elementsToAnimate.forEach(el => observer.observe(el));
});