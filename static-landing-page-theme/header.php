<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package SALARIUM
 * @subpackage tokens
 * @since 2.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-md tokens-color-bg">
            <button class="navbar-toggler collapsed" id="burger-menu-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <div class="ml-auto card-group">
                    <div class="float-left align-self-center align-middle tokens-center-me-mobile">
                        <p class="clear-fix follow-us-top gold-font text-center">FOLLOW US ON</p>
                        <a href="https://www.facebook.com/SalPayCommunity/" class="followus-icon" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fb-icon.svg" alt="" width="20px"></a>
                        <a href="https://twitter.com/SALPayCommunity" class="followus-icon" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/twitter-icon.svg" alt="" width="20px"></a>
                        <a href="https://ph.linkedin.com/company/salarium" class="followus-icon" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/linkedin-icon.svg" alt="" width="20px"></a>
                        <a href="https://ph.linkedin.com/company/salarium" class="followus-icon" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/linkedin-icon.svg" alt="" width="20px"></a>
                    </div>
                    <div class="float-left align-self-center align-middle tokens-center-me-mobile">
                        <a href="#" class="btn btn-token-login white-font">TOKEN LOGIN</a>
                    </div>
                </div>
                
            </div>
        </nav>
    </header>