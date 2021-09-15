<?php require_once 'inc/header-new.php';

$allBun = $classer->fetchAirtimeToCash('66.175.213.175/api/v1/admin/transactions/all/filter?needle=airtime2cash&page='.$_GET['page']);
$allBundle = json_decode($allBun, true);
$a2c = $allBundle['transactions']['data'];

?>

        <?php require_once 'inc/sidebar.php'; ?>

        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Bundle List</a></li>
                        <a href="create-new-bundle.php" class="btn btn-primary btn-xs ml-auto">Add New</a>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bundle List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Bank</th>
                                            <th scope="col">Account Number</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach($a2c as $trans) {
                                            ?>
                                            <tr style="font-size: 13px;">
                                                <td style="font-size: 13px;"><?php echo $trans['id']; ?></td>
                                                <td style="font-size: 13px;"><?php echo !isset($trans['transaction_details']["account_name"]) ? "" : $trans['transaction_details']["account_name"]; ?></td>
                                                <td style="font-size: 13px;"><strong><?php echo !isset($trans['amount']) ? "" : $trans['amount']; ?></strong></td>
                                                <td style="font-size: 13px;"><?php echo !isset($trans['description']) ? "" : $trans['description']; ?></td>
                                                <td style="font-size: 13px;"><?php echo !isset($trans['transaction_details']['bank']) ? "" : $trans['transaction_details']['bank']; ?></td>
                                                <td style="font-size: 13px;"><?php echo !isset($trans['transaction_details']['account_number']) ? "" : $trans['transaction_details']['account_number']; ?></td>
                                                <td style="font-size: 13px;"><?php echo !isset($trans['status']) ? $trans['status'] : ""; ?></td>
                                                <td><a href="#" class="btn btn-primary btn-xs">Paid</a></td>
                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <?php
                                    $prv = $allBundle['transactions']['current_page']-1;
                                    $nxt = $allBundle['transactions']['current_page']+1;
                                    ?>
                                    <a href='airtime2cash-list.php?page=<?php echo $prv; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Previous</span></a>
                                    <a href='airtime2cash-list.php?page=<?php echo $nxt; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Next</span></a>

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