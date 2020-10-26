<?php
/*
* Template name: FAQ Page
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
<section class="container-fluid no-gutters-sal pt-5" style="position:relative;">
    <div class="container py-5" style="position:relative;">
    <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-faq-bg-circles.png" class="img" style="width:100%;z-index:-2;right:0;" alt="">
        <div class="row py-2">
            <div class="col-md-3"></div>
            <div class="form-group px-0 col-md-6 text-center form-center-wrap">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-logo.png" class="py-2 d-block mx-auto" width="120px" alt="">
                <h1 class="fa-300 text-center pt-2">Frequently Asked Questions</h1>
                <div class="row py-2">
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-8 px-0 form-header-homepage">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" class="form-control custom-text-box search-field" placeholder="<?php echo esc_attr_x( 'Search Keyword', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
                            <input type="submit" class="btn sal-custom-button search-submit" value="<?php echo esc_attr_x( 'SEARCH', 'submit button' ) ?>" />
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="container mb-5">
    <h2 class="fa-200 text-center">Categories</h2>
    <div class="row py-5">
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/getting-started/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-getting-started-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/getting-started/">Getting Started</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/bills-payment/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-bills-payment-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/bills-payment/">Bills Payment</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/flash-loans-and-easy-loans/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-flash-loans-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/flash-loans-and-easy-loans/">Flash Loans and Easy Loans</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                <a href="https://www.salpay.com/faq/atm-transactions/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-atm-trans-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/atm-transactions/">ATM Transactions</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/prepaid-load/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-prepaid-load-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/prepaid-load/">Prepaid Load</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/locking-unlocking-card/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-lock-unlock-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/locking-unlocking-card/">Locking and Unlocking Card</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/sending-money/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-sending-money-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/sending-money/">Sending Money</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/salpay-for-payroll/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-salpay-payroll-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/salpay-for-payroll/">SALPay for Payroll</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="row d-flex">
                <div class="col-md-4 align-self-center align-middle">
                    <a href="https://www.salpay.com/faq/replacing-salpay-card/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat-replace-card-icon.png" class="mx-auto d-block img-fluid" alt=""></a>
                </div>
                <div class="col-md-8 align-self-center align-middle">
                    <h4 class="fa-500"><a href="https://www.salpay.com/faq/replacing-salpay-card/">Replacing SALPay Card</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>
