<div class="edit" field="blog_sidebar" rel="inherit">
    <div class="m-t-50">
        <h4>Most popular</h4>
        <div class="sidebar-posts">
            <module type="posts" template="sidebar" limit="5" data-show="thumbnail,title,description" hide-paging="y" title-length="40" description-length="50"/>
            <?php
            /*

                 Parameters(attributes) for "Posts" Module:


                     * template - Name of the template.
                       Templates provided from Microweber:
                         - default - loads when no template is specified
                         - 3 columns
                         - 4 columns
                         - sidebar

                     * limit - number of posts to show per page. Default is the value specified in the Admin -> Settings (10) .

                     * description-length
                        - number: Number of symbols you want to show from description. Default: 400

                     * title-length
                        - number: Number of symbols you want to show from title. Default: 120

                     * current_page - usage is for paging
                        - number: The number of the page where the posts will appear. Default: 1

                     * hide-paging
                        - y/n - Default: n

                     * data-show:
                         Possible values:
                            - thumbnail,
                            - title,
                            - read_more,
                            - description,
                            - created_at

             */
            ?>
        </div>
    </div>

    <div class="m-t-20 m-b-50">
        <h4>Popular Tags</h4>
        <module type="tags" template="lite"/>
    </div>


    <module type="newsletter"/>

    <div class="m-t-50">
        <h4>Follow us</h4>
        <module type="social_links"/>
    </div>

    <div class="m-t-30">
        <module type="facebook_page"/>
    </div>
</div>
