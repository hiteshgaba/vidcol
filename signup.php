<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon"  href="inc/fevicon.ico" type="image/x-icon"/>
<title>Sign Up</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/register_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/validate.js"></script>
</head>
<body>
<?php include('config.php')?>
<?php include('php/current_url.php');?>
<!-- Body of the signup.php page --> 
<?php require('php/signup_body.php'); ?>

</body>
</html>
<?php include('php/db_disconnect.php')?>
