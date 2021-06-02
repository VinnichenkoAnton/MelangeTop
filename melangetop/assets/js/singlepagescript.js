'use strict';

function preloader() {
    window.onload = function() {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function() {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 500);
    };
}

preloader();

window.addEventListener('DOMContentLoaded', () => {
    function pageup() {
        const pageup = document.querySelector('.pageup');
    
        window.addEventListener('scroll', function() {
            const top = window.pageYOffset || document.documentElement.scrollTop;
            if (top > 140) {
                pageup.style.display = 'block';
            } else {
                pageup.style.display = 'none';
            }
        });
    
        pageup.addEventListener('click', function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    
    }
    pageup();

    function hamburger() {
        const ham = document.querySelector('.header__hamburger'),
            menu = document.querySelector('.navigation__wrapper'),
            link = document.querySelectorAll('.navigation__link');
        ham.addEventListener('click', function() {
            menu.classList.toggle('navigation__wrapper_active');
        });
        link.forEach(item => {
            item.addEventListener('click', function() {
                menu.classList.remove('navigation__wrapper_active');
            });
        });
    }
    hamburger();

});