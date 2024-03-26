;(function($) {
    'use strict'

    // Mega Menu
    var megaMenu = function() {
        $(window).on('load resize', function() {
            var 
            du = $('#main-nav .megamenu > ul'),
            siteNav = $('#main-nav'),
            siteHeader = $( '#site-header' );

            if ( du.length ) {
                var
                o = siteHeader.find(".wprt-container").outerWidth(),
                a = siteNav.outerWidth(),
                n = siteNav.css("right"),
                n = parseInt(n,10),
                d = o-a-n; 
                if ( $('.site-navigation-wrap').length ) d = 0;
                du.css({ width: o, "margin-left": -d })
            }
        });
    };

    // PreLoader
    var preLoader = function() {
        if ( $().animsition ) {
            $('.animsition').animsition({
                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 1500,
                outDuration: 800,
                loading: true,
                loadingParentElement: 'body',
                loadingClass: 'animsition-loading',
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: [
                    '-webkit-animation-duration',
                    '-moz-animation-duration',
                    'animation-duration'
                    ],
                overlay: false,
                overlayClass: 'animsition-overlay-slide',
                overlayParentElement: 'body',
                transition: function(url){ window.location.href = url; }
            });
        }
    };

    // Mobile Navigation
    var mobileNav = function() {
        var menuType = 'desktop';

        $(window).on('load resize', function() {
            var mode = 'desktop';
            var wrapMenu = $('#site-header-inner .wrap-inner');
            var navExtw = $('.nav-extend.active');
            var navExt = $('.nav-extend.active').children();

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches )
                mode = 'mobile';

            if ( mode != menuType ) {
                menuType = mode;

                if ( mode == 'mobile' ) {
                    $('#main-nav').attr('id', 'main-nav-mobi')
                        .appendTo('#site-header')
                        .hide().children('.menu').append(navExt)
                            .find('li:has(ul)')
                            .children('ul')
                                .removeAttr('style')
                                .hide()
                                .before('<span class="arrow"></span>');
                } else {
                    if ( $('body').is('.header-style-5') )
                        wrapMenu = $('.site-navigation-wrap .inner');

                    $('#main-nav-mobi').attr('id', 'main-nav')
                        .removeAttr('style')
                        .appendTo(wrapMenu)
                        .find('.ext').appendTo(navExtw)
                        .parent().siblings('#main-nav')
                        .find('.sub-menu')
                            .removeAttr('style')
                        .prev().remove();
                            
                    $('.mobile-button').removeClass('active');
                }
            }
        });

        $(document).on('click', '.mobile-button', function() {
            $(this).toggleClass('active');
            $('#main-nav-mobi').slideToggle();
        })

        $(document).on('click', '#main-nav-mobi .arrow', function() {
            $(this).toggleClass('active').next().slideToggle();
        })
    };

    // Search Icon
    var searchIcon = function() {
        if ( !$('body').hasClass('header-style-5') ) {
            $('.header-search-icon').on('click', function() {
                var searchForm = $(this).parent().find('.header-search-form'),
                    searchField = $(this).parent().find('.header-search-field');

                searchForm.stop().fadeToggle(function () {
                    searchField.focus();
                });

                return false;
            });
        }
    };

    // Retina Logos
    var retinaLogo = function() {
        var retina = window.devicePixelRatio > 1 ? true : false;
        var $logo = $('#site-logo img');
        var $logo_retina = $logo.data('retina');

        if ( retina && $logo_retina ) {
            $logo.attr({
                src: $logo.data('retina'),
                width: $logo.data('width'),
                height: $logo.data('height')
            });
        }
    };

    // Responsive Videos
    var responsiveVideos = function() {
        if ( $().fitVids ) {
            $('.wprt-container').fitVids();
        }
    };

    // Header Fixed
    var headerFixed = function() {
        if ( $('body').hasClass('header-fixed') ) {
            var nav = $('#site-header');

            if ( $('body').is('.header-style-5') ) {
                var nav = $('.site-navigation-wrap');
            }

            if ( nav.length ) {
                var offsetTop = nav.offset().top,
                    headerHeight = nav.height(),
                    injectSpace = $('<div />', {
                        height: headerHeight
                    }).insertAfter(nav);

                $(window).on('load scroll', function(){
                    if ( $(window).scrollTop() > offsetTop ) {
                        nav.addClass('is-fixed');
                        injectSpace.show();
                    } else {
                        nav.removeClass('is-fixed');
                        injectSpace.hide();
                    }

                    if ( $(window).scrollTop() > 400 ) { 
                        nav.addClass('is-small');
                    } else {
                        nav.removeClass('is-small');
                    }
                })
            }
        }     
    };

    // Scroll to Top
    var scrollToTop = function() {
        $(window).scroll(function() {
            if ( $(this).scrollTop() > 800 ) {
                $('#scroll-top').addClass('show');
            } else {
                $('#scroll-top').removeClass('show');
            }
        });

        $('#scroll-top').on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 1000 , 'easeInOutExpo');
        return false;
        });
    };

    // Featured Media
    var featuredMedia = function() {
        if ( $().slick ) {
            $('.blog-gallery').slick({
                dots: true,
                infinite: true,
                speed: 300,
                fade: true,
                cssEase: 'linear'
            });
        }
    };

    // Related Post
    var relatedPost = function() {
        if ( $().slick ) {
            $('.post-related').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        }
    };

    var blogGrid = function() {
        if ( $().isotope ) {
            var $container = $('.blog-grid');

            $container.imagesLoaded(function () {
                $container.isotope({
                    itemSelector: '.hentry',
                    transitionDuration: '0.5s'
                })
            })
        }
    };

    // Widget Spacer
    var widgetSpacer = function() {
        $(window).on('load resize', function() {
            var mode = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches )
                mode = 'mobile';

            $('.spacer').each(function(){
                if ( mode == 'mobile' ) {
                    $(this).attr('style', 'height:' + $(this).data('mobi') + 'px')
                } else {
                    $(this).attr('style', 'height:' + $(this).data('desktop') + 'px')
                }
            })
        });
    };

    var AddGridVC = function() {
        if ( $('body').hasClass('is-page') ) {
            var vcGrid = $('.wpb_row');

            if ( vcGrid.length == 0 ) {
                $('#content-wrap').addClass('wprt-container');
            }
            
            if ( $('body.is-page').hasClass('sidebar-right') || $('body.is-page').hasClass('sidebar-left')  ) {
                $('#content-wrap').addClass('wprt-container');
            }
        }
    };

    mobileNav();
    headerFixed();
    scrollToTop();
    widgetSpacer();
    megaMenu();

    // Dom Ready
    $(function() {
        preLoader();
        searchIcon();
        retinaLogo();
        featuredMedia();
        relatedPost();
        responsiveVideos();
        blogGrid();
        AddGridVC();
    });
})(jQuery);
