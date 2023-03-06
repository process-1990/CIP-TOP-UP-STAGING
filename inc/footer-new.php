<?php $config = include('./config.php'); ?>
<!-- Modal -->
<div class="modal fade" id="airtime-to-cash-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Airtime To Cash</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h4>Hey Esteem Customer</h4>
                <p>transfer <span class="amt-transfering">N2000</span> worth of airtime to this phone number below:</p>
                <div class="p-4 mt-4 bg-dark-alt">
                    <h6 class="send-to">07026483469</h6>
                    <small>(Please never save this number)</small>
                    <h5>WE DO NOT ACCEPT VTU OR RECHARGE PIN</h5>
                </div>
                <p class="mt-5 p-4 bg-dark-alt">PLEASE USE THE DISPLAY PHONE NUMBER ONLY ONCE BECAUSE A NEW NUMBER WILL
                    BE PROVIDED FOR EVERY TRANSACTION SO AS TO AVOID LOSS OF AIRTIME</p>
                <div class="p-4 mt-4 bg-dark-alt">
                    <h6 class=""><code>How to transfer <span class="network-transfering">MTN</span> Airtime</code></h6>
                </div>
                <div class="p-4 mt-4 bg-dark-alt">
                    <p><em>Using USSD</em></p>
                    <p>Dial: *<span class="network-code">600</span>*<span class="send-to">07026483469</span>*2000*PIN#
                    </p>
                </div>
                <div class="p-4 mt-4 bg-dark-alt">
                    <p class=""><em>How to Set your Pin</em></p>
                    <p>Your default PIN is 0000. You are advised to change your default pin to the desired one.</p>
                </div>
                <div class="p-4 mt-4 bg-dark-alt">
                    <p class=""><em>To change your pin,</em></p>
                    <blockquote>Dial: *<span class="network-code">600</span>*Default-Pin*NEW PIN*NEW PIN#</blockquote>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary" id="airtimeToCashBtnFinal"
                    onclick="airtimetocash()">Submit</button>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="copyright">
        <p style="font-size: 12px;">Copyright © CIP Topup - 2021</p>
    </div>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="public/vendor/global/global.min.js" type="text/javascript"></script>
<script src="public/vendor/bootstrap-datetimepicker/js/moment.js" type="text/javascript"></script>
<script src="public/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript">
</script>
<script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="public/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
<script src="public/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>
<script src="public/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
<script src="public/js/dashboard/dashboard-1.js" type="text/javascript"></script>
<script src="public/js/custom.min.js" type="text/javascript"></script>
<script src="public/js/deznav-init.js" type="text/javascript"></script>
<script src="public/vendor/chartist/js/chartist.min.js" type="text/javascript"></script>
<script src="public/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js" type="text/javascript">
</script>
<script src="public/vendor/flot/jquery.flot.js" type="text/javascript"></script>
<script src="public/vendor/flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="public/vendor/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="public/vendor/flot-spline/jquery.flot.spline.min.js" type="text/javascript"></script>
<script src="public/vendor/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="public/js/plugins-init/sparkline-init.js" type="text/javascript"></script>
<script src="public/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
<script src="public/js/plugins-init/piety-init.js" type="text/javascript"></script>
<script src="public/js/plugins-init/widgets-script-init.js" type="text/javascript"></script>
<script src="public/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="public/js/plugins-init/datatables.init.js" type="text/javascript"></script>
<script src="public/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js" type="text/javascript"></script>
<script src="public/vendor/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
<script src="public/js/plugins-init/jquery.validate-init.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="public/js/toastr.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://sdk.monnify.com/plugin/monnify.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>

<!-- // Display an info toast with no title
toastr.info('Are you the 6 fingered man?')
// Display a warning toast, with no title
toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')
 
// Display a success toast, with a title
toastr.success('Have fun storming the castle!', 'Miracle Max Says')
 
// Display an error toast, with a title
toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')
 
// Immediately remove current toasts without using animation
toastr.remove()
 
// Remove current toasts using animation
toastr.clear()
 
// Override global options
toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000}) -->

