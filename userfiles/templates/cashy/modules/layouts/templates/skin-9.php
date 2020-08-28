<?php

/*

type: layout

name: Blog posts

position: 9

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-9-<?php print $params['id'] ?>" rel="module">
    <h2 class="section-title"> Last News </h2>
    <module type="posts" template="blog"/>
</section>