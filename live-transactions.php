<?php
    require_once 'inc/header-new.php';
    $config = include('config.php');
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

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('35bac4c1d842dd474250', {
      cluster: 'eu'
    });

    localStorage.removeItem("transactions");
    var channel = pusher.subscribe('transactions');
    channel.bind('new', function(newData) {
        data = getData(newData)
        localStorage.setItem("transactions", JSON.stringify(data));

        const tableData = data.map(value => {
        return (
            `<tr>
                <td style="font-size: 13px !important;">${value.data.id}</td>
                <td style="font-size: 13px !important;">${value.data.description}</td>
                <td style="font-size: 13px !important;">${value.data.user.last_name} ${value.data.user.first_name}</td>
                <td style="font-size: 13px !important;">${value.data.user.phone}</td>
                <td style="font-size: 13px !important;">${value.data.user.email}</td>
                <td style="font-size: 13px !important;"><span class="badge light badge-success">${value.data.type}</span></td>
                <td style="font-size: 13px !important;">#${value.data.amount}</strong></td>
                <td style="font-size: 13px !important;"><span class="badge light badge-${value.data.status == 'failed' ? 'danger' : 'success'}">${value.data.status}</td>
                <td style="font-size: 13px !important;">${(new Date(value.data.updated_at)).toLocaleString()}</td>
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