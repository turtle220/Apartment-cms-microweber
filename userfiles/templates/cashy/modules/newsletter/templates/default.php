<?php

/*

type: layout

name: Default

description: Default

*/
?>
<div class="newsletter-module-wrapper">


    <div class="edit" rel="newsletter-info-text-<?php print $params['id'] ?>" field="newsletter-info-text-<?php print $params['id'] ?>">
        <h4 class="m-b-10">Subscribe For Newsletter</h4>
        <p class="section-paragraph p-0 m-b-20">Enter your email address to receive all news from our
            awesome website and writers.</p>
    </div>

    <form method="post" id="newsletters-form-<?php print $params['id'] ?>">
        <?php print csrf_form(); ?>

        <div class="newsletter-form-wrapper hide-on-success">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control input-lg" name="email" placeholder="Email Address"/>
                    <span class="input-group-btn"><button class="btn btn-default btn-lg" type="submit"><?php _e('Subscribe'); ?></button></span>
                </div>
            </div>
            <div class="edit" rel="newsletter-info-text-2-<?php print $params['id'] ?>" field="newsletter-info-text-2-<?php print $params['id'] ?>">
                <p>* Your data is secured and will not be user at any other way</p>
            </div>
        </div>
    </form>


</div>