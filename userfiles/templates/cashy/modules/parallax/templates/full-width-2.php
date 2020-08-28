<?php

/*

type: layout

name: Fluid 2

description: Full width 2 background

*/
?>

<style>
    .module-parallax {
        min-height: auto;
    }

    .parallax-wrapper.fluid2 {
        background: #000;
        position: relative;
        height: <?php print $height; ?>px;
    }

    .parallax-wrapper.fluid2 .parallax {
        background-size: cover;
        opacity: <?php print $alpha; ?>;
        z-index: 1;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        min-height: initial;
    }

    .parallax-wrapper.fluid2 .info-box-fluid {
        z-index: 2;
        display: table;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        min-height: initial;
        padding: 0;
    }

    .parallax-wrapper.fluid2 .info-box-fluid p {
        color: #fff;
        font-size: 30px !important;
        text-align: center;
        margin-bottom: 0;
        line-height: 52px;
    }

    .parallax-wrapper.fluid2 .info-box-fluid .module-btn {
        text-align: center;
    }

    .parallax-wrapper.fluid2 .info-box-fluid .module-btn .btn-primary {
        text-align: center;
        font-size: 18px;
        color: #fff;
        background: transparent;
        border: 1px solid #fff;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        padding: 10px 40px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .parallax-wrapper.fluid2 .info-box-fluid .module-btn .btn-primary:hover {
        background-color: #ffa800;
        border: 1px solid #ffa800;
    }

    @media screen and (max-width: 767px) {
        .parallax-wrapper.fluid2 .parallax {
            background-size: cover;
        }

        .parallax-wrapper.fluid2 .info-box-fluid p {
            font-size: 28px !important;
        }
    }

    @media screen and (max-width: 991px) {
        .parallax-wrapper.fluid2 .parallax {
            background-size: cover;
        }

        .parallax-wrapper.fluid2 .info-box-fluid p {
            font-size: 32px !important;
        }
    }

    @media screen and (max-width: 1199px) {
        .parallax-wrapper.fluid2 .parallax {
            background-size: cover;
        }

        .parallax-wrapper.fluid2 .info-box-fluid p {
            font-size: 36px !important;
        }
    }
</style>

<div class=" module-parallax">
    <div class="parallax-wrapper fluid2">
        <div class="info-box-fluid">
            <div class="middle-content">

                <div class="edit plain-text" field="parallax_text" rel="<?php print $params['id']; ?>">
                    <div class="col-md-8 col-xs-12">
                        <p>Want to Learn More About How We Help Clients in Risk?</p>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <module type="btn" id="parallax-btn-<?php print $params['id']; ?>" template="bootstrap" button_style="btn-primary"/>
                    </div>
                </div>

            </div>
        </div>

        <div class="parallax" style="background-image: url(<?php print $parallax; ?>); "></div>
    </div>
</div>

<?php if (is_admin()): ?>
    <?php print notif(_e('Click here to edit the Parallax', true)); ?>
<?php endif; ?>
