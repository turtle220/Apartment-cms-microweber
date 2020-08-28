<?php include template_dir() . "header.php"; ?>


<div class="container page-blog">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-13"/>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="info-text">
                            <h1 class="edit" field="title" rel="content">Page Title</h1>
                        </div>
                        <module data-type="pictures" data-template="slider" rel="content"/>

                        <div class="inner-content">
                            <div class="edit" field="content_body" rel="content">
                                <div class="element">
                                    <h3>What is Lorem Ipsum?</h3>
                                    <p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                        has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                                        of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>Why do we use it?</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like
                                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                        many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                </div>
                            </div>
                        </div>

                        <div class="row wraped">
                            <div class="col-xs-12">
                                <module type="facebook_like" show-faces="false" layout="box_count">
                            </div>
                        </div>

                        <div class="row wraped">
                            <div class="col-xs-12">
                                <hr/>
                                <h3 class="text-center m-b-20 m-t-30"> Related </h3>
                                <module type="posts" template="featured" id="aboutus-inner" limit="3" hide-paging="y"/>
                            </div>
                        </div>

                        <div class="page-contacts wraped">
                            <div class="content">
                                <hr/>
                                <h3 class="m-b-20 text-center">Request a quote</h3>
                                <module type="contact_form" class="contact-form" id="contact-form" template="email" data-content-id="<?php print CONTENT_ID; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>

