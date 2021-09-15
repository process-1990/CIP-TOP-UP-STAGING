<?php
session_start();
require_once("../controller.php");
$action = "GET";
$url = "https://api.ciptopup.ng/api/v1/electricity/discos";
$result = CurlHelper::fetch_user_transaction($_COOKIE["access_token"], $url);
echo $result;

?>