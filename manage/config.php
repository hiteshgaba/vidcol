<?php 
error_reporting(0);

$webroot='127.0.0.1';
$red_server_root='127.0.0.1';
$dbuser='root';
$dbpasswd='test@123';
$dbhost='localhost';
$connect = mysql_connect($dbhost,$dbuser,$dbpasswd) or die('could not coonect to db');
mysql_select_db("vidserver")or die("Couldn't find database" );

?>
