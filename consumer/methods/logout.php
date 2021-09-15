<?php
session_start();
//require_once("../controller.php");
//$url2 = "http://66.175.213.175/api/auth/logout";
//$classer = new CurlHelper();
//$logout = $classer->logout($_SESSION['access_token'], $url2);
session_destroy();
unset($_SESSION['access_token']);
unset($_COOKIE['user_token']);
setcookie ("user_token", "", time() - (86400 * 30), "/");
unset($_COOKIE['user_role']);
setcookie ("user_role", "", time() - (86400 * 30), "/");
header('Location: ../../index.php');

?>