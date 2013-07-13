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

</head>
<body>

	
	
	<div data-role="page"><!-- page-->
		<?php
	include('searchandheader.html');
	?><!-- /header -->

		<div style="margin-top:70px;background:none;" data-role="content" data-theme="d">
				
		<form data-ajax="false" action='login.php' name="myform" method='POST'>
<table style=" width:100%;color:#667">

<tr>
	<td><span style="color:#666;font-family:helvetica;">Username:</span></td>
    <td><input class="input" type="text" name='username' value=''></td>
</tr>
<tr style="height:50px;">
</tr>
<tr>
	<td><label style="color:#666;font-family:helvetica;">Password:</label></td>
    <td><input class="input" type="password" name='password' value=''></td>
</tr>
<tr>
<td>
<br>
</td>
<td><input data-inline="true" type="submit" class="input" name='submit' value="Sign In">
<input data-inline="true" type="Reset"  class="input" value="clear"></td>
</tr>
</table>

</form>

			
				</div>
		
		<?php include('footer.php');?><!-- /footer -->
	</div>
</body>
</html>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
