<?php require_once 'inc/header-new.php';
$config = include('config.php');
$allUsers = $classer->FetchAllBundle(isset($_COOKIE["access_token"]) ? $_COOKIE['access_token'] : "", $config["base_url"]."/api/v1/admin/users/all?page=".$_GET['page']);
$allUsers = json_decode($allUsers, true);
?>


        <?php require_once 'inc/sidebar.php'; ?>

        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">All Users</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date Joined</th>
                                            <th scope="col">Last Login</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach($allUsers["users"]["data"] as $users) {
                                            ?>
                                            <tr>
                                                <td style="font-size: 13px;"><?php echo $users['id']; ?></td>
                                                <td  style="font-size: 13px;"><?php echo ucfirst($users['last_name']).' '.ucfirst($users['first_name']); ?></td>
                                                <td style="font-size: 13px;"><?php echo $users['phone']; ?></td>
                                                <td style="font-size: 13px;"><strong><?php echo $users['email']; ?></strong></td>
                                                <td style="font-size: 13px;"><?php $dat = explode("T", $users['created_at']); echo $dat[0]; ?></td>
                                                <td style="font-size: 13px;"><?php $dat = explode("T", $users['updated_at']); echo $dat[0]; ?></td>
                                                <td style="font-size: 13px;"><a href="fund-user.php?user_email=<?php echo $users['email']; ?>" class="btn btn-primary btn-xs">Fund User</a></td>
                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <?php
                                    $prv = $allUsers['users']['current_page']-1;
                                    $nxt = $allUsers['users']['current_page']+1;

                                    ?>
                                    <a href='get-all-users.php?page=<?php echo $prv; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Previous</span></a>
                                    <a href='get-all-users.php?page=<?php echo $nxt; ?>'><span class='p-2' style="border: solid #cccccc 1px; color: black;">Next</span></a>
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