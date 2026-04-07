/**
 * Global JS — scroll reveal, sticky header, contact
 * Alpine.js (bundled with Livewire) handles mobile menu toggle inline.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Sticky header shadow
    const header = document.getElementById('header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('shadow-md', window.scrollY > 50);
        });
    }

    // Scroll reveal
    const els = document.querySelectorAll('[data-reveal]');
    if (els.length) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.4 }
        );
        els.forEach((el) => {
            el.classList.add('opacity-0', 'translate-y-8', 'transition', 'duration-700');
            observer.observe(el);
        });
    }

    // Back to top
    // const btn = document.getElementById('contact');
    // if (btn) {
    //     window.addEventListener('scroll', () => {
    //         btn.classList.toggle('hidden', window.scrollY < 400);
    //     });
    //     btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    // }
});
