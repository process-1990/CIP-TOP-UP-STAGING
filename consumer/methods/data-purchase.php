<?php
    session_start();
    require_once("../controller.php");
    $action = "POST";
    $url = "https://api.ciptopup.ng/api/v1/data/vend";
    $parameters = json_encode([
        "phone_number" => $_POST['phone_number'],
        "bundle" => $_POST['bundle'],
        "network" => $_POST['network'],
        "web_hook_url" => "https://env288793hwk.x.pipedream.net/",
        "payment" => isset($_POST['payment']) ? $_POST['payment'] : '',
        "online_reference" => isset($_POST['online_reference']) ? $_POST['online_reference'] : ''
    ]);

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
    CURLOPT_POSTFIELDS => $parameters,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $_COOKIE["access_token"],
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