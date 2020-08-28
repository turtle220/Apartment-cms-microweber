            <div class="container edit" field="template-footer" rel="global">
                <div class="">
                    <footer>
                        <div class="row">
                            <div class="col-md-2">
                                <module type="logo" id="logo_footer" default-text="Cashy"/>
                            </div>

                            <div class="col-md-8 text-center">
                                <module type="menu" name="footer_menu" id="footer-navigation" template="small"/>
                            </div>

                            <div class="col-md-2">
                                <module type="social_links" class="socials" id="footer-socials"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 powered-by">
                                <?php print powered_by_link(); ?> | <a href="<?php print admin_url() ?>">Admin</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        </div>
    </body>
</html>