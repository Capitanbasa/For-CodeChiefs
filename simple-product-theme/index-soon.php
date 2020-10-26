<?php
/**
 * The main template file
 *
 * @package SALARIUM
 * @subpackage salpay
 * @since 2.0.0
 */

get_header();
?>
<section class="container-fluid no-gutters-sal" style="position:relative;">
    <img class="fix-position-header" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-home-soon-bg.png" alt="" style="width:100%;top:20px;">
    <div class="container py-5" style="position:relative;">
        <div class="row py-2">
            <div class="col-md-3"></div>
            <div class="col-md-6 pt-5">
                <h1 class="fa-200 text-center pt-5 pb-2">We are building a better</h1>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-logo-soon.png" alt="" class="img-fluid py-2">
                <h5 class="fa-300 text-center py-5"><a href="https://www.salpay.com/" class="soon-anchor">Home</a> | <a href="#" class="soon-anchor">FAQ</a> | <a href="https://www.salpay.com/unionbank-partnership/" class="soon-anchor">UnionBank Partnership</a></h5>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php get_footer('soon'); ?>
