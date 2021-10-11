<?php include('inc/header-new.php'); ?>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->


<?php require_once 'inc/sidebar.php'; ?>
<!--**********************************
            Sidebar end
        ***********************************-->
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <?php
    if(!isset($_COOKIE["user_role"]) || $_COOKIE["user_role"] != "admin" ){ ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-6 col-lg-6">
                <div class="widget-stat card" style="height: 80px;">
                    <div class="row card-body py-2">
                        <div class="col-xl-8">
                            <div class="media ai-icon">
                                <span class="mr-3 bgl-danger text-danger">
                                    <i class="fas fa-wallet"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1" style="font-size: 13px !important; font-weight: bold;">Your Account
                                        Number</p>
                                    <h6 style="font-size: 12px;"><span>Wema Bank: </span><span
                                            style="text-align: right; font-Weight: 800; color: red"><?php echo $ud->account_number ; ?></span>
                                        <!-- <a onclick='generateAcct()'>[ Generate Account ]</a> -->
                                    </h6>
                                    <h6 style="font-size: 12px;"><span>Rolez Microfinance Bank: </span><span
                                            style="text-align: right; font-Weight: 800; color: red"><?php echo $ud->second_account_number; ?></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 justify-content-center align-content-center text-center py-2">
                            <button type="button" class="btn btn-rounded btn-secondary text-white p-1"
                                style="font-size: 11px;"
                                onclick="goto('wallet-funding', 'Fund Wallet', 'fund wallet');">Fund Wallet</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-lg-3">
                <div class="widget-stat card" style="height: 80px;">
                    <div class="card-body  py-3">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-danger text-danger">
                                <i class="fas fa-wallet"></i>
                            </span>
                            <div class="media-body">
                                <p class="mb-1" style="font-size: 11px !important;">Main Balance</p>
                                <h6 class="mb-0">N<?php echo $ud->balance; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-lg-3">
                <div class="widget-stat card" style="height: 80px;">
                    <div class="row card-body py-3">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-danger text-danger">
                                <i class="fas fa-wallet"></i>
                            </span>
                            <div class="media-body">
                                <p class="mb-1" style="font-size: 11px !important;">Bonus Balance</p>
                                <h6 class="mb-0">N<?php echo $ud->commission; ?></h6>
                            </div>
                        </div>
                        <!--<div class="col-xl-8">-->

                        <!--</div>-->
                        <!--<div class="col-xl-4 justify-content-center align-content-center text-center py-2">-->
                        <!--    <button type="button" class="btn btn-rounded btn-secondary text-white" style="font-size: 11px;" onclick="sendToMainAcct(this.id);">Send</button>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-3" id="shortcut">
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-sm-12 mt-2 mb-2">
                <h4>Frequently Used Services</h4>
            </div>
            <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                <div class="widget-stat card" id="transfer" onclick="goto('wallet-to-wallet', '', '');">
                    <div class="card-body p-0">
                        <img src="public/images/transferCip.png" width="100%" height="100%" class="custom-img" />
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                <div class="widget-stat card" onclick="goto('buy-data-form', 'Provider MTN', 'MTN')"
                    style="background-color: #face33;">
                    <div class="card-body p-0">
                        <img src="public/images/mtn.png" width="100%" height="100%" class="custom-img" />
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                <div class="widget-stat card" onclick="goto('buy-data-form', 'Provider Glo', 'Glo');">
                    <div class="card-body p-0">
                        <img src="public/images/glo.png" width="100%" height="100%" class="custom-img" />
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                <div class="widget-stat card" onclick="goto('buy-data-form', 'Provider Airtel', 'Airtel');"
                    style="background-color: #e93f33;">
                    <div class="card-body p-0">
                        <img src="public/images/airtel.png" width="100%" height="100%" class="custom-img" />
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                <div class="widget-stat card" onclick="goto('cable-form', 'Provider DSTV', 'dstv');"
                    style="background-color: #013e5d;">
                    <div class="card-body p-0">
                        <img src="public/images/dstv.png" width="100%" height="100%" class="custom-img" />
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                <div class="widget-stat card" onclick="goto('airtime-to-cash', '', '');">
                    <div class="card-body p-0">
                        <img src="public/images/airtimetocash.png" width="100%" height="100%" class="custom-img" />
                    </div>
                </div>
            </div>
            <!--              <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">-->
            <!--                  <div class="widget-stat card" onclick="goto('cable-form', 'Provider GOTV', 'gotv');">-->
            <!--	<div class="card-body p-0">-->
            <!--		<img src="public/images/gotv.png" width="100%" height="100%" class="custom-img" />-->
            <!--	</div>-->
            <!--</div>-->
            <!--              </div>-->
        </div>
        <div class="row pb-4" id="slider">
            <div class="col-lg-12 p-0">
                <div class="slideshow-container" style="border-radius: 20px !important; display: block;">

                    <div class="mySlides">
                        <!--<div class="numbertext">1 / 2</div>-->
                        <img src="public/images/cip-banner-1.jpg" style="width:100%">
                        <!--<div class="text">Caption Text</div>-->
                    </div>

                    <div class="mySlides fade">
                        <!--<div class="numbertext">2 / 2</div>-->
                        <img src="public/images/cip-banner-2.jpg" style="width:100%">
                        <!--<div class="text">Caption Two</div>-->
                    </div>

                    <div class="mySlides fade">
                        <!--<div class="numbertext">2 / 2</div>-->
                        <img src="public/images/cip-banner-3.png" style="width:100%">
                        <!--<div class="text">Caption Two</div>-->
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <div style="text-align:center margin-top: -40px; display: none;">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
            <div class="col-xl-12">
                <div class="card" style="background-color: #40189D">
                    <!--<div class="card-header">-->
                    <!--    <h4 class="card-title text-white">Data</h4>-->
                    <!--</div>-->
                    <div class="card-body">
                        <ul class="row nav nav-pills mb-4 light">
                            <li class="col-lg-2 col-md-2 col-sm-2 text-center  nav-item">
                                <a href="#navpills-1" class="nav-link active" data-toggle="tab"
                                    aria-expanded="false">Data</a>
                            </li>
                            <li class="col-lg-3 col-md-2 col-sm-2 text-center nav-item">
                                <a href="#navpills-2" class="nav-link" data-toggle="tab"
                                    aria-expanded="false">Airtime</a>
                            </li>
                            <li class="col-lg-2 col-md-2 col-sm-2 text-center nav-item">
                                <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">TV</a>
                            </li>
                            <li class="col-lg-3 col-md-2 col-sm-2 text-center nav-item">
                                <a href="#navpills-4" class="nav-link" data-toggle="tab"
                                    aria-expanded="true">Electricity</a>
                            </li>
                            <li class="col-lg-2 col-md-2 col-sm-2 text-center nav-item">
                                <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="true">Others</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('buy-data-form', 'Provider MTN', 'MTN')"
                                            style="background-color: #face33;">
                                            <div class="card-body p-0">
                                                <img src="public/images/mtn.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('buy-data-form', 'Provider Glo', 'Glo')">
                                            <div class="card-body p-0">
                                                <img src="public/images/glo.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('buy-data-form', 'Provider Airtel', 'Airtel')"
                                            style="background-color: #e93f33;">
                                            <div class="card-body p-0">
                                                <img src="public/images/airtel.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                                        <div class="widget-stat card"
                                            onclick="goto('buy-data-form', 'Provider 9Mobile', '9mobile')"
                                            style="background-color: #e93f33;">
                                            <div class="card-body p-0">
                                                <img src="public/images/9mobile.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card" onclick="goto('ntel', 'Provider Ntel', 'Ntel')"
                                            style="background-color: #e93f33;">
                                            <div class="card-body p-0">
                                                <img src="public/images/ntel.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card" onclick="goto('smile', 'Provider Smile', 'Smile')"
                                            style="background-color: #e93f33;">
                                            <div class="card-body p-0">
                                                <img src="public/images/smile.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('buy-airtime-form', 'Provider MTN', 'MTN')"
                                            style="background-color: #face33;">
                                            <div class="card-body p-0">
                                                <img src="public/images/mtn.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('buy-airtime-form', 'Provider Glo', 'Glo')">
                                            <div class="card-body p-0">
                                                <img src="public/images/glo.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('buy-airtime-form', 'Provider Airtel', 'Airtel')"
                                            style="background-color: #e93f33;">
                                            <div class="card-body p-0">
                                                <img src="public/images/airtel.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-3" class="tab-pane">
                                <div class="row">
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('cable-form', 'Provider DSTV', 'dstv');"
                                            style="background-color: #013e5d;">
                                            <div class="card-body p-0">
                                                <img src="public/images/dstv.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('cable-form', 'Provider GOTV', 'gotv');">
                                            <div class="card-body p-0">
                                                <img src="public/images/gotv.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6">
                                        <div class="widget-stat card"
                                            onclick="goto('cable-form', 'Provider Startimes', 'startimes');">
                                            <div class="card-body p-0">
                                                <img src="public/images/startimes.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-4" class="tab-pane">
                                <div class="row">
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider EKEDC', 'EKEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/eko.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider IKEDC', 'IKEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/ikeja.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider AEDC', 'AEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/aedc.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider KEDCO', 'KEDCO');">
                                            <div class="card-body p-0">
                                                <img src="public/images/kano.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider KAEDC', 'KAEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/kaduna.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider YEDC', 'YEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/yola.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider PHEDC', 'PHEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/phed.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider JEDC', 'JEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/jos.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider IBEDC', 'IBEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/ibadan.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider EEDC', 'EEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/enugu.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card"
                                            onclick="goto('power-form', 'Provider BEDC', 'BEDC');">
                                            <div class="card-body p-0">
                                                <img src="public/images/benin.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-5" class="tab-pane">
                                <div class="row">
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card" onclick="goto('airtime-to-cash', '', '');">
                                            <div class="card-body p-0">
                                                <img src="public/images/airtimetocash.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">-->
                                    <!--                                        <div class="widget-stat card">-->
                                    <!--                                            <div class="card-body p-0">-->
                                    <!--                                                <img src="public/images/cryto.png" width="100%" height="100%"-->
                                    <!--                                                    class="custom-img" />-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card" onclick="goto('wallet-to-wallet', '', '');">
                                            <div class="card-body p-0">
                                                <img src="public/images/transferCip.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6  mb-2">
                                        <div class="widget-stat card">
                                            <div class="card-body p-0">
                                                <img src="public/images/giftcard.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-xxl-2 col-lg-2 col-sm-6 mb-2">
                                        <div class="widget-stat card">
                                            <div class="card-body p-0">
                                                <img src="public/images/referrer.png" width="100%" height="100%"
                                                    class="custom-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form id="buy-data-form" class="row mt-3">
            <div class="col-xl-6 col-xxl-6 offset-3">
                <div class="card" style="background-color: #40189D">
                    <div class="row card-header text-left">
                        <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                        <div class="col-11">
                            <h4 class="card-title text-white trans_id">Provider MTN</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center align-content-middle pb-3">
                                <span class="provider-logo"></span>
                                <h5 class="text-white mt-3">Please provide details:</h5>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" name="data_phone_number" id="data_phone_number"
                                        type="text" placeholder="Mobile number *">
                                    <input type="hidden" class="form-control" name="identifier" id="identifier"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <select class="form-control" id="data-type" name="data-type"
                                        onchange="typeChecker(this.value);" onselect="typeChecker(this.id);">
                                        <option value="">Select Type</option>
                                        <option value="mtn-gifting">MTN GIFTING</option>
                                        <!-- <option value="mtn">MTN SME</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2" id="data-plan-lyt">
                                <div class="form-group">
                                    <select class="form-control" id="data-plan" name="data-plan">
                                        <option value="">Select plan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2" id="data-other-lyt">
                                <div class="form-group">
                                    <select class="form-control" id="data-other" name="data-other">
                                        <option value="">Select plan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <input class="form-control" name="carrier" id="carrier" type="hidden">
                                <div class="row form-group mb-0">
                                    <div class="col-lg-4">
                                        <h6 class="text-white">Recharge from:</h6>
                                    </div>
                                    <div class="col-lg-8 form-group form-inline">
                                        <label class="radio-inline mr-2 text-white" style="font-size: 13px;"><input
                                                type="radio" name="payOption" id="payOption" value="main" class="mr-1"
                                                checked style="height:15px; width:15px; vertical-align: middle;"> Main
                                            Account</label>
                                        <label class="radio-inline mr-1 text-white" style="font-size: 13px;"><input
                                                type="radio" name="payOption" id="payOption" value="bonus" class="mr-1"
                                                style="height:15px; width:15px; vertical-align: middle;"> Bonus
                                            Account</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="card-footer text-center text-white bg-warning" style="cursor: pointer;"
                        id="buyDataBtn">
                        Buy
                    </button>
                </div>
            </div>
        </form>

        <form class="row mt-3" id="buy-airtime-form">
            <div class="col-xl-6 col-xxl-6 offset-3">
                <div class="card" style="background-color: #40189D">
                    <div class="row card-header text-left">
                        <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                        <div class="col-11">
                            <h4 class="card-title text-white trans_id">Provider MTN</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center align-content-middle pb-3">
                                <span class="provider-logo"></span>
                                <h5 class="text-white mt-3">Please provide details:</h5>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <input class="form-control" name="airtime_phone_number" id="airtime_phone_number"
                                        type="text" placeholder="Mobile number *">
                                    <input type="hidden" class="form-control" name="identifier" id="identifier"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2" id="amount-lyt">
                                <div class="form-group">
                                    <input class="form-control" name="amount" id="amount" type="text"
                                        placeholder="Amount *">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <input class="form-control" name="carrier" id="carrier" type="hidden">
                                <div class="row form-group mb-0">
                                    <div class="col-lg-4">
                                        <h6 class="text-white">Recharge from:</h6>
                                    </div>
                                    <div class="col-lg-8 form-group form-inline">
                                        <label class="radio-inline mr-2 text-white" style="font-size: 13px;"><input
                                                type="radio" name="payOption" id="payOption" value="main" class="mr-1"
                                                checked style="height:15px; width:15px; vertical-align: middle;"> Main
                                            Account</label>
                                        <label class="radio-inline mr-1 text-white" style="font-size: 13px;"><input
                                                type="radio" name="payOption" id="payOption" value="bonus" class="mr-1"
                                                style="height:15px; width:15px; vertical-align: middle;"> Bonus
                                            Account</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="card-footer text-center text-white bg-warning" style="cursor: pointer;"
                        id="buyAirtimeBtn">
                        Buy
                    </button>
                </div>
            </div>
        </form>

        <div class="row mt-3" id="cable-form">
            <div class="col-xl-6 col-xxl-6 offset-3">
                <div class="card" style="background-color: #40189D">
                    <div class="row card-header text-left">
                        <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                        <div class="col-11">
                            <h4 class="card-title text-white trans_id">Provider </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center align-content-middle pb-3">
                                <span id="cable-logo"></span>
                                <h5 class="text-white mt-3">Please provide details:</h5>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-1">
                                    <input class="form-control" name="smartCardNo" id="smartCardNo" type="text"
                                        placeholder="SmartCard Number" onkeydown="confirmIUC()" onkeyup="confirmIUC();"
                                        style="display: none;">
                                    <input class="form-control" name="iucnumber" id="iucnumber" type="text"
                                        placeholder="IUC Number" onkeydown="confirmIUC()" onkeyup="confirmIUC();"
                                        style="display: none;">
                                    <input class="form-control" name="st-number" id="st-number" type="text"
                                        placeholder="Startimes Number" onkeydown="confirmST()" onkeyup="confirmST();"
                                        style="display: none;">
                                </div>
                                <div class="bootstrap-badge mb-2">
                                    <a href="javascript:void()"
                                        class="badge badge-rounded badge-outline-light text-white"
                                        id="cable-checker"></a>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <select class="form-control" id="gotv-plan" name="gotv-plan"
                                        onchange="setGotvPrice();" style="display: none">
                                        <option value="">Select plan</option>
                                    </select>
                                    <input type="hidden" name="gotv-plan-code" id="gotv-plan-code"
                                        style="display: none;" />
                                    <select class="form-control" id="dstv-plan" name="dstv-plan"
                                        onchange="setDstvPrice();" style="display: none">
                                        <option value="">Select plan</option>
                                    </select>
                                    <input type="hidden" name="dstv-plan-code" id="dstv-plan-code" />
                                    <select class="form-control" id="st-plan" name="st-plan" onchange="setDstvPrice();"
                                        style="display: none">
                                        <option value="">Select plan</option>
                                    </select>
                                    <input type="hidden" name="st-plan-code" id="st-plan-code" style="display: none;" />
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="row form-group mb-0">
                                    <div class="col-lg-4">
                                        <h6 class="text-white">Recharge from:</h6>
                                    </div>
                                    <div class="col-lg-8 form-group form-inline">
                                        <label class="radio-inline mr-2 text-white" style="font-size: 13px;"><input
                                                type="radio" name="cableOption" id="cableOption" value="main"
                                                class="mr-1" checked
                                                style="height:15px; width:15px; vertical-align: middle;"> Main
                                            Account</label>
                                        <label class="radio-inline mr-1 text-white" style="font-size: 13px;"><input
                                                type="radio" name="cableOption" id="cableOption" value="bonus"
                                                class="mr-1" style="height:15px; width:15px; vertical-align: middle;">
                                            Bonus Account</label>
                                    </div>
                                </div>
                            </div>
                            <input class="form-control" name="cable-type" id="cable-type" type="hidden" placeholder="">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input class="form-control" name="cable-amount" id="cable-amount" type="text"
                                        placeholder="Amount *" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;" id="payCableBtn"
                        onclick="purchaseCable(this.id);">
                        Pay
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3" id="power-form">
            <div class="col-xl-6 col-xxl-6 offset-3">
                <div class="card" style="background-color: #40189D">
                    <div class="row card-header text-left">
                        <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                        <div class="col-11">
                            <h4 class="card-title text-white trans_id">Provider </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center align-content-middle pb-3">
                                <span id="power-logo"></span>
                                <h5 class="text-white mt-3">Please provide details:</h5>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-1">
                                    <input class="form-control" name="distribution-company" id="distribution-company"
                                        type="hidden" placeholder="Distribution Company">
                                    <input class="form-control" name="meterNo" id="meterNo" type="text"
                                        placeholder="Meter Number" onkeydown="confirmMeter()" onkeyup="confirmMeter();">
                                </div>
                                <div class="bootstrap-badge mb-2">
                                    <a href="javascript:void()"
                                        class="badge badge-rounded badge-outline-light text-white"
                                        id="meter-checker"></a>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <select class="form-control" id="power-type" name="power-type">
                                        <option value="Prepaid" selected>Prepaid</option>
                                        <option value="Postpaid">Postpaid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="row form-group mb-0">
                                    <div class="col-lg-4">
                                        <h6 class="text-white">Purchase from:</h6>
                                    </div>
                                    <div class="col-lg-8 form-group form-inline">
                                        <label class="radio-inline mr-2 text-white" style="font-size: 13px;"><input
                                                type="radio" name="powerOption" id="powerOption" value="main"
                                                class="mr-1" checked
                                                style="height:15px; width:15px; vertical-align: middle;"> Main
                                            Account</label>
                                        <label class="radio-inline mr-1 text-white" style="font-size: 13px;"><input
                                                type="radio" name="powerOption" id="powerOption" value="bonus"
                                                class="mr-1" style="height:15px; width:15px; vertical-align: middle;">
                                            Bonus Account</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input class="form-control" name="power-buy-amount" id="power-buy-amount"
                                        type="number" placeholder="Amount *"
                                        onkeyup="powerPurchaseCalculator(this.id);">
                                    <input class="form-control" name="interest-amount" id="interest-amount"
                                        type="hidden" value="100">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-white">Total Amount: (<small>A service charge of N100 is
                                            included)</small></label>
                                    <input class="form-control" name="power-amount" id="power-amount" type="number"
                                        placeholder="Total amount" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;" id="payPowerBtn"
                        onclick="purchasePower(this.id);">
                        Pay
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3" id="airtime-to-cash">
            <div class="col-xl-5 col-xxl-6 offset-1">
                <div class="card" style="background-color: #40189D">
                    <div class="row card-header text-left">
                        <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                        <div class="col-11">
                            <h4 class="card-title text-white trans_id">Airtime to Cash Transaction</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center align-content-middle pb-3">
                                <span><img src="public/images/airtimetocash.png" width="120px" height="auto"
                                        class="custom-img" /></span>
                                <h5 class="text-white mt-3">Please provide details:</h5>
                            </div>
                            <div class="col-lg-6 mb-1">
                                <div class="form-group">
                                    <label class="text-white">Sender's phone number:</label>
                                    <input class="form-control" name="atc-phonenumber" id="atc-phonenumber" type="text"
                                        placeholder="E.G 08012345678">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-1">
                                <div class="form-group">
                                    <label class="text-white">Select network</label>
                                    <select class="form-control" id="atc-carrier" name="atc-carrier"
                                        onchange="setNetworkTransfering()" onselect="setNetworkTransfering()">
                                        <option value="" selected>Select Carrier</option>
                                        <option value="MTN">MTN</option>
                                        <option value="Glo">Glo</option>
                                        <option value="Airtel">Airtel</option>
                                        <option value="9Mobile">9Mobile</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-1">
                                <div class="form-group">
                                    <label class="text-white">Amount</label>
                                    <input class="form-control" name="atc-amount" id="atc-amount" type="text"
                                        placeholder="Input amount *" onkeydown="calculateReturn()"
                                        onkeyup="calculateReturn()">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-1">
                                <div class="form-group">
                                    <label class="text-white">Rate (in %)</label>
                                    <input class="form-control" name="atc-amount" id="atc-amount" type="text" value="20"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-1">
                                <div class="form-group text-center">
                                    <label class="text-white">You Get NGN <span class="roi">0</span></label>
                                </div>
                            </div>


                            <!--                            <div class="col-lg-12 mb-2">-->
                            <!--                                <h5 class="text-white">Bank Details</h5>-->
                            <!--                            </div>-->
                            <!--                            <div class="col-lg-6 mb-2">-->
                            <!--                                <div class="form-group">-->
                            <!--                                    <select class="form-control " id="bank-name" name="bank-name">-->
                            <!--                                        <option selected>Choose</option>-->
                            <!--                                        <option value="access">Access Bank</option>-->
                            <!--                                        <option value="citibank">Citibank</option>-->
                            <!--                                        <option value="diamond">Diamond Bank</option>-->
                            <!--                                        <option value="ecobank">Ecobank</option>-->
                            <!--                                        <option value="fidelity">Fidelity Bank</option>-->
                            <!--                                        <option value="firstbank">First Bank</option>-->
                            <!--                                        <option value="fcmb">First City Monument Bank (FCMB)</option>-->
                            <!--                                        <option value="gtb">Guaranty Trust Bank (GTB)</option>-->
                            <!--                                        <option value="heritage">Heritage Bank</option>-->
                            <!--                                        <option value="keystone">Keystone Bank</option>-->
                            <!--                                        <option value="polaris">Polaris Bank</option>-->
                            <!--                                        <option value="providus">Providus Bank</option>-->
                            <!--                                        <option value="stanbic">Stanbic IBTC Bank</option>-->
                            <!--                                        <option value="standard">Standard Chartered Bank</option>-->
                            <!--                                        <option value="sterling">Sterling Bank</option>-->
                            <!--                                        <option value="suntrust">Suntrust Bank</option>-->
                            <!--                                        <option value="union">Union Bank</option>-->
                            <!--                                        <option value="uba">United Bank for Africa (UBA)</option>-->
                            <!--                                        <option value="unity">Unity Bank</option>-->
                            <!--                                        <option value="wema">Wema Bank</option>-->
                            <!--                                        <option value="zenith">Zenith Bank</option>-->
                            <!--                                    </select>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="col-lg-6 mb-2">-->
                            <!--                                <div class="form-group">-->
                            <!--                                    <input class="form-control" name="account_name" id="account_name" type="text"-->
                            <!--                                        placeholder="Account Name *">-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="col-lg-12 mb-2">-->
                            <!--                                <div class="form-group">-->
                            <!--                                    <input class="form-control" name="account_number" id="account_number" type="text"-->
                            <!--                                        placeholder="Account Number *">-->
                            <!--                                </div>-->
                            <!--                            </div>-->

                        </div>
                    </div>
                    <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;"
                        id="airtimeToCashBtn">
                        Continue
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
                <div class="card">
                    <div class="card-body" style="background-color: #cfcfcf; border-radius: 15px;">
                        <div class="row"
                            style="margin-top: 10px; background-color: #fcfcfc99; padding: 10px 5px; border-radius: 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5>YOU ARE SELLING</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                                <h5>NGN <span class="amtROI">0</span> Airtime</h5>
                            </div>
                        </div>
                        <div class="row"
                            style="margin-top: 10px; background-color: #fcfcfc99; padding: 10px 5px; border-radius: 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5>RATE</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                                <h5>NGN @ 20%</h5>
                            </div>
                        </div>
                        <div class="row"
                            style="margin-top: 10px; background-color: #fcfcfc99; padding: 10px 5px; border-radius: 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5>YOU GET</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                                <h5>NGN <span class="roi">0</span></h5>
                            </div>
                        </div>
                        <hr class="">
                        <div class="row"
                            style="margin-top: 10px; background-color: #fcfcfc99; padding: 10px 5px; border-radius: 15px;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="m-0">Payment Method</p>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 text-left">
                                <h5>Naira</h5>
                            </div>
                        </div>
                        <div class="row"
                            style="margin-top: 10px; background-color: #fcfcfc99; padding: 10px 5px; border-radius: 15px;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="m-0">Available</p>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 text-left">
                                <h5>Instantly</h5>
                            </div>
                        </div>
                        <div class="row"
                            style="margin-top: 10px; background-color: #fcfcfc99; padding: 10px 5px; border-radius: 15px;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="m-0">Purchasing for</p>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 text-left">
                                <h5>Naira Wallet</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3" id="wallet-to-wallet">
            <div class="col-xl-6 col-xxl-6 offset-3">
                <div class="card" style="background-color: #40189D">
                    <div class="row card-header text-left">
                        <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                        <div class="col-11">
                            <h4 class="card-title text-white trans_id">Wallet to Wallet Transfer </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center align-content-middle pb-3">
                                <span><img src="public/images/transferCip.png" width="120px" height="auto"
                                        class="custom-img" /></span>
                                <h5 class="text-white mt-3">Please provide details:</h5>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input class="form-control" name="wtw-email" id="wtw-email" type="text"
                                        placeholder="Recipient email *">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input class="form-control" name="wtw-amount" id="wtw-amount" type="text"
                                        placeholder="Amount to transfer? *">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;" id="wtwBtn"
                        onclick="waletToWallet(this.id);">
                        Transfer
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3" id="wallet-funding">
            <div class="col-xl-6 col-xxl-6 offset-3">
                <div class="card" style="background-color: #40189D">
                    <div class="row card-header text-left">
                        <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                        <div class="col-11">
                            <h4 class="card-title text-white trans_id">Fund Wallet </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center align-content-middle pb-3">
                                <span><img src="public/images/fund-wallet2.png" width="120px" height="auto"
                                        class="custom-img" /></span>
                                <h5 class="text-white mt-3">Please provide details:</h5>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input class="form-control" name="wf-amount" id="wf-amount" type="text"
                                        placeholder="Amount to fund? *">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="row form-group mb-0">
                                <div class="col-lg-4">
                                    <h6 class="text-white">Fund from:</h6>
                                </div>
                                <div class="col-lg-8 form-group form-inline">
                                    <label class="radio-inline mr-2 text-white" style="font-size: 13px;"><input
                                            type="radio" name="fundingOption" id="fundingOption" value="paystack"
                                            class="mr-1" checked
                                            style="height:15px; width:15px; vertical-align: middle;"> Paystack</label>
                                    <label class="radio-inline mr-1 text-white" style="font-size: 13px;"><input
                                            type="radio" name="fundingOption" id="fundingOption" value="monnify"
                                            class="mr-1" style="height:15px; width:15px; vertical-align: middle;">
                                        Monnify</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;" id="fwBtn"
                        onclick="fundWallet(this.id);">
                        Fund
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row" id="airtime-data-confirm">
                    <div class="col-xl-6 col-xxl-6 offset-2">
                        <div class="card text-white bg-primary">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Blood type :</span><strong>O+</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Temperture :</span><strong>34 Degree</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row" id="cable-confirm">
                    <div class="col-xl-6 col-xxl-6 offset-2">
                        <div class="card text-white bg-primary">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Blood type :</span><strong>O+</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Temperture :</span><strong>34 Degree</strong></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

        <div class="row" id="power-confirm">
            <div class="col-xl-6 col-xxl-6 offset-2">
                <div class="card text-white bg-primary">
                    <ul class="list-group list-group-flush">
                        <h5>Transaction Successful</h5>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Your Token
                                :</span><strong id="power-token">Null</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Ref. ID
                                :</span><strong id="power-reference">Null</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Amount Purchase
                                :</span><strong id="power-amount">Null</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Distribution
                                Company :</span><strong id="power-db">Null</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Date/Time
                                :</span><strong id="power-date-time">Null</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-xxl-4 col-lg-4">
                <div class="widget-stat card" style="height: 80px;">
                    <div class="card-body  py-3">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-danger text-danger">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="media-body">
                                <p class="mb-1" style="font-size: 11px !important;">Total Users</p>
                                <h6 class="mb-0">2000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-4 col-lg-4">
                <div class="widget-stat card" style="height: 80px;">
                    <div class="row card-body py-3">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-danger text-danger">
                                <i class="fas fa-money-check-alt"></i>
                            </span>
                            <div class="media-body">
                                <p class="mb-1" style="font-size: 11px !important;">Transaction Today</p>
                                <h6 class="mb-0">N200,502</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-4 col-lg-4">
                <div class="widget-stat card" style="height: 80px;">
                    <div class="row card-body py-3">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-danger text-danger">
                                <i class="fas fa-money-bill"></i>
                            </span>
                            <div class="media-body">
                                <p class="mb-1" style="font-size: 11px !important;">Total Transaction</p>
                                <h6 class="mb-0">N50,000,102</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recently Registered</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-size: 13px;">#</th>
                                        <th scope="col" style="font-size: 13px;">Name</th>
                                        <th scope="col" style="font-size: 13px;">Phone Number</th>
                                        <th scope="col" style="font-size: 13px;">Email</th>
                                        <th scope="col" style="font-size: 13px;">Date Joined</th>
                                        <th scope="col" style="font-size: 13px;">Last Login</th>
                                        <th scope="col" style="font-size: 13px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($userList["users"]["data"] as $users) {
                                        ?>
                                    <tr>
                                        <td style="font-size: 13px;"><?php echo $users['id']; ?></td>
                                        <td style="font-size: 13px;">
                                            <?php echo ucfirst($users['last_name']).' '.ucfirst($users['first_name']); ?>
                                        </td>
                                        <td style="font-size: 13px;"><?php echo $users['phone']; ?></td>
                                        <td style="font-size: 13px;"><strong><?php echo $users['email']; ?></strong>
                                        </td>
                                        <td style="font-size: 13px;">
                                            <?php $dat = explode("T", $users['created_at']); echo $dat[0]; ?></td>
                                        <td style="font-size: 13px;">
                                            <?php $dat = explode("T", $users['updated_at']); echo $dat[0]; ?></td>
                                        <td style="font-size: 13px;"><a
                                                href="fund-user.php?user_email=<?php echo $users['email']; ?>"
                                                class="btn btn-primary btn-xs">Fund User</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-size: 13px;">#</th>
                                        <th scope="col" style="font-size: 13px;">Type</th>
                                        <th scope="col" style="font-size: 13px;">Amount</th>
                                        <th scope="col" style="font-size: 13px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                foreach($userTrans->transactions->data as $trans) {
                                    ?>
                                    <tr>
                                        <td style="font-size: 13px;"><?php echo $trans->id; ?></td>
                                        <td style="font-size: 13px;"><?php echo ucfirst($trans->type); ?></td>
                                        <td style="font-size: 13px;"><strong>#<?php echo $trans->amount; ?></strong>
                                        </td>
                                        <td style="font-size: 13px;">
                                            <?php $dat = explode("T", $trans->created_at); echo $dat[0]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</div>

<?php include('inc/footer-new.php'); ?>