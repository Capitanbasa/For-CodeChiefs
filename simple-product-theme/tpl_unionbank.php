<?php
/*
* Template name: UnionBank Page
*/

get_header();
?>
<section class="container">
    <nav class="navbar navbar-sal navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php $args_salpay_menu = array(
                    'theme_location' => 'main-menu',
                    'sub_menu'       => false,
                    'menu_class' => 'navbar-nav',
                    'container'        => '',
                    'walker'=> new BoostrapNavbar_Walker()
                );
            ?>
            <?php wp_nav_menu( $args_salpay_menu );?>
        </div>
    </nav>
</section>

<section class="container-fluid no-gutters-sal" id="sal-section-ub-top">
    <img class="fix-position-header" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-header-phone-dots.png" class="img" style="width:100%;" alt="">
    <section id="sal-ub-section"class="container py-5 remove-my-mobile">
        <div class="row d-flex">
            <div class="col-md-6" id="header-content-ub">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-logo.png" class="py-4" width="120px" alt="">
                <h1 class="fa-300">SALPay Now Powered<br>
                by UnionBank EON</h1>
                <p class="fa-500">A revolutionary SALPay VISA Debit Card<br>
                is coming your way.</p>
                <div class="form-group col-md-8 px-0">
                    <a href="https://www.salpay.com/faq/" class="btn sal-custom-button-a">LEARN MORE</a>
                </div>
            </div>
            <div class="col-md-8">
            </div>
        </div>
    </section>
</section>
<section class="container-fluid no-gutters-sal pt-4" style="position:relative;">
    <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-2nd-background-dots.png" style="width:100%;" alt="">
    <div class="container py-5" style="position:relative;">
        <h1 class="fa-300 text-center mobile-font-size">SALPay is partnering up with UnionBank EON<br>to provide you a more refined digital finance experience.</h1>
        <div class="row py-5">
            <div class="col-md-4 box-featured py-4 px-3 add-margin-y-box-mobile">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/reliable-icon.png" class="box-icon-image mx-auto d-block" alt="" width="80px">
                <h4 class="text-uppercase text-center">INNOVATIVE platform</h4>
                <p class="text-center fa-500">Have access to your accounts and all services using your e-wallet and mobile app anytime, anywhere.</p>
            </div>
            <div class="col-md-4 box-featured py-4 px-3 add-margin-y-box-mobile">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/added-services-icon.png" class="box-icon-image mx-auto d-block" alt="" width="80px">
                <h4 class="text-uppercase text-center">added services</h4>
                <p class="text-center fa-500">SALPay will provide more digital banking services and financial products on top of its current services.</p>
            </div>
            <div class="col-md-4 box-featured py-4 px-3 add-margin-t-box-mobile">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cost-saving-icon.png" class="box-icon-image mx-auto d-block" alt="" width="80px">
                <h4 class="text-uppercase text-center">cost savings</h4>
                <p class="text-center fa-500">By working with UnionBank EON, SALPay can deliver all services, such as bank transfers, at more affordable prices.</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-2"></div>
            <div class="col-md-4 box-featured py-4 px-3 add-margin-b-box-mobile">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/more-secure-icon.png" class="box-icon-image mx-auto d-block" alt="" width="80px">
                <h4 class="text-uppercase text-center">better security</h4>
                <p class="text-center fa-500">UnionBank EON is regulated by the Bangko Sentral ng Pilipinas, lending more financial security to SALPay and its users.</p>
            </div>
            <div class="col-md-4 box-featured py-4 px-3 add-margin-y-box-mobile">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/quick-process-icon.png" class="box-icon-image mx-auto d-block" alt="" width="80px">
                <h4 class="text-uppercase text-center">QUICK PROCESSING</h4>
                <p class="text-center fa-500">Sign-up, card issuance and card activation processes will become more convenient and take less time to complete.</p>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>
<section class="container-fluid py-5 remove-py-mobile">
    <div class="container py-5 remove-py-mobile">
        <div class="row">
            <div class="col-md-6 justify-content-center align-self-center">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-visa-card.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 align-self-center card-less-circle-bg">
            <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-card-bg-cardless.png" style="width:100%;top: -85px;" alt="">
    <div class="container py-5" style="position:relative;">
                <h1 class="fa-300">Swipe and shop <br>without any cash</h1>
                <p class="fa-500">Use your SALPay Visa Card to pay at any of the<br>40 million+ accredited merchants worldwide.</p>

            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="container-fluid no-gutters-sal mb-5 py-5" style="position:relative;">
    
    <div class="container py-5" style="position:relative;">
        <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/signup-bg-circles.png" alt="" style="width:100%;">
        <h1 class="fa-300 text-center pt-5">Click here for more <br>information.</h1>
        <div class="row py-2">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="form-group px-0 col-md-8 text-center form-center-wrap">
                            <a href="https://www.salpay.com/faq/" class="btn sal-custom-button-a">LEARN MORE</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>
