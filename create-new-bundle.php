<?php require_once 'inc/header-new.php'; ?>

        <?php require_once 'inc/sidebar.php'; ?>

        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create New</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row mt-3">
                    <div class="col-xl-6 col-xxl-6 offset-3">
                        <div class="card" style="background-color: #40189D">
                            <div class="row card-header text-left">
                                <div class="col-1"><i class="fas fa-angle-left text-white p-2" onclick="goHome();"></i></div>
                                <div class="col-11">
                                    <h4 class="card-title text-white trans_id">Create New Bundle Plan</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Select Network:</label>
                                            <select class="form-control" name="network" id="network">
                                                <option value="">Select</option>
                                                <option value="MTN">MTN</option>
                                                <option value="MTN-GIFTING">MTN-GIFTING</option>
                                                <option value="Airtel">Airtel</option>
                                                <option value="Glo">Glo</option>
                                                <option value="9Mobile">9Mobile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Bundle Name</label>
                                            <input class="form-control" name="bundle" id="bundle" type="text" placeholder="Plan name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Code</label>
                                            <input class="form-control" name="code" id="code" type="text" placeholder="Code" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Validity</label>
                                            <input class="form-control" name="validity" id="validity" type="number" placeholder="Validity" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Silver</label>
                                            <input type="number" class="form-control" name="silver" id="silver" placeholder="Silver amount" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Gold:</label>
                                            <input type="number" class="form-control" name="gold" id="gold" placeholder="Gold amount" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-white">Diamond:</label>
                                            <input type="number" class="form-control" name="diamond" id="diamond" placeholder="Diamond amount" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center text-white bg-warning" style="cursor: pointer;" id="bundleBtn"
                                 onclick="addNewBundle(this.id);">
                                Create
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