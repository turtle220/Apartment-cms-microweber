<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>{content_meta_title}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="{content_meta_title}">
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script>mw.lib.require('bootstrap3');</script>
    <script>mw.lib.require('material_icons');</script>

    <script>
        AddToCartModalContent = window.AddToCartModalContent || function (title) {
                var html = ''

                    + '<section style="text-align: center;">'
                    + '<h5>' + title + '</h5>'
                    + '<p><?php _e("has been added to your cart"); ?></p>'
                    + '<a href="javascript:;" onclick="mw.tools.modal.remove(\'#AddToCartModal\')" class="btn btn-default"><?php _e("Continue shopping"); ?></a> &nbsp;'
                    + '<a href="<?php print checkout_url(); ?>" class="btn btn-warning"><?php _e("Checkout"); ?></a></section>';

                return html;
            }
    </script>

    <link rel="stylesheet" href="{TEMPLATE_URL}css/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="{TEMPLATE_URL}modules/layouts/templates/layouts.css" type="text/css" media="all">
    <link href="<?php print template_url(); ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/fonts/mw-icons-mind/line/style.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/fonts/mw-icons-mind/solid/style.css">
    <?php $color_scheme = get_option('color-scheme', 'mw-template-cashy'); ?>
    <?php if ($color_scheme != '' AND $color_scheme != 'orange'): ?>
        <link rel="stylesheet" href="{TEMPLATE_URL}css/<?php print $color_scheme; ?>.css" type="text/css" media="all">
    <?php endif; ?>
    <script type="text/javascript" src="{TEMPLATE_URL}js/main.js"></script>
</head>
<body>
<div class="main">
    <?php $fluid_header = get_option('fluid-header', 'mw-template-cashy'); ?>
    <div class="<?php if ($fluid_header == 'true') {
        echo 'container-fluid';
    } else {
        echo 'container';
    } ?>" field="template-header-navbar" rel="global">
        <div class="content-wrapper first-wrapper">
            <div class="<?php if ($fluid_header == 'true') {
                echo 'container';
            } ?>"><!-- set container class if you want to be fluid -->
                <header>
                    <div class="main-navigation">
                        <module type="logo" id="logo_header" default-text="Cashy" class="pull-left"/>

                        <div class="dynamic-menu closed">
                            <button class="close-mobile-navigation hidden-md hidden-lg"><i class="fa fa-window-close"></i></button>

                            <module type="menu" name="header_menu" id="main-navigation" template="navbar"/>
                        </div>

                        <div class="pull-right">

                            <module type="social_links" id="social-plugin" class="socials"/>

                            <?php $shopping_cart = get_option('shopping-cart', 'mw-template-cashy'); ?>
                            <?php if ($shopping_cart == 'true'): ?>
                                <module type="shop/cart" template="small" id="cart-bag" class=""/>
                            <?php endif; ?>

                            <button class="toggle-navigation pull-right hidden-md hidden-lg"><i class="fa fa-bars"></i></button>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
