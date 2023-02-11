<div class="deznav">
    <div class="deznav-scroll">

        <?php
        if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "admin"){ ?>
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="dashboard.php" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="get-all-users.php?page=1" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Profile Settings">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">All Users</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="airtime2cash-list.php?page=1" aria-expanded="false"
                    data-toggle="tooltip" data-placement="right" title="All Data Bundles">
                    <i class="fas fa-sim-card"></i>
                    <span class="nav-text">Airtime2Cash Order</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="bundle-list.php?page=1" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="All Data Bundles">
                    <i class="fas fa-sim-card"></i>
                    <span class="nav-text">All Data Bundles</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="all-transaction-history.php?page=1" aria-expanded="false"
                    data-toggle="tooltip" data-placement="right" title="Transaction History">
                    <i class="fas fa-history"></i>
                    <span class="nav-text">Transaction History</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="live-transactions.php" aria-expanded="false"
                    data-toggle="tooltip" data-placement="right" title="Live Transaction">
                    <i class="fas fa-stream"></i>
                    <span class="nav-text">Live Transactions</span>
                </a>
            </li>
            <li><a href="consumer/methods/logout.php" class="ai-icon" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
        <?php }else{ ?>
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="dashboard.php" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="wallet.php" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Profile Settings">
                    <i class="fas fa-wallet"></i>
                    <span class="nav-text">Wallet</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="profile-settings.php" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Profile Settings">
                    <i class="fas fa-cog"></i>
                    <span class="nav-text">Profile Settings</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Favourite">
                    <i class="fas fa-heart"></i>
                    <span class="nav-text">Favourites</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="transaction-history.php" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Transaction History">
                    <i class="fas fa-history"></i>
                    <span class="nav-text">Transaction History</span>
                </a>
            </li>
            <li><a href="consumer/methods/logout.php" class="ai-icon" aria-expanded="false" data-toggle="tooltip"
                    data-placement="right" title="Logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
        <?php } ?>
        <div class="copyright">
            <p><strong>CIP Topup Dashboard</strong> © All Rights Reserved</p>
        </div>
    </div>
</div>