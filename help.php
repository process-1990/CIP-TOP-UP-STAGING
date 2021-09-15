<?php require_once 'inc/header.inc.php'; ?>
<style type="text/css">
    .container{
        max-width: 1024px;
        /*display: flex;*/
        margin: auto;
    }
</style>
<div id="main-wrapper">
    <!--====================  Conact us Section Start ====================-->
    <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one mb-30">
                        <h3 class="heading">Email Address:</h3>
                        <div class="sub-heading"><i class="fas fa-envelope text-danger"></i> info@ciptopup.com</div>
                        <h3 class="heading mt-30">Phone Number:</h3>
                        <div class="sub-heading"><i class="fas fa-phone text-danger"></i>  09137574484 | <a
                                href="https://wa.link/46ud2o"><i class="fab fa-whatsapp text-danger"></i> :
                                09137574484</a></div>
                        <h3 class="heading mt-30">Socials:</h3>
                        <div class="sub-heading"><i
                                class="fab fa-instagram text-danger"></i> : cip.topup</div>
                    </div>
                </div>

                <div class="col-lg-6 col-lg-6">
                    <div class="contact-form-wrap">

                        <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                        <form id="contact-form" action="https://demo.hasthemes.com/mitech-preview/assets/php/mail.php" method="post">
                            <div class="contact-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="con_name" type="text" placeholder="Name *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="con_email" type="email" placeholder="Email *">
                                    </div>
                                </div>
                                <div class="contact-inner">
                                    <input name="con_subject" type="text" placeholder="Subject *">
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="con_message" placeholder="Please describe what you need."></textarea>
                                </div>
                                <div class="submit-btn mt-20">
                                    <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  Conact us Section End  ====================-->
</div>
<?php require_once 'inc/footer.inc.php'; ?>