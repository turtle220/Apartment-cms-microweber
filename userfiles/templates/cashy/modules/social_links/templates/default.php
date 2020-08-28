<?php

/*

type: layout

name: Default

description: Default

*/
?>

<style>
    .social-links a {
        font-size: 23px;
        padding: 0 5px;
    }

    .social-links a .fa-facebook-official {
        color: #3b5998;
    }

    .social-links a .fa-twitter {
        color: #0084b4;
    }

    .social-links a .fa-google-plus {
        color: #d34836;
    }

    .social-links a .fa-pinterest-p {
        color: #c8232c ;
    }

    .social-links a .fa-youtube {
        color: #e52d27 ;
    }

    .social-links a .fa-instagram {
        color: #125688;
    }

    .social-links a .fa-linkedin {
        color: #007bb5;
    }
</style>

<div class="social-links">

    <?php if ($social_links_has_enabled == false) {
        print lnotif('Social links');
    } ?>


    <?php if ($facebook_enabled) { ?>


        <a href="//facebook.com/<?php print $facebook_url; ?>" target="_blank"><span class="fa fa-facebook-official"></span></a>

    <?php } ?>

    <?php if ($twitter_enabled) { ?>

        <a href="//twitter.com/<?php print $twitter_url; ?>" target="_blank"><span class="fa fa-twitter"></span></a>

    <?php } ?>


    <?php if ($googleplus_enabled) { ?>

        <a href="//plus.google.com/<?php print $googleplus_url; ?>" target="_blank"><span class="fa fa-google-plus"></span></a>

    <?php } ?>

    <?php if ($pinterest_enabled) { ?>

        <a href="//pinterest.com/<?php print $pinterest_url; ?>" target="_blank"><span class="fa fa-pinterest-p"></span></a>

    <?php } ?>

    <?php if ($youtube_enabled) { ?>

        <a href="//youtube.com/<?php print $youtube_url; ?>" target="_blank"><span class="fa fa-youtube"></span></a>

    <?php } ?>

    <?php if ($instagram_enabled) { ?>

        <a href="https://instagram.com/<?php print $instagram_url; ?>" target="_blank"><span class="fa fa-instagram"></span></a>

    <?php } ?>

    <?php if ($linkedin_enabled) { ?>

        <a href="//linkedin.com/<?php print $linkedin_url; ?>" target="_blank"><span class="fa fa-linkedin"></span></a>

    <?php } ?>


</div>