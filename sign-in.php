<?php require_once 'inc/header-2.inc.php';?>
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
<div class="row h-screen bg-blue m-0 p-0">
    <div class="business-solution-form-wrap col-lg-4 col-md-4 px-16 align-middle">
        <div class="py-20">
            <div class="contact-title text-left section-space--mb_20">
                <div class="">
                    <a href="index.php">
                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                    </a>
                </div>
                <p class="font-light text-1xl">To sign in, type in your registered phone number and password:</p>
            </div>
            <div class="contact-form__two">
                <div class="contact-inner">
                    <input name="phone_number" id="phone_number" type="number" placeholder="Registered phone number *">
                </div>
                <div class="contact-inner col-md-12 p-0 m-0" id="input_container">
                    <input name="password" id="password" type="password" placeholder="Password *" id="inputer">
                    <i class="fas fa-eye input_btn" id="eye" style="color: #999999 !important;"></i>
                </div>
                <!-- <div class="contact-inner row">-->
                <!-- <div class="col-md-11 p-0 m-0">-->
                <!-- <input name="password" id="password" type="password" placeholder="Password *" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">-->
                <!-- </div>-->
                <!-- <div class="col-md-1 p-0 m-0">-->
                <!-- <button id="eye" class="btn p-1" type="button" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; margin-top: 0px !important; background-color: #cccccc !important;" >-->
                <!-- <i class="fas fa-eye" style="color: #f4f0f0 !important;"></i></button>-->
                <!-- </div>-->
                <!-- </div>-->
                <div class="contact-inner text-right pt-2">
                    <p><a href="forgotten-password.php">Forgot password?</a></p>
                </div>
                <div class="comment-submit-btn text-left">
                    <button class="ht-btn ht-btn-md" type="button" id="loginBtn">Sign In</button>
                    <p class="form-messege"></p>
                </div>
                <div class="contact-inner text-left pt-2">
                    <p>Don't have an account? <a href="sign-up.php"><b>Sign Up</b></a></p>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 d-none d-sm-block d-sm-none d-md-block flex justify-center align-middle py-8"
        style="background-color: #0A335C;">
        <img class="img-fluid" src="assets/images/logo/42.png" alt="">
    </div>
</div>
<?php require_once 'inc/footer2-dashboard.php';?>
<script type="text/javascript">
function show() {
    var p = document.getElementById('password');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('password');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function() {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);
$(document).ready(function() {
    $('#loginBtn').on("click", function() {
        $('#loginBtn').html('Please wait...');
        // e.preventDefault();
        var data = {
            "phone_number": $('#phone_number').val(),
            "password": $('#password').val()
        };
        $.ajax({
            type: "POST",
            url: "consumer/methods/signin.php",
            dataType: 'json',
            data: data,
            success: function(response) {
                console.log(response.roles);
                if (response.status == 'success') {
                    $('#loginBtn').html('Redirecting...');
                    swal("Successful!",
                        "You have successfully logged in, redirection to dashboard...",
                        "success");
                    setTimeout(function() {
                        window.location.href = "dashboard.php";
                    }, 5000);
                } else {
                    $('#loginBtn').html('Submit');
                    swal("Opps!", response.message, 'error');
                }
            }
        });

    });
});
</script>