<?php

/*

type: layout

name: Text with Buttons

position: 20

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-19-<?php print $params['id'] ?>" rel="module">
    <h2 class="section-title blue">Quick prototyping needs quick support</h2>
    <p class="text-center">
        81% of questions answered within 3 hours or less
    </p>

    <div class="m-t-20 m-b-20 text-center">
        <module type="btn" template="primary" class="inline-element" text="Email us your question"/>
        <module type="btn" template="default" class="inline-element" text="Email us your question"/>
    </div>
</section>