

function initSecuritySlider() {

    const $slider = $('.security-features');

    if ($(window).width() <= 800) {

        if (!$slider.hasClass('slick-initialized')) {

            $slider.slick({

                slidesToShow: 4,
                slidesToScroll: 1,

                arrows: true,
                dots: false,

                infinite: true,

                // autoplay: true,
                autoplaySpeed: 2500,

                adaptiveHeight: true,

                appendArrows: $('.matrics-slider-arrows'),

                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',

                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',

                responsive: [

                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }

                ]

            });

        }

    } else {

        if ($slider.hasClass('slick-initialized')) {
            $slider.slick('unslick');
        }

    }

}

initSecuritySlider();

$(window).on('resize', function () {
    initSecuritySlider();
});

