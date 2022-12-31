<?php
    session_start();
    require_once("../controller.php");
    $config = include('../../config.php');
    $action = "POST";
    $url = $config["base_url"]."/api/v1/user/update";

    if($_POST['action'] == 1){
        $parameters = json_encode([
            "email" => $_POST['email'],
            "phone" => $_POST['phone'],
            "first_name" => $_POST['first_name'],
            "last_name" => $_POST['last_name']
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
            CURLOPT_CUSTOMREQUEST => $action,
            CURLOPT_POSTFIELDS => $parameters,
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
    }elseif($_POST['action'] == 2){
        $parameters = json_encode([
            "old_password" => $_POST['old_password'],
            "password" => $_POST['new_password'],
            "password_confimation" => $_POST['confirm_new_password']
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
            CURLOPT_CUSTOMREQUEST => $action,
            CURLOPT_POSTFIELDS => $parameters,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['access_token'],
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        // $result = CurlHelper::jwt_request($_SESSION['access_token'], $url, $parameters, $action);
        // echo $result;
    }
?>