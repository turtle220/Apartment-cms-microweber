<?php

/*

type: layout
content_type: static
name: Clean
position: 2
is_default: true
description: Clean layout

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="container">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-13"/>
                <module type="layouts" template="skin-11"/>
            </div>
        </div>
    </div>
</div>


<?php include template_dir() . "footer.php"; ?>
