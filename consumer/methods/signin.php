<?php
require_once "../controller.php";
$action = "POST";
$url = "https://api.ciptopup.ng/api/auth/login";

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
	CURLOPT_POSTFIELDS => '{
    "phone": "' . $_POST['phone_number'] . '",
    "password": "' . $_POST['password'] . '"
}',
	CURLOPT_HTTPHEADER => array(
		'Accept: application/json',
		'Content-Type: application/json',
		'Cookie: XSRF-TOKEN=eyJpdiI6Ik1zMGxRS0NvcFJRNlpHblBoSGt4Mnc9PSIsInZhbHVlIjoiMDV0MHQzRGNmY1JjYWxBWjRhTUpXOTRTTHFWZ0FlT2Q3WGlGbFNWMDVOdWNyMjFlM1dpOUhLS2VHUytLWkdYSDFDd2FxYWN2MzZKcU1BZjdhMVRRNVo2KzBiL0k4THgvZUNTNGs2T2kxeVZZcTZENFo5VlFGbXMyQ2s4WGUyNlciLCJtYWMiOiI5ZThkMDQ3M2RmNjhiZjI1ZjRjZTIxNDc5Njk3MWNhZjgxM2EyZjAzZDdiNDMxMGQ4N2JlMzlmMTVjNWZhN2JlIn0%3D; laravel_session=eyJpdiI6InVMVnBjRjk2amNKclFSTldoTjFyYlE9PSIsInZhbHVlIjoiZE93aW40c1dUZGJwTWJXQmVRUVVPZDd4d29HNytsNjVxaWlwdlcrbndSNmFmNzRzWW1lbFpObi91SlpCTGgrYzFua25VOERkRE9PNGRlbjhtc3QzVTU4R211VUZXRzJRem5EY2lEaGdjM2d6YVB2dmFieWZraTUzNmxlWDBFYlgiLCJtYWMiOiI0OGY5YTA3ZTI0NTM0M2NiMWY1NTQzMDE0N2FlZGVhZGYyMGIwYWUxOGU5OWViNGVjYWU4ZjBjOWVhMjhlNjFmIn0%3D',
	),
));

$response = curl_exec($curl);

curl_close($curl);
$detail = json_decode($response);
$_SESSION['access_token'] = isset($detail->access_token) ? $detail->access_token : "";
setcookie("access_token", isset($detail->access_token) ? $detail->access_token : "", time() + (86400 * 30), "/");

$_SESSION['user_role'] = !empty($detail->roles[0]) ? $detail->roles[0] : '';
setcookie("user_role", !empty($detail->roles[0]) ? $detail->roles[0] : '', time() + (86400 * 30), "/");
echo $response;
// $_SESSION['access_token'] = $detail->access_token;
// echo $detail->access_token;

// $result = CurlHelper::perform_http_request($action, $url, $parameters);
// $detail = json_decode($result);
// $_SESSION['access_token'] = $detail->access_token;
// echo $result;
?>