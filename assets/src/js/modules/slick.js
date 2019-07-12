import $ from 'jquery';

global.$ = global.jQuery = $;
require('slick-carousel');


export default () => {
    let $slickElement = $('.gemeentes_slider, .home_slider');
    let $multiSlider = $('.multi-slider');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        let $activeCountEl = $('.navigate_counter .active');
        let $nextCountEl = $('.navigate_counter .next');

        let i = (currentSlide ? currentSlide : 0) + 1;
        $activeCountEl.text('0' + i);
        $nextCountEl.text('0' + slick.slideCount);
    });

  $('.gemeentes_slider').slick({
    arrows: false,
    dots: true
  });

  $('.home_slider').slick({
    arrows: true,
    dots: false,
    fade: true,
    adaptiveHeight: true
  });

    $multiSlider.slick({
        infinite: true,
        autoplay: true,
        variableWidth: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 360,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

}


