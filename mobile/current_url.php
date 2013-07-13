<?php

session_start();

if(strpos($_SERVER['REQUEST_URI'],"signin.php") === false && strpos($_SERVER['REQUEST_URI'],"login.php") === false)
	$_SESSION['redirect_url'] = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
else
	$_SESSION['redirect_url'] = "http://".$_SERVER['SERVER_NAME']."/newfolder";


?>
