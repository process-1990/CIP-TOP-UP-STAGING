<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laravel | Table Datatable</title>

    <meta name="description" content="Some description for the page" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://jobie.dexignzone.com/laravel/demo/images/favicon.png">




    <link href="https://jobie.dexignzone.com/laravel/demo/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="https://jobie.dexignzone.com/laravel/demo/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />




    <link href="https://jobie.dexignzone.com/laravel/demo/css/style.css" rel="stylesheet" type="text/css" />



</head>

<body>

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
            <a href="https://jobie.dexignzone.com/laravel/demo/index" class="brand-logo">
                <img class="logo-abbr" src="https://jobie.dexignzone.com/laravel/demo/images/logo.png" alt="">
                <img class="logo-compact" src="https://jobie.dexignzone.com/laravel/demo/images/logo-text.png" alt="">
                <img class="brand-title" src="https://jobie.dexignzone.com/laravel/demo/images/logo-text.png" alt="">

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

        <!--**********************************
            Header start
        ***********************************-->

        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="#" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" />
                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Table Datatable </div>
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
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.5678 26.5202C22.8079 26.5202 23.0447 26.6115 23.2249 26.7856C24.3769 27.8979 26.0572 28.2683 27.551 27.8047C26.5897 25.802 26.4564 23.5075 27.2014 21.383C28.126 18.7398 28.3577 16.0905 27.3055 13.4334C26.381 11.0992 24.5971 9.15994 22.3395 8.05408C22.4784 8.79455 22.5484 9.54903 22.5484 10.3115C22.5484 13.5478 21.304 16.5916 19.0444 18.8823C16.7846 21.1733 13.7553 22.4615 10.5147 22.5097C9.91267 22.5191 9.31331 22.4837 8.72073 22.4056C10.5017 25.5274 13.8606 27.5606 17.5516 27.6153C19.1663 27.6403 20.7166 27.302 22.1604 26.6125C22.2904 26.5503 22.4296 26.5202 22.5678 26.5202Z" fill="#3E4954" />
                                        <path d="M10.541 0.00236249C4.79223 -0.111786 0.0134501 4.53885 -0.000411333 10.2863C-0.00380737 11.6906 0.270302 13.052 0.814361 14.3331C0.822262 14.3517 0.829608 14.3706 0.836262 14.3897C1.58124 16.5142 1.4481 18.8086 0.486678 20.8114C1.98059 21.2748 3.66073 20.9046 4.81275 19.7922C5.09656 19.518 5.5212 19.449 5.8773 19.6192C7.3209 20.3087 8.87143 20.648 10.486 20.6221C16.1898 20.5374 20.6576 16.0085 20.6576 10.3117C20.6576 4.73921 16.1193 0.114501 10.541 0.00236249ZM4.81898 11.8517C3.99305 11.8517 3.32348 11.1832 3.32348 10.3587C3.32348 9.53414 3.99305 8.86568 4.81898 8.86568C5.64492 8.86568 6.31449 9.53414 6.31449 10.3587C6.31442 11.1832 5.64492 11.8517 4.81898 11.8517ZM10.3286 11.8517C9.50268 11.8517 8.8331 11.1832 8.8331 10.3587C8.8331 9.53414 9.50268 8.86568 10.3286 8.86568C11.1545 8.86568 11.8241 9.53414 11.8241 10.3587C11.8241 11.1832 11.1545 11.8517 10.3286 11.8517ZM15.8383 11.8517C15.0124 11.8517 14.3428 11.1832 14.3428 10.3587C14.3428 9.53414 15.0124 8.86568 15.8383 8.86568C16.6642 8.86568 17.3338 9.53414 17.3338 10.3587C17.3338 11.1832 16.6642 11.8517 15.8383 11.8517Z" fill="#3E4954" />
                                    </svg>
                                    <span class="badge light text-white bg-primary rounded-circle">18</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.45251 25.6682C10.0606 27.0357 11.4091 28 13.0006 28C14.5922 28 15.9407 27.0357 16.5488 25.6682C15.4266 25.7231 14.2596 25.76 13.0006 25.76C11.7418 25.76 10.5748 25.7231 9.45251 25.6682Z" fill="#3E4954" />
                                        <path d="M25.3531 19.74C23.8769 17.8785 21.3995 14.2195 21.3995 10.64C21.3995 7.09073 19.1192 3.89758 15.7995 2.72382C15.7592 1.21406 14.5183 0 13.0006 0C11.4819 0 10.2421 1.21406 10.2017 2.72382C6.88095 3.89758 4.60064 7.09073 4.60064 10.64C4.60064 14.2207 2.12434 17.8785 0.647062 19.74C0.154273 20.3616 0.00191325 21.1825 0.240515 21.9363C0.473484 22.6721 1.05361 23.2422 1.79282 23.4595C3.08755 23.8415 5.20991 24.2715 8.44676 24.491C9.84785 24.5851 11.3543 24.64 13.0007 24.64C14.646 24.64 16.1524 24.5851 17.5535 24.491C20.7914 24.2715 22.9127 23.8415 24.2085 23.4595C24.9477 23.2422 25.5268 22.6722 25.7597 21.9363C25.9983 21.1825 25.8448 20.3616 25.3531 19.74Z" fill="#3E4954" />
                                    </svg>
                                    <span class="badge light text-white bg-primary rounded-circle">52</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" width="50" src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" width="50" src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="https://jobie.dexignzone.com/laravel/demo/images/profile/17.jpg" width="20" alt="" />
                                    <div class="header-info">
                                        <span class="text-black">Oda Dink</span>
                                        <p class="fs-12 mb-0">Super Admin</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://jobie.dexignzone.com/laravel/demo/app-profile" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="https://jobie.dexignzone.com/laravel/demo/email-inbox" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="https://jobie.dexignzone.com/laravel/demo/page-login" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <!--**********************************
            Sidebar start
