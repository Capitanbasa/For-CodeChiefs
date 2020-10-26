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