<?php
/**
 * The main template file
 *
 * @package SALARIUM
 * @subpackage tokens
 * @since 2.0.0
 */

get_header();
?>
<section class="container-fluid tokens-color-bg ">
    <img class="tokens-fix-bg-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-bg-tokens.png" alt="">
    <div class="row position-relative">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center header-main-content">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-tokens-logo-gray.png" width="100px" alt="">
            <h1 class="header-h1-resize mt-3 fa-300 text-center text-uppercase gold-font">Banking the Unbanked with<br> Payroll and Blockchain</h1>
        </div>
        <div class="col-md-2"></div>
    </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>
