<?php require_once 'inc/header-dashboard.inc.php'; ?>
<style type="text/css">
    .col-lg-2 {
        flex: 1 0 16.666667%;
        max-width: 52.666667%;
    }s
</style>
    <style>
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        
        /*input[type="radio"] {*/
            -ms-transform: scale(3); /* IE 9 */
            -webkit-transform: scale(3); /* Chrome, Safari, Opera */
        /*    transform: scale(3);*/
        /*}*/

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /*.active {*/
        /*    background-color: #717171;*/
        /*}*/

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 8s;
            animation-name: fade;
            animation-duration: 8s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: 0}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
    </style>
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- ============ Team Member Wrapper Start =============== -->
            <div class="team-member-wrapper">
                <div class="container">
                    <div class="row">
                        <?php require_once "inc/dashboard-sidebar.php"; ?>
                        <div class="col-lg-9 ht-team-member-style-one section-space--mt_30">
                            <div class="row">
                                <div class="col-lg-6 text-center ccc">
                                    <h5>Main Account</h5>
                                    <h3>N<?php echo $ud->balance; ?></h3>
                                </div>
                                <div class="col-lg-6 text-center ccc">
                                    <h5>Bonus Account</h5>
                                    <h3>N<?php echo $ud->commission; ?></h3>
                                </div>
                                <div class="col-lg-12 text-center  section-space--mb_40">
                                    <button class="ht-btn ht-btn-xs ht-btn--circle" data-toggle="modal" data-target="#fund-wallet">Fund Wallet
                                        <i class="far fa-plus-circle"></i></button>
                                </div>
                                <div class="col-lg-12" id="slider-custom">
                                    <div class="slideshow-container">

                                        <div class="mySlides fade">
                                            <div class="numbertext"></div>
                                            <img src="assets/images/banners/39.png" style="width:100%">
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext"></div>
                                            <img src="assets/images/banners/39.png" style="width:100%">
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext"></div>
                                            <img src="assets/images/banners/39.png" style="width:100%">
                                        </div>

                                    </div>
                                    <div style="text-align:center">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>

                                <div class="col-12" id="servicesform1" style="display: ;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_40">
                                                    <h3 class="heading"><span class="text-color-primary">Services</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pr-5 pl-5 servicesformm">
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="Buy Data" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/11.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Buy Data </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="Buy Airtime" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/13.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Buy Airtime</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="Electricity" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/12.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Electricity</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="TV Subscription" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/14.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">TV Subscription</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="Airtime To Cash" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/18.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Airtime to Cash</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="Crypto Exchange" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/19.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Crypto Exchange</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" data-toggle="modal" data-target="#wallet-to-wallet">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/15.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Wallet to Wallet Transfer</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="Gift Card Exchange" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/16.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Gift Card Exchange</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow move-up">
                                                <!-- ht-box-icon Start -->
                                                <div class="ht-box-icon style-01 single-svg-icon-box" id="Referrals" onclick="startActivity(this.id);">
                                                    <div class="icon-box-wrap">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/17.png" width="65" height="65"/>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading" style="font-size: 13px !important;">Referrals</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ht-box-icon End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Airtime To Cash Page -->
                                <div class="col-12" id="servicesforAirtimeToCash" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-2" style="border-bottom: solid 2px #0A335C;">
                                                    <a onclick="goServiceForm1()" style="float: left; padding: 10px;"><i class="far fa-angle-double-left"></i> Back</a>
                                                    <h4 class="heading" style="font-weight: 400;"><img src="assets/images/icons/18.png" width="40"><span class="text-color-primary pl-3">Airtime to Cash</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2">
                                                <div class="mr-auto ml-auto">
                                                    <div class="contact-form__two">
                                                        
                                                        <div class="contact-inner">
                                                            <input name="phone_number" id="ac-phone_number" type="text" placeholder="Phone Number *">
                                                        </div>
                                                        <div class="contact-inner">
                                                            <select class="" id="ac-network" name="ac-network">
                                                                <option>-- Select Network --</option>
                                                                <option value="Airtel">Airtel</option>
                                                                <option value="Glo">Glo</option>
                                                                <option value="MTN">MTN</option>
                                                            </select>
                                                        </div>
                                                        <div class="contact-inner">
                                                            <input name="ac-amount" id="ac-amount" type="number" placeholder="Volume *">
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn-xs" type="button" id="airtime2cashbtn" onclick="airtimetocash(this.id)">Convert  <i class="far fa-angle-double-right"></i></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <!-- Airtime Topup Page -->
                                <div class="col-12" id="servicesform2" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-2" style="border-bottom: solid 2px #0A335C;">
                                                    <a onclick="goServiceForm1()" style="float: left; padding: 10px;"><i class="far fa-angle-double-left"></i> Back</a>
                                                    <h4 class="heading" style="font-weight: 400;"><img src="assets/images/icons/11.png" width="40"><span class="text-color-primary pl-3">Buy Airtime</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2">
                                                <div class="mr-auto ml-auto">
                                                    <div class="contact-form__two">
                                                        <div class="text-center pt-2 pb-2" id="airtime-preview"></div>
                                                        <div class="contact-inner">
                                                            <select class="" id="network" name="network" onselect="set_network();" onchange="set_network();">
                                                                <option>-- Select Network --</option>
                                                                <option value="Airtel">Airtel</option>
                                                                <option value="Glo">Glo</option>
                                                                <option value="MTN">MTN</option>
                                                            </select>
                                                        </div>
                                                        <div class="contact-inner">
                                                            <input name="phone_number" id="phone_number" type="text" placeholder="Phone Number *" onkeyup="set_phone();" onkeydown="set_phone();">
                                                        </div>
                                                        <div class="contact-inner">
                                                            <input name="amount_volume" id="amount_volume" type="number" placeholder="Volume *" onkeyup="set_amount();" onkeydown="set_amount();">
                                                        </div>
                                                        
                                                        <div class="row pt-3 pb-3">
                                                            <div class="col-md-4" style="margin: auto;">
                                                                <h6>Purchase From</h6>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="airtimeOptions" id="airtimeOption1" style="height:20px; width:20px; vertical-align: middle;" value="main" checked>
                                                                    <label class="form-check-label" for="inlineRadio1">Main Account</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="airtimeOptions" style="height:20px; width:30px; vertical-align: middle;" id="airtimeOption2" value="bonus">
                                                                    <label class="form-check-label" for="inlineRadio2">Bonus Account</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn-xs" type="button" id="purchaseBtn" onclick="purchaseNow(this.id)">Pay  <i class="far fa-angle-double-right"></i></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                        <div class="row comment-submit-btn text-center pt-3 pb-3">
                                                            <div class="col-md-4"><hr></div>
                                                            <div class="col-md-4">OR PAY WITH</div>
                                                            <div class="col-md-4"><hr></div>
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="purchaseBtnPaystack" onclick="purchaseNowWithPaystack(this.id)"><img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" /></button>
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="purchaseBtnMonify" onclick="purchaseNowWithMonify(this.id)"><img src="assets/img/22.png" width="80px" height="auto" /></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                        



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Data Topup Page -->
                                <div class="col-12" id="servicesform22" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-2" style="border-bottom: solid 2px #0A335C;">
                                                    <a onclick="goServiceForm1()" style="float: left; padding: 10px;"><i class="far fa-angle-double-left"></i> Back</a>
                                                    <h4 class="heading" style="font-weight: 400;"><img src="assets/images/icons/11.png" width="40"><span class="text-color-primary pl-3">Buy Data</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2">
                                                <div class="mr-auto ml-auto">
                                                    <div class="contact-form__two">
                                                        <div class="contact-inner">
                                                            <div class="text-center pt-2 pb-2" id="network-preview"></div>
                                                            <select class="" id="network-data" name="network-data" onselect="data_setDataProvider()" onchange="data_setDataProvider()">
                                                                <option>-- Select Network --</option>
                                                                <option value="airtel">Airtel</option>
                                                                <option value="glo">Glo</option>
                                                                <option value="mtn">MTN</option>
                                                            </select>
                                                        </div>
                                                        <div class="contact-inner">
                                                            <input name="data-number" id="data-number" type="number" placeholder="Phone number *"  onkeydown="data_setDataPhone()" onkeyup="data_setDataPhone()">
                                                        </div>
                                                        <div class="contact-inner">
                                                            <select class="" id="bundle" name="bundle" onselect="data_setDataBuddle()" onchange="data_setDataBuddle()">
                                                                <option value="">Select plan</option>
                                                            </select>
                                                        </div>
                                                        <div class="row pt-3 pb-3">
                                                            <div class="col-md-6">
                                                                <h6>Purchase From</h6>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="dataPayOption" id="dataPayOption1" style="height:20px; width:20px; vertical-align: middle;" value="main" checked>
                                                                    <label class="form-check-label" for="inlineRadio1">Main Account</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" style="height:20px; width:20px; vertical-align: middle;" type="radio" name="dataPayOption" id="dataPayOption2" value="bonus">
                                                                    <label class="form-check-label" for="inlineRadio2">Bonus Account</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="bundle-plan" id="bundle-plan" />



                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn-xs" type="button" id="purchaseDataBtn" onclick="purchaseData(this.id)">Pay  <i class="far fa-angle-double-right"></i></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                        <div class="row comment-submit-btn text-center pt-3 pb-3">
                                                            <div class="col-md-4"><hr></div>
                                                            <div class="col-md-4">OR PAY WITH</div>
                                                            <div class="col-md-4"><hr></div>
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="dataBtnPaystack" onclick="dataPaystack(this.id)"><img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" /></button>
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="dataBtnMonify" onclick="dataMonnify(this.id)"><img src="assets/img/22.png" width="80px" height="auto" /></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Electricity Purchase Page -->
                                <div class="col-12" id="servicesform23" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-2" style="border-bottom: solid 2px #0A335C;">
                                                    <a onclick="goServiceForm1()" style="float: left; padding: 10px;;"><i class="far fa-angle-double-left"></i> Back</a>
                                                    <h4 class="heading" style="font-weight: 400;"><img src="assets/images/icons/12.png" width="40"><span class="text-color-primary pl-3">Buy Power</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2">
                                                <div class="mr-auto ml-auto">
                                                    <div class="contact-form__two">
                                                        <div class="contact-inner">
                                                            <select class="" id="disco" name="disco" onselect="set_dis();" onchange="set_dis();">
                                                                <option selected>-- Select Company --</option>
                                                            </select>
                                                        </div>
                                                        <div class="contact-inner">
                                                            <input name="meter-no" id="meter-no" type="number" placeholder="Meter No. *" onkeyup="set_meter();" onkeydown="set_meter();">
                                                            <div id="meter-checker"></div>
                                                        </div>
                                                        <div class="contact-inner">
                                                            <input name="amount-meter" id="amount-meter" type="number" placeholder="Amount *" onkeyup="set_disco_amount();" onkeydown="set_disco_amount();">
                                                        </div>
                                                        <div class="row pt-3 pb-3">
                                                            <div class="col-md-4">
                                                                <h6>Purchase From</h6>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="electriOptions" id="electriOptions1" style="height:20px; width:20px; vertical-align: middle;" value="main" checked>
                                                                    <label class="form-check-label" for="inlineRadio1">Main Account</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="electriOptions" id="electriOptions2" style="height:20px; width:20px; vertical-align: middle;" value="bonus">
                                                                    <label class="form-check-label" for="inlineRadio2">Bonus Account</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn-xs" type="button" id="purchaseElectricBtn" onclick="purchaseElectricity(this.id)">Pay  <i class="far fa-angle-double-right"></i></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                        <div class="row comment-submit-btn text-center pt-3 pb-3">
                                                            <div class="col-md-4"><hr></div>
                                                            <div class="col-md-4">OR PAY WITH</div>
                                                            <div class="col-md-4"><hr></div>
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="electricityBtnPaystack" onclick="electricityPaystack(this.id)"><img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" /></button>
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="electricityBtnMonify" onclick="electricityMonnify(this.id)"><img src="assets/img/22.png" width="80px" height="auto" /></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- TV Purchase Page -->
                                <div class="col-12" id="servicesform24" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-2" style="border-bottom: solid 2px #0A335C;">
                                                    <a onclick="goServiceForm1()" style="float: left; padding: 10px;;"><i class="far fa-angle-double-left"></i> Back</a>
                                                    <h4 class="heading" style="font-weight: 400;">
                                                        <img alt="" src="assets/images/icons/14.png" width="40">
                                                        <span class="text-color-primary pl-3">Buy Tv Cable</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2">
                                                <div class="mr-auto ml-auto">
                                                    <div class="contact-form__two">
                                                        <div class="contact-inner">
                                                            <select class="" id="select-cable" name="select-cable">
                                                                <option selected>-- Select Cable Bouquet --</option>
                                                                <option value="DSTV">DSTV</option>
                                                                <option value="GOTV">GOTV</option>
                                                                <option value="STARTIMES">STARTIMES</option>
                                                            </select>
                                                        </div>
                                                        <div class="contact-inner">
                                                            <input name="cable-number" id="cable-number" type="number" placeholder="Cable Number *" onfocus="set_cable_number();">
                                                            <div id="cable-checker" style="font-size: 12px; font-weight: 700px;"></div>
                                                        </div>

                                                        <div class="contact-inner">
                                                            <select id="cable-package" name="cable-package" onselect="selectCablePackage()" onchange="selectCablePackage()">
                                                                <option selected>-- Select Plan --</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="row pt-3 pb-3">
                                                            <div class="col-md-4">
                                                                <h6>Purchase From</h6>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="cablePayOption" id="cablePayOption1" style="height:20px; width:20px; vertical-align: middle;" value="main" checked>
                                                                    <label class="form-check-label" for="inlineRadio1">Main Account</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="cablePayOption" id="cablePayOption2" style="height:20px; width:20px; vertical-align: middle;" value="bonus">
                                                                    <label class="form-check-label" for="inlineRadio2">Bonus Account</label>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn-xs" type="button" id="purchaseCableBtn" onclick="purchaseCable(this.id)">Pay  <i class="far fa-angle-double-right"></i></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                        <div class="row comment-submit-btn text-center pt-3 pb-3">
                                                            <div class="col-md-4"><hr></div>
                                                            <div class="col-md-4">OR PAY WITH</div>
                                                            <div class="col-md-4"><hr></div>
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="cableBtnPaystack" onclick="cablePaystack(this.id)"><img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" /></button>
                                                            <button class="ht-btn ht-btn--outline ht-btn-xs" type="button" id="cableBtnMonify" onclick="cableMonnify(this.id)"><img src="assets/img/22.png" width="80px" height="auto" /></button>
                                                            <p class="form-messege"></p>
                                                        </div>





                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Final Page -->
                                <div class="col-12" id="servicesform4" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-4" style="border-bottom: solid 2px #0A335C;">
                                                    <h4 class="heading section-space--pb_20"><img src="assets/images/icons/888.png" width="40"><span class="text-color-primary"> Transaction Successful</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2 text-center section-space--mt_80">
                                                <div class="row">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Transaction Type:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="transaction-type-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Status:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="status-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Receipt No.:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="receipt-no-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Phone number:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="phone-number-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Service Provider:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b class="networker" id="service-provider-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Bundle:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="bundle-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Amount:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b class="Volume" id="amount-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Date &amp; Time:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="date-time-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 offset-2 text-center section-space--mt_60 section-space--mb_60">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/222.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Repeat Payment</h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/111.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Print</h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/000.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Share</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 offset-2 text-center mt-5 mb-5">
                                                <button class="btn btn--white"><i class="far fa-star"></i> Add to favourite</button>
                                                <button class="btn btn--primary"><i class="far fa-home"></i> Home</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Electri Final Page -->
                                <div class="col-12" id="powerOnSuccess" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-4" style="border-bottom: solid 2px #0A335C;">
                                                    <h4 class="heading section-space--pb_20"><img src="assets/images/icons/888.png" width="40"><span class="text-color-primary"> Transaction Successful</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2 text-center section-space--mt_80">
                                                <div class="row">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Transaction Type:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b style="font-weight: 600; color: black;">Electricity</b></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Token</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-token" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Reference No.:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-reference" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Amount:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-amount" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Distribution Company:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b class="power-db" id="service-provider-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Date &amp; Time:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-date-time" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 offset-2 text-center section-space--mt_60 section-space--mb_60">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/222.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Repeat Payment</h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/111.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Print</h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/000.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Share</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 offset-2 text-center mt-5 mb-5">
                                                <button class="btn btn--white"><i class="far fa-star"></i> Add to favourite</button>
                                                <button class="btn btn--primary"><i class="far fa-home"></i> Home</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Electri Final Page -->
                                <div class="col-12" id="cableOnSuccess" style="display: none;">
                                    <div class="feature-list__one" style="background-color: #E7F2FD; border-radius: 20px; padding-bottom: 20px; box-shadow:  0 4px 8px 0 rgb(228 222 222), 0 6px 20px 0 rgb(146 137 137 / 19%)">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30 pb-4" style="border-bottom: solid 2px #0A335C;">
                                                    <h4 class="heading section-space--pb_20"><img src="assets/images/icons/888.png" width="40"><span class="text-color-primary"> Transaction Successful</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2 text-center section-space--mt_80">
                                                <div class="row">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Transaction Type:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b style="font-weight: 600; color: black;">Electricity</b></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Token</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-token" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Reference No.:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-reference" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Amount:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-amount" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Distribution Company:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b class="power-db" id="service-provider-final" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col-lg-6 text-left">
                                                        <p style="font-weight: 600; color: black;">Date &amp; Time:</p>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <p><b id="power-date-time" style="font-weight: 600; color: black;">Null</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 offset-2 text-center section-space--mt_60 section-space--mb_60">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/222.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Repeat Payment</h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/111.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Print</h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="assets/images/icons/000.png" width="60" height="60">
                                                        <h6 style="font-size: 13px;">Share</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 offset-2 text-center mt-5 mb-5">
                                                <button class="btn btn--white"><i class="far fa-star"></i> Add to favourite</button>
                                                <button class="btn btn--primary"><i class="far fa-home"></i> Home</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============ Team Member Wrapper End =============== -->
        </div>
    </div>
