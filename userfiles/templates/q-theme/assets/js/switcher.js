$(document).ready(function () {
    var e = '<div class="switcher-container">' +
        '<h2>STYLE SWITCHER<a href="#" class="switcher-toggle"><i class="fa fa-cog"></i></a></h2>' +
        '<div class="selector-box">' +
        '<div class="clearfix"></div>' +

        '<div class="sw-odd" style="display: none;">' +
        '<h3>SCHEME COLOR</h3>' +
        '<div class="ws-colors">' +
        '<a href="#color1" class="styleswitch" id="color1">' +
        '&nbsp;<span class="cl1"></span>' +
        '</a>' +
        '<a href="#color2" class="styleswitch" id="color2">' +
        '&nbsp;<span class="cl2"></span>' +
        '</a>' +
        '<a href="#color3" class="styleswitch" id="color3">' +
        '&nbsp;<span class="cl3"></span>' +
        '</a>' +
        '<a href="#color4" class="styleswitch" id="color4">' +
        '&nbsp;<span class="cl4"></span>' +
        '</a>' +
        '<a href="#color5" class="styleswitch" id="color5">' +
        '&nbsp;<span class="cl5"></span>' +
        '</a>' +
        '</div></div>' +


        '<div class="sw-even">' +
        '<h3>Sticky Navigation:</h3>' +
        '<a href="javascript:;" class="sw-light" data-sticky-navigation="false">Normal</a>' +
        '<a href="javascript:;" class="sw-light active" data-sticky-navigation="true">Sticky</a>' +
        '<br><br>' +

        '<h3>Member Navigation Color:</h3>' +
        '<a href="javascript:;" class="sw-light" data-navigation-color="normal">Normal</a>' +
        '<a href="javascript:;" class="sw-light active" data-navigation-color="inverse">Inverse</a>' +
        '<br><br>' +

        '<h3>Titles color:</h3>' +
        '<a href="javascript:;" class="sw-light active" data-titles-inverse="normal">Normal</a>' +
        '<a href="javascript:;" class="sw-light" data-titles-inverse="inverse">Black</a>' +
        '<br><br>' +

        '<h3>Buttons border radius:</h3>' +
        '<a href="javascript:;" class="sw-light" data-rounded-buttons="normal">Normal</a>' +
        '<a href="javascript:;" class="sw-light active" data-rounded-buttons="rounded">Rounded</a><br />' +
        '<a href="javascript:;" class="sw-light" data-rounded-buttons="squared">Squared</a>' +
        '</div>' +

        '<div class="clearfix"></div>' +
        '</div>' +
        '</div>';

    mw.$('body').append(e);
    switchAnimate.loadEvent();
});


var switchAnimate = {
    loadEvent: function () {
        mw.$(".switcher-container a.switcher-toggle").on('click', function (e) {
            mw.$(this).addClass('active');
            var t = mw.$(".switcher-container");

            if (t.css("right") === "-270px") {
                mw.$(".switcher-container").css({'right': "0"})
            } else {
                mw.$(this).removeClass('active');
                mw.$(".switcher-container").css({'right': "-270px"})
            }

            e.preventDefault();
        });

        mw.$('[data-sticky-navigation]').on('click', function () {
            mw.$('[data-sticky-navigation]').removeClass('active');
            mw.$(this).addClass('active');

            if ($(this).attr("data-sticky-navigation") == 'true') {
                mw.$('body').addClass('sticky-nav');
            } else {
                mw.$('body').removeClass('sticky-nav');
            }
        });

        mw.$('[data-navigation-color]').on('click', function () {
            mw.$('[data-navigation-color]').removeClass('active');
            mw.$(this).addClass('active');

            if ($(this).attr("data-navigation-color") == 'inverse') {
                mw.$('body').addClass('member-nav-inverse');
            } else {
                mw.$('body').removeClass('member-nav-inverse');
            }
        });

        mw.$('[data-titles-inverse]').on('click', function () {
            mw.$('[data-titles-inverse]').removeClass('active');
            mw.$(this).addClass('active');

            if ($(this).attr("data-titles-inverse") == 'inverse') {
                mw.$('body').addClass('titles-inverse');
            } else {
                mw.$('body').removeClass('titles-inverse');
            }
        });

        mw.$('[data-rounded-buttons]').on('click', function () {
            mw.$('[data-rounded-buttons]').removeClass('active');
            mw.$(this).addClass('active');

            if ($(this).attr("data-rounded-buttons") == 'rounded') {
                mw.$('body').removeClass('squared-buttons');
                mw.$('body').addClass('rounded-buttons');
            } else if ($(this).attr("data-rounded-buttons") == 'squared') {
                mw.$('body').removeClass('rounded-buttons');
                mw.$('body').addClass('squared-buttons');
            } else {
                mw.$('body').removeClass('rounded-buttons');
                mw.$('body').removeClass('squared-buttons');
            }
        });
    }
};
