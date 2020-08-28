<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: shop layout
position: 4
*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="container page-blog">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-13"/>

                <module type="layouts" template="skin-14"/>

                <module type="categories" content_id="<?php print PAGE_ID; ?>" template="horizontal-list-1"/>

                <module type="shop/products" limit="18" template="list-1" description-length="70"/>
            </div>
        </div>
    </div>
</div>


<?php include template_dir() . "footer.php"; ?>
