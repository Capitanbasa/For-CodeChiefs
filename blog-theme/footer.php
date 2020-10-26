    <section class="container-fluid">
        <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column py-5">
            <div class="row d-flex">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/signup-newsletter-salarium.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 align-self-center">
                    <h5 class="text-sm-center text-md-left">Signup now to keep informed of the latest HR and payroll trends.</h5>
                    <!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->
                    <script type="text/javascript" src="https://zcs1.maillist-manage.com/js/optin.min.js" onload="setupSF('sfd7db2247237639ab0bec2c89d1d8d9383f55c077a21faf59','ZCFORMVIEW',false,'light')"></script>
                    <script type="text/javascript">
                        function runOnFormSubmit_sfd7db2247237639ab0bec2c89d1d8d9383f55c077a21faf59(th){
                            /*Before submit, if you want to trigger your event, "include your code here"*/
                        };
                    </script>
                    <!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here-->
                    <div id="sfd7db2247237639ab0bec2c89d1d8d9383f55c077a21faf59" data-type="signupform">
                        <div id="customForm">
                        <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://zcs1.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup">
                            <div class="form-group">
                                <input savetype="EMBED_FORM_EMAIL_LABEL" changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" class="form-control sal-input-text" placeholder="Email Address">
                            </div>
                            <input name="SIGNUP_SUBMIT_BUTTON" class="btn sal-btn-red" id="zcWebOptin" type="button" value="SUBCRIBE">
                            <!-- Do not edit the below Zoho Campaigns hidden tags -->
                            <input type="hidden" id="fieldBorder" value="rgb(235, 235, 235)">
                            <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="" onload="">
                            <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                            <input type="hidden" id="lD" name="lD" value="11ed46cab7ef7c6a">
                            <input type="hidden" name="emailReportId" id="emailReportId" value="">
                            <input type="hidden" id="formType" name="formType" value="QuickForm">
                            <input type="hidden" name="zx" id="cmpZuid" value="1284c84a7">
                            <input type="hidden" name="zcvers" value="3.0">
                            <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                            <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                            <input type="hidden" id="zcld" name="zcld" value="11ed46cab7ef7c6a">
                            <input type="hidden" id="document_domain" value="campaigns.zoho.com">
                            <input type="hidden" id="zc_Url" value="zcs1.maillist-manage.com">
                            <input type="hidden" id="new_optin_response_in" value="1">
                            <input type="hidden" id="duplicate_optin_response_in" value="1">
                            <input type="hidden" id="zc_formIx" name="zc_formIx" value="d7db2247237639ab0bec2c89d1d8d9383f55c077a21faf59">
                            <!-- End of the campaigns hidden tags -->
                        </form>
                        </div>
                    </div>
                    <!--Zoho Campaigns Web-Optin Form Ends Here-->
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <section class="container-fluid footer-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <h5 class="white-font">PRODUCTS</h5>
                    <?php $args_footer1 = array(
                            'theme_location' => 'footercol1',
                            'depth'       => 2,
                            'menu_class' => 'list-unstyled',
                            'container'        => '',
                            'link_before' => '<small>',
                            'link_after' => '</small>',
                            'walker'=> new Footer_Walker()
                        );
                    ?>
                    <?php wp_nav_menu( $args_footer1 );?>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5 class="white-font">SUPPORT</h5>
                    <?php $args_footer2 = array(
                            'theme_location' => 'footercol2',
                            'depth'       => 2,
                            'menu_class' => 'list-unstyled',
                            'container'        => '',
                            'link_before' => '<small>',
                            'link_after' => '</small>',
                            'walker'=> new Footer_Walker()
                        );
                    ?>
                    <?php wp_nav_menu( $args_footer2 );?>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5 class="white-font">THE COMPANY</h5>
                    <?php $args_footer3 = array(
                            'theme_location' => 'footercol3',
                            'depth'       => 2,
                            'menu_class' => 'list-unstyled',
                            'container'        => '',
                            'link_before' => '<small>',
                            'link_after' => '</small>',
                            'walker'=> new Footer_Walker()
                        );
                    ?>
                    <?php wp_nav_menu( $args_footer3 );?>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5 class="white-font">INDUSTRY</h5>
                    <?php $args_footer4 = array(
                            'theme_location' => 'footercol4',
                            'depth'       => 2,
                            'menu_class' => 'list-unstyled',
                            'container'        => '',
                            'link_before' => '<small>',
                            'link_after' => '</small>',
                            'walker'=> new Footer_Walker()
                        );
                    ?>
                    <?php wp_nav_menu( $args_footer4 );?>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5 class="white-font">BLOG</h5>
                    <?php $args_footer5 = array(
                            'theme_location' => 'footercol5',
                            'depth'       => 2,
                            'menu_class' => 'list-unstyled',
                            'container'        => '',
                            'link_before' => '<small>',
                            'link_after' => '</small>',
                            'walker'=> new Footer_Walker()
                        );
                    ?>
                    <?php wp_nav_menu( $args_footer5 );?>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5 class="white-font">Follow Us</h5>
                    <a href="https://www.facebook.com/Salarium.Solutions" class="followus-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fb-icon.svg" alt="" width="30px" target="_blank"></a>
                    <a href="https://twitter.com/salariumpayroll" class="followus-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/twitter-icon.svg" alt="" width="30px" target="_blank"></a>
                    <a href="https://ph.linkedin.com/company/salarium" class="followus-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/linkedin-icon.svg" alt="" width="30px" target="_blank"></a>
                    <a href="https://www.youtube.com/user/SalariumSolutions" class="followus-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/youtube-icon.svg" alt="" width="30px" target="_blank"></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid footer-wrap">
        <div class="container py-4">
            <p class="text-center copyright-footer mb-0"><em>Copyright &copy; 2013 - 2019 Salarium LTD | All Rights Reserved</em></p>
        </div>
    </footer>
    <script>
        $(document).ready(function(){
            var toggleDropDown = $('#nav-menu-item-7628');
            //$('ul.dropdown-menu').css("right","0");
            $(toggleDropDown).hover(
                function() {
                    $(this).children( "ul.dropdown-menu" ).show();
                }, function() {
                    $(this).children( "ul.dropdown-menu" ).hide();
                }
            );

        });
            
    </script>
    </body>
</html>