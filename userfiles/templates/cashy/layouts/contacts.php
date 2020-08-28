<?php

/*

type: layout
content_type: static
name: Contact Us
description: Contact us layout
position: 7
*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="container page-contacts">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-13"/>
                <module type="google_maps"/>
                <module type="layouts" template="skin-3"/>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
