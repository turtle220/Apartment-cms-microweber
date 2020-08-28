<?php

/*

type: layout

name: head-image-1

position: 14

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div class="mw-static-element mw-head-image section-14 edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-14-<?php print $params['id'] ?>" rel="module">
    <div class="mw-image-holder-div" style="background-image: url('<?php print elements_url() ?>images/default-6.jpg');">
        <span class="mw-image-holder-div-overlay"></span>
        <div class="mw-image-holder-div-content" style="">
            <div class="content-holder">
                <div class="inner allow-drop">
                    <h1>Our Services</h1>
                    <p>Be assured, our services and team members will support your business growth</p>
                </div>
            </div>
        </div>
    </div>
</div>