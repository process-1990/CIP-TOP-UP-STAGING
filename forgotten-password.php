
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CiP Topup - <?php //echo ucfirst($ud->last_name).' '.ucfirst($ud->first_name); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="public/css/toastr.min.css" rel="stylesheet" type="text/css" />


    <style type="text/css">
        .header-bottom-wrap {
            background-color: #fdfbfb;
        }

        .header-area .is-sticky {
            background-color: #fdfbfb;
        }

        .footer-area {
            /* background-color: #7397baa3; */
            color: #ffffff;
        }

        .footer-copyright-area {
            background-color: #0C4A86;
            color: #ffffff;
        }

        .infotechno-hero-inner-images {
            height: 650px;
        }

        /*.col-lg-2 {*/
        /*    flex: 1 0 16.666667%;*/
        /*    max-width: 52.666667%;*/
        /*}*/
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

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (max-width: 767px) {
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

            /*.infotechno-inner-two {*/
            /*    z-index: 1;*/
            /*    position: absolute;*/
            /*    bottom: 20px;*/
            /*    right: 0px !important;*/
            /*    width: 100%;*/
            /*    text-align: center;*/
            /*    margin: 0px auto;*/
            /*}*/
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
                font-size: 12px !important;
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

        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (max-width: 1366px) {
            .header-right-box {
                /*text-align: right !important;*/
                flex: 1 !important;
            }

            /*.infotechno-inner-two {*/
            /*    z-index: 1;*/
            /*    position: absolute;*/
            /*    bottom: 200px;*/
            /*    right: 50px;*/
            /*}*/
            .infotechno-hero-inner-images {
                height: 420px;
            }

            /*.infotechno-inner-two {*/
            /*    z-index: 1;*/
            /*    position: absolute;*/
            /*    bottom: 20px;*/
            /*    right: 30px;*/
            /*    width: 100%;*/
            /*    text-align: center;*/
            /*    margin: 0px auto;*/
            /*}*/
        }
    </style>
    <style type="text/css">
        /*.col-lg-2 {*/
        /*    flex: 1 0 16.666667%;*/
        /*    max-width: 52.666667%;*/
        /*}*/
        #input_containerer {
            position: relative;
            padding: 0 0 0 20px;
            margin: 0 20px;
            background: #ddd;
            direction: rtl;
            width: 200px;
        }

        #inputer {
            height: 20px;
            margin: 0;
            padding-right: 30px;
            width: 100%;
        }

        .input_btn {
            position: absolute;
            bottom: 2px;
            right: 5px;
            width: 24px;
            height: 33px;
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
<div class="header-area header-area--default d-none">

    <!-- Header Top Wrap Start -->
    <div class="header-top-wrap border-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 text-left">
                    <p class="text-center top-message"><i class="fas fa-envelope text-danger"></i> :
                        info@ciptopup.com | <i class="fas fa-phone text-danger"></i> : 09137574484 | <i
                            class="fab fa-instagram text-danger"></i> : cip.topup | <a
                            href="https://wa.link/46ud2o"><i class="fab fa-whatsapp text-danger"></i> :
                            09137574484</a></p>
                </div>
                <div class="col-lg-6 text-right">
                    <!--                    <p class="text-center top-message"><i class="fas fa-phone"></i> : <b>09137574484</b> | <a href="https://wa.link/46ud2o"><i class="fab fa-whatsapp"></i> : <b>09137574484</b></a></p>-->
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
                                                            href="<?php echo isset($_COOKIE["access_token"]) ? '#' : 'transaction-history.php'; ?>"><span>My
                                                                    Transactions</span></a></li>
                                                    <li class=""><a
                                                            href="<?php echo isset($_COOKIE["access_token"]) ? 'dashboard.php' : 'dashboard.php'; ?>"><span>Accounts</span></a>
                                                    </li>
                                                    <li class=""><a href="#"><span>Help</span></a></li>
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
                                                        <a href="#" class="">
                                                            Wallet
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="">
                                                            Account
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="">
                                                            Favourite
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="">
                                                            Profile Settings
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
                                    <div class="hero-button p-4">
                                        <a href="sign-in.php" class="ht-btn-custom ht-btn-xs">Sign In</a>
                                    </div>
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

<div class="row h-screen bg-blue m-0 p-0">
    <div class="business-solution-form-wrap col-lg-4 col-md-4 px-16 align-middle">
        <div class="py-20">
            <div class="contact-title text-left section-space--mb_20">
                <div class="">
                    <a href="index.php">
                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="contact-form__two " id="resetForm">
                <p class="font-bold text-1x2 text-left my-3">Input your password here to reset:</p>
                <div class="contact-inner">
                    <input name="email" id="email" type="email" placeholder="Input registered email *">
                </div>
                <div class="comment-submit-btn text-left">
                    <button class="ht-btn ht-btn-md" type="button" id="resetBtn">Send Link</button>
                    <p class="form-messege"></p>
                </div>
                <div class="contact-inner text-left pt-5">
                    <p><a href="sign-in.php">Have an account? Sign in here</a></p>
                </div>
            </div>
            <div class="contact-form__two py-20 hidden" id="confirmResetForm">

            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 d-none d-sm-block d-sm-none d-md-block flex justify-center align-middle py-8"
         style="background-color: #0A335C;">
        <img class="img-fluid" src="assets/images/logo/42.png" alt="">
    </div>
</div>
<?php 
    require_once 'inc/footer2-dashboard.php';
    $config = include('config.php');
?>
<script type="text/javascript">
$(document).ready(function() {
    $('#resetBtn').on("click", function() {
        $('#resetBtn').html('Please wait...');
        document.getElementById("resetBtn").disabled = true;
        var settings = {
            "url": <?php $config["base_url"]; ?> + "/api/auth/password/forget",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "email": $('#email').val()
            }),
        };
        $.ajax(settings).done(function (response) {
            console.log(response);
            if(response.status=="success"){
                $("#resetForm").hide();
                $("#confirmResetForm").html('<p class="text-2xl font-light py-8">A link has been sent to <span class="font-italic font-bold">'+$("#email").val()+'</span>. Click on the link or copy to the browser address bar to continue.</p><a href="index.php" class="ht-btn ht-btn-md">Go home</a>');
                $("#confirmResetForm").show();
            }else{
                $('#resetBtn').html('Send Link');
                document.getElementById("resetBtn").disabled = false;
                swal("Opps!", response.message, 'error');
            }
        });
    });
});
</script>