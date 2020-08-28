<?php

/*

type: layout

name: Blog Posts

position: 4

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <h2 class="section-title m-t-30"> Our Best Practice </h2>
    <module type="posts" template="featured"/>
</section>