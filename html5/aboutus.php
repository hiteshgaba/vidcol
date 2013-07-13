<?php session_start();
			error_reporting(0); 
			include('current_url.php');
			?>
<!DOCTYPE html> 
<html> 
	<head> 
	<title>Page Title</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="index_style.css" />
	<link rel="stylesheet" href="./jquery/jquery.mobile-1.1.1.min.css" />
	<script src="./jquery/jquery-1.7.1.min.js"></script>	
	<script src="./jquery/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	
	
	<script src="index.js">
	</script>
	<style>
	
	#search{
border-left:solid 1px #999;
}
#searchbar{
display:none;
}
	</style>
</head> 
<body> 

<div data-role="page">

	<?php
	include('searchandheader.html');
	?>

	<div align="center" style="text-align:left; line-height:1em; font-size:14px" data-role="content">	
     <?php 
		   
		   //Content about product
		    include('html/about.html');
			
			//Details of the developers
		   include('html/developer.html');
		   
		   //Emails of the Developers
		   include('html/developer_mail.html'); 
		   
		   ?>
	</div><!-- /content -->
<?php include('footer.php');?>
	<!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
