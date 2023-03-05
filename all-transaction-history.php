<?php
require_once 'inc/header-new.php';
$config = include('config.php');

$allTrans = $classer->fetch_all_user_transaction($_COOKIE["access_token"], $config["base_url"]."/api/v1/admin/transactions/all?page=".$_GET['page']);

?>

        <?php require_once 'inc/sidebar.php'; ?>
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Transaction History</a></li>
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
                                    <table class="table table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Payment Description</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Customer Phone</th>
                                            <th scope="col">Customer Email</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($allTrans['transactions']['data'] as $trans) {
                                                ?>
                                                <tr>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['id']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['description']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['user']['last_name'].' '.$trans['user']['first_name']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['user']['phone']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['user']['email']; ?></td>
                                                    <td style="font-size: 13px !important;"><span class="badge light badge-success"><?php echo ucfirst($trans['type']); ?></span></td>
                                                    <td style="font-size: 13px !important;"><strong>#<?php echo $trans['amount']; ?></strong></td>
                                                    <td style="font-size: 13px !important;"><?php  echo (new DateTime($trans['created_at'], new DateTimeZone('UTC')))->setTimezone(new DateTimeZone('Africa/Lagos'))->format('Y-m-d H:i:s'); ?></td>
                                                </tr>
                                                <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <?php
                                        $prv = $allTrans['transactions']['current_page']-1;
                                        $nxt = $allTrans['transactions']['current_page']+1;
                                    ?>
                                    <a href='all-transaction-history.php?page=<?php echo $prv; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Previous</span></a>
                                    <a href='all-transaction-history.php?page=<?php echo $nxt; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Next</span></a>
                                    <?php
//                                    foreach($allTrans['transactions']['links'] as $links){
//                                        if($allTrans['transactions']['current_page'] == $links['label']){
//                                            $activa = "badge badge-primary";
//                                        }else{
//                                            $activa = "";
//                                        }
//                                        $prv = $allTrans['transactions']['current_page']-1;
//                                        $nxt = $allTrans['transactions']['current_page']+1;
//                                        echo "<a href='all-transaction-history.php?".."'></a><span class='p-2 ".$activa."'>".$links['label']."</span></a>";
//                                    }
                                    ?>
                                </div>
                                <div class="table-responsive" style="display: none;">
                                    <table id="example4" class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Payment Description</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Customer Phone</th>
                                                <th scope="col">Customer Email</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($allUserTransaction['transactions']['data'] as $trans) {
                                        ?>
                                                <tr>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['id']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['description']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['user']['last_name'].' '.$trans['user']['first_name']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['user']['phone']; ?></td>
                                                    <td style="font-size: 13px !important;"><?php echo $trans['user']['email']; ?></td>
                                                    <td style="font-size: 13px !important;"><span class="badge light badge-success"><?php echo ucfirst($trans['type']); ?></span></td>
                                                    <td style="font-size: 13px !important;"><strong>#<?php echo $trans['amount']; ?></strong></td>
                                                    <td style="font-size: 13px !important;"><?php $dat = explode("T", $trans['created_at']); echo $dat[0]; ?></td>
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