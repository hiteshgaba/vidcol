<?php

error_reporting(0);
$webroot='127.0.0.1';
$red_server_root='127.0.0.1';
$dbuser='root';
$dbpasswd=''; //database password to connect to the database
$dbhost='localhost';
$dbname='vidcol';
$error='Could not connect to database';
$connect = mysql_connect($dbhost,$dbuser,$dbpasswd) or die($error);
mysql_select_db($dbname)or die($error);

if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'Android')) {

	if(strstr($_SERVER['REQUEST_URI'],'video.php'))
	{
		$redirect = "http://".$_SERVER['SERVER_NAME']."/Vidcol/public_html/html5".$_SERVER['REQUEST_URI'];
		header("Location: $redirect");
	}
	else
	{
		$redirect = "http://".$_SERVER['SERVER_NAME']."/Vidcol/public_html/html5";
		header("Location: $redirect");
	}	
} 
/*else if(strstr($_SERVER['HTTP_USER_AGENT'],'mobile'))
{
	if(strstr($_SERVER['REQUEST_URI'],'video.php'))
	{
		$redirect = "http://".$_SERVER['SERVER_NAME']."/Vidcol/public_html/mobile".$_SERVER['REQUEST_URI'];
		header("Location: $redirect");
	}
	else
	{
		$redirect = "http://".$_SERVER['SERVER_NAME']."/Vidcol/public_html/mobile";
		header("Location: $redirect");
	}	
}*/





?>
