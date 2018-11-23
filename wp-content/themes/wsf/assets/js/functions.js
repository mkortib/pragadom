( function( $ ) {

    $(document).ready(function () {

        var $arr = $('.arr-dwn');
        var $header = $('.header');
        var $windWidth = $(window).width();

        if($arr.length) {
            $arr.on('click', function () {
                $('html,body').animate({
                        scrollTop: $('.about-bl').offset().top - 220
                    }, 1000);
            });
        }

        $(window).on('scroll', function () {
           if ($(window).scrollTop() > 100) {
               $header.addClass('fixed');
           } else {
               $header.removeClass('fixed');
           }
        });

        if ($windWidth >= 1280) {
            var $lis = $('.header-menu .menu-item');
            $lis.slice(0, Math.floor($lis.length / 2)).addClass('light');
        } else {
            var $burgerBtn = $('.menu-button');
            $burgerBtn.on('click', function () {
                $(this).toggleClass('opened');
                $('.header-nav, .inner-bottom, .nice-select').fadeToggle();
                $('html, body').toggleClass('hidden');
            });
        }

        /*** sliders ***/
        var $slider = $('.main-slider');
        var $slideName = null;
        var $randSlider = $('.rand-border');
        var $aboutSlider = $('.about-gallery');
        var $mainNewsSlider = $('.news-main');
        var $randNews = $('.rand-news-border');
        var $docsSlider = $('.project-slider').find('.slider-border');

        if ($windWidth <= 414) {
            $randNews.slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            })
        }

        if ($slider.length) {

            if ($windWidth >= 414) {

                sliderCounter($slider);

                $(document).on('click', '.slick-arrow', function () {
                    $slideName = $('.slick-current .main-slider-itm').data('name');
                    $('.img-name').html($slideName);
                });
            }

            $slider.slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        }

        if ($randSlider.length) {

            if ($windWidth <= 414) {
                sliderCounter($randSlider);
            }

            $randSlider.slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 415,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }

        if ($aboutSlider.length) {

            sliderCounter($aboutSlider);

            $aboutSlider.slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                centerMode: true,
                variableWidth: true
            });
        }

        if ($mainNewsSlider.length) {
            $mainNewsSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
                fade: true,
                cssEase: 'linear',
            })
        }

        if ($randNews.length) {
            $randNews.slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1
            });
        }

        if ($docsSlider.length) {
            $docsSlider.slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                variableWidth: true,
                responsive: [
                    {},
                    {
                        breakpoint: 1500,
                        settings: {
                            slidesToShow: 3,
                        }
                    }
                ]
            })
        }

        function sliderCounter($sliderName) {
            var $currentSlide;
            var $slidesCount;
            var $sliderCounter = document.createElement('div');
            $sliderCounter.classList.add('slider-counter');

            var updateSliderCounter = function (slick, currentIndex) {
                $currentSlide = slick.slickCurrentSlide() + 1;
                $slidesCount = slick.slideCount;
                $($sliderCounter).text($currentSlide + ' | ' + $slidesCount);
            };

            $sliderName.on('init', function (event, slick) {
                $sliderName.append($sliderCounter);
                updateSliderCounter(slick);
            });

            $sliderName.on('afterChange', function (event, slick, currentSlide) {
                updateSliderCounter(slick, currentSlide);
            });
        }

        /*** mobile ***/
        if ($windWidth <= 414) {
            $('.features-title').after('<div class="features-slider bg-border"></div>');
            $('.feature-itm').each(function () {
                $('.feature-itm').appendTo('.features-slider');
            });
            
            var $fSlider = $('.features-slider');

            $fSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: true,
                infinite: false,
            });

            var $devCnt = $('.developer-cnt');
            if ($devCnt.parent().length) {
                var $h = $devCnt.get(0).scrollHeight + 100;
                $devCnt.css('max-height', '150px');
                var $btnDev = $(this).find('.developer-btn');
                $btnDev.on('click', function () {
                    resizeDev();
                });
            }

            $('.img-row').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                variableWidth: true
            });
        }

        function resizeDev() {
            if (!$devCnt.hasClass('open')) {
                $devCnt.animate({
                    'max-height': $h
                }, 0, function () {
                    $(this).addClass('open');
                    $btnDev.fadeToggle();
                })
            }
            else {
                $devCnt.animate({
                    'max-height': '150px'
                }, 0, function () {
                    $(this).removeClass('open');
                    $btnDev.fadeToggle();
                })
            }
        }

        if ($windWidth <= 768) {
            $('.description-img').insertAfter('.description-txt-grey');
            $('.about-dev .inner-title').insertAfter('.about-dev .inner-txt-wrap img');
        }

        /*** seo ***/
        var $seo = $('.seo');

        if ($seo.length) {
            var $txt = $(this).find('.seo-txt');
            $txt.css('max-height', $txt.get(0).scrollHeight);
            var $btn = $(this).find('.seo-btn');

            $btn.on('click', function () {
                resizeSeo();
            });

        }

        function resizeSeo() {

            var $minHeight = ($windWidth <= 414) ? '76' : '25';

            if ($txt.hasClass('open')) {
                $txt.animate({
                    'max-height': $minHeight
                }, 0, function () {
                    $(this).removeClass('open');
                    $btn.fadeToggle();
                })
            }
                else {
                    $txt.animate({
                        'max-height': $txt.get(0).scrollHeight
                    }, 0, function () {
                        $(this).addClass('open');
                        $btn.fadeToggle();
                    })
                }
            }

        /*** animation ***/
        var $counter = $('.border-itm-counter');

        window.sr = ScrollReveal();

        sr.reveal($counter, {
            distance: '50%',
            afterReveal: function () {

                $counter.each(function () {
                    var $this = $(this);
                    var $countTo = $this.data('count');

                    $({countNum: $this.text()}).animate({
                            countNum: $countTo
                        },
                        {
                            duration: 9000,
                            easing: 'linear',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                            }

                        });

                });
            }
        });

        setTimeout(function () {
            $('.arr .cls-1').css('stroke-dasharray', '0');
        }, 5000);

        var $btnQ = $('.btn-toggle');

        $btnQ.on('click', function () {
           $('.img-link').toggleClass('hide');
            $btnQ.toggle();
        });

        $('.faq-title').on('click', function () {
            var $parent = $(this).parent();
            $parent.toggleClass('active');
            var $des = $(this).next('.faq-des');
            $des.css('max-height', $des.get(0).scrollHeight);

            if ($parent.hasClass('active')) {
                $des.animate({
                    'max-height': $des.get(0).scrollHeight
                }, 0, function () {
                    $(this).parent().siblings().removeClass('active');
                    $(this).parent().siblings().children('.faq-des').css('max-height', '0');
                })
            } else {
                $des.animate({
                    'max-height': 0
                }, 0)
            }
        });

        $('.ctrls-btn').on('click', function () {
            $(this)
                .addClass('active')
                .siblings()
                .removeClass('active');

            var $btnData = $(this).data('toggle');
            var $cnt =  $('.cnt-itm');

            $cnt.each(function () {
                $(this).addClass('hide');
                if ($(this).data('cnt') == $btnData) {
                    $(this).removeClass('hide');
                }
            })
        });

        /*** fancy ***/
        $('[data-fancybox="parking"], [data-fancybox="office"], [data-fancybox="docs-1"],' +
            ' [data-fancybox="docs-2"], .ngg-gallery-thumbnail a').fancybox({

        });

        /*** popups ***/
        var $closeBtn = $('.popup .close');
        var $showBtn = $('.btn-popup');
        var $popupOverlay = $('.popup_overlay');
        var $popup = $popupOverlay.find('.popup');

        $showBtn.on('click', function () {
            showPopupCnt($(this).data('popup'));
            $popup.add($popupOverlay)
                .toggleClass('open')
                .animate({'opacity': '1'})
        });

        $closeBtn.on('click', function () {
            $popup.add($popupOverlay).animate({
                'opacity': '0'
            }, function () {
                $(this).toggleClass('open');
                $popup.find('.popup-cnt').hide();
            });
        });

        $popupOverlay.mousedown(function(e) {
            var clicked = $(e.target);
            if (clicked.is($popup) || clicked.parents().is($popup)) {
                return;
            } else {
                $popup.add($popupOverlay).animate({
                    'opacity': '0'
                }, function () {
                    $(this).toggleClass('open');
                    $popup.find('.popup-cnt').hide();
                })
            }
        });
        
        function showPopupCnt(data) {
            $('.popup-cnt').each(function () {
                if ($(this).data('subject') === data) {
                    $(this).css('display', 'block');
                }
            })
        }

        /*** callbacks ***/
        $('form :submit').on('click', function () {
            $('> input:required').each(function () {
                if ( !$(this).val() ) $(this).addClass('incomplete');
            });
        });

        $('input:required').on('input', function () {
            $(this).removeClass('incomplete');
        });

        var options =  {
            onComplete: function() {
                $(this).removeClass('incomplete');
            },
            onInvalid: function(){
                $(this).addClass('incomplete');
            }
        };

        $('input.phone').mask('+38 (999) 999-99-99', options);

        $('input.name').on('input', function () {
            $(this).val($(this).val().replace(/[0-9\\/^$.|?*+\-_()]/g, ""));
        });

        $('.popup-form').on('submit', function (e) {

            e.preventDefault();

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'callback',
                    subject: $(this).parent().data('subject'),
                    name: $(this).find('.name').val() ? $(this).find('.name').val() : null,
                    phone: $(this).find('.phone').val() ? $(this).find('.phone').val() : null,
                    email: $(this).find('.email').val() ? $(this).find('.email').val() : null,
                    question: $(this).find('.question').val() ? $(this).find('.question').val() : null,
                    url: location.href
                },
                beforeSend: function () {
                    $('.popup-cnt, .popup-form').remove();
                },
                success: function () {
                    $('.success-request').css('display', 'block');
                    setTimeout(function () {
                        $popup.add($popupOverlay).animate({
                            'opacity': '0'
                        }, function () {
                            $(this).toggleClass('open');
                            $popup.find('.popup-cnt').hide();
                        });
                    }, 15000);
                }
            });
        });

        window.$ = $;
    });

    $(window).load(function () {

        $('.preloader').remove();

        $('#qtranxs_select_qtranslate-chooser, .filter-itm').niceSelect();

        $('.img-name').html($('.slick-current .main-slider-itm').data('name'));

    });

} )( jQuery );