<script type="text/javascript">
function powerPurchaseCalculator(id) {

    let amtBuying = $("#power-buy-amount").val();
    let interest = $("#interest-amount").val();

    var total = +amtBuying + +interest;

    $("#power-amount").val(total);

}
$(document).ready(function() {
    $("#buy-airtime-form").on("submit", function(e) {
        e.preventDefault();
        let id = "buyAirtimeBtn";
        $("#" + id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if ($("#airtime_phone_number").val() == "") {
            $("#" + id).html('Pay');
            document.getElementById(id).disabled = false;
            // swal("Oops!", "Select a network carrier!", "error");
            toastr.warning("Oops!", "Select a network carrier!", {
                timeOut: 10000
            });
            return;
        }
        if ($("input[type='radio'][name='payOption']:checked").val() == "main") {
            var payment = '';
        } else if ($("input[type='radio'][name='payOption']:checked").val() == "bonus") {
            var payment = "bonus";
        }
        $.ajax({
            type: "POST",
            url: "consumer/methods/airtime-topup.php",
            dataType: 'json',
            data: {
                "amount": $('#amount').val(),
                "network": $('#carrier').val(),
                "phone_number": $('#airtime_phone_number').val(),
                "payment": payment,
            },
            success: function(response) {
                console.log(response.status);
                if (response.status == "success") {
                    // swal("Success!", response.message, 'success');
                    toastr.success('Successful', 'Thanks for using CIP Topup', {
                        timeOut: 15000
                    });
                    setTimeout(function() {
                        window.location.href = "dashboard.php";
                    }, 5000);
                } else if (response.status === "failed") {
                    $('#' + id).html('Buy');
                    document.getElementById(id).disabled = false;
                    // swal("Success!", response.message, 'error');
                    toastr.error(response.message, "Failed!", {
                        timeOut: 15000
                    });
                } else {
                    $('#' + id).html('Buy');
                    document.getElementById(id).disabled = false;
                    let p = response.errors;
                    for (var key in p) {
                        toastr.success(p[key], "Error:", {
                            timeOut: 10000
                        });
                        swal("Opps!", p[key], 'error');
                    }
                }
            }
        });
    });
    $("#buy-data-form").on("submit", function(e) {
        e.preventDefault();
        let id = "buyDataBtn";
        $("#" + id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if ($("#data_phone_number").val() == "") {
            $("#" + id).html('Pay');
            document.getElementById(id).disabled = false;
            toastr.warning("Oops!", "Select a network carrier!", {
                timeOut: 10000
            });
            return;
        }
        if ($("input[type='radio'][name='payOption']:checked").val() == "main") {
            var payment = '';
        } else if ($("input[type='radio'][name='payOption']:checked").val() == "bonus") {
            var payment = "bonus";
        }
        $.ajax({
            type: "POST",
            url: "consumer/methods/data-purchase.php",
            dataType: 'json',
            data: {
                "phone_number": $('#data_phone_number').val(),
                "bundle": $('#data-plan').val() ?? $('#data-other').val(),
                "network": $('#carrier').val(),
                "web_hook_url": "https://env288793hwk.x.pipedream.net/",
                "payment": payment
            },
            success: function(response) {
                $("#" + id).html("Please wait...");
                if (response.message === "Transaction successful") {
                    toastr.success('Thanks for using CIP Topup', 'Successful', {
                        timeOut: 15000
                    });
                    setTimeout(function() {
                        window.location.href = "dashboard.php";
                    }, 5000);
                } else if (response.status === "failed") {
                    $('#' + id).html('Buy');
                    document.getElementById(id).disabled = false;
                    toastr.error(response.message, "Failed!", {
                        timeOut: 15000
                    });
                } else if (response.data?.status === "failed") {
                    $('#' + id).html('Buy');
                    document.getElementById(id).disabled = false;
                    toastr.error(response.message, "Failed!", {
                        timeOut: 15000
                    });
                } else {
                    $('#' + id).html('Buy');
                    document.getElementById(id).disabled = false;
                    let p = response.errors;
                    for (var key in p) {
                        toastr.success(p[key], "Error:", {
                            timeOut: 10000
                        });
                    }
                }
            }
        });
    });
    $("#airtimeToCashBtn").click(function() {
        if ($("#atc-phonenumber").val() === "" || $("#atc-carrier").val() === "" || $("#atc-amount")
            .val() === "") {
            toastr.warning("One of the field(s) is empty!", "Oops!", {
                timeOut: 10000
            });
        } else {
            if ($("#atc-carrier").val() === "MTN") {
                $(".network-code").html("600");
                $(".send-to").html("09135494613");
            } else if ($("#atc-carrier").val() === "Glo") {
                $(".network-code").html("737");
                $(".send-to").html("Not available");
            } else if ($("#atc-carrier").val() === "Airtel") {
                // (*432*1*09047618552*Amount*pin#)
                $(".network-code").html("432*1");
                $(".send-to").html("09047618552");
            } else if ($("#atc-carrier").val() === "9Mobile") {
                $(".network-code").html("223");
                $(".send-to").html("09095403518");
            }
            $("#airtime-to-cash-modal").modal("show");
        }
    });

    $("#provider").hide();
    $("#buy-airtime-form").hide();
    $("#buy-data-form").hide();
    // $("#amount").hide();
    $("#data-plan").hide();
    $("#cable-form").hide();
    $("#smartCardNo").hide();
    $("#iucnumber").hide();
    $("#gotv-plan").hide();
    $("#dstv-plan").hide();
    $("#power-form").hide();
    $("#airtime-data-confirm").hide();
    $("#cable-confirm").hide();
    $("#power-confirm").hide();
    $("#airtime-to-cash").hide();
    $("#wallet-to-wallet").hide();
    $("#wallet-funding").hide();
    // $("#data-type").hide();
    $("#data-other").hide();
    $("#data-type-lyt").hide();
    $("#data-plan-lyt").hide();
    $("#data-other-lyt").hide();
    // $("#amount-lyt").hide();
    // toastr.info('Check your internet...')
});

function replaceOptions(options) {
  var select = document.getElementById("data-type");

  var default_opts = {text: "Select Type", value: ""};
  options = [default_opts, ...options]
  
  select.options.length = 0;
  
  for (var i = 0; i < options.length; i++) {
    var option = document.createElement("option");
    option.text = options[i].text;
    option.value = options[i].value;
    select.add(option);
  }
}


function goto(id, title, carrier) {
    $("#shortcut").hide();
    $("#slider").hide();
    $("#tabs").hide();

    if (id === "buy-data-form") {
        if (carrier == "MTN") {
            $(".provider-logo").html(
                '<img src="public/images/mtn.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#identifier").val('mtn');
            replaceOptions([{ text: "MTN GIFTING", value: "mtn-gifting" }, { text: "MTN SME", value: "mtn" }]);
        } else if (carrier == "Glo") {
            $(".provider-logo").html(
                '<img src="public/images/glo.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );

            $("#identifier").val('glo');
            replaceOptions([{ text: "GLO", value: "glo" }]);
        } else if (carrier == "Airtel") {
            $(".provider-logo").html(
                '<img src="public/images/airtel.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#identifier").val('airtel');
            replaceOptions([{ text: "AIRTEL", value: "airtel" }]);
        } else if (carrier == "9mobile") {
            $(".provider-logo").html(
                '<img src="public/images/9mobile.png" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#identifier").val('9mobile');
            replaceOptions([{ text: "9MOBILE", value: "etisalat" }]);
        }
        $(".trans_id").html(title);
        $("#carrier").val(carrier);
        $("#" + id).fadeIn(1000);
    } else if (id === "buy-airtime-form") {
        if (carrier == "MTN") {
            $(".provider-logo").html(
                '<img src="public/images/mtn.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#identifier").val('mtn');
        } else if (carrier == "Glo") {
            $(".provider-logo").html(
                '<img src="public/images/glo.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );

            $("#identifier").val('glo');
        } else if (carrier == "Airtel") {
            $(".provider-logo").html(
                '<img src="public/images/airtel.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#identifier").val('airtel');
        } else if (carrier == "9mobile") {
            $(".provider-logo").html(
                '<img src="public/images/9mobile.png" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#identifier").val('9mobile');
        }
        $(".trans_id").html(title);
        $("#carrier").val(carrier);
        $("#" + id).fadeIn(1000);
    } else if (id === "cable-form") {
        if (carrier == "dstv") {
            $("#cable-logo").html(
                '<img src="public/images/dstv.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#smartCardNo").fadeIn(800);
            $("#dstv-plan").fadeIn(800);
        } else if (carrier == "gotv") {
            $("#cable-logo").html(
                '<img src="public/images/gotv.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#iucnumber").fadeIn(800);
            $("#gotv-plan").fadeIn(800);
        } else if (carrier == "startimes") {
            $("#cable-logo").html(
                '<img src="public/images/startimes.svg" width="120px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
            $("#st-number").fadeIn(800);
            $("#st-plan").fadeIn(800);
        }
        $(".trans_id").html(title)
        $("#cable-type").val(carrier);
        $("#" + id).fadeIn(1000);
    } else if (id === "power-form") {
        if (carrier == "EKEDC") {
            $("#power-logo").html(
                '<img src="public/images/eko.jpeg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            );
        } else if (carrier == "IKEDC") {
            $("#power-logo").html(
                '<img src="public/images/ikeja.svg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "AEDC") {
            $("#power-logo").html(
                '<img src="public/images/abuja.svg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "KEDCO") {
            $("#power-logo").html(
                '<img src="public/images/kano.svg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "KAEDC") {
            $("#power-logo").html(
                '<img src="public/images/kaduna.png" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;"/>'
            )
        } else if (carrier == "YEDC") {
            $("#power-logo").html(
                '<img src="public/images/yola.jpeg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "PHEDC") {
            $("#power-logo").html(
                '<img src="public/images/phed.svg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "JEDC") {
            $("#power-logo").html(
                '<img src="public/images/jos.svg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "IBEDC") {
            $("#power-logo").html(
                '<img src="public/images/ibadan.png" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "EEDC") {
            $("#power-logo").html(
                '<img src="public/images/enugu.png" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        } else if (carrier == "BEDC") {
            $("#power-logo").html(
                '<img src="public/images/benin.jpeg" width="140px" height="auto" style="border-radius: 20px; box-shadow: 2px 1px 1px 2px #ece4e4;" />'
            )
        }
        $(".trans_id").html(title)
        $('#distribution-company').val(carrier)
        $("#" + id).fadeIn(1000);
    } else if (id === "airtime-to-cash") {
        $("#airtime-to-cash").fadeIn(800);
        $("#slider").hide();
    } else if (id === "wallet-to-wallet") {
        $("#wallet-to-wallet").fadeIn(800);
        $("#slider").hide();
    } else if (id === "wallet-funding") {
        $(".trans_id").html(title)
        $("#provider").hide();
        $("#buy-airtime-form").hide();
        $("#buy-data-form").hide();
        $("#cable-form").hide();
        $("#power-form").hide();
        $("#airtime-data-confirm").hide();
        $("#cable-confirm").hide();
        $("#power-confirm").hide();
        $("#airtime-to-cash").hide();
        $("#wallet-to-wallet").hide();
        $("#wallet-funding").fadeIn(800);
        $("#slider").hide();
    } else if (id === "bundle-ntel") {
        $("#shortcut").show();
        $("#slider").show();
        $("#tabs").show();
        swal('Coming Soon!', 'Service unavailable.', 'info');
    } else if (id === "bundle-smile") {
        $("#shortcut").show();
        $("#slider").show();
        $("#tabs").show();
        swal('Coming Soon!', 'Service unavailable.', 'info');
    } else if (id === "transfer") {
        $("#shortcut").show();
        $("#slider").show();
        $("#tabs").show();
        swal('Coming Soon!', 'Service unavailable.', 'info');
    }

}

function goHome() {
    $("#shortcut").fadeIn(800);
    $("#slider").fadeIn(1000);
    $("#tabs").fadeIn(1200);
    $("#buy-airtime-form").hide(800);
    $("#buy-data-form").hide(800);
    $("#cable-form").hide();
    $("#power-form").hide();
    $("#power-confirm").hide();
    $("#airtime-data-confirm").hide();
    $("#cable-confirm").hide();
    $("#airtime-to-cash").hide();
    $("#wallet-to-wallet").hide();
    $("#wallet-funding").hide();
    $("#bundle-ntel").hide();
    $("#bundle-smile").hide();
    $("#smartCardNo").hide();
    $("#dstv-plan").hide();
    $("#iucnumber").hide();
    $("#gotv-plan").hide();
    $("#st-number").hide();
    $("#st-plan").hide();
}


function setNetworkTransfering() {
    $(".network-transfering").html($("#atc-carrier").val());
}

function calculateReturn() {
    $(".amtROI").html($("#atc-amount").val());
    $(".amt-transfering").html("NGN " + $("#atc-amount").val());
    let rate = $("#atc-amount").val() * 0.2;
    $(".roi").html($("#atc-amount").val() - rate);
}

function generateAcct() {
    toastr.success("Please wait...", {
        timeOut: 10000
    });

    var fetchDat = {
        "url": <?php echo json_encode($config["base_url"]) ?> + "/api/v1/user/generateAccount",
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Authorization": "Bearer <?php echo $_COOKIE["access_token"]; ?>",
            "Content-Type": "application/json"
        },
    };
    $.ajax(fetchDat).done(function(response) {
        console.log(response);
        $("#acctNumber").html(response.account != null ? response.account : response.message);
        window.location.reload();
    });
}

function typeChecker(id) {

    var fetchData = {
        "url":  <?php echo json_encode($config["base_url"]) ?> + "/api/v1/data/list?network=" + id,
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Authorization": "Bearer <?php echo $_COOKIE["access_token"]; ?>",
            "Content-Type": "application/json"
        },
        // "data": JSON.stringify({
        //     "network": network,
        // }),
    };

    $.ajax(fetchData).done(function(response) {
        $('#data-plan').empty();
        $('#data-other').empty();
        console.log(response);
        const a = response.data;
        a.forEach(function(item) {
            const optionObj = document.createElement("option");
            optionObj.textContent = item.bundle + ' => N' + item.price;
            optionObj.value = item.bundle;
            if ($("#identifier").val() === 'mtn') {
                document.getElementById("data-plan").appendChild(optionObj);
                $("#data-plan").show();
                $("#data-plan-lyt").show();
                $("#data-other").hide();
                $("#amount").hide();
            } else {
                document.getElementById("data-other").appendChild(optionObj);
                $("#data-other").show();
                $("#data-other-lyt").show();
                $("#data-plan").hide();
                $("#amount").hide();
            }

        });
    });
    // if ($('#' + id).val() == 'Internet') {
    //
    // } else if ($('#' + id).val() === 'Airtime') {
    //     $("#amount").show();
    //     $("#data-other").hide();
    //     $("#data-plan").hide();
    // }
}

//setup before functions
var typingTimer; //timer identifier
var doneTypingInterval = 5000; //time in ms, 5 second for example
var $input = $('.card-checker');

//on keyup, start the countdown
$input.on('keyup', function() {
    $("#cable-checker").html("<small>Please wait, checking...</small>");
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function() {
    clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping() {
    if ($("#cable-type").val() == "dstv") {
        var cableNumber = $("#smartCardNo").val();
        console.log(cableNumber);
        var cableType = "dstv";
    } else if ($("#cable-type").val() == "gotv") {
        var cableNumber = $("#iucnumber").val();
        console.log(cableNumber);
        var cableType = "gotv";
    } else if ($("#cable-type").val() == "startimes") {
        var cableNumber = $("#st-number").val();
        console.log(cableNumber);
        var cableType = "startimes";
    }

    var settings = {
        "url": <?php echo json_encode($config["base_url"]) ?> + "/api/v1/tv/verify",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Authorization": "Bearer <?php echo $_COOKIE["access_token"]; ?>",
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            "type": cableType,
            "card_number": cableNumber
        }),
    };
    $.ajax(settings).done(function(response) {
        console.log(response);
        if (response.status == 'success') {
            $("#cable-checker").html(response.data.customerName);
	    $("#cable-current").html('Current Plan: '+response.data.customerCurrent);

            const a = response.data.product;
            a.forEach(function(item) {
                const optionObj = document.createElement("option");
                optionObj.textContent = item.name;
                optionObj.value = item.variation_code+','+item.variation_amount;
                $("#cable-amount").val(item.variation_amount);
                if ($("#cable-type").val() == "dstv") {
                    document.getElementById("dstv-plan").appendChild(optionObj);
                    $("#dstv-plan-code").val(item.variation_code);
                } else if ($("#cable-type").val() == "gotv") {
                    document.getElementById("gotv-plan").appendChild(optionObj);
                    $("#gotv-plan-code").val(item.variation_code);
                } else if ($("#cable-type").val() == "startimes") {
                    document.getElementById("st-plan").appendChild(optionObj);
                    $("#st-plan-code").val(item.variation_code);
                }


            });
            return;
        } else {
            $("#cable-checker").html(response.message);
            return;
        }
    });
}

function confirmIUC() {
    $("#cable-checker").html("<small>Please wait, checking...</small>");
    if ($("#cable-type").val() == "dstv") {
        var cableNumber = $("#smartCardNo").val();
        console.log(cableNumber);
        var cableType = "dstv";
    } else if ($("#cable-type").val() == "gotv") {
        var cableNumber = $("#iucnumber").val();
        console.log(cableNumber);
        var cableType = "gotv";
    } else if ($("#cable-type").val() == "startimes") {
        var cableNumber = $("#iucnumber").val();
        console.log(cableNumber);
        var cableType = "startimes";
    }

    var settings = {
        "url": <?php echo json_encode($config["base_url"]) ?> + "/api/v1/tv/verify",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Authorization": "Bearer <?php echo $_COOKIE["access_token"]; ?>",
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            "type": cableType,
            "card_number": cableNumber
        }),
    };

    $.ajax(settings).done(function(response) {
        console.log(response);
        if (response.status == 'success') {
            $("#cable-checker").html(response.data.customerName);
            const a = response.data.product;
            a.forEach(function(item) {
                const optionObj = document.createElement("option");
                optionObj.textContent = item.name;
                optionObj.value = item.variation_code+','+item.variation_amount;
                $("#cable-amount").val(item.variation_amount);
                if ($("#cable-type").val() == "dstv") {
                    document.getElementById("dstv-plan").appendChild(optionObj);
                    $("#dstv-plan-code").val(item.variation_code);
                } else if ($("#cable-type").val() == "gotv") {
                    document.getElementById("gotv-plan").appendChild(optionObj);
                    $("#gotv-plan-code").val(item.variation_code);
                } else if ($("#cable-type").val() == "startimes") {
                    document.getElementById("st-plan").appendChild(optionObj);
                    $("#st-plan-code").val(item.variation_code);
                }


            });
            return;
        } else {
            $("#cable-checker").html(response.message);
            return;
        }
    });
}

function confirmMeter() {
if($("#distribution-company").val()=='IBEDC'){
var disco='ibadan-electric';
}else if($("#distribution-company").val()=='AEDC'){
var disco='abuja-electric';
}else if($("#distribution-company").val()=='KEDCO'){
var disco='kano-electric';
}else if($("#distribution-company").val()=='KAEDC'){
var disco='kaduna-electric';
}else if($("#distribution-company").val()=='PHEDC'){
var disco='portharcourt-electric';
}else if($("#distribution-company").val()=='IKEDC'){
var disco='ikeja-electric';
}else if($("#distribution-company").val()=='EKEDC'){
var disco='eko-electric';
}else if($("#distribution-company").val()=='JEDC'){
var disco='jos-electric';
}


    $("#meter-checker").html("<small>Validating...</small>");
    var checkerMeter = {
        "url": <?php echo json_encode($config["base_url"]) ?> + "/api/v1/electricity/verify",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Authorization": "Bearer <?php echo $_COOKIE["access_token"]; ?>",
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            "disco": disco,
            "meter_number": $("#meterNo").val()
        }),
    };


    $.ajax(checkerMeter).done(function(response) {
        console.log(response);
        if (response.status == 'success') {
            $("#meter-checker").html(response.name);
            return;
        } else {
            $("#meter-checker").html(response.message);
            return;
        }
    });
}

function setGotvPrice() {
    //$("#cable-amount").val($("#gotv-plan").val());
    var sel = document.getElementById("gotv-plan");
    var text = sel.options[sel.selectedIndex].value;
    var value = text.split(',');
    $('#gotv-plan-code').val(value[0]);
    $('#cable-amount').val(value[1]);
}

function setDstvPrice() {
   // $("#cable-amount").val($("#dstv-plan").val());
    var sel = document.getElementById("dstv-plan");
    var text = sel.options[sel.selectedIndex].value;
    var value = text.split(',');
    $('#dstv-plan-code').val(value[0]);
     $('#cable-amount').val(value[1]);
}


function purchaseCable(id) {
    $("#" + id).html("<small>Please wait...</small>");
    document.getElementById(id).disabled = true;
    if ($("input[type='radio'][name='cableOption']:checked").val() == "main") {
        if ($("#cable-type").val() == "dstv") {
            if ($("#smartCardNo").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "SmartCard number empty!", "error");
                toastr.warning("Oops!", $("#tv-type").val(), {
                    timeOut: 10000
                });
                return;
            } else if ($("#dstv-plan").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "Choose from the plan", "error");
                toastr.warning("Oops!", "Choose from the plan!", {
                    timeOut: 10000
                });
                return;
            } else {
                var data = {
                    "type": "dstv",
                    "card_number": $("#smartCardNo").val(),
                    "plan": $("#dstv-plan-code").val(),
		    "subtype": $("#tv-type").val(),
		    "amount": $("#cable-amount").val(),

                };
                $.ajax({
                    url: "consumer/methods/buy-tv.php",
                    type: "post",
                    dataType: 'json',
                    data: data,
                    success: function(response) {
                        console.log(response);
                        if (response.status == 'success') {
                            $('#' + id).html('Pay');
                            toastr.success('Successful', 'Thanks for using CIP Topup', {
                                timeOut: 15000
                            });
                            // setTimeout(function() {
                            //     window.location.reload();
                            // }, 7000);
                        } else {
                            $('#' + id).html('Pay');
                            let p = response.errors;
                            for (var key in p) {
                                toastr.error(p[key], "Error:", {
                                    timeOut: 10000
                                });
                            }
                            // setTimeout(function() {
                            //     window.location.reload();
                            // }, 7000);
                        }
                    }
                });
            }

        } else if ($("#cable-type").val() == "gotv") {
            if ($("#iucnumber").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "IUC number empty!", "error");
                toastr.warning("Oops!", "IUC number empty!", {
                    timeOut: 10000
                });
                return;
            } else if ($("#gotv-plan").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "Choose from the plan", "error");
                toastr.warning("Oops!", "Choose from the plan!", {
                    timeOut: 10000
                });
                return;
            } else {
                var data = {
                    "type": "gotv",
                    "card_number": $("#iucnumber").val(),
                    "plan": $("#gotv-plan-code").val(),
		    "subtype": $("#tv-type").val(),
		    "amount": $("#cable-amount").val(),

                };
                $.ajax({
                    url: "consumer/methods/buy-tv.php",
                    type: "post",
                    dataType: 'json',
                    data: data,
                    success: function(response) {
                        console.log(response);
                        if (response.status == 'success') {
                            $('#' + id).html('Pay');
                            toastr.success('Successful', 'Thanks for using CIP Topup', {
                                timeOut: 15000
                            });
                            // setTimeout(function() {
                            //     window.location.href = "dashboard.php";
                            // }, 5000);
                        } else {
                            $('#' + id).html('Pay');
                            let p = response.errors;
                            for (var key in p) {
                                toastr.error(p[key], "Error:", {
                                    timeOut: 10000
                                });
                            }
                            // setTimeout(function(){
                            //     window.location.href = "dashboard.php";
                            // }, 5000);
                        }
                    }
                });
            }

        }
    } else if ($("input[type='radio'][name='cableOption']:checked").val() == "bonus") {

        $("#" + id).html("<small>Please wait...</small>");
        document.getElementById(id).disabled = true;
        if ($("#cable-type").val() == "dstv") {
            if ($("#smartCardNo").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "SmartCard number empty!", "error");
                toastr.warning("Oops!", "SmartCard number empty!", {
                    timeOut: 10000
                });
                return;
            } else if ($("#dstv-plan").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "Choose from the plan", "error");
                toastr.warning("Oops!", "Choose from the plan!", {
                    timeOut: 10000
                });
                return;
            } else {
                var data = {
                    "type": "dstv",
                    "card_number": $("#smartCardNo").val(),
                    "plan": $("#dstv-plan-code").val(),
		    "subtype": $("#tv-type").val(),
		    "amount": $("#cable-amount").val(),
                    "payment": "bonus"
                };
                $.ajax({
                    url: "consumer/methods/buy-tv.php",
                    type: "post",
                    dataType: 'json',
                    data: data,
                    success: function(response) {
                        console.log(response);
                        if (response.status == 'success') {
                            $('#' + id).html('Pay');
                            toastr.success('Successful', 'Thanks for using CIP Topup', {
                                timeOut: 15000
                            });
                            swal("Successful!", response.message, "success");
                            // setTimeout(function(){
                            //     window.location.href = "dashboard.php";
                            // }, 5000);
                        } else {
                            $('#' + id).html('Pay');
                            let p = response.errors;
                            for (var key in p) {
                                toastr.error(p[key], "Error:", {
                                    timeOut: 10000
                                });
                            }
                        }
                    }
                });
            }

        } else if ($("#cable-type").val() == "gotv") {
            if ($("#iucnumber").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "IUC number empty!", "error");
                toastr.warning("Oops!", "IUC number empty!", {
                    timeOut: 10000
                });
                return;
            } else if ($("#gotv-plan").val() == "") {
                $("#" + id).html("Pay");
                document.getElementById(id).disabled = false;
                // swal("Oops!", "Choose from the plan", "error");
                toastr.warning("Oops!", "SmartCard number empty!", {
                    timeOut: 10000
                });
                return;
            } else {
                var data = {
                    "type": "gotv",
                    "card_number": $("#iucnumber").val(),
                    "plan": $("#gotv-plan-code").val(),
		    "subtype": $("#tv-type").val(),
		    "amount": $("#cable-amount").val(),
                    "payment": "bonus"
                };
                $.ajax({
                    url: "consumer/methods/buy-tv.php",
                    type: "post",
                    dataType: 'json',
                    data: data,
                    success: function(response) {
                        console.log(response);
                        if (response.status == 'success') {
                            $('#' + id).html('Pay');
                            toastr.success('Successful', 'Thanks for using CIP Topup', {
                                timeOut: 15000
                            });
                            swal("Successful!", response.message, "success");
                            // setTimeout(function(){
                            //     window.location.href = "dashboard.php";
                            // }, 5000);
                        } else {
                            $('#' + id).html('Pay');
                            let p = response.errors;
                            for (var key in p) {
                                toastr.error(p, "Error:", {
                                    timeOut: 10000
                                });
                            }
                        }
                    }
                });
            }

        }
    }


}

function purchasePower(id) {
    if ($("input[type='radio'][name='powerOption']:checked").val() == "main") {
        var payment = '';
    } else if ($("input[type='radio'][name='powerOption']:checked").val() == "bonus") {
        var payment = "bonus";
    }
    $("#" + id).html("<small>Please wait...</small>");
    document.getElementById(id).disabled = true;
    if ($("#meterNo").val() == "") {
        $("#" + id).html("Pay");
        document.getElementById(id).disabled = false;
        // swal("Oops!", "Input meter number!", "error");
        toastr.error('Oops!', "Input meter number", {
            timeOut: 10000
        });
        return;
    } else if ($("#power-amount").val() == "") {
        $("#" + id).html("Pay");
        document.getElementById(id).disabled = false;
        // swal("Oops!", "Input amount!", "error");
        toastr.error('Oops!', "Input amount", {
            timeOut: 10000
        });
        return;
    } else {
        var data = {
            "disco": $("#distribution-company").val(),
            "meter_number": $("#meterNo").val(),
            "amount": $("#power-amount").val(),
	    "type": $("#power-type").val(),
            "payment": payment
        };
        $.ajax({
            type: "POST",
            url: "consumer/methods/buy-electricity.php",
            dataType: 'json',
            data: data,
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {
                    toastr.success('Successful', 'Thanks for using CIP Topup', {
                        timeOut: 15000
                    });
                    $("#provider").hide();
                    $("#buy-airtime-form").hide();
                    $("#buy-data-form").hide();
                    $("#amount").hide();
                    $("#data-plan").hide();
                    $("#cable-form").hide();
                    $("#smartCardNo").hide();
                    $("#iucnumber").hide();
                    $("#gotv-plan").hide();
                    $("#dstv-plan").hide();
                    $("#power-form").hide();
                    $("#airtime-to-cash").hide();
                    $("#wallet-to-wallet").hide();
                    $("#airtime-data-confirm").hide();
                    $("#cable-confirm").hide();
                    $("#power-confirm").show();
                    $('#power-token').html(response.token);
                    $('#power-reference').html(response.transaction.reference);
                    $('#power-amount').html(response.transaction.amount);
                    $('#power-db').html($("#distribution-company").val());
                    $('#power-date-time').html(response.transaction.created_at);
                    // swal("Successful!", response.message, "success");
                    // setTimeout(function(){
                    //     window.location.href = "dashboard.php";
                    // }, 5000);
                } else {
                    toastr.error('Oops!', response.message, {
                        timeOut: 10000
                    });
                    $('#' + id).html('Pay');
                    swal("Opps!", response.message, 'error');
                }
            }
        });
    }
}
//Wallet to Wallet Transfer
function waletToWallet(id) {
    if ($("#wtw-email").val() == "" || $("#wtw-amount").val() == "") {
        $('#' + id).html('Transfer');
        // swal("Alert!", "Field(s) empty!", "error");
        toastr.warning("Oops!", "Field(s) empty!", {
            timeOut: 10000
        });
        return;
    } else {
        var data = {
            "email": $('#wtw-email').val(),
            "amount": $('#wtw-amount').val()
        };
        $.ajax({
            type: "POST",
            url: "consumer/methods/walet-to-walet.php",
            dataType: 'json',
            data: data,
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {
                    $('#' + id).html('Transfer');
                    swal("Success!", response.message, "success");
                    toastr.success("Successful!", response.message, {
                        timeOut: 15000
                    });
                    // setTimeout(function(){
                    //     window.location.href = "dashboard.php";
                    // }, 5000);
                } else {
                    $('#' + id).html('Transfer');
                    swal("Oops!", response.message, 'error');
                    toastr.error("Oops!", response.message, {
                        timeOut: 15000
                    });
                    // setTimeout(function(){
                    //     window.location.href = "dashboard.php";
                    // }, 5000);
                }
            }
        });
    }
}

//Airtime to Cash
function airtimetocash(id) {
    $("#airtimeToCashBtnFinal").html("Please wait...");
    document.getElementById('airtimeToCashBtnFinal').disabled = true;
    if ($("#atc-phonenumber").val() == "" || $("#atc-carrier").val() == "" || $("#atc-amount").val() == "") {
        $('#airtimeToCashBtnFinal').html('Convert');
        document.getElementById('airtimeToCashBtnFinal').disabled = false;
        toastr.warning("Oops", "One of the fields is empty!", {
            timeOut: 10000
        });
        return;
    } else {
        $.ajax({
            type: "POST",
            url: "consumer/methods/airtime-to-cash.php",
            dataType: 'json',
            data: {
                "phone_number": $('#atc-phonenumber').val(),
                "network": $('#atc-carrier').val(),
                "amount": $('#atc-amount').val()
            },
            success: function(response) {
                console.log(response);
                if (response.message == 'Transaction successful') {
                    $('#airtimeToCashBtn').html('Convert');
                    swal("Success!", response.message, "success");
                    toastr.success('Successful', response.message, {
                        timeOut: 70000
                    });
                    setTimeout(function() {
                        window.location.href = "dashboard.php";
                    }, 5000);
                } else {
                    $('#airtimeToCashBtnFinal').html('Convert');
                    document.getElementById('airtimeToCashBtn').disabled = false;
                    swal("Oops!", response.message, 'error');
                    toastr.error('Oops!', response.message, {
                        timeOut: 10000
                    });
                    // setTimeout(function(){
                    //     window.location.href = "dashboard.php";
                    // }, 5000);
                }
            }
        });
    }
}

function fundWallet(id) {
    if ($("input[type='radio'][name='fundingOption']:checked").val() == "paystack") {

        $("#" + id).html("Please wait...");
        if ($("#wf-amount").val() == '') {
            $("#" + id).html('Fund');
            // swal("Opps!", "Please enter amount", "error");
            toastr.error("Oops!", "Please enter amount", {
                timeOut: 15000
            })
            return;
        } else {
            var handler = PaystackPop.setup({
                key: 'pk_live_6e4a7790cc7733582338b22f5faf081a9a710262',
                email: "<?php echo $ud->email; ?>",
                amount: $("#wf-amount").val() * 100,
                currency: "NGN",
                ref: '' + Math.floor((Math.random() * 1000000000) +
                    1
                ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [{
                        display_name: "<?php echo $ud->first_name . " " . $ud->last_name; ?>",
                        variable_name: "<?php echo $ud->first_name . " " . $ud->last_name; ?>",
                        value: "<?php echo $ud->phone; ?>"
                    }]
                },
                callback: function(response) {
                    console.log(response);
                    console.log('success. transaction ref is ' + response.reference);
                    if (response.status == "success") {
                        $.ajax({
                            type: "GET",
                            url: "consumer/methods/fund-wallet.php?reference=" + response.reference,
                            dataType: 'json',
                            success: function(response) {
                                console.log(response);
                                $("#" + id).html("Please wait...");
                                // swal("Alert!", response.message, 'info');
                                toastr.info(response.message, {
                                    timeOut: 15000
                                })
                                setTimeout(function() {
                                    window.location.reload();
                                }, 5000);
                            }
                        });
                    } else {
                        $("#" + id).html('Fund');
                        toastr.error(response.message, {
                            timeOut: 15000
                        })
                        // swal("Opps!", response.message, "error");
                        return;
                    }
                },
                onClose: function() {
                    $("#" + id).html('Fund');
                    // swal("Opps!", "You stopped the transaction", "warning");
                    toastr.error("You stopped the transaction", {
                        timeOut: 15000
                    })
                }
            });
            handler.openIframe();
        }

    } else if ($("input[type='radio'][name='fundingOption']:checked").val() == "monnify") {
        $("#" + id).html("Please wait...");
        if ($("#wf-amount").val() == '') {
            $("#" + id).html('Fund');
            // swal("Opps!", "Please enter amount", "error");
            toastr.error("Oops!", "Please enter amount", {
                timeOut: 15000
            })
            return;
        } else {
            MonnifySDK.initialize({
                amount: $("#wf-amount").val(),
                currency: "NGN",
                reference: '' + Math.floor((Math.random() * 1000000000) + 1),
                customerName: "<?php echo $ud->first_name . ' ' . $ud->last_name; ?>",
                customerEmail: "<?php echo $ud->email; ?>",
                customerMobileNumber: "<?php echo $ud->phone; ?>",
                apiKey: "MK_PROD_GXWML8TZ66",
                contractCode: "133541598312",
                paymentDescription: "Account funding",
                isTestMode: true,
                paymentMethods: ["CARD"],
                onComplete: function(response) {
                    //Implement what happens when transaction is completed.
                    console.log(response);
                    if (response.status == "SUCCESS") {
                        $.ajax({
                            type: "GET",
                            url: "consumer/methods/fund-wallet2.php?reference=" + response
                                .transactionReference,
                            dataType: 'json',
                            success: function(response) {
                                console.log(response);
                                $("#" + id).html("Please wait...");
                                // swal("Alert!", response.message, 'info');
                                toastr.success(response.message, {
                                    timeOut: 20000
                                })
                                setTimeout(function() {
                                    window.location.reload();
                                }, 5000);
                            }
                        });
                    } else {
                        $("#" + id).html('Fund');
                        // swal("Opps!", response.message, "error");
                        toastr.error(response.message, {
                            timeOut: 20000
                        })
                        return;
                    }
                },
                onClose: function(data) {
                    //Implement what should happen when the modal is closed here
                    // console.log(data);
                    // swal("Oops!", data, "errir");
                    toastr.error(data, {
                        timeOut: 15000
                    })
                }
            });
        }
    }
}

function sendToMainAcct() {
    // https://api.ciptopup.ng/api/v1/user/withdraw
    if (confirm("You are about to transfer your bonus balance to your main balance?")) {
        $.ajax({
            type: "POST",
            url: "consumer/methods/bonus-to-main.php",
            dataType: 'json',
            data: {
                "phone_number": $('#atc-phonenumber').val(),
                "network": $('#atc-carrier').val(),
                "amount": $('#atc-amount').val()
            },
            success: function(response) {
                console.log(response);
                // if(response.message == 'Transaction successful'){
                //     $( '#'+id ).html('Convert');
                swal("Alert!", response.message, "info");
                toastr.success(response.message, {
                    timeOut: 20000
                });
                // setTimeout(function(){
                //     window.location.href = "dashboard.php";
                // }, 10000);
                // }else{
                //     $( '#'+id ).html('Convert');
                //     document.getElementById(id).disabled = false;
                //     // swal("Alert!", response.message, 'error');
                //     toastr.error('Oops!', response.message, {timeOut: 10000});
                //     // setTimeout(function(){
                //     //     window.location.href = "dashboard.php";
                //     // }, 5000);
                // }
            }
        });
    }
}

function fundUser(id) {
    $("#" + id).html("Please wait...");
    document.getElementById(id).disabled = true;
    if ($("#user-email").val() == "" || $("#amount-funding").val() == "") {
        $('#' + id).html('Convert');
        document.getElementById(id).disabled = false;
        toastr.warning("Oops", "One of the fields is empty!", {
            timeOut: 10000
        });
        return;
    } else {
        $.ajax({
            type: "POST",
            url: "consumer/methods/admin-fund-user.php",
            dataType: 'json',
            data: {
                "email": $('#user-email').val(),
                "amount": $('#amount-funding').val()
            },
            success: function(response) {
                console.log(response);
                $('#' + id).html('Fund');
                swal("Success!", response.message, "success");
                toastr.success('Successful', response.message, {
                    timeOut: 20000
                });
                setTimeout(function() {
                    window.location.reload();
                }, 8000);
                // if (response.message == 'Transaction successful') {
                //     $('#' + id).html('Convert');
                //     swal("Success!", response.message, "success");
                //     toastr.success('Successful', response.message, {
                //         timeOut: 20000
                //     });
                // } else {
                //     $('#' + id).html('Convert');
                //     document.getElementById(id).disabled = false;
                //     swal("Oops!", response.message, 'error');
                //     toastr.error('Oops!', response.message, {
                //         timeOut: 10000
                //     });
                //     // setTimeout(function(){
                //     //     window.location.href = "dashboard.php";
                //     // }, 5000);
                // }
            }
        });
    }
}

function updateBundle(id) {
    $("#" + id).html("Please wait...");
    document.getElementById(id).disabled = true;
    if ($("#network").val() == "" || $("#bundle").val() == "" || $("#amount-bundle").val() == "") {
        $('#' + id).html('Update');
        document.getElementById(id).disabled = false;
        toastr.warning("Oops", "One of the fields is empty!", {
            timeOut: 10000
        });
        return;
    } else {
        $.ajax({
            type: "POST",
            url: "consumer/methods/update-bundle.php",
            dataType: 'json',
            data: {
                "network": $('#network').val(),
                "bundle": $('#bundle').val(),
                "amount": $('#amount-bundle').val()
            },
            success: function(response) {
                console.log(response);
                $('#' + id).html('Update');
                swal("Success!", "", "success");
                toastr.success('Successful', response.status, {
                    timeOut: 20000
                });
                setTimeout(function() {
                    window.location.href = "bundle-list.php";
                }, 8000);
            }
        });
    }
}

function addNewBundle(id) {
    $("#" + id).html("Please wait...");
    document.getElementById(id).disabled = true;
    if ($("#network").val() == "" || $("#bundle").val() == "" || $("#code").val() == "" || $("#validity").val() == "" ||
        $("#silver").val() == "" || $("#gold").val() == "" || $("#diamond").val() == "") {
        $('#' + id).html('Update');
        document.getElementById(id).disabled = false;
        toastr.warning("Oops", "One of the fields is empty!", {
            timeOut: 10000
        });
        return;
    } else {
        $.ajax({
            type: "POST",
            url: "consumer/methods/create-bundle.php",
            dataType: 'json',
            data: {
                "network": $('#network').val(),
                "bundle": $('#bundle').val(),
                "code": $('#code').val(),
                "validity": $('#validity').val(),
                "silver": $('#silver').val(),
                "gold": $('#gold').val(),
                "diamond": $('#diamond').val()
            },
            success: function(response) {
                console.log(response);
                $('#' + id).html('Update');
                swal("Success!", "", "success");
                toastr.success('Successful', response.status, {
                    timeOut: 20000
                });
                setTimeout(function() {
                    window.location.href = "bundle-list.php";
                }, 8000);
            }
        });
    }
}

function walletHistory() {
    // https://api.ciptopup.ng/api/v1/user/transactions?type=alert
}
</script>
<script>
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
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
</body>

</html>