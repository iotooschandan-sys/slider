


function initSecuritySlider() {

    if ($(window).width() < 768) {

        if (!$('.security-features').hasClass('slick-initialized')) {

            $('.security-features').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2500,
                adaptiveHeight: true,

                appendArrows: $('.matrics-slider-arrows'),

               prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>'
            });

        }

    } else {

        if ($('.security-features').hasClass('slick-initialized')) {
            $('.security-features').slick('unslick');
        }

    }

}
initSecuritySlider();

$(window).on('resize', function () {
    initSecuritySlider();
});
