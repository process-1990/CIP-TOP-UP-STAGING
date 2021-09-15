<?php require_once 'inc/header-new.php';

$allBun = $classer->FetchAllBundle($_COOKIE["access_token"], 'https://api.ciptopup.ng/api/v1/admin/data/plans?page='.$_GET['page']);
$allBundle = json_decode($allBun, true);
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
                                            <th scope="col">Bundle Network</th>
                                            <th scope="col">Bundle Plan</th>
                                            <th scope="col">Validity</th>
                                            <th scope="col">Silver [N]</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach($allBundle['data']['data'] as $trans) {
                                            ?>
                                            <tr style="font-size: 13px;">
                                                <td style="font-size: 13px;"><?php echo $trans['id']; ?></td>
                                                <td style="font-size: 13px;"><?php echo $trans['network']; ?></td>
                                                <td style="font-size: 13px;"><strong><?php echo $trans['bundle']; ?></strong></td>
                                                <td style="font-size: 13px;"><?php echo $trans['validity']; ?></td>
                                                <td style="font-size: 13px;"><?php echo $trans['silver']; ?></td>
                                                <td><a href="edit-bundle.php?network=<?php echo $trans['network']; ?>&bundle=<?php echo $trans['bundle']; ?>&silver=<?php echo $trans['silver']; ?>" class="btn btn-primary btn-xs">Edit</a></td>
                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <?php
                                    $prv = $allBundle['data']['current_page']-1;
                                    $nxt = $allBundle['data']['current_page']+1;
                                    ?>
                                    <a href='bundle-list.php?page=<?php echo $prv; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Previous</span></a>
                                    <a href='bundle-list.php?page=<?php echo $nxt; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Next</span></a>

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