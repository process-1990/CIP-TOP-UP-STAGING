<?php require_once 'inc/header-new.php'; ?>

        <?php require_once 'inc/sidebar.php'; ?>

        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Bundle Plan</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row mt-3">
                    <div class="col-xl-6 col-xxl-6 offset-3">
                        <div class="card" style="background-color: #40189D">
                            <div class="row card-header text-left">
                                <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                                <div class="col-11">
                                    <h4 class="card-title text-white trans_id">Edit Bundle Plan</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Select Network:</label>
                                            <select class="form-control" name="network" id="network">
                                                <option value="MTN" <?php echo $_GET['network']== "MTN" ? "selected" : ""; ?>>MTN</option>
                                                <option value="Airtel" <?php echo $_GET['network']== "Airtel" ? "selected" : ""; ?>>Airtel</option>
                                                <option value="Glo" <?php echo $_GET['network']== "Glo" ? "selected" : ""; ?>>Glo</option>
                                                <option value="9Mobile" <?php echo $_GET['network']== "9mobile" ? "selected" : ""; ?>>9Mobile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Bundle Plan Name</label>
                                            <input class="form-control" name="bundle" id="bundle" type="text" value="<?php echo $_GET['bundle']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Amount:</label>
                                            <input class="form-control" name="amount-bundle" id="amount-bundle" type="text" value="<?php echo $_GET["silver"]; ?>" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;" id="bundleBtn"
                                 onclick="updateBundle(this.id);">
                                Update
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