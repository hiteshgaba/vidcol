<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 
<?php include('config.php')?>
<?php include('php/current_url.php');?>
<div data-role="page">

	<div data-role="header">
		<h1>VidCol</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p><?php require('php/index_body.php'); ?></p>		
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
<script type="text/javascript" src="js/lights.js"></script>
<?php include('php/db_disconnect.php')?>
