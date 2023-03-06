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
                        <table class="table table-responsive-md">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Payment Description</th>
                                <th scope="col">Type</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($userTrans->transactions->data as $trans) {
                                    ?>
                                    <tr>
                                        <td style="font-size: 13px !important;"><?php echo $trans->id; ?></td>
                                        <td style="font-size: 13px !important;"><?php echo $trans->description; ?></td>
                                        <td style="font-size: 13px !important;"><span class="badge light badge-success"><?php echo ucfirst($trans->type); ?></span></td>
                                        <td style="font-size: 13px !important;"><strong>#<?php echo $trans->amount; ?></strong></td>
                                        <td style="font-size: 13px !important;"><span class="text-status font-bold"><?php echo $trans->status; ?></span>
                                        <td style="font-size: 13px !important;"><?php $dat = explode("T", $trans->created_at); echo $dat[0]; ?></td>
                                    </tr>
                                    <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div>
                        <?php

                            // Calculate the total number of pages
                            $totalPages = $userTrans->transactions->total;

                            // Get the current page number from the JSON response
                            $currentPage = $userTrans->transactions->current_page;

                            // Set the maximum number of page links to display
                            $maxPageLinks = 10;

                            // Calculate the page range to display
                            $startPage = max(1, $currentPage - floor($maxPageLinks / 2));
                            $endPage = min($totalPages, $startPage + $maxPageLinks - 1);

                            // Build the URL for the previous page
                            $prevPageUrl = '';
                            if ($currentPage > 1) {
                                $prevPageUrl = '?page=' . ($currentPage - 1);
                            }

                            // Build the URL for the next page
                            $nextPageUrl = '';
                            if ($currentPage < $totalPages) {
                                $nextPageUrl = '?page=' . ($currentPage + 1);
                            }

                            // Build the HTML for the pagination links
                            $paginationHtml = '<nav aria-label="Page navigation">';
                            $paginationHtml .= '<ul class="pagination">';

                            // Add the "previous" link
                            $paginationHtml .= '<li class="page-item">';
                            $paginationHtml .= '<a class="page-link" href="' . $prevPageUrl . '">Previous</a>';
                            $paginationHtml .= '</li>';

                            // Add the page number links
                            for ($i = $startPage; $i <= $endPage; $i++) {
                                $pageUrl = '?page=' . $i;
                                if ($i == $currentPage) {
                                    $paginationHtml .= '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
                                } else {
                                    $paginationHtml .= '<li class="page-item"><a class="page-link" href="' . $pageUrl . '">' . $i . '</a></li>';
                                }
                            }

                            // Add the "next" link
                            $paginationHtml .= '<li class="page-item">';
                            $paginationHtml .= '<a class="page-link" href="' . $nextPageUrl . '">Next</a>';
                            $paginationHtml .= '</li>';

                            $paginationHtml .= '</ul>';
                            $paginationHtml .= '</nav>';

                            // Output the pagination links
                            echo $paginationHtml;

                            $prv = $userTrans->transactions->current_page - 1;
                            $nxt = $userTrans->transactions->current_page + 1;
                        ?>
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