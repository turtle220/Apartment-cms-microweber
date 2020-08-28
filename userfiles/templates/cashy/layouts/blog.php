<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="container page-blog">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-13"/>

                <div class="row">
                    <div class="col-xs-12 col-md-8 col-lg-9">
                        <div class="edit" field="content" rel="page">
                            <div class="info-text">
                                <h1>Last News</h1>
                            </div>
                            <module data-type="posts" template="blog2" />
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-lg-3 sidebar">
                        <?php include_once "blog_sidebar.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include template_dir() . "footer.php"; ?>






