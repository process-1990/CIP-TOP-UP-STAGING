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

            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Transaction History</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Transaction History</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Payment Description</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($userTrans->transactions->data as $trans) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $trans->id; ?></td>
                                                    <td><?php echo $trans->description; ?></td>
                                                    <td><span class="badge light badge-success"><?php echo ucfirst($trans->type); ?></span></td>
                                                    <td><strong>#<?php echo $trans->amount; ?></strong></td>
                                                    <td><?php $dat = explode("T", $trans->created_at); echo $dat[0]; ?></td>
                                                </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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