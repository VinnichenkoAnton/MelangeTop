'use strict';
window.addEventListener('DOMContentLoaded', () => {
    comments({
        container: '.comments__slider',
        slide: '.comments__slide',
        wrapper: '.comments__slider-wrapper',
        field: '.comments__slider-inner'
    });
});

function comments({ container, slide, nextArrow, prevArrow, wrapper, field }) {
    const slides = document.querySelectorAll(slide),
        slider = document.querySelector(container),
        slidesWrapper = document.querySelector(wrapper),
        slidesField = document.querySelector(field),
        width = window.getComputedStyle(slidesWrapper).width;

    let slideIndex = 1,
        offset = 0;

    slidesField.style.width = 100 * slides.length + '%';
    slidesField.style.display = 'flex';
    slidesField.style.transition = '0.5s all';

    slidesWrapper.style.overflow = 'hidden';

    slides.forEach(slide => {
        slide.style.width = width;
    });

    slider.style.position = 'relative';

    const dots = document.createElement('ol'),
        indicators = [];
    dots.classList.add('carousels-dots');
    dots.style.cssText = `
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: flex;
            justify-content: center;
            margin-right: 15%;
            margin-left: 15%;
            margin-bottom: 0;
            list-style: none;
            transform: translateY(100%);
        `;
    slider.append(dots);

    for (let i = 0; i < slides.length; i++) {
        const dot = document.createElement('li');
        dot.setAttribute('data-slide-to', i + 1);
        dot.style.cssText = `
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 3px;
            margin-left: 3px;
            cursor: pointer;
            background-color: #622331;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease;
        `;
        if (i == 0) {
            dot.style.opacity = 1;
        }
        dots.append(dot);
        indicators.push(dot);
    }

    indicators.forEach(dot => dot.style.opacity = 0.5);
    indicators[slideIndex - 1].style.opacity = 1;


    indicators.forEach(dot => dot.style.opacity = 0.5);
    indicators[slideIndex - 1].style.opacity = 1;

    indicators.forEach(dot => {
        dot.addEventListener('click', (e) => {
            const slideTo = e.target.getAttribute('data-slide-to');

            slideIndex = slideTo;
            offset = +width.slice(0, width.length - 2) * (slideTo - 1);

            slidesField.style.transform = `translateX(-${offset}px)`;

            indicators.forEach(dot => dot.style.opacity = 0.5);
            indicators[slideIndex - 1].style.opacity = 1;
        });
    });
}