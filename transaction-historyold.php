<?php require_once 'inc/header-dashboard.inc.php'; ?>
<style type="text/css">
    .col-lg-2 {
        flex: 1 0 16.666667%;
        max-width: 52.666667%;
    }s
</style>
    <style>
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /*.active {*/
        /*    background-color: #717171;*/
        /*}*/

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 8s;
            animation-name: fade;
            animation-duration: 8s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: 0}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
    </style>
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- ============ Team Member Wrapper Start =============== -->
            <div class="team-member-wrapper">
                <div class="container">
                    <div class="row">
                        <?php require_once "inc/dashboard-sidebar.php"; ?>
                        <div class="col-lg-9 ht-team-member-style-one section-space--mt_30">
                            <h6 class="heading" style="color: #0A335C;">TRANSACTION HISTORY</h6>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Payment Description</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                foreach($userTrans->transactions->data as $trans) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $trans->id; ?></th>
                                        <td><?php echo $trans->description; ?></td>
                                        <td><?php echo ucfirst($trans->type); ?></td>
                                        <td>#<?php echo $trans->amount; ?></td>
                                        <td><?php $dat = explode("T", $trans->created_at); echo $dat[0]; ?></td>
                                    </tr>

                                    <?php
                                }
                                ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============ Team Member Wrapper End =============== -->

        </div>
    </div>
