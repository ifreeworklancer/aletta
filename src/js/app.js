import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

try {
    window.jQuery = window.$ = require('jquery');
    require('pagepiling.js');

} catch (e) {
    console.error(e);
}

(function () {
    let header = $('#app-header');
    let menu = $('.menu');
    let headerMenu = $('.header-nav-list');
    let burgerMenu = $('.burger-menu');

    if ($(window).width() >= 1200) {
        burgerMenu.addClass('active');
        headerMenu.addClass('active');
    }

    /**
     * Burger-menu
     */
    $(burgerMenu).click(function () {
        $(this).toggleClass('active');
        headerMenu.toggleClass('active');
        menu.toggleClass('active');
    });

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 0) {
            $('#app-header').addClass('is-scroll');
        } else {
            $('#app-header').removeClass('is-scroll');
        }
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.slideUp();
    });

    /**
     * PagePiling
     */
    if ($(window).width() >= 1200) {
        $('#app').pagepiling({
            menu: '#app-header',
            anchors: [],
            verticalCentered: false,
            navigation: {
                'textColor': '#000',
                'bulletsColor': '#000',
                'position': 'left',
            },
            sectionSelector: 'section',

            //events
            onLeave: function (index, nextIndex, direction) {
            },
            afterLoad: function (anchorLink, index) {
                let ppNav = $('#pp-nav');
                let laboratoryImage = $('.laboratory-image');

                if (index === 1) {
                    header.removeClass('white').addClass('dark');
                    ppNav.removeClass('dark white last').addClass('primary');
                }
                if (index === 2) {
                    header.removeClass('white').addClass('dark');
                    ppNav.removeClass('dark white last').addClass('primary');
                    laboratoryImage.addClass('start-animation');

                }
                if (index === 3) {
                    header.removeClass('dark').addClass('white');
                    ppNav.removeClass('primary white last').addClass('dark');
                }
                if (index === 4) {
                    header.removeClass('white').addClass('dark');
                    ppNav.removeClass('dark primary').addClass('white');
                    ppNav.removeClass('dark primary').addClass('white last');
                }
            },
            afterRender: function () {
            },
        });
    }

    /**
     * Products accordion
     */
    document.querySelector('.products-item').classList.add('active');
    $('.products-item').on('click', function () {
        $('.products-item').removeClass('active');
        $(this).addClass('active');
    });

    /**
     * Tabs
     */

    $('.custom-tabs-nav').on('click', 'div:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('.custom-tabs').find('.custom-tabs-body-item').removeClass('active').eq($(this).index()).addClass('active');
    });

    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Modal
     */
    let feedbackModal = $('.custom-modal--feedback');
    let closeModal = $('.close-modal');
    let modalMask = $('.modal-mask');

    $('.open-feedback').on('click', function (e) {
        e.preventDefault();
        $(feedbackModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(feedbackModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(feedbackModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function () {
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        console.log(height);

        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            if ($(feedbackModal).lenght > 0) {
                $(feedbackModal).removeClass('active');
                $(modalMask).removeClass('active');
            }
        }
    });

    /**
     * Sliders
     */
    if ($('.reviews-slider').length) {

        let elem1 = document.querySelector('.reviews-slider');
        if (elem1) {
            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                adaptiveHeight: true
            });

            let prevArrowIntro = document.querySelector('.slider-arrow--reviews .slider-arrow-item--prev');

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            let nextArrowIntro = document.querySelector('.slider-arrow--reviews .slider-arrow-item--next');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
            });
        }
    }

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.some-class', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
})(jQuery);