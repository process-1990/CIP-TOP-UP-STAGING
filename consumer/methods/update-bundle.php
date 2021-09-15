<?php
session_start();
require_once("../controller.php");
$action = "POST";
$url = "https://api.ciptopup.ng/api/v1/airtime2cash/fund";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.ciptopup.ng/api/v1/admin/data/plans',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "network":"'.$_POST['network'].'",
    "bundle":"'.$_POST['bundle'].'",
    "silver": '.$_POST['amount'].'
}',
    CURLOPT_HTTPHEADER => array(
        'Accept: application/json',
        'Authorization: Bearer '.$_COOKIE["access_token"],
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
