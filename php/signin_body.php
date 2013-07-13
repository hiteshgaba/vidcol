
<?php 
			error_reporting(0); 
			session_start();
			$cname=$_SESSION['username'];
			if($cname) {

			
				header("Location: ./");die();
			
				
			}
		?>
  <div class="main_div" style="overflow-y: scroll;height:100%;">
  <table align="center" width="100%" >
  <!-- Header of body start here -->
  <tr>
  <td width="100%" style="border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#f0f0f0;" >
	<div class="header">
    <table width="975" align="center">
    	<tr>
    		<td align="left" valign="middle">
 			<a href="index.php" ><img style="border:none;" src="inc/LOGO.png" /></a>
			</td>
			<td width="60%" align="left" style="background-color:#fff;">
			
			<div id="search_box">
            	
               
                
                <?php include('html/search_form.html'); ?>
             
            </div>
			</td>
			<td width="35%"  valign="middle">
			<?php include('php/user.php');
include('html/header_right_link.html');			?>
			
			
			
			</td>
   			</tr>
    </table>
	</div>
	</td>
	</tr>
	
    <!-- Center body part start here -->
    <tr>
    <td width="100%" align="center" style="background-color:#fff;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#f0f0f0;">
<table width="1020" align="center" style="margin-top:-3px;margin-bottom:-1px;background-color:#fff;border-left-style:solid;border-left-width:1px;border-left-color:#f0f0f0;border-right-style:solid;border-right-width:1px;border-right-color:#f0f0f0;" >

<tr><td width="100%" align="center"  >
<table width="100%" align="center"   >
<tr>
<td width="100%" align="left"  >
<?php include('html/signin_form.html'); ?>
</td>
</tr></table>
</td>
</tr>
<!-- Footer of body part start here -->
<?php include('html/footer.html'); ?>
