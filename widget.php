
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laravel | Widget</title>
	
	<meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://jobie.dexignzone.com/laravel/demo/images/favicon.png">
	<link href="https://jobie.dexignzone.com/laravel/demo/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://jobie.dexignzone.com/laravel/demo/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://jobie.dexignzone.com/laravel/demo/css/style.css" rel="stylesheet" type="text/css"/>
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
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
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
												<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
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
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="#" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
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
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
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
								<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
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
								<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
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
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
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
								<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
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
								<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
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
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
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
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
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
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
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
                                Widget                            </div>
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
										<path d="M22.5678 26.5202C22.8079 26.5202 23.0447 26.6115 23.2249 26.7856C24.3769 27.8979 26.0572 28.2683 27.551 27.8047C26.5897 25.802 26.4564 23.5075 27.2014 21.383C28.126 18.7398 28.3577 16.0905 27.3055 13.4334C26.381 11.0992 24.5971 9.15994 22.3395 8.05408C22.4784 8.79455 22.5484 9.54903 22.5484 10.3115C22.5484 13.5478 21.304 16.5916 19.0444 18.8823C16.7846 21.1733 13.7553 22.4615 10.5147 22.5097C9.91267 22.5191 9.31331 22.4837 8.72073 22.4056C10.5017 25.5274 13.8606 27.5606 17.5516 27.6153C19.1663 27.6403 20.7166 27.302 22.1604 26.6125C22.2904 26.5503 22.4296 26.5202 22.5678 26.5202Z" fill="#3E4954"/>
										<path d="M10.541 0.00236249C4.79223 -0.111786 0.0134501 4.53885 -0.000411333 10.2863C-0.00380737 11.6906 0.270302 13.052 0.814361 14.3331C0.822262 14.3517 0.829608 14.3706 0.836262 14.3897C1.58124 16.5142 1.4481 18.8086 0.486678 20.8114C1.98059 21.2748 3.66073 20.9046 4.81275 19.7922C5.09656 19.518 5.5212 19.449 5.8773 19.6192C7.3209 20.3087 8.87143 20.648 10.486 20.6221C16.1898 20.5374 20.6576 16.0085 20.6576 10.3117C20.6576 4.73921 16.1193 0.114501 10.541 0.00236249ZM4.81898 11.8517C3.99305 11.8517 3.32348 11.1832 3.32348 10.3587C3.32348 9.53414 3.99305 8.86568 4.81898 8.86568C5.64492 8.86568 6.31449 9.53414 6.31449 10.3587C6.31442 11.1832 5.64492 11.8517 4.81898 11.8517ZM10.3286 11.8517C9.50268 11.8517 8.8331 11.1832 8.8331 10.3587C8.8331 9.53414 9.50268 8.86568 10.3286 8.86568C11.1545 8.86568 11.8241 9.53414 11.8241 10.3587C11.8241 11.1832 11.1545 11.8517 10.3286 11.8517ZM15.8383 11.8517C15.0124 11.8517 14.3428 11.1832 14.3428 10.3587C14.3428 9.53414 15.0124 8.86568 15.8383 8.86568C16.6642 8.86568 17.3338 9.53414 17.3338 10.3587C17.3338 11.1832 16.6642 11.8517 15.8383 11.8517Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">18</span>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.45251 25.6682C10.0606 27.0357 11.4091 28 13.0006 28C14.5922 28 15.9407 27.0357 16.5488 25.6682C15.4266 25.7231 14.2596 25.76 13.0006 25.76C11.7418 25.76 10.5748 25.7231 9.45251 25.6682Z" fill="#3E4954"/>
										<path d="M25.3531 19.74C23.8769 17.8785 21.3995 14.2195 21.3995 10.64C21.3995 7.09073 19.1192 3.89758 15.7995 2.72382C15.7592 1.21406 14.5183 0 13.0006 0C11.4819 0 10.2421 1.21406 10.2017 2.72382C6.88095 3.89758 4.60064 7.09073 4.60064 10.64C4.60064 14.2207 2.12434 17.8785 0.647062 19.74C0.154273 20.3616 0.00191325 21.1825 0.240515 21.9363C0.473484 22.6721 1.05361 23.2422 1.79282 23.4595C3.08755 23.8415 5.20991 24.2715 8.44676 24.491C9.84785 24.5851 11.3543 24.64 13.0007 24.64C14.646 24.64 16.1524 24.5851 17.5535 24.491C20.7914 24.2715 22.9127 23.8415 24.2085 23.4595C24.9477 23.2422 25.5268 22.6722 25.7597 21.9363C25.9983 21.1825 25.8448 20.3616 25.3531 19.74Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">52</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
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
														<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
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
                                    <img  src="https://jobie.dexignzone.com/laravel/demo/images/profile/17.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black">Oda Dink</span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://jobie.dexignzone.com/laravel/demo/app-profile" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="https://jobie.dexignzone.com/laravel/demo/email-inbox" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="https://jobie.dexignzone.com/laravel/demo/page-login" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
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
        </div>        <!--**********************************
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Widget</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Statistics</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Timeline</h4>
                            </div>
                            <div class="card-body">
                                <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Timeline 2</h4>
                            </div>
                            <div class="card-body">
                                <div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header  border-0 pb-0">
                                <h4 class="card-title">Notifications</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo1" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-danger">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-primary">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Notifications 2</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully <span class="badge badge-warning">Warning</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo <span class="badge light badge-danger">Danger</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-danger">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully <span class="badge light badge-success">Success</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-primary">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time! <span class="badge light badge-success">Success</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Message</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo3" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Alfie Mason <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Jacob Tucker <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-success">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Jack Ronan <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Noah Baldon <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-danger">
													PU
												</div>
												<div class="media-body">
													<h5 class="mb-1">Thomas Grady  <small class="text-muted">02:26 PM</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-primary">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Oscar Weston  <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">To Do List</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo4" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
													<input type="checkbox" class="custom-control-input" id="customCheckBox1" required="">
													<label class="custom-control-label" for="customCheckBox1"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Get up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="custom-control custom-checkbox checkbox-warning check-lg mr-3">
													<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
													<label class="custom-control-label" for="customCheckBox2"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Stand up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
													<input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
													<label class="custom-control-label" for="customCheckBox3"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Don't give up the fight.</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="custom-control custom-checkbox checkbox-info check-lg mr-3">
													<input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
													<label class="custom-control-label" for="customCheckBox4"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Do something else</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
													<input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
													<label class="custom-control-label" for="customCheckBox5"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Get up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="custom-control custom-checkbox checkbox-warning check-lg mr-3">
													<input type="checkbox" class="custom-control-input" id="customCheckBox6" required="">
													<label class="custom-control-label" for="customCheckBox6"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Stand up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Patient</p>
										<h4 class="mb-0">3280</h4>
										<span class="badge badge-primary">+3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-warning text-warning">
										<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="16" y1="13" x2="8" y2="13"></line>
											<line x1="16" y1="17" x2="8" y2="17"></line>
											<polyline points="10 9 9 9 8 9"></polyline>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Bills</p>
										<h4 class="mb-0">2570</h4>
										<span class="badge badge-warning">+3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body  p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-danger text-danger">
										<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
											<line x1="12" y1="1" x2="12" y2="23"></line>
											<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Revenue</p>
										<h4 class="mb-0">364.50K</h4>
										<span class="badge badge-danger">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Patient</p>
										<h4 class="mb-0">364.50K</h4>
										<span class="badge badge-success">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-calendar-1"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Appointment</p>
										<h3 class="text-white">76</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-diamond"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Earning</p>
										<h3 class="text-white">$56K</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-heart"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Patient</p>
										<h3 class="text-white">783K</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-user-7"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Chef</p>
										<h3 class="text-white">$76</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Students</p>
										<h3 class="text-white">3280</h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                        </div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">New Students</p>
										<h3 class="text-white">245</h3>
										<div class="progress mb-2 bg-primary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                        </div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-graduation-cap"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Course</p>
										<h3 class="text-white">28</h3>
										<div class="progress mb-2 bg-primary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                        </div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collect</p>
										<h3 class="text-white">250$</h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                        </div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
										
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">Total Students</h4>
								<h3>3280</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
								</div>
								<small>80% Increase in 20 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">New Students</h4>
								<h3>245</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
								</div>
								<small>50% Increase in 25 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">Total Course</h4>
								<h3>28</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
								</div>
								<small>76% Increase in 20 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">Fees Collection</h4>
								<h3>25160$</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
								</div>
								<small>30% Increase in 30 Days</small>
							</div>
						</div>
                    </div>
										
					
					<div class="col-xl-12 col-lg-12 col-sm-12">
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-primary">
									<div class="card-header border-0 pb-0">
										<h3 class="card-title text-white">Total Students</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 422</h5>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline12"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-warning overflow-hidden">
									<div class="card-header border-0 ">
										<h3 class="card-title text-white">New Students</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 357</h5>
									</div>
									<div class="card-body text-center p-0">
										<div class="ico-sparkline">
											<div id="spark-bar-2"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-secondary">
									<div class="card-header pb-3 border-0 pb-0">
										<h3 class="card-title text-white">Total Course</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 547</h5>
									</div>
									<div class="card-body p-0">
										<div class="px-4"><span class="bar1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgb(255, 255, 255)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                        </div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-danger overflow-hidden">
									<div class="card-header pb-3 border-0 pb-0">
										<h3 class="card-title text-white">Fees Collection</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 3280$</h5>
									</div>
									<div class="card-body p-0">
										<span class="peity-line-2" data-width="100%">7,6,8,7,3,8,3,3,6,5,9,2,8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card">
                            <div class="card-header border-0 pb-0">
								<h2 class="card-title">about me</h2>
							</div>
							<div class="card-body pb-0">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Gender</strong>
										<span class="mb-0">Male</span>
									</li>
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Education</strong>
										<span class="mb-0">PHD</span>
									</li>
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Designation</strong>
										<span class="mb-0">Se. Professor</span>
									</li>
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Operation Done</strong>
										<span class="mb-0">120</span>
									</li>
								</ul>
                            </div>
                            <div class="card-footer pt-0 pb-0 text-center">
                                <div class="row">
									<div class="col-4 pt-3 pb-3 border-right">
										<h3 class="mb-1 text-primary">150</h3>
										<span>Projects</span>
									</div>
									<div class="col-4 pt-3 pb-3 border-right">
										<h3 class="mb-1 text-primary">140</h3>
										<span>Uploads</span>
									</div>
									<div class="col-4 pt-3 pb-3">
										<h3 class="mb-1 text-primary">45</h3>
										<span>Tasks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
					
					<div class="col-xl-8 col-xxl-8 col-lg-12 col-sm-12">
                        <div id="user-activity" class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                <h4 class="card-title">Visitor Activity</h4>
                                <div class="card-action mb-sm-0 my-2">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#user" role="tab">
                                                Day
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
                                                Month
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
                                                Year
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="user" role="tabpanel">
                                        <canvas id="activity" class="chartjs"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="profile-photo">
										<img  src="https://jobie.dexignzone.com/laravel/demo/images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
									</div>
                                    <h3 class="mt-4 mb-1">Deangelo Sena</h3>
                                    <p class="text-muted">Senior Manager</p>
									<a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void()">Folllow</a>
                                </div>
                            </div>
							
                            <div class="card-footer pt-0 pb-0 text-center">
                                <div class="row">
									<div class="col-4 pt-3 pb-3 border-right">
										<h3 class="mb-1">150</h3><span>Follower</span>
									</div>
									<div class="col-4 pt-3 pb-3 border-right">
										<h3 class="mb-1">140</h3><span>Place Stay</span>
									</div>
									<div class="col-4 pt-3 pb-3">
										<h3 class="mb-1">45</h3><span>Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card active_users">
                            <div class="card-header bg-success border-0 pb-0">
                                <h4 class="card-title text-white">Active Users</h4>
                                <span id="counter"></span>
                            </div>
							<div class="bg-success">
								<canvas id="activeUser"></canvas>
							</div>
                            <div class="card-body pt-0">
                                <div class="list-group-flush mt-4">
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0">
                                        <p class="mb-0">Top Active Pages</p>
                                        <p class="mb-0">Active Users</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                                        <p class="mb-0">/bootstrap-themes/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                                        <p class="mb-0">/tags/html5/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                                        <p class="mb-0">/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                                        <p class="mb-0">/preview/falcon/dashboard/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                                        <p class="mb-0">/100-best-themes...all-time/</p>
                                        <p class="mb-0">1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
								<div class="profile-photo">
									<img  src="https://jobie.dexignzone.com/laravel/demo/images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
								</div>
								<h3 class="mt-3 mb-1 text-white">Deangelo Sena</h3>
								<p class="text-white mb-0">Senior Manager</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Gender</span> <strong class="text-muted">Female	</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Years Old</span> 		<strong class="text-muted">Age: 24	</strong></li>
							</ul>
                            <div class="card-footer border-0 mt-0">								
								<button class="btn btn-primary btn-lg btn-block">
									<i class="fa fa-bell-o"></i> Reminder Alarm							
								</button>		
                            </div>
                        </div>
					</div>
					<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Payments Queue</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ward No.</th>
                                                <th scope="col">Patient</th>
                                                <th scope="col">Dr Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Bills</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
												<td>Mr. Bobby</td>
                                                <td>Dr. Jackson</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                                <td>$120</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 </td>
                                                <td>Mr. Dexter</td>
                                                <td>Dr. Charles</td>
												<td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>$540</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03 </td>
                                                <td>Mr. Nathan</td>
                                                <td>Dr. Frederick</td>
												<td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                                <td>$301</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Mr. Aurora</td>
                                                <td>Dr. Roman</td>
												<td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>$099</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
														<div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>Mr. Matthew</td>
                                                <td>Dr. Samantha</td>
												<td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>$520</td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
														<div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
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
					<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
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
					<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
						<div class="card text-white bg-warning text-black">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Regular Checkups</span></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Theodore Handle :</span><strong>Dentist</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Valentino Morose :</span><strong>Surgeon</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Fleece Marigold :</span><strong>Clinical</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Eric Widget :</span><strong>Cardiology</strong></li>
							</ul>
						</div>
					</div>
					
					<div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
						<div class="card">
                            <div class="card-body text-center ai-icon  text-primary">
								<svg id="rocket-icon" class="my-2" viewBox="0 0 24 24" width="80" height="80" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
									<line x1="3" y1="6" x2="21" y2="6"></line>
									<path d="M16 10a4 4 0 0 1-8 0"></path>
								</svg>
								<h4 class="my-2">You don’t have badges yet</h4>
								<a href="javascript:void(0);" class="btn my-2 btn-primary btn-lg px-4"><i class="fa fa-usd"></i> Earn Budges</a>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-12 col-xxl-8 col-sm-12">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Blood pressure</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-primary mb-0">120/89</h3>
											<span>mmHG</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="spark-bar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Heart Rate</h3>
											<span class="text-danger">Above the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-danger mb-0">107</h3>
											<span>Per Min</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="composite-bar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Glucose Rate</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-success mb-0">97</h3>
											<span>mg/dl</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline8"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Clolesterol</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-info mb-0">124</h3>
											<span>mg/dl</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline9" class="height80;"></div>
										</div>
									</div>
								</div>
							</div>
                        </div>
					</div>
					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
								<img  src="https://jobie.dexignzone.com/laravel/demo/images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
								<h3 class="mt-3 mb-0 text-white">Deangelo Sena</h3>
							</div>
                            <div class="card-body">
								<div class="row text-center">
									<div class="col-6">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">Female</h4>
											<small>Patient Gender</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">Age: 24</h4>
											<small>Years Old</small>
										</div>
									</div>
								</div>
                            </div>
							<div class="card-footer mt-0">								
								<button class="btn btn-primary btn-lg btn-block">View Profile</button>		
                            </div>
                        </div>
					</div>
					<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card bg-primary">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-white">Power</h5>
                                        <span class="text-white">2017.1.20</span>
                                    </div>
                                    <div class="col text-right">
                                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                        <span class="text-white">+12.5(2.8%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_1"></canvas>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card bg-success">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-white">Power</h5>
                                        <span class="text-white">2017.1.20</span>
                                    </div>
                                    <div class="col text-right">
                                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                        <span class="text-white">+12.5(2.8%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="chart_widget_5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5>3650</h5>
                                        <span>VIEWS OF YOUR PROJECT</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Latency</h5>
                            </div>
                            <div class="chart-wrapper">
                                <div id="chart_widget_17"></div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h4 class="text-uppercase">74,206 K</h4>
										<span>Lifetime earnings</span>
									</div>
									<div class="col-auto">
										<div class="chart-wrapper height100">
											<canvas id="chart_widget_7"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h5>Lorem Ipsum</h5>
                                            </div>
                                            <div class="col-auto">
                                                <h5>
                                                    <span><i class="fa fa-caret-up"></i></span>
                                                    <span>2,250</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="chart_widget_6"></div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h5>Lorem Ipsum</h5>
                                            </div>
                                            <div class="col-auto">
                                                <h5>
                                                    <span><i class="fa fa-caret-up"></i></span>
                                                    <span>2,250</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_3"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title text-uppercase font-weight-normal">Market Now</h4>
                                <h2 class="font-weight-normal text-danger">
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>3454664</span>
                                </h2>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">APPL</h5>
                                        <span class="text-success">+ 82.24 %</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">FB</h5>
                                        <span class="text-danger">- 12.24 %</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">GOOG</h5>
                                        <span class="text-success">+ 42.24 %</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_4"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title text-uppercase font-weight-normal">Sales Analysis</h4>
                                <h2 class="font-weight-normal text-danger">
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>3454664</span>
                                </h2>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">Today</h5>
                                        <span class="text-success">+ 8224</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">Today</h5>
                                        <span class="text-danger">- 1224</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">Week</h5>
                                        <span class="text-success">+ 4224</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="chart_widget_8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title">Top Products</h4>
							</div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
									<ul class="timeline">
										<li>
											<div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/1.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media mr-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media mr-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
									</ul>	
								</div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_9"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title">Top Products</h4>
							</div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
									<ul class="timeline">
										<li>
											<div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/4.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media mr-2 media-info">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/2.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media mr-2 media-success">
													<img alt="image" width="50"  src="https://jobie.dexignzone.com/laravel/demo/images/avatar/3.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
											</div>
										</li>
									</ul>	
								</div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_10"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-8 col-lg-12">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="card">
									<div class="row no-gutters">
										<div class="col-5 p-0">
											<div class="card-body">
												<h6 class="font-weight-normal text-uppercase">Weekly sales</h6>
												<h4>$ 14000</h4>
												<div>
													<span class="badge badge-light">60%</span>
													<span>Higher</span>
												</div>
											</div>
										</div>
										<div class="col-7 p-0">
											<div class="chart-wrapper">
												<canvas id="chart_widget_11"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>570</h5>
                                        <p>All Sales</p>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_14"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>570</h5>
                                        <p>All Sales</p>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_15"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-4 col-lg-12">
                        <div class="card">
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_16"></canvas>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Sales Status</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 40%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card">
							<div class="social-graph-wrapper widget-facebook">
								<span class="s-icon"><i class="fa fa-facebook"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-right">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card">
							<div class="social-graph-wrapper widget-linkedin">
								<span class="s-icon"><i class="fa fa-linkedin"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-right">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card">
							<div class="social-graph-wrapper widget-googleplus">
								<span class="s-icon"><i class="fa fa-google-plus"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-right">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card">
							<div class="social-graph-wrapper widget-twitter">
								<span class="s-icon"><i class="fa fa-twitter"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-right">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 pl-0 pr-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
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
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/chartist/js/chartist.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/flot/jquery.flot.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/flot/jquery.flot.pie.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/flot/jquery.flot.resize.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/flot-spline/jquery.flot.spline.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/plugins-init/sparkline-init.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/plugins-init/piety-init.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/plugins-init/widgets-script-init.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script>
		<!--		<script src="https://jobie.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
			<script src="https://jobie.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script> -->
<!--	
 	--></body>
</html>