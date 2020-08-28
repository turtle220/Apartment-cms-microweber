<?php

/*

type: layout

name: Team card

position: 8

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-8-<?php print $params['id'] ?>" rel="module">
    <h2 class="section-title m-t-50"> Meet Our Team </h2>
    <module type="teamcard" template="default"/>
</section>