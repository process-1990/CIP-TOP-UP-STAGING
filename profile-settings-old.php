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
                                
                                <!-- Airtime Topup Page -->
                                <div class="col-12" id="servicesform2" >
                                    <div class="feature-list__one" style="background-color: #f1ffff; border-radius: 20px; padding-bottom: 20px;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30" style="border-bottom: solid 2px #0A335C;">
                                                    <h5 class="heading"><i class="far fa-user-cog fa-3"></i> <span class="text-color-primary title_real">Profile Settings</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2">
                                                <div class="m-auto">
                                                    <div class="row contact-form__two">
                                                        <div class="col-6 contact-inner">
                                                            <input name="email" id="email" type="email" value="<?php echo $ud->email; ?>" disabled>
                                                        </div>
                                                        <div class="col-6 contact-inner">
                                                            <input name="pword" id="pword" type="password" value="*****************************">
                                                        </div>
                                                        <div class="col-12 contact-inner">
                                                            <input name="phone" id="phone" type="number" value="<?php echo $ud->phone; ?>" disabled>
                                                        </div>
                                                        <div class="col-6 contact-inner">
                                                            <input name="first_name" id="first_name" type="text" value="<?php echo $ud->first_name; ?>">
                                                        </div>
                                                        <div class="col-6 contact-inner">
                                                            <input name="last_name" id="last_name" type="text" value="<?php echo $ud->last_name; ?>">
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn-xs" type="button" id="update-profile-btn" onclick="updateProfile(this.id)">Update Profile <i class="far fa-angle-double-right"></i></button>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Airtime Topup Page -->
                                <div class="col-12 mt-5 mb-5" id="servicesform2" >
                                    <div class="feature-list__one" style="background-color: #f1ffff; border-radius: 20px; padding-bottom: 20px;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title-wrap text-center section-space--mt_30 section-space--mb_30" style="border-bottom: solid 2px #0A335C;">
                                                    <h5 class="heading"><i class="far fa-user-cog fa-3"></i> <span class="text-color-primary title_real">Password Setting</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 offset-2">
                                                <div class="m-auto">
                                                    <div class="row contact-form__two">
                                                        <div class="col-4 contact-inner">
                                                            <input name="old_password" id="old_password" type="password" placeholder="Old Password">
                                                        </div>
                                                        <div class="col-4 contact-inner">
                                                            <input name="new_password" id="new_password" type="password" Placeholder="New Password">
                                                        </div>
                                                        <div class="col-4 contact-inner">
                                                            <input name="confirm_new_password" id="confirm_new_password" type="password" Placeholder="Confirm New Password">
                                                        </div>
                                                        <div class="comment-submit-btn text-center">
                                                            <button class="ht-btn ht-btn-xs" type="button" id="update-password-btn" onclick="updatePassword(this.id)">Update Profile <i class="far fa-angle-double-right"></i></button>
                                                            <p class="form-messege"></p>
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
            <!-- ============ Team Member Wrapper End =============== -->

        </div>
    </div>
<?php require_once 'inc/footer.inc.php'; ?>
<script type="text/javascript">

    function updateProfile(id) {
        $("#"+id).html("Please wait...");
        if($("#first_name").val() == "" || $("#last_name").val() == ""){
            swal("Opps!", "Field(s) is empty!", "error");
            return;
        }else{
            $.ajax({
                type:"POST",
                url: "consumer/methods/update-profile.php",
                dataType : 'json',
                data: {
                    "action" : 1,
                    "email" : $("#email").val(),
                    "phone" : $("#phone").val(),
                    "first_name" : $("#first_name").val(),
                    "last_name" : $("#last_name").val()
                },
                success: function(response) {
                    console.log(response);
                    if(response.status == "success"){
                        swal("Successful!", response.message, "success");
                        setTimeout(function(){
                            window.location.reload();
                        }, 5000);
                    }else{
                        swal("Opps!", response.message, "error");
                        setTimeout(function(){
                            window.location.reload();
                        }, 5000);
                    }
                }
            });
        }
    }

    function updatePassword(id) {
        $("#"+id).html("Please wait...");
        if($("#old_password").val() == "" || $("#new_password").val() == ""){
            swal("Opps!", "Field(s) is empty!", "error");
            return;
        }else{
            $.ajax({
                type:"POST",
                url: "consumer/methods/update-profile.php",
                dataType : 'json',
                data: {
                    "action" : 2,
                    "old_password" : $("#old_password").val(),
                    "new_password" : $("#new_password").val(),
                    "confirm_new_password" : $("#confirm_new_password").val()
                },
                success: function(response) {
                    console.log(response);
                    if(response.status == "success"){
                        swal("Successful!", response.message, "success");
                        setTimeout(function(){
                            window.location.reload();
                        }, 5000);
                    }else{
                        swal("Opps!", response.message, "error");
                        setTimeout(function(){
                            window.location.reload();
                        }, 5000);
                    }
                }
            });
        }
    }

</script>