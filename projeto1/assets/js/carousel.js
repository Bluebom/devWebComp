$(function () {
    $('.owl-carousel').owlCarousel({
        lazyLoad: true,
        loop: true,
        responsive: {
            300: {
                items: 1,
                nav: true,
                margin: 2,
            },
            768: {
                items: 1,
                nav: true,
                margin: 10,
            }
        },
    })
});