<?php
session_start();
require_once("../controller.php");
$config = include('../../config.php');
$action = "GET";
$url = $config["base_url"]."/api/v1/data/list?network=".$_POST['network'];
$result = CurlHelper::fetcherer($_COOKIE["access_token"], $url, $action);
echo $result;

?>