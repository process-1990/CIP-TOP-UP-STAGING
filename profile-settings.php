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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile Settings</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card overflow-hidden">
                    <div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
                        <div class="profile-photo">
                            <img src="public/images/avatar.png" width="100" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="mt-3 mb-1 text-white">
                            <?php echo ucfirst($ud->last_name).' '.ucfirst($ud->first_name); ?></h3>
                        <p class="text-white mb-0">Customer</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Total
                                Transaction</span> <strong class="text-muted">12</strong></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Favourite
                                Service</span> <strong class="text-muted">Data Bundle</strong></li>
                    </ul>
                    <div class="card-footer border-0 mt-0">
                        <a href="dashboard.php" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-bell-o"></i> Go to Dashboard
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#my-information" data-toggle="tab"
                                            class="nav-link active show">My Information</a></li>
                                    <li class="nav-item"><a href="#security" data-toggle="tab"
                                            class="nav-link">Security</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="my-information" class="tab-pane fade active show">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>First name</label>
                                                        <input class="form-control" name="first_name" id="first_name"
                                                            type="text" value="<?php echo $ud->first_name; ?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Last name</label>
                                                        <input class="form-control" name="last_name" id="last_name"
                                                            type="text" value="<?php echo $ud->last_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input class="form-control" name="email" id="email" type="email"
                                                        value="<?php echo $ud->email; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone number</label>
                                                    <input class="form-control" name="phone" id="phone" type="number"
                                                        value="<?php echo $ud->phone; ?>" disabled>
                                                </div>
                                                <button class="btn btn-primary" id="update-profile-btn"
                                                    onclick="updateProfile(this.id)" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="security" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input class="form-control" name="old_password" id="old_password"
                                                        type="password" placeholder="Old Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input class="form-control" name="new_password" id="new_password"
                                                        type="password" Placeholder="New Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm New Password</label>
                                                    <input class="form-control" name="confirm_new_password"
                                                        id="confirm_new_password" type="password"
                                                        Placeholder="Confirm New Password">
                                                </div>
                                                <button class="btn btn-primary" id="update-password-btn"
                                                    onclick="updatePassword(this.id)" type="submit">Reset
                                                    Password</button>
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