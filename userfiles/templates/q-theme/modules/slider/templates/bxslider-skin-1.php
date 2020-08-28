<?php

/*

  type: layout

  name: bxSlider - Default

  description: bxSlider - Default


*/

?>

<div class="slider-wrapper">
    <div class="home-slider bxSlider">
        <?php foreach ($data as $slide) { ?>
            <div class="slide">
                <?php if (isset($slide['skin_file'])) {
                    include($slide['skin_file']);
                }
                ?>
            </div>
        <?php } ?>
    </div>
</div>