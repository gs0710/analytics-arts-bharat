/**
 * Analytics Arts - Motion Design & Interaction Script
 * Powered by GSAP & ScrollTrigger
 */

document.addEventListener("DOMContentLoaded", () => {
    // Register GSAP plugins
    gsap.registerPlugin(ScrollTrigger);

    // Only run animations if the user hasn't requested reduced motion
    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    
    if (!prefersReducedMotion) {
        initHeroAnimations();
        initNavAnimations();
        initServicesAnimations();
        initFooterReveal();
    }
});

/**
 * Hero Section Animations
 * - Line Mask Reveal for the main heading
 * - Scroll behavior to scale down the hero as it gets covered
 */
function initHeroAnimations() {
    const heroHeading = document.querySelector('.hero-heading');
    if (heroHeading) {
        // Line Mask Reveal
        // First, split the text into lines (simplified approach without SplitText plugin)
        // We will animate the heading's opacity and y position for now, as SplitText is a premium plugin
        gsap.from(heroHeading, {
            y: 50,
            opacity: 0,
            duration: 1.2,
            ease: "power4.out",
            delay: 0.1
        });
        
        const heroSub = document.querySelector('.hero-sub');
        if(heroSub) {
            gsap.from(heroSub, {
                y: 30,
                opacity: 0,
                duration: 1,
                ease: "power3.out",
                delay: 0.3
            });
        }
    }

    const heroShell = document.querySelector('.lp-main');
    const stackingContent = document.querySelector('.stacking-content');

    if (heroShell && stackingContent) {
        gsap.to('.hero-shell', {
            scale: 0.95,
            opacity: 0.5,
            ease: "none",
            scrollTrigger: {
                trigger: stackingContent,
                start: "top bottom",
                end: "top top",
                scrub: true
            }
        });
    }
}

/**
 * Navigation & Magnetic Button Animations
 */
function initNavAnimations() {
    gsap.from('.nav-shell', {
        y: -100,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)",
        delay: 0.2
    });

    // Magnetic Button Effect for .btn-primary
    const magneticBtns = document.querySelectorAll('.btn-primary, .nav-cta');
    magneticBtns.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = (e.clientX - rect.left) - rect.width / 2;
            const y = (e.clientY - rect.top) - rect.height / 2;
            
            gsap.to(btn, {
                x: x * 0.2, // strength of magnetic pull
                y: y * 0.2,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: "elastic.out(1, 0.3)"
            });
        });
    });
}

/**
 * Services / Bento Cards Animations
 */
function initServicesAnimations() {
    const serviceCards = document.querySelectorAll('.service-card');
    if (serviceCards.length > 0) {
        gsap.from(serviceCards, {
            y: 60,
            opacity: 0,
            duration: 0.8,
            ease: "power3.out",
            stagger: 0.15,
            scrollTrigger: {
                trigger: '.services-grid',
                start: "top 80%", // triggers when top of grid is 80% down the viewport
                toggleActions: "play none none none"
            }
        });
    }
}

/**
 * Footer Curtain Reveal
 */
function initFooterReveal() {
    const footer = document.querySelector('.dama-footer');
    const stackingContent = document.querySelector('.stacking-content');
    
    if (footer && stackingContent) {
        // We set the footer to fixed and negative z-index
        footer.style.position = 'fixed';
        footer.style.bottom = '0';
        footer.style.left = '0';
        footer.style.width = '100%';
        footer.style.zIndex = '-1';
        
        // Update the margin of the content above it dynamically based on footer height
        function updateFooterMargin() {
            const footerHeight = footer.offsetHeight;
            stackingContent.style.marginBottom = `${footerHeight}px`;
        }
        
        // Run once and also on resize
        updateFooterMargin();
        window.addEventListener('resize', updateFooterMargin);
    }
}
