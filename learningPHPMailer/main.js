$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        lazyLoad: true,
        loop: true,
        responsive: {
            300: {
                items: 1.2,
                nav: true,
                margin: 2,
            },
            768: {
                items: 2.5,
                nav: true,
                margin: 10,
            }
        },
        autoHeight: true
    });
});