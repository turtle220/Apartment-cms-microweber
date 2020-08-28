<?php

/*

type: layout

name: Testimonials

position: 6

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <module type="testimonials" template="sliderfaces"/>
</section>