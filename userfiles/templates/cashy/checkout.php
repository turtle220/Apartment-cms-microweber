<?php
/*
type: layout
name: Checkout
position: 3
description: Checkout
*/
?>
<?php include template_dir() . "header.php"; ?>
    <div class="container page-checkout">
        <div class="breadcrumb-container">
            <module type="breadcrumb" id="checkout-breadcrumbs-<?php print PAGE_ID; ?>"/>
        </div>

        <div class="content-wrapper last">
            <div class="row checkout-layout">
                <div class="col-xs-12">
                    <div field="checkout_page" rel="content">
                        <module type="shop/checkout" id="cart_checkout" template="checkout-1"/>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include template_dir() . "footer.php"; ?>