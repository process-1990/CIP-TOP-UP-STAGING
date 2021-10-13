<?php require_once 'inc/header-new.php'; ?>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

<!--**********************************
            Sidebar start
        ***********************************-->
<!--**********************************
            Sidebar start
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
    <!-- row -->
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Wallet</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card overflow-hidden">
                    <div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
                        <div class="profile-photo">
                            <i class="fas fa-wallet fa-3x text-white"></i>
                        </div>
                        <h3 class="mt-3 mb-1 text-white">Wallet Details</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Main Balance:
                            </span>
                            <strong class="text-red">N<?php echo $ud->balance; ?></strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Bonus Balance:
                            </span>
                            <strong class="text-red">N<?php echo $ud->commission; ?></strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Wema: </span>
                            <strong class="text-red"><?php echo $ud->account_number ; ?></strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Rolez Microfinance
                                Bank:</span> <strong class="text-red"><?php echo $ud->second_account_number; ?></strong>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
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
                                <span><img src="public/images/referrer.png" width="120px" height="auto"
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
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?php require_once 'inc/footer-new.php'; ?>

<script type="text/javascript">
function updateProfile(id) {
    $("#" + id).html("Please wait...");
    if ($("#first_name").val() == "" || $("#last_name").val() == "") {
        toastr.error("Field(s) is empty!", {
            timeOut: 15000
        });
        // swal("Opps!", "Field(s) is empty!", "error");
        return;
    } else {
        $.ajax({
            type: "POST",
            url: "consumer/methods/update-profile.php",
            dataType: 'json',
            data: {
                "action": 1,
                "email": $("#email").val(),
                "phone": $("#phone").val(),
                "first_name": $("#first_name").val(),
                "last_name": $("#last_name").val()
            },
            success: function(response) {
                console.log(response);
                if (response.status == "success") {
                    toastr.success(response.message, {
                        timeOut: 15000
                    });
                    swal("Successful!", response.message, "success");
                    setTimeout(function() {
                        window.location.reload();
                    }, 5000);
                } else {
                    toastr.error(response.message, {
                        timeOut: 15000
                    });
                    // swal("Opps!", response.message, "error");
                    setTimeout(function() {
                        window.location.reload();
                    }, 5000);
                }
            }
        });
    }
}

function updatePassword(id) {
    $("#" + id).html("Please wait...");
    if ($("#old_password").val() == "" || $("#new_password").val() == "") {
        toastr.error("Field(s) is empty", {
            timeOut: 15000
        });
        // swal("Opps!", "Field(s) is empty!", "error");
        return;
    } else {
        $.ajax({
            type: "POST",
            url: "consumer/methods/update-profile.php",
            dataType: 'json',
            data: {
                "action": 2,
                "old_password": $("#old_password").val(),
                "new_password": $("#new_password").val(),
                "confirm_new_password": $("#confirm_new_password").val()
            },
            success: function(response) {
                console.log(response);
                if (response.status == "success") {
                    toastr.success(response.message, {
                        timeOut: 15000
                    });
                    swal("Successful!", response.message, "success");
                    setTimeout(function() {
                        window.location.reload();
                    }, 5000);
                } else {
                    toastr.error(response.message, {
                        timeOut: 15000
                    });
                    // swal("Opps!", response.message, "error");
                    setTimeout(function() {
                        window.location.reload();
                    }, 5000);
                }
            }
        });
    }
}
</script>