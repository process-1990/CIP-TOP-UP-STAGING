<?php
$curl = curl_init();
$config = include('../../config.php');
$params = json_encode(array(
    "email" => $_POST['email'],
    "token" => $_POST['token'],
    "password" => $_POST['password'],
    "password_confirmation" => $_POST['password_confirmation']
));
curl_setopt_array($curl, array(
    CURLOPT_URL => $config["base_url"].'/api/auth/password-reset',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($curl);

curl_close($curl);
echo $response;
