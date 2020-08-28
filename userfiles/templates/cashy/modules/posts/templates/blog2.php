<?php

/*

type: layout

name: Blog 2

description: Blog 2

*/


?>

<div class="posts-last-list">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $key => $item): ?>
            <?php if ($key == 0): ?>
                <div class="col-xs-12 first-big-post">
                    <div class="post-single" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <div class="post-thumb">
                                <a href="<?php print $item['link'] ?>" itemprop="url">
                                    <div class="button-wrapper">
                                        <div class="button"></div>
                                    </div>
                                    <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 800); ?>');"></div>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="post-info">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h2><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h2>
                            <?php endif; ?>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                <p class="description" itemprop="headline"><?php print $item['description'] ?></p>
                            <?php endif; ?>
                            <a href="<?php print $item['link'] ?>" itemprop="url" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-xs-12 col-sm-6">
                    <div class="post-single" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <div class="post-thumb">
                                <a href="<?php print $item['link'] ?>" itemprop="url">
                                    <div class="button-wrapper">
                                        <div class="button"></div>
                                    </div>
                                    <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 400); ?>');"></div>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="post-info">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h2><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h2>
                            <?php endif; ?>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                <p class="description" itemprop="headline"><?php print $item['description'] ?></p>
                            <?php endif; ?>
                            <a href="<?php print $item['link'] ?>" itemprop="url" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<div class="clearfix"></div>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <div class="pagination">
        <?php print(paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}")); ?>
    </div>
<?php endif; ?>
