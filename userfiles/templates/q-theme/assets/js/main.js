qTheme = {
    isElementInViewport: function (el) {
        if (typeof jQuery === "function" && el instanceof jQuery) {
            el = el[0];
        }
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight)
        );
    },
    stickyNav: function () {
        mw.$('body.sticky-nav .navigation')
            [$(window).scrollTop() ? 'addClass' : 'removeClass']
        ('sticky');
    }
}
$(window).on('load', function () {
    qTheme.stickyNav();

    mw.$(window).on('scroll resize', function () {
        qTheme.stickyNav();
    });
});

$(document).ready(function () {
    if ($('body').hasClass('sticky-nav')) {
        var navHeight = mw.$('.navigation').outerHeight();
        qTheme.stickyNav();
    }

    mw.$('.js-menu-toggle').on('click', function () {
        mw.$('html').toggleClass('mobile-menu-active');
    });


    mw.$(document.body).on('click', function (e) {
        var curr = mw.$(e.target)
        if (curr.parents('.menu,.toggle').length === 0) {
            mw.$('html').removeClass('mobile-menu-active');
        }

    });

    mw.$(".navigation .menu li").each(function () {
        if ($(this.children).filter('ul').length > 0) {
            mw.$(this).addClass('has-sub-menu')
        }
    });


    mw.$(".has-sub-menu > a").on("click", function (e) {
        var parent = mw.$(this).parent();
        var ul = parent.children('ul');
        console.log(ul)
        if (ul.length === 1 && matchMedia("(max-width: 1450px)").matches) {
            e.preventDefault();
            ul.slideToggle(function () {
                if (this.style.display == 'none') {
                    this.style.display = '';
                }
            });
        }
    });


});


/* ###################### Slick - Testimonials  ###################### */
/*$(document).ready(function () {
 if ($('.slick-testimonials').length > 0) {
 mw.$('.slick-testimonials').each(function () {
 var el = mw.$(this);
 el.slick({
 centerMode: true,
 centerPadding: '0px',
 slidesToShow: 3,
 arrows: false,
 dots: true,
 responsive: [
 {
 breakpoint: 1200,
 settings: {
 slidesToShow: 2
 }
 },
 {
 breakpoint: 992,
 settings: {
 slidesToShow: 1
 }
 }
 ]
 });
 });
 }
 });*/

/* ###################### Slick - Testimonials  ###################### */
/*$(document).ready(function () {
 if ($('.slick-testimonials-2').length > 0) {
 mw.$('.slick-testimonials-2').each(function () {
 var el = mw.$(this);
 el.slick({
 centerMode: true,
 centerPadding: '0px',
 slidesToShow: 1,
 arrows: true,
 dots: true
 });
 });
 }
 });*/

/* ###################### Slick - Brands  ###################### */
/*$(document).ready(function () {
 if ($('.slick-brands').length > 0) {
 mw.$('.slick-brands').each(function () {
 var el = mw.$(this);
 el.slick({
 centerMode: true,
 centerPadding: '0px',
 slidesToShow: 5,
 arrows: false,
 autoplay: true,
 autoplaySpeed: 2000,
 dots: false,
 responsive: [
 {
 breakpoint: 1200,
 settings: {
 arrows: false,
 centerMode: true,
 centerPadding: '0px',
 slidesToShow: 3
 }
 }, {
 breakpoint: 768,
 settings: {
 arrows: false,
 centerMode: true,
 centerPadding: '0px',
 slidesToShow: 2
 }
 }, {
 breakpoint: 480,
 settings: {
 arrows: false,
 centerMode: true,
 centerPadding: '0px',
 slidesToShow: 1
 }
 }
 ]
 });
 });
 }
 });*/

/* ###################### Counter ###################### */
var numbCount = function (el) {
    var html = el.innerHTML.trim();
    var to = parseInt(html, 10);
    var inc = 120;
    if (to > 20) inc = 60;
    if (to > 60) inc = 40;
    if (to > 120) inc = 10;
    if (to > 320) inc = 5;
    if (to > 1220) inc = 3;
    if (to > 5000) inc = 1;
    if (!isNaN(to)) {
        time = 10;
        for (var i = 1; i <= to; i++) {
            time += inc;
            (function (time, i, el) {
                setTimeout(function () {
                    el.innerHTML = i;
                }, time)
            })(time, i, el)
        }
    }
}

