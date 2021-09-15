
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laravel | Form Wizard</title>
	
	<meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://jobie.dexignzone.com/laravel/demo/images/favicon.png">
	
	
	
	 
						<link href="https://jobie.dexignzone.com/laravel/demo/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
						<link href="https://jobie.dexignzone.com/laravel/demo/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css"/>
				

	
	 
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
                                Form Wizard                            </div>
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Wizard</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form step</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#wizard_Service"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#wizard_Time">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Details">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Payment">
											<span>4</span>
										</a></li>
									</ul>
									<div class="tab-content">
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">First Name*</label>
														<input type="text" name="firstName" class="form-control" placeholder="Parsley" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Last Name*</label>
														<input type="text" name="lastName" class="form-control" placeholder="Montana" required>
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Email Address*</label>
														<input type="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Phone Number*</label>
														<input type="text" name="phoneNumber" class="form-control" placeholder="(+1)408-657-9007" required>
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="form-group">
														<label class="text-label">Where are you from*</label>
														<input type="text" name="place" class="form-control" required>
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Company Name*</label>
														<input type="text" name="firstName" class="form-control" placeholder="Cellophane Square" required>
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Company Email Address*</label>
														<input type="email" class="form-control" id="emial1" placeholder="example@example.com.com" required>
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Company Phone Number*</label>
														<input type="text" name="phoneNumber" class="form-control" placeholder="(+1)408-657-9007" required>
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Your position in Company*</label>
														<input type="text" name="place" class="form-control" required>
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Monday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input1" id="input1">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input2" id="input2">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Tuesday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input3" id="input3">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input4" id="input4">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Wednesday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input5" id="input5">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input6" id="input6">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Thrusday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input7" id="input7">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input8" id="input8">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-md-3 mb-2">
													<h4>Friday *</h4>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="9.00" type="number" name="input9" id="input9">
													</div>
												</div>
												<div class="col-6 col-md-3 mb-2">
													<div class="form-group">
														<input class="form-control" value="6.00" type="number" name="input10" id="input10">
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row emial-setup">
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group">
														<label for="mailclient11" class="mailclinet mailclinet-gmail">
															<input type="radio" name="emailclient" id="mailclient11">
															<span class="mail-icon">
																<i class="mdi mdi-google-plus" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Gmail</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group">
														<label for="mailclient12" class="mailclinet mailclinet-office">
															<input type="radio" name="emailclient" id="mailclient12">
															<span class="mail-icon">
																<i class="mdi mdi-office" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Office</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group">
														<label for="mailclient13" class="mailclinet mailclinet-drive">
															<input type="radio" name="emailclient" id="mailclient13">
															<span class="mail-icon">
																<i class="mdi mdi-google-drive" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Drive</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group">
														<label for="mailclient14" class="mailclinet mailclinet-another">
															<input type="radio" name="emailclient" id="mailclient14">
															<span class="mail-icon">
																<i class="fa fa-question-circle-o"
																	aria-hidden="true"></i>
															</span>
															<span class="mail-text">Another Service</span>
														</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<div class="skip-email text-center">
														<p>Or if want skip this step entirely and setup it later</p>
														<a href="javascript:void(0)">Skip step</a>
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
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/vendor/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/plugins-init/jquery.validate-init.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
				<script src="https://jobie.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script>
		<!--		<script src="https://jobie.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
			<script src="https://jobie.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script> -->
<!--	
 	--></body>
</html>