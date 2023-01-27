<?php
session_start();
require_once("../controller.php");
$config = include('../../config.php');
$action = "POST";
$url = $config["base_url"]."/api/v1/airtime2cash/fund";
$parameters = json_encode([
    "email" => $_POST['email'],
    "amount" => $_POST['amount']
]);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $config["base_url"].'/api/v1/admin/users/fund',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $parameters,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$_COOKIE["access_token"],
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
