$('.slider-1').owlCarousel({
    margin: 10,
    autoplay: true,
    loop: true,
    navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
    navClass: ['owl-prev', 'owl-next'],
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 2,
            nav: true,
        }
    }
});

$('.lab-carousel').owlCarousel({
    margin: 10,
    autoplay: true,
    loop: true,
    navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
    navClass: ['owl-prev', 'owl-next'],
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 4,
            nav: true,
        }
    }
});