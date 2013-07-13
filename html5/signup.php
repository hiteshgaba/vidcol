<?php session_start();
			error_reporting(0); ?>
			
<!DOCTYPE html>
<html>
	<head>
	<style>
	#page_footer a{
	font-family:calibri;
	color:#999;
	font-size:20px;
	}
	#search{
border-left:solid 1px #999;
}
#searchbar{
display:none;
}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="index_style.css" />
	<link rel="stylesheet" href="./jquery/jquery.mobile-1.1.1.min.css" />
	<script src="./jquery/jquery-1.7.1.min.js"></script>	
	<script src="./jquery/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

	
	<script src="index.js">
	</script>
	<script src="validate.js">
	</script>
	<style>
	#page_footer a{
	font-family:helvetica;
	color:#666;
	font-size:15px;
	text-decoration:none;
	margin-left:20px;
	margin-right:20px;
	
	
	
	
	}
	</style>
</head>
<body>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

	
	
	<div data-role="page"><!-- page-->
		<?php
	include('searchandheader.html');
	?><!-- /header -->
<?php include('signup_check.php');?>
		<div style="margin-top:70px;background:none;"data-role="content" data-theme="d">
				
	<?php include('signup_form.html');?>
			
				</div>
		
		<?php include('footer.php');?><!-- /footer -->
	</div>
</body>
</html>
