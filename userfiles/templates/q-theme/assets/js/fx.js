(function () {

    "use strict"

    mw.$(window).on('load resize scroll', function () {
        mw.$(".fx-deactivate").each(function () {
            if (qTheme.isElementInViewport(this)) {
                var i = Math.floor(Math.random() * (3 - 1 + 1)) + 1;
                mw.$(this).addClass('fx-activate-' + i).removeClass('fx-deactivate');
            }
        })

    });

    mw.$(document).ready(function () {


        var fxBorder = '<span class="fx-border-top"></span>'
            + '<span class="fx-border-right"></span>'
            + '<span class="fx-border-bottom"></span>'
            + '<span class="fx-border-left"></span>';

        mw.$(".fx-border")
            .prepend(fxBorder);


        mw.$(".swiper-container").each(function () {
            mw.$(this).parent()
                .append('<span class="q-swiper-button-prev"></span><span class="q-swiper-button-next"></span>')
        })

        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.q-swiper-button-next',
                prevEl: '.q-swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    centeredSlides: true,
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                    },
                },
                740: {
                    slidesPerView: 2,
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 0,
                        modifier: 0,
                        slideShadows: false,
                    },
                    centeredSlides: false,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 1,
                }
            }

        });


        mw.$(".tabs, .nav-tabs").not(".nav-tabs-2").find("li a").each(function () {
            mw.$(this).on('click', function () {
                var icon = this.querySelector('i');
                if (icon) {
                    var burst = new mojs.Burst({
                        radius: {15: 80},
                        parent: icon,
                        children: {
                            fill: ['#6D1D44', '#3d00b4', '#5E1287'],
                        }
                    });

                    var shape = new mojs.Shape({
                        parent: icon,
                        type: 'circle',
                        radius: {0: 60},
                        fill: 'transparent',
                        stroke: '#3d00b4',
                        strokeWidth: {20: 0},
                        opacity: 0.6,
                        duration: 700,
                        easing: mojs.easing.sin.out
                    });
                    shape.play();
                    burst.play();
                }
            })
        });

        mw.$(".icon-fx-1").each(function () {
            mw.$(this).hover(function () {
                var icon = this;
                if (icon) {
                    var burst = new mojs.Burst({
                        radius: {15: 80},
                        parent: icon,
                        children: {
                            fill: ['#ffffff', '#D7FFFE', '#FFEDCC'],
                        }
                    });

                    var shape = new mojs.Shape({
                        parent: icon,
                        type: 'circle',
                        radius: {0: 60},
                        fill: 'transparent',
                        stroke: 'rgba(255,255,255,.7)',
                        strokeWidth: {20: 0},
                        opacity: 0.6,
                        duration: 700,
                        easing: mojs.easing.sin.out
                    });
                    shape.play();
                    burst.play();
                }

            }, function () {

            })
        })


        mw.$('a[class*="fx-particles-"]').each(function () {
            var particles = new Particles(this);
            this.onclick = function (e) {
                e.preventDefault()
                var el = this, $el = mw.$(el);
                var color = el.dataset.color || false;
                if (!color) {
                    color = $el.hasClass('fx-particles-1') ? '#3d00b4' : '#ffffff';
                }
                particles.disintegrate({
                    complete: function () {
                        location.href = el.href;
                    },
                    color: color
                });

            }

        })

    });


})();
