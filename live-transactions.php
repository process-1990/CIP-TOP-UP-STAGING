<?php
    require_once 'inc/header-new.php';
    $config = include('config.php');

    $allTrans = $classer->fetch_all_user_transaction($_COOKIE["access_token"], $config["base_url"]."/api/v1/admin/transactions/all");
?>
<?php require_once 'inc/sidebar.php'; ?>

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Live Transactions</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transactions</h4>
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
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>
                                <tbody id="live-transactions"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <?php require_once 'inc/footer-new.php'; ?>

 <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>
    var pusher = new Pusher('35bac4c1d842dd474250', {
      cluster: 'eu'
    });

    let transactions = <?php echo(json_encode($allTrans)) ?>;

    localStorage.setItem("transactions", JSON.stringify(transactions.transactions.data));

    const tableData = transactions.transactions.data.map(value => {
        return (
            `<tr>
                <td style="font-size: 13px !important;">${value.id}</td>
                <td style="font-size: 13px !important;">${value.description}</td>
                <td style="font-size: 13px !important;">${value.user.last_name} ${value.user.first_name}</td>
                <td style="font-size: 13px !important;">${value.user.phone}</td>
                <td style="font-size: 13px !important;">${value.user.email}</td>
                <td style="font-size: 13px !important;"><span class="badge light badge-success">${value.type}</span></td>
                <td style="font-size: 13px !important;">#${value.amount}</strong></td>
                <td style="font-size: 13px !important;"><span class="badge light badge-${value.status == 'failed' ? 'danger' : 'success'}">${value.status}</td>
                <td style="font-size: 13px !important;">${(new Date(value.updated_at)).toLocaleString()}</td>
            </tr>`
        );
        }).join('');

        const tableBody = document.querySelector("#live-transactions");
        tableBody.innerHTML = tableData;

    var channel = pusher.subscribe('transactions');
    channel.bind('new', function(newData) {
        data = getData(newData.data)
        localStorage.setItem("transactions", JSON.stringify(data));

        const tableData = data.map(value => {
        return (
            `<tr>
                <td style="font-size: 13px !important;">${value.id}</td>
                <td style="font-size: 13px !important;">${value.description}</td>
                <td style="font-size: 13px !important;">${value.user.last_name} ${value.user.first_name}</td>
                <td style="font-size: 13px !important;">${value.user.phone}</td>
                <td style="font-size: 13px !important;">${value.user.email}</td>
                <td style="font-size: 13px !important;"><span class="badge light badge-success">${value.type}</span></td>
                <td style="font-size: 13px !important;">#${value.amount}</strong></td>
                <td style="font-size: 13px !important;"><span class="badge light badge-${value.status == 'failed' ? 'danger' : 'success'}">${value.status}</td>
                <td style="font-size: 13px !important;">${(new Date(value.updated_at)).toLocaleString()}</td>
            </tr>`
        );
        }).join('');

        const tableBody = document.querySelector("#live-transactions");
        tableBody.innerHTML = tableData;

    });

    function getData(newData){
        let transactions = [newData];
        previous_data = JSON.parse(localStorage.getItem("transactions"));
        if(Array.isArray(previous_data)){
           return transactions.concat(previous_data.slice(0, 100));
        }
        return transactions;
    }
  </script>