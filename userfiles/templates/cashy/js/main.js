$(window).load(function () {



    // Simple way to enable the 'placeholder' attribute for browsers that doesn't support it
    if ('placeholder' in document.createElement('input') === false) {
        mw.$("[placeholder]").each(function () {
            var el = $(this), p = el.attr("placeholder");
            el.val() == '' ? el.val(p) : '';
            el.bind('focus', function (e) {
                el.val() == p ? el.val('') : '';
            });
            el.bind('blur', function (e) {
                el.val() == '' ? el.val(p) : '';
            });
        });
    }


    /* Fixed shop cart */

    if (typeof _shop === 'boolean') {
        var header = document.getElementById('header');
        $(window).bind("scroll", function () {
            var cart = mw.$(".mw-cart-small", header)[0];
            var cart_module = mw.tools.firstParentWithClass(cart, 'module');
            if ($(window).scrollTop() > $(header).outerHeight()) {
                $(cart_module).addClass("mw-cart-small-fixed");
            }
            else {
                $(cart_module).removeClass("mw-cart-small-fixed");
            }
        });
    }
});


TempateFunctions = {
    contentHeight: function () {

        /**************************************
         Minimum height for the Main Container
         **************************************/
        if (self !== top) {
            return false;
        }

        var content = document.getElementById('content-holder'),
            footer = document.getElementById('footer'),
            header = document.getElementById('header');

        $(content).css('minHeight', $(window).height() - $(header).outerHeight(true) - $(footer).outerHeight(true));

    }
}


$(document).ready(function () {

    TempateFunctions.contentHeight();
    if (typeof(mw.msg.product_added) == "undefined") {
        mw.msg.product_added = "Your product is added to the shopping cart";
    }

    // $(window).bind('mw.cart.add', function () {
    //     var modal_html = ''
    //         + '<div id="mw-product-added-popup-holder"> '
    //         + '<h4>' + mw.msg.product_added + '</h4>'
    //          + '<div id="mw-product-added-popup" class="text-center" style="width:210px;"> '
    //         + ' </div>';
    //     +' </div>';
    //     Alert(modal_html)
    //     mw.load_module('shop/cart', '#mw-product-added-popup', false, {template: 'popup'});
    //
    //
    // });

    $(window).bind('mw.cart.add', function (event, data) {

        if (document.getElementById('AddToCartModal') === null) {

            AddToCartModal = mw.modal({

                content: AddToCartModalContent(data.product.title),

                template: 'mw_modal_basic',

                name: "AddToCartModal",

                width: 400,

                height: 200

            });

        }

        else {

            AddToCartModal.container.innerHTML = AddToCartModalContent(data.product.title);

        }

    });

});

$(window).bind('load resize', function (e) {

    TempateFunctions.contentHeight();

});


$(document).ready(function () {
    // $(".main-navigation .dynamic-menu").addClass('closed');

    $(".toggle-navigation").click(function () {
        if ($('.main-navigation .dynamic-menu').hasClass('closed')) {
            $(".main-navigation .dynamic-menu").fadeIn(500);
            $('.main-navigation .dynamic-menu').removeClass('closed');
        } else {
            $(".main-navigation .dynamic-menu").fadeOut(500);
            $('.main-navigation .dynamic-menu').addClass('closed');
        }
    });

    $(".close-mobile-navigation").click(function () {
        $(".main-navigation .dynamic-menu").fadeOut(500);
        $('.main-navigation .dynamic-menu').addClass('closed');
    });
});

$(window).resize(function () {
    if ($(window).width() > 991) {
        $('.main-navigation .dynamic-menu').removeAttr('style');
    } else {
        // $('.main-navigation .dynamic-menu').removeClass('closed');
    }
});