<?php require_once 'inc/footer.inc.php'; ?>
<script type="text/javascript">

    function goElectricPage2(){
        if($("#disco").val() == '' || $("#meter-no").val() == '' || $("#amount-meter").val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform23').fadeIn();
            $('#servicesform33').hide();
            $('#servicesform4').hide();
        }else{
            $('#servicesform1').hide();
            $('#servicesform23').fadeOut();
            $('#servicesform33').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function goElectricPage1(){
        $('#servicesform1').hide();
        $('#servicesform23').fadeIn();
        $('#servicesform33').fadeOut();
        $('#servicesform4').hide();
    }

    function goCablePage2(){
        if($("#select-cable").val() == '' || $("#cable-number").val() == '' || $("#cable-package").val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform24').fadeIn();
            $('#servicesform3').hide();
            $('#servicesform4').hide();
        }else{
            $('#servicesform1').hide();
            $('#servicesform24').fadeOut();
            $('#servicesform34').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function goCablePage1(){
        $('#servicesform1').hide();
        $('#servicesform24').fadeIn();
        $('#servicesform34').fadeOut();
        $('#servicesform4').hide();
    }

    function fetch_disco() {
        $.ajax({
            type:"GET",
            url: "consumer/methods/fetch-disco-plan.php",
            dataType : 'json',
            success: function(response) {
                console.log( response.discos );
                const a = response.discos;
                a.forEach( function(item) {
                    const optionObj = document.createElement("option");
                    optionObj.textContent = item.name;
                    optionObj.value = item.code;
                    document.getElementById("disco").appendChild(optionObj);
                });
            }
        });
    }
    fetch_disco();

    function fetch_bundle(network) {
        $.ajax({
            type:"POST",
            url: "consumer/methods/fetch-data-plan.php",
            dataType : 'json',
            data: {
                "network" : network
            },
            success: function(response) {
                const a = response.data;
                a.forEach( function(item) {
                    const optionObj = document.createElement("option");
                    optionObj.textContent = item.bundle;
                    optionObj.value = item.bundle;
                    document.getElementById("buddle").appendChild(optionObj);
                });
            }
        });
    }

    function startActivity(id){

        $("#what_to_do").val(id);
        $(".title_real").html("<b>"+id+"</b>");
        if(id == "Buy Airtime"){
            $('#servicesform1').fadeOut();
            $('#servicesform2').fadeIn();
            $('#servicesform3').hide();
            $('#servicesform4').hide();
        }else if(id == "Buy Data"){
            $('#servicesform1').fadeOut();
            $('#servicesform22').fadeIn();
            $('#servicesform32').hide();
            $('#servicesform4').hide();
        }else if(id == "Electricity"){
            $('#servicesform1').fadeOut();
            $('#servicesform23').fadeIn();
            $('#servicesform33').hide();
            $('#servicesform4').hide();
        }else if(id == "Crypto Exchange"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }else if(id == "Airtime To Cash"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }else if(id == "Referrals"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }else if(id == "TV Subscription"){
            $('#servicesform1').fadeOut();
            $('#servicesform24').fadeIn();
            $('#servicesform34').hide();
            $('#servicesform4').hide();
        }else if(id == "Gift Card Exchange"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }else if(id == "Wallet To Wallet Transfer"){
            swal("Sorry!", "Service not available at the moment!", "error");
            return;
        }
    }

    function set_amount(){
        $(".volumer").html($('#amount_volume').val());
    }

    function set_network(){
        $(".networker").html($('#network').val());
    }

    function set_phone(){
        $(".foner").html($('#phone_number').val());
    }

    function data_setDataPhone(){
        $(".data-foner").html($("#data-number").val());
    }

    function data_setDataBuddle(){
        $(".data-bundle").html($("#buddle-data").val());
    }

    function data_setDataProvider(){
        fetch_bundle($("#network-data").val());
        $(".data-carrier").html($("#network-data").val());
    }

    function set_dis(){
        $(".elect-dis").html($("#disco").val());
    }

    function set_meter(){
        checkMeterValidity($("#disco").val(), $("#meter-no").val());
        $(".elect-meter").html($("#meter-no").val());
    }

    function set_disco_amount(){
        $(".amount-meter").html($("#amount-meter").val());
    }

    function set_cable() {
        $(".cable-type-title").html($("#select-cable").val());
    }

    function selectCablePackage() {
        $(".cable-plan-title").html($("#cable-package").val());
    }

    function set_cable_number(){
        checkTvValidity($("#select-cable").val(), $("#cable-number").val());
        $(".bouquet-title").html($("#cable-number").val());
    }

    function checkTvValidity(cable_bouquet, cable_number){
        $.ajax({
            type:"POST",
            url: "consumer/methods/verify-cable.php",
            data : {
                "bouque" : cable_bouquet,
                "card_number" : cable_number
            },
            dataType : 'json',
            success: function(response) {
                console.log( response );
                if(response.status == 'failed') {
                    $("#cable-checker").html("<small style='color: red;'>" + response.message + "</small>");
                    return;
                }else {
                    const arr = response.data;
                    $("#cable-checker").html(arr.customerName + " - " + arr.message);
                    const a = arr.product;
                    a.forEach( function(item) {
                        const optionObj = document.createElement("option");
                        optionObj.textContent = item.name;
                        optionObj.value = item.code;
                        document.getElementById("cable-package").appendChild(optionObj);
                    });
                    return;
                }

            }
        });
    }

    function checkMeterValidity(disco, meter_no){
        $.ajax({
            type:"POST",
            url: "consumer/methods/checkMeterValidity.php",
            data : {
                "disco" : disco,
                "meter_number" : meter_no
            },
            dataType : 'json',
            success: function(response) {
                console.log( response );
                if(response.status == 'failed') {
                    $("#meter-checker").html("<small style='color: red;'>" + response.message + "</small>");
                    return;
                }else{
                    $("#meter-checker").html("<small style='color: green;'>" + response.message + "</small>");
                    return;
                }
                // const a = response.discos;
                // a.forEach( function(item) {
                //     const optionObj = document.createElement("option");
                //     optionObj.textContent = item.name;
                //     optionObj.value = item.code;
                //     document.getElementById("disco").appendChild(optionObj);
                // });
            }
        });
    }

    function goServiceFormThree(){
        if($('#amount_volume').val() == '' || $('#network').val() == '' || $('#phone_number').val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform2').fadeIn();
            $('#servicesform3').hide();
            $('#servicesform4').hide();
        }else{
            $('#servicesform1').hide();
            $('#servicesform2').fadeOut();
            $('#servicesform3').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function goFormSecondData(){
        if($('#data-number').val() == '' || $('#buddle').val() == '' || $('#network-data').val() == ''){
            swal("Oops!", "One of the field is empty!", "error");
            $('#servicesform1').fadeOut();
            $('#servicesform22').fadeIn();
            $('#servicesform32').hide();
            $('#servicesform4').hide();
        }else{
            $(".data-bundle").html($("#buddle").val());
            $('#servicesform1').hide();
            $('#servicesform22').fadeOut();
            $('#servicesform32').fadeIn();
            $('#servicesform4').hide();
        }
    }

    function purchaseData(){
        $( '#purchaseDataBtn' ).html('Please wait...');
        var data ={
            "phone_number": $('#data-number').val(),
            "bundle":$('#buddle').val(),
            "network":$('#network-data').val(),
            "web_hook_url":"https://env288793hwk.x.pipedream.net/"
        };
        $.ajax({
            type:"POST",
            url: "consumer/methods/data-purchase.php",
            dataType : 'json',
            data: data,
            success: function(response) {
                console.log( response );
                if(response.status == 'success'){
                    $( '#purchaseDataBtn' ).html('Purchase');
                    swal("Successful!", response.message, "success");
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }else{
                    $( '#purchaseDataBtn' ).html('Purchase');
                    swal("Opps!", response.message, 'error');
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }
            }
        });
    }

    function purchaseNow(){
        $( '#purchaseBtn' ).html('Please wait...');
        var data = {
            "amount" : $('#amount_volume').val(),
            "network" : $('#network').val(),
            "phone_number" : $('#phone_number').val()
        };
        $.ajax({
            type:"POST",
            url: "consumer/methods/airtime-topup.php",
            dataType : 'json',
            data: data,
            success: function(response) {
                console.log( response );
                if(response.status == 'success'){
                    $( '#purchaseBtn' ).html('Purchase');
                    swal("Successful!", response.message, "success");
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }else{
                    $( '#purchaseBtn' ).html('Purchase');
                    swal("Opps!", response.message, 'error');
                }
            }
        });
    }

    function purchaseElectricity(){
        $( '#purchaseElectricBtn' ).html('Please wait...');
        var data = {
            "disco" : $("#disco").val(),
            "meter_number" : $("#meter-no").val(),
            "amount" : $("#amount-meter").val()
        };
        $.ajax({
            type:"POST",
            url: "consumer/methods/buy-electricity.php",
            dataType : 'json',
            data: data,
            success: function(response) {
                console.log( response );
                if(response.status == 'success'){
                    $( '#purchaseElectricBtn' ).html('Purchase');
                    swal("Successful!", response.message, "success");
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 5000);
                }else{
                    $( '#purchaseElectricBtn' ).html('Purchase');
                    swal("Opps!", response.message, 'error');
                }
            }
        });
    }

    function purchaseCable(){
        $( '#purchaseCableBtn' ).html('Please wait...');
        var data = {
            "bouque" : $("#select-cable").val(),
            "card_number" : $("#cable-number").val(),
            "plan" : $("#cable-package").val()
        };
        $.ajax({
            type:"POST",
            url: "consumer/methods/buy-tv.php",
            dataType : 'json',
            data: data,
            success: function(response) {
                console.log( response );
                // if(response.status == 'success'){
                //     $( '#purchaseCableBtn' ).html('Purchase');
                //     swal("Successful!", response.message, "success");
                //     setTimeout(function(){
                //         window.location.href = "dashboard.php";
                //     }, 5000);
                // }else{
                //     $( '#purchaseCableBtn' ).html('Purchase');
                //     swal("Opps!", response.message, 'error');
                // }
            }
        });
    }

    function goServiceForm4(){
        $('#servicesform1').hide();
        $('#servicesform2').hide();
        $('#servicesform3').fadeOut();
        $('#servicesform4').fadeIn();
    }

    function goServiceForm1(){
        $('#servicesform1').fadeIn();
        $('#servicesform2').fadeOut();
        $('#servicesform3').hide();
        $('#servicesform22').fadeOut();
        $('#servicesform32').hide();
        $('#servicesform23').fadeOut();
        $('#servicesform33').hide();
        $('#servicesform24').fadeOut();
        $('#servicesform34').hide();
        $('#servicesform4').hide();
    }

    function goServiceForm2(){
        $('#servicesform1').hide();
        $('#servicesform2').fadeIn();
        $('#servicesform3').fadeOut();
        $('#servicesform4').hide();
    }

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
</script>