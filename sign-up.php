<?php require_once 'inc/header-2.inc.php'; ?>
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
    right: 25px;
    width: 24px;
    height: 33px;
}
</style>
<div class="row h-screen bg-blue m-0 p-0">
    <div class="business-solution-form-wrap col-lg-4 col-md-4 px-16 align-middle">
        <div class="py-5">
            <div class="contact-title text-left section-space--mb_20">
                <div class="">
                    <a href="index.php">
                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                    </a>
                </div>
                <p class="font-light text-1xl">To sign up, please fill up the form below.</p>
            </div>
            <div class="contact-form__two">
                <div class="contact-inner">
                    <input name="email" id="email" type="email" placeholder="Email address *">
                </div>
                <div class="row">
                    <div class="contact-inner col-md-12" id="input_container">
                        <input name="password" id="password" type="password" placeholder="Password *" id="inputer">
                        <i class="fas fa-eye input_btn" id="eye" style="color: #999999 !important;"></i>
                    </div>
                    <div class="contact-inner col-md-12" id="input_container">
                        <input name="password_confirmation" id="password_confirmation" type="password"
                            placeholder="Confirm password *" id="inputer">
                        <i class="fas fa-eye input_btn" id="eye2" style="color: #999999 !important;"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 contact-inner">
                        <input name="first_name" id="first_name" type="text" placeholder="First name *">
                    </div>
                    <div class="col-md-12 contact-inner">
                        <input name="last_name" id="last_name" type="text" placeholder="Last name *">
                    </div>
                </div>
                <div class="contact-inner">
                    <input name="phone" id="phone" type="number" placeholder="Phone number *">
                </div>
                <div class="comment-submit-btn text-left">
                    <button class="ht-btn ht-btn-md" id="registerBtn" type="button">Sign Up</button>
                    <p id="form-messege"></p>
                </div>
                <div class="contact-inner text-left py-4">
                    <p>Have an account? <a href="sign-in.php"><b>Sign In</b></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 d-none d-sm-block d-sm-none d-md-block flex justify-center align-middle py-8"
        style="background-color: #0A335C;">
        <img class="img-fluid" src="assets/images/logo/42.png" alt="">
    </div>
</div>

<?php require_once 'inc/footer2-dashboard.php'; ?>
<script type="text/javascript">
function show() {
    var p = document.getElementById('password');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('password');
    p.setAttribute('type', 'password');
}

function show2() {
    var pf = document.getElementById('password_confirmation');
    pf.setAttribute('type', 'text');
}

function hide2() {
    var pf = document.getElementById('password_confirmation');
    pf.setAttribute('type', 'password');
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

var pwShown2 = 0;
document.getElementById("eye2").addEventListener("click", function() {
    if (pwShown2 == 0) {
        pwShown2 = 1;
        show2();
    } else {
        pwShown2 = 0;
        hide2();
    }
}, false);
$(document).ready(function() {
    $('#registerBtn').on("click", function() {
        $('#registerBtn').html('Please wait...');
        // e.preventDefault();
        var data = {
            "email": $('#email').val(),
            "password": $('#password').val(),
            "password_confirmation": $('#password_confirmation').val(),
            "first_name": $('#first_name').val(),
            "last_name": $('#last_name').val(),
            "phone": $('#phone').val(),
            "referrer": ""
        };
        $.ajax({
            type: "POST",
            url: "consumer/methods/signup.php",
            dataType: 'json',
            data: data,
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {
                    $('#registerBtn').html('Please wait...');
                    swal("Successful!",
                        "You have successfully register, redirection to dashboard...",
                        "success");
                    setTimeout(function() {
                        window.location.href = "dashboard.php";
                    }, 5000);
                } else {
                    $('#registerBtn').html('Register');
                    let p = response.errors;
                    for(var key in p){
                        toastr.error(p[key], "Oops", {timeOut: 8000});
                    }
                    console.log(p);
                    // swal("Opps!", "Error encountered, please try again!", 'error');

                }
            }
        });

    });
});
</script>