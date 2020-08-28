<?php

/*

type: layout

name: Contact us

position: 3

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

<section class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="page-contacts">
        <div class="content">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Contact us</h1>

                    <div class="info allow-drop">
                        <p>Pleasee contact us in a way you prefer more.</p>
                        <p>Find our details and let us know how we can help you or how to provide you with better service. Thannk you!</p>
                        <br/><br/>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <module type="contact_form" class="contact-form" id="contact-form" template="email"/>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="additional-info">
                                <div class="col-xs-2 col-sm-12 col-md-2"><i class="fa fa-refresh safe-element"></i></div>
                                <div class="col-xs-10 col-sm-12 col-md-10 allow-drop">
                                    <h2>Address</h2>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="additional-info">
                                <div class="col-xs-2 col-sm-12 col-md-2"><i class="fa fa-refresh safe-element"></i></div>
                                <div class="col-xs-10 col-sm-12 col-md-10 allow-drop">
                                    <h2>Phones</h2>
                                    <p>Call us on</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="additional-info">
                                <div class="col-xs-2 col-sm-12 col-md-2"><i class="fa fa-refresh safe-element"></i></div>
                                <div class="col-xs-10 col-sm-12 col-md-10 allow-drop">
                                    <h2>Other details</h2>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. It has typesetting, remaining essentially unchanged.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

