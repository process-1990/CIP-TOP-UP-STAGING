<?php
session_start();
require_once("../controller.php");
$config = include('../../config.php');
$action = "GET";
$url = $config["base_url"]."/api/v1/user/withdraw";

$curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        // CURLOPT_POSTFIELDS => $parameters,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$_COOKIE["access_token"],
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