$.fn.isOnScreen = function () {
    var win = mw.$(window);

    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


$(window).on('load resize scroll', function () {
    setTimeout(function () {
        mw.$('[data-counter]').each(function () {
            if ($(this).isOnScreen()) {
                mw.$(this).css({'visibility': 'visible'});
                mw.$(this).removeClass('js-start-from-zero');
                if (!this.__activated) {

                    this.__activated = true;
                    numbCount(this);
                }
            }
        });
    }, 10);

    mw.$(".menu").css('maxHeight', ($(window).height() - mw.$(".navigation").outerHeight()))
});


/* ###################### Tabs ###################### */
$(document).ready(function () {
    var numTabs = mw.$('.tabs .nav-tabs:not(.as-buttons)').find('li').length;
    var tabWidth = 100 / numTabs;
    var tabPercent = tabWidth + "%";
    mw.$('.nav-tabs li').width(tabPercent);
});
/* ###################### Tabs ###################### */

/* ###################### Elevate Zoom ###################### */
$(document).ready(function () {

    var elevateZoomTurnOn = mw.$(document).width() > 991 ? true : false;

    if (elevateZoomTurnOn) {
        mw.$("#elevatezoom").elevateZoom({
            gallery: 'elevatezoom-gallery',
            cursor: "crosshair",
            galleryActiveClass: 'active',
            imageCrossfade: true,
            zoomType: "inner"
        });


        //pass the images to Fancybox
        mw.$("#elevatezoom").bind("click", function (e) {
            var ez = mw.$('#elevatezoom').data('elevateZoom');

            var res = [];
            $.each(ez.getGalleryList(), function () {
                res.push({src: this.href})
            });

            $.magnificPopup.open({
                items: res,
                gallery: {
                    enabled: true
                },
                type: 'image'
            });

            return false;
        });
    }

    if ($('#elevatezoom-gallery').length > 0) {
        mw.$('#elevatezoom-gallery').each(function () {
            var el = mw.$(this);
            el.slick({
                centerMode: false,
                centerPadding: '0',
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                autoplay: false,
                autoplaySpeed: 2000,
                dots: false,
                infinite: true,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    }
});
/* ###################### Elevate Zoom ###################### */

/* ###################### Home Slider ###################### */
$(document).ready(function () {
    /*if ($('.home-slider').length > 0) {
     mw.$('.home-slider').each(function () {
     var el = mw.$(this);
     el.slick({
     centerMode: false,
     centerPadding: '0px',
     slidesToShow: 1,
     arrows: true,
     autoplay: false,
     autoplaySpeed: 2000,
     dots: true
     });
     });
     }*/
});
/* ###################### Elevate Zoom ###################### */

/* ###################### Top Top ###################### */
$(document).ready(function () {
    mw.$("#to-top").hide();
    mw.$("#to-top").on("click", function () {
        mw.$("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    mw.$(window).scroll(function () {
        if ($(window).scrollTop() === 0) {
            mw.$("#to-top").hide();
        } else {
            mw.$("#to-top").show();
        }
    });
});
/* ###################### To Top ###################### */

/* ###################### Google Maps ###################### */
$(document).ready(function () {
    if ($('#map').length > 0) {
        var latitude = 42.705729;
        var longtitude = 23.319534;
        var isDraggable = mw.$(document).width() > 991 ? true : false; // If document (your website) is wider than 480px, isDraggable = true, else isDraggable = false

        var locations = [
            ['', latitude, longtitude, 2]
        ];
        var styles = [
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#3b5998"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "all",
                "stylers": [
                    {
                        "hue": "#3b5998"
                    },
                    {
                        "saturation": -22
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#f7f7f7"
                    },
                    {
                        "saturation": 10
                    },
                    {
                        "lightness": 76
                    }
                ]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f7f7f7"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#8b9dc3"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "color": "#3b5998"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#8b9dc3"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "color": "#8b9dc3"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "all",
                "stylers": [
                    {
                        "invert_lightness": false
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "weight": 0.43
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#8b9dc3"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#3b5998"
                    }
                ]
            }
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            scrollwheel: false,
            navigationControl: true,
            mapTypeControl: false,
            scaleControl: false,
            draggable: isDraggable,
            styles: styles,
            center: new google.maps.LatLng(latitude, longtitude),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: 'assets/img/section-16/marker.png'
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                }
            })(marker, i));
        }
    }
});
/* ###################### Google Maps ###################### */

/* ###################### Masonry Gallery with Magnific Popup ###################### */
$(document).ready(function () {
    // masonry grid
    var masonryGrid = mw.$('.masonry-gallery .js-masonry-grid-works');
    setTimeout(function () {
        masonryGrid.masonry({
            itemSelector: '.js-masonry-grid-works__item',
            columnWidth: '.js-masonry-grid-works__sizer',
            percentPosition: true
        }).isotope();
    }, 100);

    // isotope filtering panel
    mw.$('.masonry-gallery .js-masonry-grid-works-filter').on('click', 'a', function (e) {
        e.preventDefault();

        var filterValue = mw.$(this).attr('data-filter');

        mw.$('.masonry-gallery .js-masonry-grid-works-filter').find('.list-masonry-grid-works-filter__link_active').removeClass('list-masonry-grid-works-filter__link_active btn-primary');
        mw.$(this).addClass('list-masonry-grid-works-filter__link_active btn-danger');

        masonryGrid.isotope({
            filter: filterValue
        });
    });

    // lightbox gallery
    mw.$('.js-popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });
});
/* ###################### Masonry Gallery with Magnific Popup ###################### */

/* ###################### Tooltip ###################### */
$(document).ready(function () {
    mw.$('[data-toggle="tooltip"]').tooltip()
});
/* ###################### Tooltip ###################### */

/* ###################### Project Gallery ###################### */
function loadPortfolioGallerySettings() {
    if ($(window).width() > 991) {
        var projectGalleryHeight = mw.$('.portfolio-inner-page .project-gallery').height();
        var projectGalleryWidth = mw.$('.portfolio-inner-page .project-gallery').width();
        var projectInfoHeight = mw.$('.portfolio-inner-page .project-info').height();
        mw.$('.portfolio-inner-page .project-info').parent().css({'height': projectGalleryHeight + 'px'});
        mw.$('.portfolio-inner-page .project-info').css({'max-width': projectGalleryWidth + 'px'});
        mw.$('.portfolio-inner-page .js-in-viewport').css({'margin-top': projectInfoHeight + 'px'});
    } else {
        if ($('.portfolio-inner-page .project-gallery').length > 0) {
            mw.$('.portfolio-inner-page .project-gallery').each(function () {
                var el = mw.$(this);
                el.slick({
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                    adaptiveHeight: true
                });
            });
        }
    }
}

$(document).ready(function () {
    loadPortfolioGallerySettings();
});

$(document).on('resize', function () {
    loadPortfolioGallerySettings();
});

$(window).on('scroll resize orientationchange load', function () {
    var vp = mw.$('.js-in-viewport'), pg = mw.$('.project-gallery');
    if (vp.length && pg.length && mw.$(window).width() > 991) {
        if ((vp.offset().top + vp.height()) > (pg.offset().top + pg.height())) {
            mw.$('.project-info').removeClass('fixed');

        }
        else {
            if (!$('.project-info').hasClass('fixed')) {
                mw.$('.project-info').addClass('fixed')
            }
        }
    }
});
/* ###################### Project Gallery ###################### */

/* ###################### Magnific Popup with Video ###################### */
$(document).ready(function () {
    mw.$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
});
/* ###################### Magnific Popup with Video ###################### */

/* ###################### Zoom Container Open Image ###################### */
// mw.$(document).ready(function () {
//     mw.$('.zoomWindow').on('click', function () {
//         var img = mw.$(this).css('background-image');
//         console.log(img);
//     });
// });
/* ###################### Zoom Container Open Image ###################### */


$(document).ready(function () {
    //Generate color scheme
    var cssMain = mw.$('head').find('.css-main').length;

    if (cssMain > 0) {
        var css = '', thelink = document.querySelector('.css-main').sheet, styles = thelink.cssRules;

        for (var i = 0; i < styles.length; i++) {
            if (styles[i].style) {
                var loc = '';
                loc += styles[i].style.backgroundColor ? ('background-color:' + styles[i].style.backgroundColor + ';') : ''


                if (styles[i].style && styles[i].style.backgroundImage) {
                    loc += (styles[i].style.backgroundImage.toLowerCase().indexOf('-gradient') !== -1 && styles[i].style.backgroundImage.toLowerCase().indexOf('rgb') !== -1) ? ('background-image:' + styles[i].style.backgroundImage + ';') : ''
                }

                if (styles[i].style) {
                    loc += styles[i].style.color ? ('color:' + styles[i].style.color + ';') : ''
                    loc += (styles[i].style.borderColor && styles[i].style.borderColor.indexOf('initial') === -1) ? ('border-color:' + styles[i].style.borderColor + ';') : ''
                }
                if (loc) {
                    css += styles[i].selectorText + '{' + loc + '}' + '\r\n';
                }
            }

        }

        // console.log(css);
    }
});

$(document).ready(function () {
    mw.$('#mw-template-qtheme').removeClass('module');
})
