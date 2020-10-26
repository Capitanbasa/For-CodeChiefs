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
<section class="container">
    <nav class="navbar navbar-sal navbar-expand">
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
<section class="container-fluid no-gutters-sal" id="sal-section-home-header" style="position:relative;">
    <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-homepage-green-half-circle.png" class="img" style="width:100%;z-index:-2;right:0;" alt="">
    <section id="sal-ub-section"class="container py-5 remove-my-mobile pr">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-homepage-phone-card.png" class="show-mobile" style="width:100%;display:none;" alt="">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-homepage-header-phone.png" class="hide-mobile fix-position-header" style="width:100%;z-index:-1;top:-10px;" alt="">
        <div class="row d-flex">
            <div class="col-md-6" id="header-content">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-logo.png" class="py-4" width="120px" alt="">
                <h1 class="fa-300">SALPay is your partner in <br>achieving financial well-being</h1>
                <p class="fa-500">Take the first step to financial freedom and financial security.</p>
                <!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->

                <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
                <script type="text/javascript" src="https://zca.maillist-manage.com/js/optin.min.js" onload="setupSF('sfd7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4','ZCFORMVIEW',false,'light')"></script>
                <script type="text/javascript">
                    function runOnFormSubmit_sfd7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4(th){
                        /*Before submit, if you want to trigger your event, "include your code here"*/
                    };
                </script>
                <!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here-->

                <div id="sfd7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4" data-type="signupform">
                    <div id="customForm">
                        <input type="hidden" id="signupFormType" value="QuickForm_Horizontal">
                        <div class="quickFormHorizontal quick_form_9_css"  name="SIGNUP_BODY" id="SIGNUP_BODY">
                            <div id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER"></div>
                            <div style="position:relative;">
                                <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="10%">
                                                    <img class="successicon" src="https://zca.maillist-manage.com/images/challangeiconenable.jpg" align="absmiddle">
                                                </td>
                                                <td>
                                                    <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group col-md-12 px-0 form-header-homepage">
                                <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://zca.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup">
                                <div style="display:none;background-color:#FFEBE8;padding:10px 10px; color:#d20000; font-size:11px; margin:10px;border:solid 1px #ffd9d3; margin-top:20px;" id="errorMsgDiv">&nbsp;&nbsp;Please correct the marked field(s) below.</div>
                                        <input class="form-control custom-text-box" savetype="EMBED_FORM_EMAIL_LABEL" changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" placeholder="Leave your email here to be notified at release">
                                        <input class="btn sal-custom-button" name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" type="button" value="Join Now">
                                        <!-- Do not edit the below Zoho Campaigns hidden tags -->
                                        <input type="hidden" id="fieldBorder" value="rgb(235, 235, 235)">
                                        <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="" onload="">
                                        <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                                        <input type="hidden" id="lD" name="lD" value="11ed46cab7f85a0b">
                                        <input type="hidden" name="emailReportId" id="emailReportId" value="">
                                        <input type="hidden" id="formType" name="formType" value="QuickForm">
                                        <input type="hidden" name="zx" id="cmpZuid" value="128820318">
                                        <input type="hidden" name="zcvers" value="3.0">
                                        <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                                        <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                                        <input type="hidden" id="zcld" name="zcld" value="11ed46cab7f85a0b">
                                        <input type="hidden" id="document_domain" value="campaigns.zoho.com">
                                        <input type="hidden" id="zc_Url" value="zca.maillist-manage.com">
                                        <input type="hidden" id="new_optin_response_in" value="0">
                                        <input type="hidden" id="duplicate_optin_response_in" value="0">
                                        <input type="hidden" id="zc_formIx" name="zc_formIx" value="d7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4">
                                        <!-- End of the campaigns hidden tags -->
                                </form>
                            </div>
                        </div>
                        <img src="https://zca.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
                    </div>
                </div>
                <div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
                <div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
                    <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
                        <img src="https://zca.maillist-manage.com/images/videoclose.png">
                    </span>
                    <div id="zcOptinSuccessPanel"></div>
                </div>
                <!--Zoho Campaigns Web-Optin Form Ends Here-->
                <p class="fa-200 sal-lagend">* Are you a business looking for a more convenient method to disburse payroll? SALPay can be seamlessly integrated to <a href="https://www.salarium.com/?utm_source=salpay.com&utm_medium=referral&utm_campaign=homepage&utm_content=learnmore" target="_blank">Salarium</a>, the leading payroll software in the Philippines.</p>
            </div>
            <div class="col-md-8">
            </div>
        </div>
    </section>
