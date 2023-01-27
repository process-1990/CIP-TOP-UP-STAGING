<?php
    session_start();
    require_once("../controller.php");
    $config = include('../../config.php');
    $action = "POST";
    $url = $config["base_url"]."/api/v1/tv/verify";
    $parameters = array(
        "bouque" => $_POST['bouque'],
        "card_number" => $_POST['card_number'],
    );
    $result = CurlHelper::jwt_request($_SESSION['access_token'], $url, $parameters, $action);
    echo $result;
?>