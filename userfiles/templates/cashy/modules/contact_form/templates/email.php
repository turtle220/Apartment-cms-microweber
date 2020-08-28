<?php

/*

type: layout

name: Cashy form

description: Basic contact form

*/

?>

<div id="msg<?php print $form_id; ?>" style="display:none;">
    <div class="alert alert-success">
        <h2>Form has been sent</h2>
        <p>We will contact you soon with a responce.</p>
    </div>
</div>

<form class="mw_form form" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form() ?>
    <input type="hidden" name="for" value="contact_form"/>
    <input type="hidden" name="for_id" value="contact_form"/>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="First name" name="first_name" class="form-control form_input">
        </div>
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="Last name" name="last_name" class="form-control form_input">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <input type="email" placeholder="E-mail" name="email" class="form-control form_input">
        </div>
        <div class="col-xs-12 col-sm-6">
            <input type="tel" placeholder="Phone" name="phone" class="form-control form_input">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="Address" name="address" class="form-control form_input">
        </div>
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="City" name="city" class="form-control form_input">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="Country" name="country" class="form-control form_input">
        </div>
        <div class="col-xs-12 col-sm-6">
            <input type="text" placeholder="ZIP / Post Code" name="zip_code" class="form-control form_input">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <textarea placeholder="Message" rows="9" class="form-control form_textarea" name="message"></textarea>
        </div>
    </div>


    <div class="row">
        <?php if (get_option('disable_captcha', $params['id']) != 'y'): ?>
            <div class="col-xs-12 col-md-6">
                <module type="captcha" />
            </div>
        <?php endif; ?>
        <div class="col-xs-12 col-md-6">
            <button type="submit">Send</button>
        </div>
    </div>
</form>
