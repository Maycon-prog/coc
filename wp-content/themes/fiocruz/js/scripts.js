document.addEventListener('DOMContentLoaded', function () {
    var widgets_slides = document.getElementsByClassName('.splide');
    for (let i = 0; i < widgets_slides.length; i++) {
        new Splide(widgets_slides[i]).mount();
    }
});

