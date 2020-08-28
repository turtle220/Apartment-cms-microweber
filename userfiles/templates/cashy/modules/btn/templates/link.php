<?php

/*

type: layout

name: Link

description: Link

*/
?>

<a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
    print ' target="_blank" ';
} ?> class="btn-link">
    <?php print $text; ?>
</a>