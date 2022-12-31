<?php
session_start();
require_once("../controller.php");
$config = include('../../config.php');
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $config["base_url"].'/api/v1/admin/data/create',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "bundle": "'.$_POST['bundle'].'",
    "network": "'.$_POST['network'].'",
    "code": "'.$_POST['code'].'",
    "validity": "'.$_POST['validity'].'",
    "silver": '.$_POST['silver'].',
    "gold" : '.$_POST['gold'].',
    "diamond": '.$_POST['diamond'].'
}     ',
    CURLOPT_HTTPHEADER => array(
        'Accept: application/json',
        'Authorization: Bearer '.$_COOKIE["access_token"],
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
