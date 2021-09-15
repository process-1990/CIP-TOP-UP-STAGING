<?php
    session_start();
    require_once("../controller.php");
    $action = "POST";
    $url = "https://api.ciptopup.ng/api/v1/tv/verify";
    $parameters = array(
        "bouque" => $_POST['bouque'],
        "card_number" => $_POST['card_number'],
    );
    $result = CurlHelper::jwt_request($_SESSION['access_token'], $url, $parameters, $action);
    echo $result;
?>