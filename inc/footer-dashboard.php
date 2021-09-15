<!--====================  footer area ====================-->
<!-- Modal -->
<div class="modal fade" id="fund-wallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Fund Wallet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>How much do you want to fund?</label>
                        <input type="number" name="fund-amount" id="fund-amount" class="form-control">
                    </div>
                    <div class="col-md-12 text-center mt-4">
                        <button class="ht-btn ht-btn-xs ht-btn--outline" type="button" id="fundBtnPaystack" onclick="fundWalletPaystack(this.id)"><img src="assets/img/paystack-logo-vector.png" width="80px" height="auto" /></button>
                        <button class="ht-btn ht-btn-xs ht-btn--outline" type="button" id="fundBtnMonify" onclick="fundWalletMonnify(this.id)"><img src="assets/img/22.png" width="80px" height="auto" /></button>
<!--                        <button class="ht-btn ht-btn-sm" id="fundWalletBtn" onclick="fundWallet(this.id)">Fund <i class="far fa-send-back"></i></button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="wallet-to-wallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Wallet to Wallet Transfer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>Recipient Email:</label>
                        <input type="email" name="emailer" id="emailer" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label>How much do you want to transfer?</label>
                        <input type="number" name="transfer-amount" id="transfer-amount" class="form-control">
                    </div>
                    <div class="col-md-12 text-center mt-4">
                        <button class="ht-btn ht-btn-sm" id="walettowaletbtn" onclick="waletToWallet(this.id)">Transfer <i class="far fa-send-back"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-area-wrapper bg-gray" style="margin-top: 40px;">
    <div class="footer-copyright-area pt-3 pb-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-left">
                    <i class="fab fa-facebook fa-2x mr-2"></i>
                    <i class="fab fa-instagram fa-2x mr-2"></i>
                    <i class="fab fa-twitter fa-2x mr-2"></i>
                    <i class="fab fa-linkedin fa-2x"></i>
                </div>
                <div class="col-md-4 text-center text-md-left">
                    <span class="copyright-text">Terms &amp; Conditions</a></span> |
                    <span class="copyright-text">Privacy &amp; Cookies Notice</a></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <span class="copyright-text">&copy; <?php echo date("Y"); ?> CiP Topup. <a href="#">All Rights Reserved.</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of footer area  ====================-->

<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li><a href="index.php">How it works</a></li>
                    <li><a href="transaction-history.php">My Transactions</a></li>
                    <li><a href="dashboard.php">Account</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->

<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!--====================  End of search overlay  ====================-->

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>

<!-- wow JS -->
 <script src="assets/js/plugins/wow.min.js"></script>

<!-- Swiper Slider JS -->
 <script src="assets/js/plugins/swiper.min.js"></script>

<!-- Light gallery JS -->
 <script src="assets/js/plugins/lightgallery.min.js"></script>

<!-- Waypoints JS -->
 <script src="assets/js/plugins/waypoints.min.js"></script>

<!-- Counter down JS -->
 <script src="assets/js/plugins/countdown.min.js"></script>

<!-- Isotope JS -->
 <script src="assets/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
 <script src="assets/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
 <script src="assets/js/plugins/images-loaded.min.js"></script>

<!-- Wavify JS -->
 <script src="assets/js/plugins/wavify.js"></script>

<!-- jQuery Wavify JS -->
 <script src="assets/js/plugins/jquery.wavify.js"></script>

<!-- circle progress JS -->
 <script src="assets/js/plugins/circle-progress.min.js"></script>

<!-- counterup JS -->
 <script src="assets/js/plugins/counterup.min.js"></script>

<!-- animation text JS -->
 <script src="assets/js/plugins/animation-text.min.js"></script>

<!-- Vivus JS -->
 <script src="assets/js/plugins/vivus.min.js"></script>

<!-- Some plugins JS -->
 <script src="assets/js/plugins/some-plugins.js"></script>

<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<script src="assets/js/plugins/plugins.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="assets/js/custom.js"></script>
</body>
</html>