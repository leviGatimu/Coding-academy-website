document.addEventListener('DOMContentLoaded', () => {
    
    // 1. MOBILE MENU TOGGLE
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close menu when a link is clicked
    document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
    }));

    // 2. HEADER SCROLL EFFECT (Glassmorphism triggers on scroll)
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.site-header');
        if (window.scrollY > 50) {
            header.style.height = '70px';
            header.style.boxShadow = '0 10px 30px -10px rgba(2,12,27,0.7)';
        } else {
            header.style.height = '80px';
            header.style.boxShadow = 'none';
        }
    });

    // 3. TYPING EFFECT
    const typeSpan = document.querySelector('.typing-text');
    if(typeSpan) {
        const text = typeSpan.getAttribute('data-text');
        const phrases = text.split('|'); // Split by | if you want multiple phrases
        let i = 0;
        let j = 0;
        let isDeleting = false;
        
        function loop() {
            typeSpan.innerHTML = phrases[i].substring(0, j);
            if (isDeleting) j--; else j++;

            if (!isDeleting && j === phrases[i].length + 1) {
                isDeleting = true;
                setTimeout(loop, 2000); // Pause at end
            } else if (isDeleting && j === 0) {
                isDeleting = false;
                i = (i + 1) % phrases.length;
                setTimeout(loop, 500);
            } else {
                setTimeout(loop, isDeleting ? 50 : 100);
            }
        }
        loop();
    }

    // 4. COUNT UP ANIMATION (Intersection Observer)
    const stats = document.querySelectorAll('.stat-num');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = +entry.target.getAttribute('data-target');
                const update = () => {
                    const c = +entry.target.innerText;
                    const inc = target / 100;
                    if(c < target) {
                        entry.target.innerText = Math.ceil(c + inc);
                        setTimeout(update, 20);
                    } else {
                        entry.target.innerText = target;
                    }
                };
                update();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    stats.forEach(s => observer.observe(s));
});