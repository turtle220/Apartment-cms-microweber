<?php

/*

type: layout

name: Primary

description: Primary

*/
?>

<a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
    print ' target="_blank" ';
} ?> class="btn btn-primary">
    <?php print $text; ?>
</a>