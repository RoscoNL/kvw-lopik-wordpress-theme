/**
 * Main JavaScript for KVW Lopik Theme
 */

(function() {
    'use strict';

    // Mobile Menu Toggle
    function initMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navigation = document.querySelector('.main-navigation');

        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                navigation.classList.toggle('active');
            });
        }
    }

    // Smooth Scroll
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    }

    // Contact Form Handler
    function initContactForm() {
        const form = document.querySelector('.contact-form');
        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            formData.append('action', 'kvw_contact_form');

            fetch(kvwLopik.ajaxUrl, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Bedankt! Je bericht is verzonden.');
                    form.reset();
                } else {
                    alert('Er is een fout opgetreden. Probeer het later opnieuw.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Er is een fout opgetreden.');
            });
        });
    }

    // Registration Form Handler
    function initRegistrationForm() {
        const form = document.querySelector('.registration-form');
        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            formData.append('action', 'kvw_registration');

            fetch(kvwLopik.ajaxUrl, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Bedankt voor je aanmelding! We nemen snel contact met je op.');
                    form.reset();
                } else {
                    alert('Er is een fout opgetreden. Probeer het later opnieuw.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Er is een fout opgetreden.');
            });
        });
    }

    // Active Navigation Link
    function setActiveNavLink() {
        const currentLocation = location.pathname;
        const menuItems = document.querySelectorAll('.main-navigation a');

        menuItems.forEach(link => {
            if (link.getAttribute('href') === currentLocation) {
                link.classList.add('active');
            }
        });
    }

    // Lazy Load Images
    function initLazyLoad() {
        if ('IntersectionObserver' in window) {
            const images = document.querySelectorAll('img[data-src]');
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        }
    }

    // Scroll Animations
    function initScrollAnimations() {
        const elements = document.querySelectorAll('.card, .entry-content');

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            elements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        }
    }

    // Initialize all functions when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initSmoothScroll();
        initContactForm();
        initRegistrationForm();
        setActiveNavLink();
        initLazyLoad();
        initScrollAnimations();
    });
})();
