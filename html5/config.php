<?php

error_reporting(0);
$webroot='127.0.0.1';
$red_server_root='127.0.0.1';
$dbuser='root';
$dbpasswd='';
$dbhost='localhost';
$dbname='vidcol';
$error='Could not connect to database';
mysql_connect($dbhost,$dbuser,$dbpasswd) or die($error);
mysql_select_db($dbname)or die($error);

?>
