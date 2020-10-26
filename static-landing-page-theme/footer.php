<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SALARIUM
 * @subpackage salpay
 * @since 2.0.0
 */
?>

    <footer class="tokens-footer">
        <div class="container-fluid py-4">
            <div class="row d-flex">
                <div class="col-md-2 align-self-center py-2 align-middle">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-tokens-logo-footer.png" class="mx-auto d-block" width="100px" alt="">
                </div>
                <div class="col-md-6 align-self-center py-2">
                    <p class="fa-400 p-footer-2 gold-font">Questions? Comments?<br>Our Customer Support Team is available 24/7.</p>
                    <p class="fa-500 p-footer-1 white-font">+63 2 304 9111 • info@salpay.com</p>
                </div>
                <div class="col-md-2 py-2">
                    <!-- <h5 class="fa-400 white-font">Resources</h5> -->
                    <?php $footer = array(
                            'theme_location' => 'footer',
                            'depth'       => 2,
                            'menu_class' => 'list-unstyled',
                            'container'        => '',
                            'link_before' => '<small>',
                            'link_after' => '</small>',
                            'walker'=> new Footer_Walker()
                        );
                    ?>
                    <?php //wp_nav_menu( $footer );?>
                </div>
                <div class="col-md-2 py-2">
                    <p class="fa-500 p-footer-2 mb-2 white-font">Follow Us</p>
                    <a href="https://www.facebook.com/SalPayCommunity/" class="followus-icon" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fb-icon.svg" alt="" width="30px"></a>
                    <a href="https://twitter.com/SALPayCommunity" class="followus-icon" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/twitter-icon.svg" alt="" width="30px"></a>
                    <a href="https://ph.linkedin.com/company/salarium" class="followus-icon" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/linkedin-icon.svg" alt="" width="30px"></a>
                </div>
            </div>
        </div>
        <div class="container-fluid tokens-footer-copyright py-3">
            <p class="text-center fa-300 gold-font">Copyright © 2013 - 2019 SALPay LTD | All Rights Reserved</p>
        </div>
    </footer>
    <script>
            $(document).ready(function(){
                var burger_btn = $('#burger-menu-toggler');

                $(burger_btn).click(function() {     
                    $('#navbarCollapse').toggle("slide", { direction: "down" }, 1000);
                });

        });
        </script>
    <?php wp_footer(); ?>
    </body>
</html>