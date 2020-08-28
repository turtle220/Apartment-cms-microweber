<?php

/*

type: layout

name: Lite

description: Default

*/
?>

<link rel="stylesheet" type="text/css" href="<?php print template_url() ?>/modules/pricing_table/css/lite.css"/>

<div class="pricing-table-module lite">
    <div class="row">
        <div class=" plans-row">

            <?php if ($columns == 4) {
                $class = 'col-md-3 col-sm-6 col-xs-12';
            } else if ($columns == 3) {
                $class = 'col-md-4 col-sm-4 col-xs-12';
            } else if ($columns == 2) {
                $class = 'col-md-offset-2 col-md-4 col-sm-6 col-xs-12';
            } else {
                $class = 'col-md-3 col-sm-6 col-xs-12';
            }
            ?>

            <?php for ($i = 1; $i <= $columns; $i++): ?>
                <div class="<?php print $class; ?>">
                    <div class="item nodrop enabled-true <?php if ($feature == $i) {
                        echo 'active';
                    } ?>">
                        <div class="item-header">
                            <div class="col-xs-6">
                                <div class="level edit" rel="module-<?php print $params['id']; ?>" field="level-<?php print $i; ?>">
                                    <span>Level 1</span>
                                </div>
                                <div class="name edit" rel="module-<?php print $params['id']; ?>" field="name-<?php print $i; ?>">
                                    <span>Standard</span>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="price-wrapper">
                                    <div class="price edit" rel="module-<?php print $params['id']; ?>" field="price-<?php print $i; ?>">
                                        <span>$3</span>
                                    </div>

                                    <div class="per edit" rel="module-<?php print $params['id']; ?>" field="month-<?php print $i; ?>">
                                        <span>/ month </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($feature == $i): ?>
                            <div class="fav-plan"></div>
                        <?php endif; ?>

                        <div class="plan-container">
                            <div class="plans-plan-features edit" rel="module-<?php print $params['id']; ?>" field="table-<?php print $i; ?>">
                                <ul>
                                    <li><span>Full access</span></li>
                                    <li><span>Documentation</span></li>
                                    <li><span>Customer support</span></li>
                                    <li><span>Free updates</span></li>
                                    <li><span>Unlimited domains</span></li>
                                </ul>
                            </div>

                            <div class="text-center">
                                <module type="btn" id="btn-<?php print $params['id']; ?>-<?php print $i; ?>"/>
                            </div>
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
