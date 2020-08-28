<?php

/*

type: layout

name: Default

description: Default

*/
?>

<link rel="stylesheet" type="text/css" href="<?php print template_url() ?>/modules/pricing_table/css/default.css"/>

<div class="pricing-table-module default">
    <div class="row">
        <div class=" plans-row">
            <?php if ($columns == 4) {
                $class = 'col-md-3 col-sm-6 col-xs-12';
            } else if ($columns == 3) {
                $class = 'col-md-offset-1 col-md-3 col-sm-4 col-xs-12';
            } else if ($columns == 2) {
                $class = 'col-md-offset-2 col-md-3 col-sm-6 col-xs-12';
            } else {
                $class = 'col-md-3 col-sm-6 col-xs-12';
            }
            ?>

            <?php for ($i = 1; $i <= $columns; $i++): ?>
                <?php if ($feature == $i) {
                    $isActive = 'active';
                } else {
                    $isActive = '';
                } ?>

                <div class="<?php print $class; ?> item nodrop enabled-true <?php print $isActive; ?>">
                    <?php if ($feature == $i): ?>
                        <div class="fav-plan"></div>
                    <?php endif; ?>

                    <div class="plan-container">
                        <div class="price-plan-name edit" rel="module-<?php print $params['id']; ?>" field="title-content-<?php print $i; ?>"><h3 class="price-plan-name"><span>Starter</span></h3>
                        </div>
                        <div class="price edit" rel="module-<?php print $params['id']; ?>" field="price-content-<?php print $i; ?>"><span>$9/mo</span></div>

                        <div class="plans-plan-features edit" rel="module-<?php print $params['id']; ?>" field="table-content-<?php print $i; ?>">
                            <ul>
                                <li><span class="check"></span><span>Full access</span></li>
                                <li><span class="check"></span><span>Documentation</span></li>
                                <li><span class="not"></span><span>Customer support</span></li>
                                <li><span class="not"></span><span>Free updates</span></li>
                                <li><span class="not"></span><span>Unlimited domains</span></li>
                            </ul>
                        </div>

                        <div class="text-center">
                            <module type="btn" id="btn-<?php print $params['id']; ?>-<?php print $i; ?>"/>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</div>

<?php if (is_admin()): ?>
    <?php print notif(_e('Click here to edit the pricing table', true)); ?>
<?php endif; ?>
