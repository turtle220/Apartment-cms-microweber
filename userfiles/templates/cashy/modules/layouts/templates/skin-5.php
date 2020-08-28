<?php

/*

type: layout

name: Parallax

position: 5

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <module type="parallax" template="full-width"/>
</section>