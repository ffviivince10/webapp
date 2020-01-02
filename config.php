<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("237078686462-r278t6dh0k01slvgnd9ki828mlja0far.apps.googleusercontent.com");
	$gClient->setClientSecret("mowLMgPBho3dVX6zVL4UnsdQ");
	$gClient->setApplicationName("Web App");
	$gClient->setRedirectUri("http://localhost/webapp/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
