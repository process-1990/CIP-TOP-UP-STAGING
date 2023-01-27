<?php
session_start();
require_once("../controller.php");
$config = include('../../config.php');
$action = "GET";
$url = $config["base_url"]."/api/v1/electricity/discos";
$result = CurlHelper::fetch_user_transaction($_COOKIE["access_token"], $url);
echo $result;

?>