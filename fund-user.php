<?php require_once 'inc/header-new.php'; ?>

        <?php require_once 'inc/sidebar.php'; ?>

        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Fund Users</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row mt-3">
                    <div class="col-xl-6 col-xxl-6 offset-3">
                        <div class="card" style="background-color: #40189D">
                            <div class="row card-header text-left">
                                <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                                <div class="col-11">
                                    <h4 class="card-title text-white trans_id">Fund User Wallet</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">User Email:</label>
                                            <input class="form-control" name="user-email" id="user-email" type="text"
                                                   value="<?php echo isset($_GET['user_email']) ? $_GET['user_email'] : ''; ?>" <?php echo isset($_GET['user_email']) ? 'readonly' : ''; ?>>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Amount Funding:</label>
                                            <input class="form-control" name="amount-funding" id="amount-funding" type="text"
                                                   placeholder="Input amount you want to fund:">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;" id="admin-funding-Btn"
                                 onclick="fundUser(this.id);">
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