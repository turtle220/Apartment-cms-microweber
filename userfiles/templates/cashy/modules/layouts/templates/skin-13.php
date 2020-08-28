<?php

/*

type: layout

name: Breadcrumbs

position: 13

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="breadcrumb-container">
        <module type="breadcrumb"/>
    </div>
</section>