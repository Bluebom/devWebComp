<?php

session_start();

include('facebook-php-sdk/autoload.php');

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;

$appId = '136328271800270';
$appSecret = '01aedd67ac73ec12ab49564c5db7e54c';
$redirectUrl = 'http://localhost/dashboard/devWebComp/web_services/login-facebook/';
$fbPermission = array('email');

$fb = new Facebook(array(
	'app_id' => $appId,
	'app_secret' => $appSecret,
	'default_graph_version' => 'v2.2'
));

$helper = $fb->getRedirectLoginHelper();

try {
	if (isset($_SESSION['facebook_access_token'])) {
		$accessToken = $_SESSION['facebook_access_token'];
	} else {
		$accessToken = $helper->getAccessToken();
	}
} catch (FacebookResponseException $e) {
}