</section>
<section class="container-fluid no-gutters-sal" style="position:relative;padding-top:60px;">
    <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-offers-bg-circle.png" alt="" style="width:100%;">
    <div class="container py-5" style="position:relative;">
        <h1 class="fa-300 text-center">Here’s what SALPay has to Offer</h1>
        <div class="row py-5">
            <div class="col-md-6">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salary-disbursement-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile">Salary Disbursements</h4>
                        <p class="text-left">SALPay is directly connected to Salarium, making the transition from payroll to payout seamless and hassle-free.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-2">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bills-payment-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile">Bills Payment</h4>
                        <p class="text-left">Never miss a billing deadline! SALPay gives you the ability to pay more than 80 billers ranging from schools to Fintech service providers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-2">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/acct-management-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile">Account Management</h4>
                        <p class="text-left">Transfer funds to your other bank accounts, manage your finances and more through the SALPay mobile app.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-2">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/lock-unlock-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile">Lock/Unlock Card</h4>
                        <p class="text-left">Prevent unnecessary expenses by using the lock/unlock feature of your SALPay Visa Debit Card.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-2">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prepaid-load-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile">Prepaid Load Purchase</h4>
                        <p class="text-left">Your new SALPay card allows you access to a wide variety of prepaid load products from over 50 merchants.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-2">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/easy-loans-icon.png" class=" mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile">Easy Loans and Flash Loans</h4>
                        <p class="text-left">Short on cash? Apply for loans up to Php 250,000 through SALPay’s third-party lenders.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-2">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/free-unlimited-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile d-inline-block"><span class="d-inline-block float-left">Free Unlimited Withdrawals</span><span class="d-inline-block float-left sal-asterisk">*</span></h4>
                        <p class="text-left">Withdraw cash from your account any time at any UnionBank ATM, at no additional charges.</p>
                        <p class="text-left option-text">*Charges may apply to withdrawals made from non-UnionBank ATMs.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 py-2">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/trans-monitoring-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile">Transaction Monitoring and Management </h4>
                        <p class="text-left">Using the SALPay app, you can view your transaction history so you can keep track of your spending on-the-go.</p>
                    </div>
                </div>
            </div>
            <!--div class="col-md-6 py-2">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cardless-widrawal-icon.png" class="mx-auto d-block img-fluid mb-4" alt="">
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-left text-center-mobile d-inline-block"><span class="d-inline-block float-left">Cardless Withdrawals</span><span class="d-inline-block float-left sal-asterisk">**</span></h4>
                        <p class="text-left">No card, no problem! Just visit the nearest bank to make an over-the-counter withdrawal.</p>
                        <p class="text-left option-text">*Charges may apply to withdrawals made from non-UnionBank ATMs.</p>
                        <p class="text-left option-text">**Applicable only to over-the-counter withdrawals at UnionBank branches.</p>
                    </div>
                </div>
            </div-->
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="container-fluid py-5 remove-py-mobile">
    <div class="container py-5 remove-py-mobile">
        <div class="row">
            <div class="col-md-6 justify-content-center align-self-center">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-visa-card.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1 class="fa-300">Swipe and shop <br>without any cash</h1>
                <p class="fa-500">Use your SALPay Visa Card to pay at any of the<br>40 million+ accredited merchants worldwide.</p>
                <form action="">
                    <div class="form-group col-md-8 px-0">
                        <a href="https://www.salpay.com/faq/" class="btn sal-custom-button-a">LEARN MORE</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="container-fluid py-5">
    <div class="container py-5" style="position:relative;">
        <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-homepage-everything-app-bg.png" alt="" style="width:100%;">
        <div class="row">
            <div class="col-md-7 align-self-center py-4">
                <h1 class="fa-300">Everything you need in one app</h1>
                <p class="fa-500">Manage your finances, pay bills, shop, save, apply for<br> loans, and more with just a few taps and keystrokes.</p>
                <a href="https://itunes.apple.com/ph/app/sal-pay/id1119957006?mt=8"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/download-btn-apple.png" alt="" style="width: 130px;"></a>
                <a href="https://play.google.com/store/apps/details?id=com.salarium.android.salpay"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/download-btn-google.png" alt="" style="width: 130px;"></a>
            </div>
            <div class="col-md-5 justify-content-center align-self-center">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salpay-homepage-everything-app.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="container-fluid no-gutters-sal mb-5" style="position:relative;">
    <div class="container py-5" style="position:relative;">
        <img class="fix-position-header hide-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/signup-bg-circles.png" alt="" style="width:100%;">
        <h1 class="fa-300 text-center pt-5">Sign up to today <br>and be the first to know.</h1>
        <div class="row py-2">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->

                <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
                <script type="text/javascript" src="https://zca.maillist-manage.com/js/optin.min.js" onload="setupSF('sfd7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4','ZCFORMVIEW',false,'light')"></script>
                <script type="text/javascript">
                    function runOnFormSubmit_sfd7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4(th){
                        /*Before submit, if you want to trigger your event, "include your code here"*/
                    };
                </script>
                <!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here-->

                <div id="sfd7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4" data-type="signupform">
                    <div id="customForm">
                        <input type="hidden" id="signupFormType" value="QuickForm_Horizontal">
                        <div class="quickFormHorizontal quick_form_9_css"  name="SIGNUP_BODY" id="SIGNUP_BODY">
                            <div id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER"></div>
                            <div style="position:relative;">
                                <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="10%">
                                                    <img class="successicon" src="https://zca.maillist-manage.com/images/challangeiconenable.jpg" align="absmiddle">
                                                </td>
                                                <td>
                                                    <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://zca.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup">
                                <div style="display:none;background-color:#FFEBE8;padding:10px 10px; color:#d20000; font-size:11px; margin:10px;border:solid 1px #ffd9d3; margin-top:20px;" id="errorMsgDiv">&nbsp;&nbsp;Please correct the marked field(s) below.</div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="form-group px-0 col-md-8 text-center form-center-wrap">
                                        <input class="form-control custom-text-box" savetype="EMBED_FORM_EMAIL_LABEL" changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" placeholder="Leave your email here to be notified at release">
                                        <input class="btn sal-custom-button" name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" type="button" value="Join Now">
                                    </div>
                                        <!-- Do not edit the below Zoho Campaigns hidden tags -->
                                        <input type="hidden" id="fieldBorder" value="rgb(235, 235, 235)">
                                        <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="" onload="">
                                        <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                                        <input type="hidden" id="lD" name="lD" value="11ed46cab7f85a0b">
                                        <input type="hidden" name="emailReportId" id="emailReportId" value="">
                                        <input type="hidden" id="formType" name="formType" value="QuickForm">
                                        <input type="hidden" name="zx" id="cmpZuid" value="128820318">
                                        <input type="hidden" name="zcvers" value="3.0">
                                        <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                                        <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                                        <input type="hidden" id="zcld" name="zcld" value="11ed46cab7f85a0b">
                                        <input type="hidden" id="document_domain" value="campaigns.zoho.com">
                                        <input type="hidden" id="zc_Url" value="zca.maillist-manage.com">
                                        <input type="hidden" id="new_optin_response_in" value="0">
                                        <input type="hidden" id="duplicate_optin_response_in" value="0">
                                        <input type="hidden" id="zc_formIx" name="zc_formIx" value="d7db2247237639ab38dded6a08d3f0e4453c043008a6e1d4">
                                        <!-- End of the campaigns hidden tags -->
                                </form>
                        </div>
                        <img src="https://zca.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
                    </div>
                </div>
                <div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
                <div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
                    <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
                        <img src="https://zca.maillist-manage.com/images/videoclose.png">
                    </span>
                    <div id="zcOptinSuccessPanel"></div>
                </div>

                <!--Zoho Campaigns Web-Optin Form Ends Here-->
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>
