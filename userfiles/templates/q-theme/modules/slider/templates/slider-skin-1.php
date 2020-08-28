<?php

/*

  type: layout

  name: Custom Slider - Default

  description: Custom Slider - Default


*/

?>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php foreach ($data as $slide) { ?>
            <div class="swiper-slide">
                <a href="<?php if (isset($slide['url'])) {
                    print $slide['url'];
                } else { ?>javascript:;<?php } ?>">
                    <?php if (isset($slide['images'][0])): ?>
                        <img src="<?php print thumbnail($slide['images'][0], 600, 600); ?>"/>
                    <?php endif; ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>