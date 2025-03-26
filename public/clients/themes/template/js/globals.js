$(document).ready(function () {
    addProductPreview();
    showPopup();

    $('.js-mb-menu-btn').on('click', function () {
        $('.js-mb-menu, .js-mb-filter').addClass('is-show');
        $('body').addClass('no-scroll');
    });

    $('.js-mb-filter, .js-mb-menu-close').on('click', function () {
        $('.js-mb-menu, .js-mb-filter').removeClass('is-show');
        $('body').removeClass('no-scroll');
    });

    $('.js-dropdown-toggle').on('click', function () {
        $(this).siblings('.js-dropdown-menu').slideToggle();
    });

    appendSlider('product', {
        loop: true,
        nav: true,
        dots: false,
        margin: 20,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });

    appendSlider('brand', {
        loop: true,
        nav: false,
        dots: false,
        margin: 20,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 4
            },
            992: {
                items: 6
            },
            1200: {
                items: 7
            }
        }
    });

    numberInput('.js-number-value');
    $('.js-number-btn').on('click', function () {
        var plus = $(this).data('plus');
        var input = $(this).siblings('.js-number-value');
        var value = input.val();
        var newValue = parseInt(value) + plus;
        if (newValue > 0) {
            input.val(newValue);
            input.trigger('change');
        }
    });

    // move top button
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 250) {
            $('.js-btn-movetop').fadeIn();
        } else {
            $('.js-btn-movetop').fadeOut();
        }
    });

    $('.js-btn-movetop').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    });

    $('.js-color-picker').on('click', function () {
        $('.js-color-picker.active').removeClass('active');
        $(this).addClass('active');
        let filter = $(this).data('filter');
        var $slider = $('.sync1, .sync2');
        $slider.slick('slickUnfilter').slick('slickFilter', filter).slick('refresh');
        $slider.slick('slickGoTo', 0, true);
    });

    // product intro hide content
    $('.js-product-intro').each(function () {
        if ($(this).outerHeight() > 180) {
            $(this).css('height', '152');
            $(this).find('.js-product-intro-btn').show();
        }
    });
    $('.js-product-intro-btn').on('click', function () {
        $(this).parent('.js-product-intro').css('height', 'auto');
        $(this).hide();
    });

    // id-banner autoheight
    if ($(this).width() >= 1200) {
        var height = $('.js-product-menu').outerHeight();
        if (height) {
            $('.id-banner').css('height', height);
        }
    }

    if ($('.js-mobile-slider').length && $(window).width() < 992) {
        $('.js-mobile-slider').owlCarousel({
            loop: true,
            items: 2.5,
            slideBy: 2,
            margin: 8,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 2.5
                },
                576: {
                    items: 3
                }
            }
        });
    }

    $('.title-bar__title').on('click', function () {
        if ($(window).width() < 992) {
            $(this).next().slideToggle(200);
        }
    });

    $('.js-search-btn').on('click', function (e) {
        e.stopPropagation();
        $('.search').slideToggle(250);
    });
    $('.search').on('click', function (e) {
        e.stopPropagation();
    });
    $('html, body').on('click', function () {
        if ($(window).width() <= 767) {
            $('.search').slideUp(200);
        }
    });
});

$.ripple('.btn, .js-ripple', {
    debug: false, // Turn Ripple.js logging on/off
    on: 'mousedown', // The event to trigger a ripple effect

    opacity: 0.25, // The opacity of the ripple
    color: 'auto', // Set the background color. If set to "auto", it will use the text color
    multi: false, // Allow multiple ripples per element

    duration: 0.7, // The duration of the ripple

    // Filter function for modifying the speed of the ripple
    rate: function (pxPerSecond) {
        return pxPerSecond;
    },

    easing: 'linear' // The CSS3 easing function of the ripple
});

function appendSlider(sliderName = '', option = {}) {
    var slider = $('.js-' + sliderName + '-slider');
    if (slider.length) {
        slider.owlCarousel(option);
        $('.js-' + sliderName + '-slider-prev').on('click', function () {
            $(this).siblings('.js-' + sliderName + '-slider').trigger('prev.owl');
        });
        $('.js-' + sliderName + '-slider-next').on('click', function () {
            $(this).siblings('.js-' + sliderName + '-slider').trigger('next.owl');
        });
    }
}

function numberInput(className) {
    var input = $(className);
    input.keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true) || e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true) || e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true) || e.keyCode >= 35 && e.keyCode <= 39) {
            return;
        }
        if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
}

// fixed navigaion
$(window).on('load', function () {
    if ($(this).width() >= 991) {
        return;
    }
    if ($('.js-navigation').length) {
        var nav = $('.js-navigation');
        var navOffset = nav.offset().top;
        var navHeight = nav.outerHeight();
        nav.wrap(`<div style="height: ${navHeight}px"></div>`);
        var productMenu = $('.js-product-menu');
        var isHomePage = productMenu.hasClass('d-xl-block');

        $(this).on('scroll', function () {
            // check menu on home page

            if ($(this).scrollTop() >= navOffset) {
                nav.css({
                    position: 'fixed',
                    zIndex: '1030',
                    top: 0,
                    left: 0,
                    width: '100vw',
                    maxWidth: '100%'
                });
                if (isHomePage) {
                    productMenu.removeClass('d-xl-block');
                }
            } else {
                nav.css({
                    position: 'static'
                });
                if (isHomePage) {
                    productMenu.addClass('d-xl-block');
                }
            }
        });
    }
});

function addProductPreview() {
    if (!$('.js-preview').length || !$('.js-thumbs').length) {
        return;
    }

    var preview = $('.js-preview');
    var thumb = $('.js-thumbs');
    var previewSliderEl = $(preview).find('.swiper-container').get(0);
    var thumbSliderEl = $(thumb).find('.swiper-container').get(0);
    var thumbSliderPrev = $(thumb).find('.preview__thumb-prev').get(0);
    var thumbSliderNext = $(thumb).find('.preview__thumb-next').get(0);

    var thumbSlider = new Swiper(thumbSliderEl, {
        slidesPerView: 5,
        direction: 'vertical',
        centeredSlides: true,
        spaceBetween: 15,
        loop: true,
        grabCursor: true,
        navigation: {
            prevEl: thumbSliderPrev,
            nextEl: thumbSliderNext
        },
        breakpoints: {
            768: {
                spaceBetween: 10
            },
            576: {
                direction: 'horizontal',
                slidesPerView: 4
            }
        }
    });

    var previewSlider = new Swiper(previewSliderEl, {
        init: false,
        slidesPerView: 1,
        effect: 'fade',
        thumbs: {
            swiper: thumbSlider
        },
        allowTouchMove: false
    });

    zoomImage();

    previewSlider.on('init, slideChange', function () {
        zoomImage();
    });

    previewSlider.init();
}

function zoomImage() {
    $('.zoom').each(function () {
        var largeImgUrl = $(this).data('zoomImage');
        $(this).zoom({url: largeImgUrl});
    });
}

function showPopup() {
    if (!sessionStorage.firstVisit) {
        $('.popup').modal('show');
        sessionStorage.firstVisit = true;
    }
}
