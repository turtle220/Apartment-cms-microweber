<?php

/*

type: layout

name: Clients

position: 7

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <h2 class="section-title m-b-10"> Our clients </h2>
    <module type="pictures" template="slick"/>
</section>