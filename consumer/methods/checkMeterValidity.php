<?php
    session_start();
    require_once("../controller.php");
    $config = include('../../config.php');
    $action = "POST";
    $url = $config["base_url"]."/api/v1/electricity/verify";
    $parameters = array(
        "disco" => $_POST['disco'],
        "meter_number" => $_POST['meter_number'],
    );
    $result = CurlHelper::jwt_request($_COOKIE["access_token"], $url, $parameters, $action);

    echo $result;
?>