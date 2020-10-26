<?php
/**
 * The template for displaying the header
 * @package WordPress
 * @subpackage InsideSalarium
 */
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="application-name" content="Inside Salarium"/>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">



        <?php wp_head(); ?>
        <!--[if lt IE 9]> <script src="<?php echo esc_url( get_template_directory_uri() ); ?>assets/js/css3-mediaqueries.js"></script> <![endif]-->
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/all.min.css">
        <meta name="google-site-verification" content="TOaQ-BOj_5NcLODDwoqPGreoVMhon8XYzbFezvGHp8g" /> 
        <script>
            $(document).ready(function(){
                var burger_btn = $('#burger-menu-toggler');

                $(burger_btn).click(function() {     
                    $('#navbarCollapse').toggle("slide", { direction: "down" }, 1000);
                });

        });
        </script>
    </head>
<body <?php body_class(); ?>>
    <!-- <nav class="fixed-top navbar navbar-expand-md main-navbar-blue"> -->
    <nav class="navbar navbar-expand-md main-navbar-blue">
        <div class="container">
            <a href="<?php echo site_url();?>" class="navbar-brand site-logo mr-md-auto">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inside-salarium-logo.svg" alt="" class="site-logo" height="40px">
            </a>
            <button class="navbar-toggler" type="button" id="burger-menu-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-border-l-white" id="navbarCollapse">
                <?php $args_salariummenu = array(
                        'theme_location' => 'salariummenu',
                        'sub_menu'       => false,
                        'menu_class' => 'navbar-nav mr-auto main-menu-mobile',
                        'container'        => '',
                        'walker'=> new SalariumMenu_Walker()
                    );
                ?>
                <?php wp_nav_menu( $args_salariummenu );?>

                <a class="navbar-brand center-mobile" href="#" style="padding-bottom:0;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/talk-to-icon_white.svg" alt="" style="height:42px;"> +63 (02) 271-1523</a>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item hide-mobile">
                        <a class="nav-link" href="#">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link center-mobile" href="https://app.salarium.com/users/login" target="_blank">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link book-a-demo center-mobile" href="https://www.salarium.com/sign-up" target="_blank">BOOK A DEMO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md nav-border-b-blue py-2">
        <div class="container ">
            <div class="navbar-collapse">
                <?php $args_primary = array(
                        'theme_location' => 'primary',
                        'depth'       => 2,
                        'menu_class' => 'navbar-nav mr-auto',
                        'container'        => '',
                        'walker'=> new SalariumMenu_Walker()
                    );
                ?>
                <?php wp_nav_menu( $args_primary );?>
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
                        <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://zcs1.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup" class="form-inline my-2 my-lg-0">
                            <div class="form-group form-expand-mobile">
                                <input savetype="EMBED_FORM_EMAIL_LABEL" changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" class="form-control sal-input-text mr-2 centered-mobile addmargin-mobile" placeholder="Email Address">
                                <input name="SIGNUP_SUBMIT_BUTTON" class="btn sal-btn-red centered-mobile" id="zcWebOptin" type="button" value="SUBCRIBE">
                            </div>
                            
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
        </div>
    </nav>