***********************************-->

        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/index">Dashboard</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/search-job">Search Job</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/application">Application</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/profile">Profile</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/companies">Companies</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/statistics">Statistics</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/app-profile">Profile</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/post-details">Post Detail</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/email-compose">Compose</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/email-inbox">Inbox</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/email-read">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/app-calender">Calendar</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/ecom-product-grid">Product Grid</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/ecom-product-list">Product List</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/ecom-product-detail">Product Details</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/ecom-product-order">Order</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/ecom-checkout">Checkout</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/ecom-invoice">Invoice</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/ecom-customers">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-controls-3"></i>
                            <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/chart-flot">Flot</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/chart-morris">Morris</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/chart-chartjs">Chartjs</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/chart-chartist">Chartist</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/chart-sparkline">Sparkline</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/chart-peity">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Bootstrap</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-accordion">Accordion</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-alert">Alert</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-badge">Badge</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-button">Button</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-modal">Modal</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-button-group">Button Group</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-list-group">List Group</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-media-object">Media Object</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-card">Cards</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-carousel">Carousel</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-dropdown">Dropdown</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-popover">Popover</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-progressbar">Progressbar</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-tab">Tab</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-typography">Typography</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-pagination">Pagination</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/ui-grid">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-heart"></i>
                            <span class="nav-text">Plugins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/uc-select2">Select 2</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/uc-nestable">Nestedable</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/uc-noui-slider">Noui Slider</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/uc-sweetalert">Sweet Alert</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/uc-toastr">Toastr</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/map-jqvmap">Jqv Map</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/uc-lightgallery">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="https://jobie.dexignzone.com/laravel/demo/widget-basic" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/form-element">Form Elements</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/form-wizard">Wizard</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/form-editor-summernote">Summernote</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/form-pickers">Pickers</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/form-validation-jquery">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-network"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/table-bootstrap-basic">Bootstrap</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/table-datatable-basic">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/page-register">Register</a></li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/page-login">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/page-error-400">Error 400</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/page-error-403">Error 403</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/page-error-404">Error 404</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/page-error-500">Error 500</a></li>
                                    <li><a href="https://jobie.dexignzone.com/laravel/demo/page-error-503">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="https://jobie.dexignzone.com/laravel/demo/page-lock-screen">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="copyright">
                    <p><strong>Jobie Dashboard</strong> © All Rights Reserved</p>
                    <p>Made with <span class="heart"></span> by DexignZone</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Gender</th>
                                                <th>Education</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Tiger Nixon</td>
                                                <td>Architect</td>
                                                <td>Male</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/07/25</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/01/12</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Cedric Kelly</td>
                                                <td>Developer</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/03/29</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/11/28</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Brielle Williamson</td>
                                                <td>Specialist</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/12/02</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/08/06</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Rhona Davidson</td>
                                                <td>Integration</td>
                                                <td>Male</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/10/14</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/09/15</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/12/13</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>Female</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/12/19</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Male</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2013/03/03</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/10/16</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/12/18</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/03/17</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/11/27</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Paul Byrd</td>
                                                <td>Financial Officer</td>
                                                <td>Male</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/06/09</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/04/10</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/10/13</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Male</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/09/26</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/09/03</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Yuri Berry</td>
                                                <td>Marketing Officer</td>
                                                <td>Male</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/06/25</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>Male</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/12/12</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/09/20</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Angelica Ramos</td>
                                                <td>Executive Officer</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/10/09</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Female</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/12/22</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/11/14</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>Female</td>
                                                <td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/06/07</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Fiona Green</td>
                                                <td>Operating Officer</td>
                                                <td>Male</td>
                                                <td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/03/11</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="https://jobie.dexignzone.com/laravel/demo/images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Female</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/08/14</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fees Collection</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Roll No</th>
                                                <th>Student Name</th>
                                                <th>Invoice number</th>
                                                <th>Fees Type </th>
                                                <th>Payment Type </th>
                                                <th>Status </th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Tiger Nixon</td>
                                                <td>#54605</td>
                                                <td>Library</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/04/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Garrett Winters</td>
                                                <td>#54687</td>
                                                <td>Library</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2011/07/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Ashton Cox</td>
                                                <td>#35672</td>
                                                <td>Tuition</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/01/12</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Cedric Kelly</td>
                                                <td>#57984</td>
                                                <td>Annual</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/03/29</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Airi Satou</td>
                                                <td>#12453</td>
                                                <td>Library</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2008/11/28</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>Brielle Williamson</td>
                                                <td>#59723</td>
                                                <td>Tuition</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2012/12/02</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>07</td>
                                                <td>Herrod Chandler</td>
                                                <td>#98726</td>
                                                <td>Tuition</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/08/06</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>08</td>
                                                <td>Rhona Davidson</td>
                                                <td>#98721</td>
                                                <td>Library</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/10/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>09</td>
                                                <td>Colleen Hurst</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/09/15</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Sonya Frost</td>
                                                <td>#98734</td>
                                                <td>Tuition</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/13</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Jena Gaines</td>
                                                <td>#12457</td>
                                                <td>Tuition</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/19</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Quinn Flynn</td>
                                                <td>#36987</td>
                                                <td>Library</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2013/03/03</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Charde Marshall</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2008/10/16</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Haley Kennedy</td>
                                                <td>#98754</td>
                                                <td>Library</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/12/18</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>#65248</td>
                                                <td>Annual</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/03/17</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Michael Silva</td>
                                                <td>#75943</td>
                                                <td>Tuition</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2012/11/27</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Paul Byrd</td>
                                                <td>#87954</td>
                                                <td>Library</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/06/09</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>Gloria Little</td>
                                                <td>#98746</td>
                                                <td>Tuition</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/04/10</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>Bradley Greer</td>
                                                <td>#98674</td>
                                                <td>Annual</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/10/13</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Dai Rios</td>
                                                <td>#69875</td>
                                                <td>Tuition</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/09/26</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Jenette Caldwell</td>
                                                <td>#54678</td>
                                                <td>Library</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/09/03</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>Yuri Berry</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/06/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>Caesar Vance</td>
                                                <td>#86754</td>
                                                <td>Tuition</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/12/12</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>Doris Wilder</td>
                                                <td>#34251</td>
                                                <td>Annual</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/09/20</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>Angelica Ramos</td>
                                                <td>#65874</td>
                                                <td>Tuition</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/10/09</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>Gavin Joyce</td>
                                                <td>#54605</td>
                                                <td>Female</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/12/22</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>Jennifer Chang</td>
                                                <td>#54605</td>
                                                <td>Tuition</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/11/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>Brenden Wagner</td>
                                                <td>#45687</td>
                                                <td>Library</td>
                                                <td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2011/06/07</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>Fiona Green</td>
                                                <td>#23456</td>
                                                <td>Tuition</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/03/11</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>Shou Itou</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2011/08/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Patient</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                                        <label class="custom-control-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>Order ID</th>
                                                <th>Date Check in</th>
                                                <th>Name</th>
                                                <th>Assgined</th>
                                                <th>Disease</th>
                                                <th>Status</th>
                                                <th>Table no</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                                        <label class="custom-control-label" for="customCheckBox2"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00001</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Tiger Nixon</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-001</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                                                        <label class="custom-control-label" for="customCheckBox3"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00002</td>
                                                <td>28/02/2020, 12:42 AM</td>
                                                <td>Garrett Winters</td>
                                                <td>Dr. Cedric</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-002</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                                                        <label class="custom-control-label" for="customCheckBox4"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00003</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-success">
                                                        <i class="fa fa-circle text-success mr-1"></i>
                                                        Recovered
                                                    </span>
                                                </td>
                                                <td>AB-003</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
                                                        <label class="custom-control-label" for="customCheckBox5"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00004</td>
                                                <td>29/02/2020, 12:42 AM</td>
                                                <td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-004</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox6" required="">
                                                        <label class="custom-control-label" for="customCheckBox6"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00005</td>
                                                <td>28/02/2020, 12:42 AM</td>
                                                <td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-005</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox7" required="">
                                                        <label class="custom-control-label" for="customCheckBox7"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00006</td>
                                                <td>28/02/2020, 12:42 AM</td>
                                                <td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-006</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox8" required="">
                                                        <label class="custom-control-label" for="customCheckBox8"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00007</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-007</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox9" required="">
                                                        <label class="custom-control-label" for="customCheckBox9"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00008</td>
                                                <td>29/02/2020, 12:42 AM</td>
                                                <td>Airi Satou</td>
                                                <td>Dr. Garrett </td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-008</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox10" required="">
                                                        <label class="custom-control-label" for="customCheckBox10"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00009</td>
                                                <td>25/02/2020, 12:42 AM</td>
                                                <td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-009</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox11" required="">
                                                        <label class="custom-control-label" for="customCheckBox11"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00010</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-010</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox12" required="">
                                                        <label class="custom-control-label" for="customCheckBox12"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00011</td>
                                                <td>28/02/2020, 12:42 AM</td>
                                                <td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-011</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox13" required="">
                                                        <label class="custom-control-label" for="customCheckBox13"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00012</td>
                                                <td>29/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-012</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox14" required="">
                                                        <label class="custom-control-label" for="customCheckBox14"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00013</td>
                                                <td>25/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-013</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox15" required="">
                                                        <label class="custom-control-label" for="customCheckBox15"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00014</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-014</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox16" required="">
                                                        <label class="custom-control-label" for="customCheckBox16"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00015</td>
                                                <td>28/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-015</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox17" required="">
                                                        <label class="custom-control-label" for="customCheckBox17"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00016</td>
                                                <td>29/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-016</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox18" required="">
                                                        <label class="custom-control-label" for="customCheckBox18"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00017</td>
                                                <td>25/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-017</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox19" required="">
                                                        <label class="custom-control-label" for="customCheckBox19"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00018</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-018</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox20" required="">
                                                        <label class="custom-control-label" for="customCheckBox20"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00019</td>
                                                <td>28/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger mr-1"></i>
                                                        New Patient
                                                    </span>
                                                </td>
                                                <td>AB-019</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox21" required="">
                                                        <label class="custom-control-label" for="customCheckBox21"></label>
                                                    </div>
                                                </td>
                                                <td>#P-00020</td>
                                                <td>25/02/2020, 12:42 AM</td>
                                                <td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning mr-1"></i>
                                                        In Treatment
                                                    </span>
                                                </td>
                                                <td>AB-020</td>
                                                <td>
                                                    <div class="dropdown ml-auto text-right">
                                                        <div class="btn-link" data-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="https://jobie.dexignzone.com/laravel/demo/vendor/global/global.min.js" type="text/javascript"></script>
    <script src="https://jobie.dexignzone.com/laravel/demo/vendor/bootstrap-datetimepicker/js/moment.js" type="text/javascript"></script>
    <script src="https://jobie.dexignzone.com/laravel/demo/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="https://jobie.dexignzone.com/laravel/demo/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="https://jobie.dexignzone.com/laravel/demo/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://jobie.dexignzone.com/laravel/demo/js/plugins-init/datatables.init.js" type="text/javascript"></script>
    <script src="https://jobie.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
    <script src="https://jobie.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script>
    <!--		<script src="https://jobie.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
			<script src="https://jobie.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script> -->
    <!--	
 	-->
</body>

</html>