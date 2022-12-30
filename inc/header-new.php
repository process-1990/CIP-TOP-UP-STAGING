<?php
require_once("consumer/controller.php");

if(isset($_COOKIE["access_token"]) || !empty($_COOKIE["access_token"]) || $_COOKIE["access_token"] == '' || isset($_COOKIE["user_role"]) || !empty($_COOKIE["user_role"]) || $_COOKIE["user_role"] != ""){
    $url = "https://api.ciptopup.ng/api/auth/user-profile";
    $url2 = "https://api.ciptopup.ng/api/auth/logout";
    $url3 = "https://api.ciptopup.ng/api/v1/user/transactions?page=null";
    $classer = new CurlHelper();
    $userDetails = $classer->fetch_user_details($_COOKIE["access_token"], $url);
    $userTrans = $classer->fetch_user_transaction($_COOKIE["access_token"], $url3);
    $ud = $userDetails->data;
    if(empty($ud)){
        unset($_COOKIE["access_token"]);
        session_destroy();
        header('Location: sign-in.php');
    }
    $allUser = $classer->FetchAllUser($_COOKIE["access_token"], '66.175.213.175/api/v1/admin/users/all');
    $userList = json_decode($allUser, true);

    $allUserTransaction = $classer->fetch_all_user_transaction($_COOKIE["access_token"], '66.175.213.175/api/v1/admin/transactions/all');
//    var_dump($allUserTransaction['transactions']['data']);
//    return;

    $allBundle = $classer->FetchAllBundle($_COOKIE["access_token"], '66.175.213.175/api/v1/admin/data/plans');
    $bundleList = json_decode($allBundle, true);
//    var_dump($bundleList['data']['data']);
//    return;
}else{
    unset($_COOKIE["access_token"]);
    session_destroy();
    header('Location: index.php');
}
//print_r($userTrans->transactions->data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CIP Topup <?php echo "- ".ucfirst($ud->last_name).' '.ucfirst($ud->first_name); ?></title>

    <meta name="description" content="Some description for the page" />

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MQD9CH4');</script>
<!-- End Google Tag Manager -->




    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/41.png">
    <link href="public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="public/css/toastr.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



    <style type="text/css">
    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

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
    /*  background-color: #717171;*/
    /*}*/

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }






    .custom-img {
        border-radius: 20px;
        box-shadow: 2px 1px 1px 2px #ece4e4;
        /* padding: 15px; */
    }

    .custom-img-2 {
        border-radius: 20px;
        box-shadow: 2px 1px 1px 2px #ece4e4;
    }

    .card {
        cursor: pointer !important;
    }

    @media (max-width:700px) {
        .col-sm-6 {
            width: 50% !important;
        }

        .px-16 {
            padding-right: 2em !important;
            padding-left: 2em !important;
        }

        .col-xl-8 {
            width: 70% !important;
        }

        .col-xl-4 {
            width: 30% !important;
        }

        .offset-3,
        .offset-2 {
            margin: 0px;
        }

        .col-sm-2 {
            width: 33.33% !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

    }
    </style>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQD9CH4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="dashboard.php" class="brand-logo">
                <!-- <img class="logo-abbr" src="public/images/logo-dark.png" alt=""> -->
                <!-- <img class="logo-compact" src="public/images/logo-text.png" alt="">
                <img class="brand-title" src="public/images/logo-text.png" alt=""> -->
                <p style="font-size: 24px;">CIP Topup</p>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <div class="input-group search-area d-lg-inline-flex d-none">
                                    <input type="text" class="form-control" placeholder="Search something here...">
                                    <div class="input-group-append">
                                        <button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="public/images/avatar.png" width="20" alt="" />
                                    <div class="header-info">
                                        <span class="text-black"><?php  echo ucfirst($ud->first_name); ?></span>
                                        <p class="fs-12 mb-0">Customer</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="profile-settings.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="consumer/methods/logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>