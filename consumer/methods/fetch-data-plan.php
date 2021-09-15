<?php
session_start();
require_once("../controller.php");
$action = "GET";
$url = "https://api.ciptopup.ng/api/v1/data/list?network=".$_POST['network'];
$result = CurlHelper::fetcherer($_COOKIE["access_token"], $url, $action);
echo $result;

?>