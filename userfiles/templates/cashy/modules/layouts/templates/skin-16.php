<?php

/*

type: layout

name: Text with Image

position: 16

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

<section class="edit safe-mode nodrop section-16 <?php print $layout_classes; ?>" field="layout-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="mw-static-element mw-vertical-centered-text-and-image">
        <div class="image">
            <div class="mw-image-holder" style="background-image: url('<?php print elements_url() ?>images/default-8.jpg');">
                <span class="mw-image-holder-overlay"></span>
            </div>
        </div>
        <div class="info">
            <h4>Our Experience</h4>
            <p>It is a long est`ablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <module type="btn" text="Button"/>
        </div>
    </div>
</section>