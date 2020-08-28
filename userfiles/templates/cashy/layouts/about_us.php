<?php

/*

  type: layout
  content_type: dynamic
  name: About us
  position: 6
  description: About us layout

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="container page-contacts">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-14"/>
                <module type="layouts" template="skin-15"/>
                <module type="parallax" template="full-width-numbers"/>
                <module type="layouts" template="skin-17"/>
                <module type="posts" template="blog"/>
                <h2 class="section-title m-t-50">Meet Our Team</h2>
                <module type="teamcard" template="default"/>
                <h2 class="section-title m-b-10">Our clients</h2>
                <module type="pictures" template="clients"/>
                <module type="parallax" template="full-width-2"/>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
