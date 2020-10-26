<?php
/**
 * The template for displaying single post pages
 *
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
    <?php if ( have_posts() ) : ?>
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
        <img src="<?php echo $featured_img_url;?>" class="mx-auto d-block img-fluid mb-4" alt="" style="width:100px;">
        <h1 class="fa-300 text-center pb-5"><?php the_title();?></h1>
        <?php while ( have_posts() ) : ?>
            <div class="row">
                <div class="col-md-12">
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>

    <?php endif;?>
</section>
<div class="clearfix"></div>
<?php
get_footer();
