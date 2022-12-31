<?php
    session_start();
    require_once("../controller.php");
    $config = include('../../config.php');

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $config["base_url"].'/api/auth/register',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
            "email": "'.$_POST['email'].'",
            "password": "'.$_POST['password'].'",
            "password_confirmation": "'.$_POST['password_confirmation'].'",
            "first_name": "'.$_POST['first_name'].'",
            "last_name": "'.$_POST['last_name'].'",
            "phone": "'.$_POST['phone'].'"
        }',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json'
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);

    $detail = json_decode($response, true);
    $_SESSION['access_token'] = isset($detail['access_token']) ? $detail['access_token'] : "";
    echo $response;

//    session_start();
//    require_once("../controller.php");
//    $action = "POST";
//    $url = "http://66.175.213.175/api/auth/register";
//    $parameters = array(
//        "email" => $_POST['email'],
//        "password" => $_POST['password'],
//        "password_confirmation" => $_POST['password_confirmation'],
//        "first_name" => $_POST['first_name'],
//        "last_name" => $_POST['last_name'],
//        "phone" => $_POST['phone'],
//        "referrer" => ""
//    );
////    $result = CurlHelper::perform_http_request($action, $url, $parameters);
//
//    $detail = json_decode($result);
//    $_SESSION['access_token'] = $detail->access_token;
//
//    echo $result;
?>