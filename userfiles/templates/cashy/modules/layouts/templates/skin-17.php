<?php

/*

type: layout

name: Just Title with Text

position: 17

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="mw-ui-row">
        <div class="mw-ui-col text-center">
            <h2 class="special">We can help</h2>
            <p>
                It is a long est`ablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
        </div>
    </div>
</section>