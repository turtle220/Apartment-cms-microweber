<?php

/*

type: layout

name: Default

description: List Navigation

*/

?>

<?php
$params['ul_class'] = 'nav nav-list';
$params['ul_class_deep'] = 'nav nav-list';

?>


<style>
    .module-categories .categories-list ul {
        list-style-type: none;
    }

    .module-categories .categories-list ul li {
        display: inline-block;
    }
</style>
<div class="categories-list">
    <?php category_tree($params); ?>
</div>

