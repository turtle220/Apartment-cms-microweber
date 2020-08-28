<?php

/*

type: layout

name: Pricing list

position: 12

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="m-b-20">
        <module type="pricing_table" template="lite"/>
    </div>
</section>