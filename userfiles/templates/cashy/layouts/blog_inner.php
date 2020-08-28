<?php include template_dir() . "header.php"; ?>

<div class="container page-blog">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-13"/>

                <div class="row">
                    <div class="col-xs-12 col-md-8 col-lg-9">
                        <div class="info-text">
                            <h1 class="edit" field="title" rel="content">Page Title</h1>
                        </div>
                        <module data-type="pictures" data-template="slider" rel="content"/>

                        <div class="inner-content">
                            <div class="edit" field="content_body" rel="content">
                                <div class="element">
                                    <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on
                                        the
                                        site. Get creative, Make Web.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <module type="facebook_like" show-faces="false" layout="box_count">
                                </div>
                            </div>

                            <div class="edit" rel="content" field="comments">
                                <module data-type="comments" data-template="default" data-content-id="<?php print CONTENT_ID; ?>"/>
                            </div>
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

