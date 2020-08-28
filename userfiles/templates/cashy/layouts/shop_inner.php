<?php include template_dir() . "header.php"; ?>


<div class="container page-blog">
    <div class="content-wrapper">
        <div class="content-holder">

            <module type="layouts" template="skin-13"/>

            <div class="row p-t-20">
                <div class="col-xs-12 col-md-8">
                    <module type="pictures" rel="content" template="product_gallery_1"/>
                </div>

                <div class="col-xs-12 col-md-4">
                    <?php load_layout_block('shop/shop-info-1'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <hr>
                    <div class="edit" field="content" rel="post">
                        <div class="mw-row">
                            <div class="mw-col" style="width:50%">
                                <div class="mw-col-container">
                                    <div class="product-description">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="edit" field="related_products" rel="inherit">
                        <h4 class="element wraped sidebar-title">Related Products</h4>
                        <module type="shop/products" template="list-1" related="true" id="related products"/>
                        <p class="element">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include template_dir() . "footer.php"; ?>
