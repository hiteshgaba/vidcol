<?php session_start();
			error_reporting(0); 
			
			include('current_url.php');?>
<!DOCTYPE html> 
<html> 
	<head> 
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<title>Page Title</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="index_style.css" />
	<link rel="stylesheet" href="./jquery/jquery.mobile-1.1.1.min.css" />
	<script src="./jquery/jquery-1.7.1.min.js"></script>	
	<script src="./jquery/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

	
	<script src="index.js"></script>
	
</head> 
<body> 

<div data-role="page">

	<?php
	include('searchandheader.html');
	?>
<style>
#page_footer a{
	font-family:helvetica;
	color:#666;
	font-size:15px;
	text-decoration:none;
	margin-left:20px;
	margin-right:20px;
	
	
	
	
	}
#search{
border-left:solid 1px #999;
}
#searchbar{
display:none;
}
</style>
	<div style="" data-role="content">	
	
	<?php 
		include('search_results.php');	
	?>
	
	
	</div><!-- /content -->
	
	

	<?php
include('footer.php');

	?><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