<?php require_once 'inc/footer-dashboard.php'; ?>
<script type="text/javascript" src="https://sdk.monnify.com/plugin/monnify.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>

<script type="text/javascript">

    function goElectricPage2(){
        if($("#disco").val() == '' || $("#meter-no").val() == '' || $("#amount-meter").val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform23').fadeIn();
            $('#servicesform33').hide();
            $('#servicesform4').hide();
        }else{
            $('#servicesform1').hide();
            $('#servicesform23').fadeOut();
            $('#servicesform33').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function goElectricPage1(){
        $('#servicesform1').hide();
        $('#servicesform23').fadeIn();
        $('#servicesform33').fadeOut();
        $('#servicesform4').hide();
    }

    function goCablePage2(){
        if($("#select-cable").val() == '' || $("#cable-number").val() == '' || $("#cable-package").val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform24').fadeIn();
            $('#servicesform3').hide();
            $('#servicesform4').hide();
        }else{
            $('#servicesform1').hide();
            $('#servicesform24').fadeOut();
            $('#servicesform34').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function goCablePage1(){
        $('#servicesform1').hide();
        $('#servicesform24').fadeIn();
        $('#servicesform34').fadeOut();
        $('#servicesform4').hide();
    }

        var fetch_disco = {
            "url": "https://66.175.213.175/api/v1/electricity/discos",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer <?php echo $_SESSION['access_token']; ?>"
            },
        };
    // $.ajax(fetch_disco).done(function(response){
    //     console.log(response);
    // });
    //
    //     // $.ajax(fetch_disco).done(function (response) {
    //     //     console.log("This is the start of discos");
    //     //     console.log(response);
    //     //     console.log("This is the end of discos");
    //     //     const a = response.discos;
    //     //     a.forEach( function(item) {
    //     //         const optionObj = document.createElement("option");
    //     //         optionObj.textContent = item.name + " - "+ item.code;
    //     //         optionObj.value = item.code;
    //     //         document.getElementById("disco").appendChild(optionObj);
    //     //     });
    //     // });



    //var verify_meter = {
    //    "url": "https://66.175.213.175/api/v1/electricity/discos",
    //    "method": "GET",
    //    "timeout": 0,
    //        "headers": {
    //            "Authorization": "Bearer <?php //echo $_SESSION['access_token']; ?>//"
    //    },
    //};

    $.ajax(fetch_disco).done(function (response) {
        console.log(response);
        const a = response.discos;
        a.forEach( function(item) {
            const optionObj = document.createElement("option");
            optionObj.textContent = item.name + " - "+ item.code;
            optionObj.value = item.code;
            document.getElementById("disco").appendChild(optionObj);
        });
    });

    function fetch_bundle(network) {
        var fetchData = {
            "url": "https://66.175.213.175/api/v1/data/list?network="+network,
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer <?php echo $_SESSION['access_token']; ?>",
                "Content-Type": "application/json"
            },
            // "data": JSON.stringify({
            //     "network": network,
            // }),
        };

        $.ajax(fetchData).done(function (response) {
            console.log(response);
            const a = response.data;
            a.forEach( function(item) {
                const optionObj = document.createElement("option");
                optionObj.textContent = item.bundle;
                optionObj.value = item.price;
                document.getElementById("bundle").appendChild(optionObj);
                $("#bundle-plan").val(item.bundle);
            });
        });
    }

    function startActivity(id){
        $("#slider-custom").hide();

        $("#what_to_do").val(id);
        $(".title_real").html("<b>"+id+"</b>");
        if(id == "Buy Airtime"){
            $('#servicesform1').fadeOut();
            $('#servicesform2').fadeIn();
            $('#servicesform3').hide();
            $('#servicesform4').hide();
        }else if(id == "Buy Data"){
            $('#servicesform1').fadeOut();
            $('#servicesform22').fadeIn();
            $('#servicesform32').hide();
            $('#servicesform4').hide();
        }else if(id == "Electricity"){
            $('#servicesform1').fadeOut();
            $('#servicesform23').fadeIn();
            $('#servicesform33').hide();
            $('#servicesform4').hide();
        }else if(id == "Crypto Exchange"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }else if(id == "Airtime To Cash"){
            $('#servicesform1').fadeOut();
            $('#servicesforAirtimeToCash').fadeIn();
        }else if(id == "Referrals"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }else if(id == "TV Subscription"){
            $('#servicesform1').fadeOut();
            $('#servicesform24').fadeIn();
            $('#servicesform34').hide();
            $('#servicesform4').hide();
        }else if(id == "Gift Card Exchange"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }else if(id == "Wallet To Wallet Transfer"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }
    }

    function set_amount(){
        $(".volumer").html($('#amount_volume').val());
    }

    function set_network(){
        $(".networker").html($('#network').val());
        if($("#network").val() == "airtel"){
            $("#airtime-preview").html("<img src='assets/img/airtel-icon.png' class='' width='120' height='auto' />");
        }else if($("#network").val() == "glo"){
            $("#airtime-preview").html("<img src='assets/img/glo-icon.png' class='' width='120' height='auto' />");
        }else if($("#network").val() == "mtn"){
            $("#airtime-preview").html("<img src='assets/img/mtn-icon.png' class='' width='120' height='auto' />");
        }
    }

    function set_phone(){
        $(".foner").html($('#phone_number').val());
    }

    function data_setDataPhone(){
        $(".data-foner").html($("#data-number").val());
    }

    function data_setDataBuddle(){
        $("#bundle-plan").val($("#bundle :selected").text());
        $(".data-bundle").html($("#bundle-plan").val());
    }

    function data_setDataProvider(){
        fetch_bundle($("#network-data").val());
        $(".data-carrier").html($("#network-data").val());
        if($("#network-data").val() == "airtel"){
            $("#network-preview").html("<img src='assets/img/airtel-icon.png' class='' width='120' height='auto' />");
        }else if($("#network-data").val() == "glo"){
            $("#network-preview").html("<img src='assets/img/glo-icon.png' class='' width='120' height='auto' />");
        }else if($("#network-data").val() == "mtn"){
            $("#network-preview").html("<img src='assets/img/mtn-icon.png' class='' width='120' height='auto' />");
        }
    }

    function set_dis(){
        $(".elect-dis").html($("#disco").val());
    }

    function set_meter(){
        checkMeterValidity($("#disco").val(), $("#meter-no").val());
        // $(".elect-meter").html($("#meter-no").val());
    }

    function checkMeterValidity(disco, meter_no){
        $("#meter-checker").html("<small>Validating...</small>");
        var checkerMeter = {
            "url": "https://66.175.213.175/api/v1/electricity/verify",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer <?php echo $_SESSION['access_token']; ?>",
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "disco": disco,
                "meter_number": meter_no
            }),
        };


        $.ajax(checkerMeter).done(function (response) {
            console.log(response);
            if(response.status == 'success') {
                $("#meter-checker").html("<p class='badge badge-info'>" + response.name + ", " + response.address + "</p>");
                return;
            }else{
                $("#meter-checker").html("<p class='badge badge-danger'>" + response.message + "</p>");
                return;
            }
        });
    }

    function set_disco_amount(){
        $(".amount-meter").html($("#amount-meter").val());
    }

    function set_cable() {
    }

    function selectCablePackage() {
        $(".cable-plan-title").html($("#cable-package").val());
        $(".cable-type-title").html( $("#cable-package :selected").text() );
    }

    function set_cable_number(){
        checkTvValidity($("#select-cable").val(), $("#cable-number").val());
        $(".bouquet-title").html($("#cable-number").val());
    }

    function checkTvValidity(cable_bouquet, cable_number){
        $("#cable-checker").html("<small>Please wait, checking...</small>");
        var settings = {
            "url": "https://66.175.213.175/api/v1/tv/verify",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer <?php echo $_SESSION['access_token']; ?>",
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "type": cable_bouquet,
                "card_number": cable_number
            }),
        };

        $.ajax(settings).done(function (response) {
            console.log(response);
            if(response.status == 'success') {
                $("#cable-checker").html("<p class='badge badge-info'>" + response.data.customerName +"</p>");
                const a = response.data.product;
                a.forEach( function(item) {
                    const optionObj = document.createElement("option");
                    optionObj.textContent = item.name +" - "+ item.code;
                    optionObj.value = item.price;
                    document.getElementById("cable-package").appendChild(optionObj);
                });
                return;
            }else{
                $("#cable-checker").html("<p class='badge badge-info'>" + response.message + "</p>");
                return;
            }
        });
    }

    function goServiceFormThree(){
        if($('#amount_volume').val() == '' || $('#network').val() == '' || $('#phone_number').val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform2').fadeIn();
            $('#servicesform3').hide();
            $('#servicesform4').hide();
        }else{
            $('#servicesform1').hide();
            $('#servicesform2').fadeOut();
            $('#servicesform3').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function goFormSecondData(){
        if($('#data-number').val() == '' || $('#buddle').val() == '' || $('#network-data').val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform22').fadeIn();
            $('#servicesform32').hide();
            $('#servicesform4').hide();
        }else{
            $(".data-bundle").html($("#buddle").val());
            $('#servicesform1').hide();
            $('#servicesform22').fadeOut();
            $('#servicesform32').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function goServiceForm4(){
        $('#servicesform1').hide();
        $('#servicesform2').hide();
        $('#servicesform3').fadeOut();
        $('#servicesform4').fadeIn();
    }

    function goServiceForm1(){
        $('#servicesform1').fadeIn();
        $('#servicesform2').fadeOut();
        $('#servicesform3').hide();
        $('#servicesform22').fadeOut();
        $('#servicesform32').hide();
        $('#servicesform23').fadeOut();
        $('#servicesform33').hide();
        $('#servicesform24').fadeOut();
        $('#servicesform34').hide();
        $('#servicesform4').hide();
        $('#servicesforAirtimeToCash').hide();
    }

    function goServiceForm2(){
        $('#servicesform1').hide();
        $('#servicesform2').fadeIn();
        $('#servicesform3').fadeOut();
        $('#servicesform4').hide();
    }

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 8000); // Change image every 2 seconds
    }

    //wallet funding
    function fundWalletMonnify(id){
        $("#"+id).html("Please wait...");
        if($("#fund-amount").val() == ''){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            swal("Opps!", "Please enter amount", "error");
            return;
        }else{
            MonnifySDK.initialize({
                amount: $("#fund-amount").val(),
                currency: "NGN",
                reference: '' + Math.floor((Math.random() * 1000000000) + 1),
                customerName: "<?php echo $ud->first_name.' '.$ud->last_name; ?>",
                customerEmail: "<?php echo $ud->email; ?>",
                customerMobileNumber: "<?php echo $ud->phone; ?>",
                apiKey: "MK_TEST_RMGCWPDTEV",
                contractCode: "9419486539",
                paymentDescription: "Account funding",
                isTestMode: true,
                paymentMethods: ["CARD", "ACCOUNT_TRANSFER"],
                onComplete: function(response){
                    //Implement what happens when transaction is completed.
                    console.log(response);
                    if(response.status == "SUCCESS"){
                        $.ajax({
                            type:"GET",
                            url: "consumer/methods/fund-wallet.php?reference="+response.transactionReference,
                            dataType : 'json',
                            success: function(response) {
                                console.log(response);
                                $("#"+id).html("Please wait...");
                                swal("Alert!", response.message, 'info');
                                setTimeout(function(){
                                    window.location.reload();
                                }, 5000);
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(data){
                    //Implement what should happen when the modal is closed here
                    console.log(data);
                }
            });
        }
    }
    function fundWalletPaystack(id){
        $("#"+id).html("Please wait...");
        if($("#fund-amount").val() == ''){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            swal("Opps!", "Please enter amount", "error");
            return;
        }else{
            var handler = PaystackPop.setup({
                key: 'pk_test_708f5af5b15e897fb53d03eca0e1130069305391',
                email: "<?php echo $ud->email; ?>",
                amount: $("#fund-amount").val() * 100,
                currency: "NGN",
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            variable_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            value: "<?php echo $ud->phone; ?>"
                        }
                    ]
                },
                callback: function(response){
                    console.log(response);
                    console.log('success. transaction ref is ' + response.reference);
                    if(response.status == "success"){
                        $.ajax({
                            type:"GET",
                            url: "consumer/methods/fund-wallet.php?reference="+response.reference,
                            dataType : 'json',
                            success: function(response) {
                                console.log(response);
                                $("#"+id).html("Please wait...");
                                swal("Alert!", response.message, 'info');
                                setTimeout(function(){
                                    window.location.reload();
                                }, 5000);
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(){
                    alert('window closed');
                }
            });
            handler.openIframe();
        }
    }


    //purchase Airtime
    function purchaseNow(id){
        if (document.getElementById('airtimeOption1').checked) {
            // var payment = "";
        }else{
            var payment = document.getElementById('airtimeOption2').value;
        }
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#amount_volume").val() == ""){
            $("#"+id).html('Pay');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please input amount!", "error");
            return;
        }
        if($("#network").val() == ""){
            $("#"+id).html('Pay');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please select network!", "error");
            return;
        }
        if($("#phone_number").val() == ''){
            $("#"+id).html('Pay');
            swal("Opps!", "Please input phone number", "error");
            return;
        }
        $.ajax({
            type:"POST",
            url: "consumer/methods/airtime-topup.php",
            dataType : 'json',
            data: {
                "amount" : $('#amount_volume').val(),
                "network" : $('#network').val(),
                "phone_number" : $('#phone_number').val(),
                "payment" : payment
            },
            success: function(response) {
                console.log( response );
                // if(response.status == 'success'){
                //     $( '#'+id ).html('Pay');
                //     swal("Successful!", response.message, "success");
                //     setTimeout(function(){
                //         window.location.href = "dashboard.php";
                //     }, 5000);
                // }else{
                //     $( '#'+id ).html('Pay');
                //     swal("Opps!", response.message, 'error');
                // }
                if(response.status == 'success') {
                    $("#servicesform4").show();
                    $("#servicesform1").hide();
                    $("#servicesforAirtimeToCash").hide();
                    $("#servicesform2").hide();
                    $("#servicesform22").hide();
                    $("#servicesform23").hide();
                    $("#servicesform24").hide();
                    $('#status-final').html("Successful");
                    $('#receipt-no-final').html(response.data.reference);
                    $('#phone-number-final').html(response.data.transaction_details.phone_number);
                    $('#service-provider-final').html(response.data.transaction_details.network);
                    $('#bundle-final').html(response.data.transaction_details.bundle);
                    $('#amount-final').html(response.data.amount);
                    $('#date-time-final').html(response.data.created_at);
                    $('#transaction-type-final').html(response.data.type);
                }else{
                    $( '#'+id ).html('Pay');
                    swal("Opps!", response.message, 'error');
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }
            }
        });
    }
    function purchaseNowWithPaystack(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#amount_volume").val() == ""){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please input amount!", "error");
            return;
        }
        if($("#network").val() == ""){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please select network!", "error");
            return;
        }
        if($("#phone_number").val() == ''){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            swal("Opps!", "Please input phone number", "error");
            return;
        }
            var handler = PaystackPop.setup({
                key: 'pk_test_708f5af5b15e897fb53d03eca0e1130069305391',
                email: "<?php echo $ud->email; ?>",
                amount: $("#amount_volume").val() * 100,
                currency: "NGN",
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            variable_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            value: "<?php echo $ud->phone; ?>"
                        }
                    ]
                },
                callback: function(response){
                    console.log(response);
                    console.log('success. transaction ref is ' + response.reference);
                    if(response.status == "success"){
                        $.ajax({
                            type:"POST",
                            url: "consumer/methods/airtime-topup.php",
                            dataType : 'json',
                            data: {
                                "amount" : $('#amount_volume').val(),
                                "network" : $('#network').val(),
                                "phone_number" : $('#phone_number').val(),
                                "payment":"paystack",
                                "online_reference" : response.reference
                            },
                            success: function(response) {
                                if(response.status == 'success') {
                                    $("#servicesform4").show();
                                    $("#servicesform1").hide();
                                    $("#servicesforAirtimeToCash").hide();
                                    $("#servicesform2").hide();
                                    $("#servicesform22").hide();
                                    $("#servicesform23").hide();
                                    $("#servicesform24").hide();
                                    $('#status-final').html("Successful");
                                    $('#receipt-no-final').html(response.data.reference);
                                    $('#phone-number-final').html(response.data.transaction_details.phone_number);
                                    $('#service-provider-final').html(response.data.transaction_details.network);
                                    $('#bundle-final').html(response.data.transaction_details.bundle);
                                    $('#amount-final').html(response.data.amount);
                                    $('#date-time-final').html(response.data.created_at);
                                    $('#transaction-type-final').html(response.data.type);
                                }else{
                                    $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                                    swal("Opps!", response.message, 'error');
                                    setTimeout(function(){
                                        window.location.href = "dashboard.php";
                                    }, 5000);
                                }
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(){
                    $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                    swal('Alert!', 'Transaction stopped!', 'info');
                }
            });
            handler.openIframe();

    }
    function purchaseNowWithMonify(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#amount_volume").val() == ""){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please input amount!", "error");
            return;
        }
        if($("#network").val() == ""){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please select network!", "error");
            return;
        }
        if($("#phone_number").val() == ''){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            swal("Opps!", "Please input phone number", "error");
            return;
        }
        MonnifySDK.initialize({
            amount: $("#amount_volume").val(),
            currency: "NGN",
            reference: Math.floor((Math.random() * 1000000000) + 1),
            customerName: "<?php echo $ud->first_name.' '.$ud->last_name; ?>",
            customerEmail: "<?php echo $ud->email; ?>",
            customerMobileNumber: "<?php echo $ud->phone; ?>",
            apiKey: "MK_TEST_RMGCWPDTEV",
            contractCode: "9419486539",
            paymentDescription: "Account funding",
            isTestMode: true,
            paymentMethods: ["CARD", "ACCOUNT_TRANSFER"],
            onComplete: function(response){
                //Implement what happens when transaction is completed.
                console.log(response);
                if(response.status == "SUCCESS"){
                    $.ajax({
                        type:"POST",
                        url: "consumer/methods/airtime-topup.php",
                        dataType : 'json',
                        data: {
                            "amount" : $('#amount_volume').val(),
                            "network" : $('#network').val(),
                            "phone_number" : $('#phone_number').val(),
                            "payment":"monnify",
                            "online_reference" : response.reference
                        },
                        success: function(response) {
                            if(response.status == 'success') {
                                $("#servicesform4").show();
                                $("#servicesform1").hide();
                                $("#servicesforAirtimeToCash").hide();
                                $("#servicesform2").hide();
                                $("#servicesform22").hide();
                                $("#servicesform23").hide();
                                $("#servicesform24").hide();
                                $('#status-final').html("Successful");
                                $('#receipt-no-final').html(response.data.reference);
                                $('#phone-number-final').html(response.data.transaction_details.phone_number);
                                $('#service-provider-final').html(response.data.transaction_details.network);
                                $('#bundle-final').html(response.data.transaction_details.bundle);
                                $('#amount-final').html(response.data.amount);
                                $('#date-time-final').html(response.data.created_at);
                                $('#transaction-type-final').html(response.data.type);
                            }else{
                                $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                                swal("Opps!", response.message, 'error');
                                setTimeout(function(){
                                    window.location.href = "dashboard.php";
                                }, 5000);
                            }
                        }
                    });
                }else{
                    $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                    swal("Opps!", response.message, "error");
                    return;
                }
            },
            onClose: function(data){
                //Implement what should happen when the modal is closed here
                console.log(data);
            }
        });
    }

    //Data purchasing
    function dataMonnify(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#data-number").val() == ""){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please input recipient number!", "error");
            return;
        }
        if($("#bundle-plan").val() == ""){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please select a plan!", "error");
            return;
        }
        if($("#network-data").val() == ''){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            swal("Opps!", "Please choose a network", "error");
            return;
        }
        if($("#bundle").val() == ''){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            swal("Opps!", "Please select a plan.", "error");
            return;
        }
            MonnifySDK.initialize({
                amount: $("#bundle").val(),
                currency: "NGN",
                reference: Math.floor((Math.random() * 1000000000) + 1),
                customerName: "<?php echo $ud->first_name.' '.$ud->last_name; ?>",
                customerEmail: "<?php echo $ud->email; ?>",
                customerMobileNumber: "<?php echo $ud->phone; ?>",
                apiKey: "MK_TEST_RMGCWPDTEV",
                contractCode: "9419486539",
                paymentDescription: "Account funding",
                isTestMode: true,
                paymentMethods: ["CARD", "ACCOUNT_TRANSFER"],
                onComplete: function(response){
                    //Implement what happens when transaction is completed.
                    console.log(response);
                    if(response.status == "SUCCESS"){
                        $.ajax({
                            type:"POST",
                            url: "consumer/methods/data-purchase.php",
                            dataType : 'json',
                            data: {
                                "phone_number": $('#data-number').val(),
                                "bundle":$('#bundle-plan').val(),
                                "network":$('#network-data').val(),
                                "web_hook_url":"https://env288793hwk.x.pipedream.net/",
                                "payment":"monnify",
                                "online_reference" : response.reference
                            },
                            success: function(response) {
                                if(response.message == 'Transaction successful') {
                                    $("#servicesform4").show();
                                    $("#servicesform1").hide();
                                    $("#servicesforAirtimeToCash").hide();
                                    $("#servicesform2").hide();
                                    $("#servicesform22").hide();
                                    $("#servicesform23").hide();
                                    $("#servicesform24").hide();
                                    $('#status-final').html("Successful");
                                    $('#receipt-no-final').html(response.data.reference);
                                    $('#phone-number-final').html(response.data.transaction_details.phone_number);
                                    $('#service-provider-final').html(response.data.transaction_details.network);
                                    $('#bundle-final').html(response.data.transaction_details.bundle);
                                    $('#amount-final').html(response.data.amount);
                                    $('#date-time-final').html(response.data.created_at);
                                    $('#transaction-type-final').html(response.data.type);
                                }else{
                                    $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                                    $( '#'+id ).html('Pay');
                                    swal("Opps!", response.message, 'error');
                                    setTimeout(function(){
                                        window.location.href = "dashboard.php";
                                    }, 5000);
                                }
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(data){
                    //Implement what should happen when the modal is closed here
                    console.log(data);
                }
            });
    }
    function dataPaystack(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#data-number").val() == ""){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please input recipient number!", "error");
            return;
        }
        if($("#bundle-plan").val() == ""){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Please select a plan!", "error");
            return;
        }
        if($("#network-data").val() == ''){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            swal("Opps!", "Please choose a network", "error");
            return;
        }
        if($("#bundle").val() == ''){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            swal("Opps!", "Please select a plan.", "error");
            return;
        }
        var handler = PaystackPop.setup({
            key: 'pk_test_708f5af5b15e897fb53d03eca0e1130069305391',
            email: "<?php echo $ud->email; ?>",
            amount: $("#bundle").val() * 100,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                        variable_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                        value: "<?php echo $ud->phone; ?>"
                    }
                ]
            },
            callback: function(response){
                console.log(response);
                console.log('success. transaction ref is ' + response.reference);
                if(response.status == "success"){
                    $.ajax({
                        type:"POST",
                        url: "consumer/methods/data-purchase.php",
                        dataType : 'json',
                        data: {
                            "phone_number": $('#data-number').val(),
                            "bundle":$('#bundle-plan').val(),
                            "network":$('#network-data').val(),
                            "web_hook_url":"https://env288793hwk.x.pipedream.net/",
                            "payment":"paystack",
                            "online_reference" : response.reference
                        },
                        success: function(response) {
                            if(response.message == 'Transaction successful') {
                                $("#servicesform4").show();
                                $("#servicesform1").hide();
                                $("#servicesforAirtimeToCash").hide();
                                $("#servicesform2").hide();
                                $("#servicesform22").hide();
                                $("#servicesform23").hide();
                                $("#servicesform24").hide();
                                $('#status-final').html("Successful");
                                $('#receipt-no-final').html(response.data.reference);
                                $('#phone-number-final').html(response.data.transaction_details.phone_number);
                                $('#service-provider-final').html(response.data.transaction_details.network);
                                $('#bundle-final').html(response.data.transaction_details.bundle);
                                $('#amount-final').html(response.data.amount);
                                $('#date-time-final').html(response.data.created_at);
                                $('#transaction-type-final').html(response.data.type);
                            }else{
                                $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                                $( '#'+id ).html('Pay');
                                swal("Opps!", response.message, 'error');
                                setTimeout(function(){
                                    window.location.href = "dashboard.php";
                                }, 5000);
                            }
                        }
                    });
                }else{
                    $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                    swal("Opps!", response.message, "error");
                    return;
                }
            },
            onClose: function(){
                $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                swal('Alert!', 'Transaction stopped!', 'info');
            }
        });
        handler.openIframe();
    }
    function purchaseData(id){
        if (document.getElementById('dataPayOption1').checked) {
            // var payment = "";
        }else{
            var payment = document.getElementById('dataPayOption2').value;
        }
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#data-number").val() == ""){
            $("#"+id).html('Pay');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Select a distribution company!", "error");
            return;
        }
        if($("#bundle-plan").val() == ""){
            $("#"+id).html('Pay');
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input meter number!", "error");
            return;
        }
        if($("#network-data").val() == ''){
            $("#"+id).html('Pay');
            swal("Opps!", "Please enter amount", "error");
            return;
        }
        $.ajax({
            type:"POST",
            url: "consumer/methods/data-purchase.php",
            dataType : 'json',
            data: {
                "phone_number": $('#data-number').val(),
                "bundle":$('#bundle-plan').val(),
                "network":$('#network-data').val(),
                "web_hook_url":"https://env288793hwk.x.pipedream.net/",
                "payment" : payment
            },
            success: function(response) {
                console.log(response);
                $("#"+id).html("Please wait...");
                if(response.message == 'Transaction successful') {
                    $("#servicesform4").show();
                    $("#servicesform1").hide();
                    $("#servicesforAirtimeToCash").hide();
                    $("#servicesform2").hide();
                    $("#servicesform22").hide();
                    $("#servicesform23").hide();
                    $("#servicesform24").hide();
                    $('#status-final').html("Successful");
                    $('#receipt-no-final').html(response.data.reference);
                    $('#phone-number-final').html(response.data.transaction_details.phone_number);
                    $('#service-provider-final').html(response.data.transaction_details.network);
                    $('#bundle-final').html(response.data.transaction_details.bundle);
                    $('#amount-final').html(response.data.amount);
                    $('#date-time-final').html(response.data.created_at);
                    $('#transaction-type-final').html(response.data.type);
                }else{
                    $( '#'+id ).html('Pay');
                    swal("Opps!", response.message, 'error');
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }
            }
        });
    }

    //Electricity purchase
    function electricityMonnify(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#disco").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Select a distribution company!", "error");
            return;
        }
        if($("#meter-no").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input meter number!", "error");
            return;
        }
        if($("#amount-meter").val() == ''){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            swal("Opps!", "Please enter amount", "error");
            return;
        }else{
            MonnifySDK.initialize({
                amount: $("#amount-meter").val(),
                currency: "NGN",
                reference: '' + Math.floor((Math.random() * 1000000000) + 1),
                customerName: "<?php echo $ud->first_name.' '.$ud->last_name; ?>",
                customerEmail: "<?php echo $ud->email; ?>",
                customerMobileNumber: "<?php echo $ud->phone; ?>",
                apiKey: "MK_TEST_RMGCWPDTEV",
                contractCode: "9419486539",
                paymentDescription: "Account funding",
                isTestMode: true,
                paymentMethods: ["CARD", "ACCOUNT_TRANSFER"],
                onComplete: function(response){
                    //Implement what happens when transaction is completed.
                    console.log(response);
                    if(response.status == "SUCCESS"){
                        $.ajax({
                            type:"POST",
                            url: "consumer/methods/buy-electricity.php",
                            dataType : 'json',
                            data: {
                                "disco" : $("#disco").val(),
                                "meter_number" : $("#meter-no").val(),
                                "amount" : $("#amount-meter").val(),
                                "payment":"monnify",
                                "online_reference" : response.transactionReference
                            },
                            success: function(response) {
                                if(response.status == 'success'){
                                    $( '#'+id ).html('Pay');
                                    $("#powerOnSuccess").show();
                                    $("#servicesform1").hide();
                                    $("#servicesforAirtimeToCash").hide();
                                    $("#servicesform2").hide();
                                    $("#servicesform22").hide();
                                    $("#servicesform23").hide();
                                    $("#servicesform24").hide();
                                    $('#power-token').html(response.token);
                                    $('#power-reference').html(response.transaction.reference);
                                    $('#power-amount').html(response.transaction.amount);
                                    $('#power-db').html();
                                    $('#power-date-time').html(response.transaction.created_at);
                                    // swal("Successful!", response.message, "success");
                                    // setTimeout(function(){
                                    //     window.location.href = "dashboard.php";
                                    // }, 5000);
                                }else{
                                    $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                                    swal("Opps!", response.message, 'error');
                                }
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(data){
                    //Implement what should happen when the modal is closed here
                    console.log(data);
                }
            });
        }
    }
    function electricityPaystack(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#disco").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Select a distribution company!", "error");
            return;
        }
        if($("#meter-no").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input meter number!", "error");
            return;
        }
        if($("#amount-meter").val() == ''){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            swal("Opps!", "Please enter amount", "error");
            return;
        }else{
            var handler = PaystackPop.setup({
                key: 'pk_test_708f5af5b15e897fb53d03eca0e1130069305391',
                email: "<?php echo $ud->email; ?>",
                amount: $("#amount-meter").val() * 100,
                currency: "NGN",
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            variable_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            value: "<?php echo $ud->phone; ?>"
                        }
                    ]
                },
                callback: function(response){
                    console.log(response);
                    console.log('success. transaction ref is ' + response.reference);
                    if(response.status == "success"){
                        $.ajax({
                            type:"POST",
                            url: "consumer/methods/buy-electricity.php",
                            dataType : 'json',
                            data: {
                                "disco" : $("#disco").val(),
                                "meter_number" : $("#meter-no").val(),
                                "amount" : $("#amount-meter").val(),
                                "payment":"paystack",
                                "online_reference" : response.reference
                            },
                            success: function(response) {
                                console.log( response );
                                if(response.status == 'success'){
                                    $( '#'+id ).html('Pay');
                                    $("#powerOnSuccess").show();
                                    $("#servicesform1").hide();
                                    $("#servicesforAirtimeToCash").hide();
                                    $("#servicesform2").hide();
                                    $("#servicesform22").hide();
                                    $("#servicesform23").hide();
                                    $("#servicesform24").hide();
                                    $('#power-token').html(response.token);
                                    $('#power-reference').html(response.transaction.reference);
                                    $('#power-amount').html(response.transaction.amount);
                                    $('#power-db').html();
                                    $('#power-date-time').html(response.transaction.created_at);
                                    // swal("Successful!", response.message, "success");
                                    // setTimeout(function(){
                                    //     window.location.href = "dashboard.php";
                                    // }, 5000);
                                }else{
                                    $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                                    swal("Opps!", response.message, 'error');
                                }
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(){
                    $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                    swal('Alert!', 'Transaction ended!', 'info');
                }
            });
            handler.openIframe();
        }
    }
    function purchaseElectricity(id){
        if (document.getElementById('electriOptions1').checked) {
            // var payment = "";
        }else{
            var payment = document.getElementById('electriOptions2').value;
        }
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#disco").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Select a distribution company!", "error");
            return;
        }
        if($("#meter-no").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input meter number!", "error");
            return;
        }
        if($("#amount-meter").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input amount!", "error");
            return;
        }
        var data = {
            "disco" : $("#disco").val(),
            "meter_number" : $("#meter-no").val(),
            "amount" : $("#amount-meter").val(),
            "payment" : payment
        };
        $.ajax({
            type:"POST",
            url: "consumer/methods/buy-electricity.php",
            dataType : 'json',
            data: data,
            success: function(response) {
                console.log( response );
                if(response.status == 'success'){
                    $( '#'+id ).html('Pay');
                    $("#powerOnSuccess").show();
                    $("#servicesform1").hide();
                    $("#servicesforAirtimeToCash").hide();
                    $("#servicesform2").hide();
                    $("#servicesform22").hide();
                    $("#servicesform23").hide();
                    $("#servicesform24").hide();
                    $('#power-token').html(response.token);
                    $('#power-reference').html(response.transaction.reference);
                    $('#power-amount').html(response.transaction.amount);
                    $('#power-db').html();
                    $('#power-date-time').html(response.transaction.created_at);
                    // swal("Successful!", response.message, "success");
                    // setTimeout(function(){
                    //     window.location.href = "dashboard.php";
                    // }, 5000);
                }else{
                    $( '#'+id ).html('Pay');
                    swal("Opps!", response.message, 'error');
                }
            }
        });
    }

    //Cable purchase
    function cableMonnify(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#select-cable").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Select cable", "error");
            return;
        }
        if($("#cable-number").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input cable number!", "error");
            return;
        }
        if($("#cable-package").val() == ''){
            $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
            swal("Opps!", "Please enter amount", "error");
            return;
        }else{
            MonnifySDK.initialize({
                amount: $("#cable-package").val(),
                currency: "NGN",
                reference: '' + Math.floor((Math.random() * 1000000000) + 1),
                customerName: "<?php echo $ud->first_name.' '.$ud->last_name; ?>",
                customerEmail: "<?php echo $ud->email; ?>",
                customerMobileNumber: "<?php echo $ud->phone; ?>",
                apiKey: "MK_TEST_RMGCWPDTEV",
                contractCode: "9419486539",
                paymentDescription: "Account funding",
                isTestMode: true,
                paymentMethods: ["CARD", "ACCOUNT_TRANSFER"],
                onComplete: function(response){
                    //Implement what happens when transaction is completed.
                    console.log(response);
                    if(response.status == "SUCCESS"){
                        $.ajax({
                            type:"POST",
                            url: "consumer/methods/buy-tv.php",
                            dataType : 'json',
                            data: {
                                "bouque" : $("#select-cable").val(),
                                "card_number" : $("#cable-number").val(),
                                "plan" : $("#cable-package").val(),
                                "payment":"monnify",
                                "online_reference" : response.transactionReference
                            },
                            success: function(response) {
                                console.log(response);
                                $("#"+id).html("Please wait...");
                                swal("Alert!", response.message, 'info');
                                setTimeout(function(){
                                    window.location.reload();
                                }, 5000);
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(data){
                    //Implement what should happen when the modal is closed here
                    console.log(data);
                    $("#"+id).html('<img src="assets/img/22.png" width="80px" height="auto" />');
                    swal("Alert!", "Transaction ended!", "info");
                }
            });
        }
    }
    function cablePaystack(id){
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#select-cable").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Select cable", "error");
            return;
        }
        if($("#cable-number").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input cable number!", "error");
            return;
        }
        if($("#cable-package").val() == ''){
            $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
            swal("Opps!", "Please enter amount", "error");
            return;
        }else{
            var handler = PaystackPop.setup({
                key: 'pk_test_708f5af5b15e897fb53d03eca0e1130069305391',
                email: "<?php echo $ud->email; ?>",
                amount: $("#cable-package").val() * 100,
                currency: "NGN",
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            variable_name: "<?php echo $ud->first_name." ".$ud->last_name; ?>",
                            value: "<?php echo $ud->phone; ?>"
                        }
                    ]
                },
                callback: function(response){
                    console.log(response);
                    console.log('success. transaction ref is ' + response.reference);
                    if(response.status == "success"){
                        $.ajax({
                            type:"POST",
                            url: "consumer/methods/buy-tv.php",
                            dataType : 'json',
                            data: {
                                "bouque" : $("#select-cable").val(),
                                "card_number" : $("#cable-number").val(),
                                "plan" : $("#cable-package").val(),
                                "payment":"paystack",
                                "online_reference" : response.reference
                            },
                            success: function(response) {
                                console.log( response );
                                if(response.status == 'success'){
                                    $( '#'+id ).html('Purchase');
                                    swal("Successful!", response.message, "success");
                                    setTimeout(function(){
                                        window.location.href = "dashboard.php";
                                    }, 5000);
                                }else{
                                    $( '#'+id ).html('Purchase');
                                    swal("Opps!", response.message, 'error');
                                }
                            }
                        });
                    }else{
                        $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                        swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function(){
                    $("#"+id).html('<img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" />');
                    swal("Alert!", "Transaction ended!", "info");
                }
            });
            handler.openIframe();
        }
    }
    function purchaseCable(id){
        if (document.getElementById('cablePayOption1').checked) {
            // var payment = "";
        }else{
            var payment = document.getElementById('cablePayOption2').value;
        }
        $("#"+id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if($("#select-cable").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Select cable", "error");
            return;
        }
        if($("#cable-number").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Input cable number!", "error");
            return;
        }
        if($("#cable-package").val() == ""){
            $("#"+id).html("Pay");
            document.getElementById(id).disabled = false;
            swal("Oops!", "Choose a package", "error");
            return;
        }
        var data = {
            "bouque" : $("#select-cable").val(),
            "card_number" : $("#cable-number").val(),
            "plan" : $("#cable-package").val(),
            "payment" : payment
        };
        $.ajax({
            url: "consumer/methods/buy-tv.php",
            type:"post",
            dataType : 'json',
            data: data,
            success: function(response) {
                console.log( response );
                if(response.status == 'success'){
                    $( '#'+id ).html('Pay');
                    swal("Successful!", response.message, "success");
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }else{
                    $( '#'+id ).html('Pay');
                    swal("Opps!", response.message, 'error');
                }
            }
        });
    }

    //Wallet to Wallet Transfer
    function waletToWallet(id){
        if($("#emailer").val() == "" ||  $("#transfer-amount").val() == "" ){
            $( '#'+id ).html('Transfer');
            swal("Alert!", "Field(s) empty!", "error");
            return;
        }else{
            var data = {
                "email": $('#emailer').val(),
                "amount":$('#transfer-amount').val()
            };
            $.ajax({
                type:"POST",
                url: "consumer/methods/walet-to-walet.php",
                dataType : 'json',
                data: data,
                success: function(response) {
                    console.log( response );
                    if(response.status == 'success'){
                        $( '#'+id ).html('Please wait...');
                        swal("Alert!", response.message, "info");
                        setTimeout(function(){
                            window.location.href = "dashboard.php";
                        }, 5000);
                    }else{
                        $( '#'+id ).html('Transfer');
                        swal("Alert!", response.message, 'error');
                        setTimeout(function(){
                            window.location.href = "dashboard.php";
                        }, 5000);
                    }
                }
            });
        }
    }

//Airtime to Cash
function airtimetocash(id){
    $("#"+id).html("Please wait...");
    document.getElementById(id).disabled = true;
    if($("#ac-phone_number").val() == "" ||  $("#ac-network").val() == "" ||  $("#ac-amount").val() == ""){
        $( '#'+id ).html('Convert');
        document.getElementById(id).disabled = false;
        swal("Alert!", "Field(s) empty!", "error");
        return;
    }else{
        $.ajax({
            type:"POST",
            url: "consumer/methods/airtime-to-cash.php",
            dataType : 'json',
            data: {
                "phone_number" :$('#ac-phone_number').val(),
                "network" :$('#ac-network').val(),
                "amount" :$('#ac-amount').val()
            },
            success: function(response) {
                console.log( response );
                if(response.status == 'success'){
                    $( '#'+id ).html('Please wait...');
                    swal("Alert!", response.message, "info");
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }else{
                    $( '#'+id ).html('Convert');
                    document.getElementById(id).disabled = false;
                    swal("Alert!", response.message, 'error');
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }
            }
        });
    }
}
</script>