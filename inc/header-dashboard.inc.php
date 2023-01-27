<?php
require_once("consumer/controller.php");
$config = include('config.php');

if(isset($_COOKIE["access_token"]) || !empty($_COOKIE["access_token"]) || $_COOKIE["access_token"] == ''){
    $url = $config["base_url"]."/api/auth/user-profile";
    $url2 = $config["base_url"]."/api/auth/logout";
    $url3 = $config["base_url"]."/api/v1/user/transactions?page=null";
    $classer = new CurlHelper();
    $userDetails = $classer->fetch_user_details($_COOKIE["access_token"], $url);
    $userTrans = $classer->fetch_user_transaction($_COOKIE["access_token"], $url3);
    $ud = $userDetails->data;
    if(empty($ud)){
        unset($_COOKIE["access_token"]);
        session_destroy();
        header('Location: sign-in.php');
    }
}else{
    unset($_COOKIE["access_token"]);
    session_destroy();
    header('Location: index.php');
}
//print_r($userTrans->transactions->data);
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CiP Topup - <?php echo ucfirst($ud->last_name).' '.ucfirst($ud->first_name); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- <link rel="icon" href="assets/images/favicon.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/41.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <!--    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">-->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Family CSS -->
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/vendor/linea-icons.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate-text.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style type="text/css">
    .header-bottom-wrap {
        background-color: #fdfbfb;
    }

    .header-area .is-sticky {
        background-color: #fdfbfb;
    }

    .footer-area {
        background-color: #7397BA;
        color: #ffffff;
    }

    .footer-copyright-area {
        background-color: #0C4A86;
        color: #ffffff;
    }

    .infotechno-hero-inner-images {
        height: 650px;
    }

    .col-lg-2 {
        flex: 1 0 16.666667%;
        max-width: 52.666667%;
    }

    .font-weight--reguler {
        color: #0A335C;
        font-weight: 900;
    }

    .con_name {
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .ht-btn-custom {
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
    }

    .item-custom {
        background-color: #CFE5FB;
    }

    .pad-right-0 {
        padding-right: 0px;
    }

    .pad-left-0 {
        padding-left: 0px;
    }

    .infotechno-hero-inner-images {
        height: 650px;
    }

    .img-trans-container {
        margin: auto 0px;
        text-align: left;
        padding: 0px;
    }

    .trans-btn {
        background-color: #CFE5FB;
        border-radius: 10px;
        width: 100%;
        padding-top: 0px;
        margin-top: 0px;
    }

    .trans-date,
    .trans-amt {
        color: black;
        font-weight: 700;
    }

    .trans-amt:hover {
        color: #ffffff;
    }

    .trans-date:hover {
        color: #ffffff;
    }

    .img-trans-inner {
        margin: auto 0px;
        text-align: left;
    }

    .trans-title {
        padding: 0px;
        font-size: 14px;
    }

    .trans-desc {
        padding: 0px;
        font-size: 10px;
        line-height: 1;
        color: black;
    }

    .side-bar {
        border-right: solid #e6e6e6 2px;
    }

    .transer {
        margin: auto 0px;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (max-width: 767px) {
        .transer {
            width: auto;
        }

        .trans-date {
            display: none;
        }

        .trans-amt {
            font-size: 11px;
        }

        .img-trans-inner,
        .img-trans-container {
            width: auto;
        }

        .col-lg-6-custom {
            width: 50% !important;
        }

        .col-lg-4-custom {
            width: 50% !important;
        }

        .header.default-menu-style .header-right-box {
            flex: 1;
        }

        .header.default-menu-style .header__logo {
            flex: 1;
        }

        .pad-right-0 {
            padding-right: 15px;
        }

        .pad-left-0 {
            padding-left: 15px;
        }

        .infotechno-inner-two {
            z-index: 1;
            position: absolute;
            bottom: 20px;
            right: 0px !important;
            width: 100%;
            text-align: center;
            margin: 0px auto;
        }

        .offset-4 {
            margin-left: 0px;
        }

        .infotechno-hero-inner-images {
            height: 300px;
        }

        .pl-5 {
            padding-left: 0px !important;
        }

        .pr-5 {
            padding-left: 0px !important;
        }

        .pr-5,
        .px-5 {
            padding-right: 0rem !important;
        }

        .px-5 {
            padding-right: 0px !important;
        }

        .pl-5 {
            padding-left: 0px !important;
        }

        .px-5 {
            padding-left: 0px !important;
        }

        .col-lg-2 {
            flex: 1 0 45.666667%;
            max-width: 52.666667%;
        }

        .ht-box-icon.style-01 .icon-box-wrap .content .heading {
            font-size: 14px !important;
        }

        .btn {
            font-size: 12px;
            padding: 0 5px;
        }

        .mt-3,
        .my-3 {
            text-align: center;
        }

        .ht-simple-job-listing .item {
            text-align: center;
        }

        .footer-widget-wrapper {
            text-align: center;
        }

        .footer-widget__logo {
            margin-bottom: 0px !important;
        }

        .footer-widget {
            margin-bottom: 0px !important;
        }

        .text-right {
            text-align: center !important;
        }

        .col-lg-2 {
            flex: 1 0 40.666667% !important;
            max-width: 52.666667% !important;
        }

        .side-bar {
            display: none;
        }

        .ccc {
            max-width: 48% !important;
        }

        .ccc>h5 {
            font-size: 14px !important;
        }

        .servicesformm {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .col-md-6 {
            width: 50% !important;
        }

        .trans-title {
            font-size: 10px;
        }

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (max-width: 1366px) {
        .header-right-box {
            /*text-align: right !important;*/
            flex: 1 !important;
        }

        .infotechno-inner-two {
            z-index: 1;
            position: absolute;
            bottom: 200px;
            right: 50px;
        }

        .infotechno-hero-inner-images {
            height: 420px;
        }

        .infotechno-inner-two {
            z-index: 1;
            position: absolute;
            bottom: 20px;
            right: 30px;
            width: 100%;
            text-align: center;
            margin: 0px auto;
        }
    }
    </style>

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    <div class="header-area header-area--default">

        <!-- Header Top Wrap Start -->
        <div class="header-top-wrap border-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <p class="text-center top-message"><a href="#">Personal</a> | <a href="#">Business</a></p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <p class="text-center top-message"><a href="#">Get Help</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Wrap End -->

        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-sticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header default-menu-style position-relative">

                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header midle box  -->
                            <div class="header-midle-box">
                                <div class="header-bottom-wrap d-md-block d-none">
                                    <div class="header-bottom-inner">
                                        <div class="header-bottom-left-wrap">
                                            <!-- navigation menu -->
                                            <div class="header__navigation d-none d-xl-block">
                                                <nav class="navigation-menu primary--menu">

                                                    <ul>
                                                        <li class=""><a href="index.php"><span>How it works</span></a>
                                                        </li>
                                                        <li class=""><a
                                                                href="<?php echo isset($_COOKIE["access_token"]) ? '#' : 'sign-in.php'; ?>"><span>My
                                                                    Transactions</span></a></li>
                                                        <li class=""><a
                                                                href="<?php echo isset($_COOKIE["access_token"]) ? 'dashboard.php' : 'sign-in.php'; ?>"><span>Accounts</span></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- header right box -->
                            <div class="header-right-box">
                                <div class="header-right-inner" id="hidden-icon-wrapper">
                                    <?php
                                if(isset($_COOKIE["access_token"])) {
                                    ?>
                                    <div class="language-menu">
                                        <ul>
                                            <li>
                                                <a href="#" class="">
                                                    <img class="ls-flag" src="assets/images/team/admin.jpg" alt="en"
                                                        title="English"
                                                        style="width: 40px; height: 40px; border-radius: 50%;">
                                                    <span class="wpml-ls-native">Hi,
                                                        <?php  echo ucfirst($ud->first_name); ?></span>
                                                </a>
                                                <ul class="ls-sub-menu">
                                                    <li class="">
                                                        <a href="dashboard.php" class="">
                                                            Dashboard
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="wallet.php" class="">
                                                            Wallet
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="profile-settings.php" class="">
                                                            Profile Settings
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="">
                                                            Favourite
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="transaction-history.php" class="">
                                                            Transaction History
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="consumer/methods/logout.php" class="">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="hero-button">
                                        <a href="sign-up.php" class="ht-btn ht-btn-xs">Sign Up</a>
                                    </div>
                                    <?php } ?>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                                <!-- hidden icons menu -->
                                <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-ellipsis-h-alt"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->