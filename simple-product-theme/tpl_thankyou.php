<?php
/*
* Template name: Thank you Page
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
<section class="container no-gutters-sal mb-5 py-5">
    <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-thank-you.png" alt="">
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>
