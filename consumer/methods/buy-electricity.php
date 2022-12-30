<?php
    session_start();
    require_once("../controller.php");
    $action = "POST";
    $url = "https://api.ciptopup.ng/api/v1/electricity/pay";

if($_POST['disco']=='AEDC'){
  $disco='abuja-electric';
}elseif($_POST['disco']=='IKEDC'){
$disco='ikeja-electric';
}elseif($_POST['disco']=='JEDC'){
$disco='jos-electric';
}elseif($_POST['disco']=='IBEDC'){
$disco='ibadan-electric';
}elseif($_POST['disco']=='KAEDC'){
$disco='kaduna-electric';
}elseif($_POST['disco']=='KEDCO'){
$disco='kano-electric';
}elseif($_POST['disco']=='EKEDC'){
$disco='eko-electric';
}elseif($_POST['disco']=='PHEDC'){
$disco='portharcourt-electric';
}else{
	$disco=$_POST['disco'];
}
$paid_amount=$_POST['amount'];
$amount=$paid_amount-100;
    $parameters = array(
        "disco" => $disco,
        "meter_number" => $_POST['meter_number'], 
        "amount" => $amount,
        "type" => $_POST['type'],
        "payment" => isset($_POST['payment']) ? $_POST['payment'] : '',
        "online_reference" => isset($_POST['online_reference']) ? $_POST['online_reference'] : ''
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($parameters),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '. $_COOKIE["access_token"],
        'Content-Type: application/json',
            'Accept: application/json'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

    // $result = CurlHelper::jwt_request($_SESSION['access_token'], $url, $parameters, $action);

    // echo $result;
?>