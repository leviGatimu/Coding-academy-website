document.addEventListener('DOMContentLoaded', () => {
    
    // 1. PRELOADER
    const preloader = document.getElementById('preloader');
    if(preloader) {
        window.addEventListener('load', () => {
            preloader.style.opacity = '0';
            setTimeout(() => { preloader.style.display = 'none'; }, 500);
        });
    }

    // 2. SCROLL REVEAL OBSERVER
    const observerOptions = {
        threshold: 0.15, // Trigger when 15% visible
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Run once
            }
        });
    }, observerOptions);

    // Watch these elements
    const revealElements = document.querySelectorAll('.reveal-text, .reveal-card, .reveal-image, .reveal-scale-up');
    revealElements.forEach(el => observer.observe(el));

    // 3. PARALLAX HERO TEXT FADE
    const heroText = document.querySelector('.parallax-text');
    window.addEventListener('scroll', () => {
        let scroll = window.scrollY;
        if (scroll < 800 && heroText) {
            heroText.style.transform = `translateY(${scroll * 0.4}px)`; // Move down slower
            heroText.style.opacity = 1 - (scroll / 600); // Fade out
        }
    });

});