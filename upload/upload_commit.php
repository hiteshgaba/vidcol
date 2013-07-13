<?php include('../config.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon"  href="../inc/fevicon.ico" type="image/x-icon"/>
<title>Video Upload</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/signin_style.css" rel="stylesheet" type="text/css" />
<?php 
			error_reporting(0); 
			session_start();
			$cname=$_SESSION['username'];
			if(!$cname){header('Location: ../signin.php'); die();}
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
 			<a href="../index.php" ><img style="border:none;" src="../inc/LOGO.png" /></a>
			</td>
			<td width="60%" align="left" style="background-color:#fff;">
			
			<div id="search_box">
            	
               
                
                <form class="searchform1" action="../search.php" method="POST">
   		    <input class="searchfield1" type="text" name="search" value="Search..." onFocus="if (this.value == 'Search...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Search...';}" />
				<input class="searchbutton1" type="submit" value="Search" />
			
</form>
             
             
            </div>
			</td>
			<td width="35%"  valign="middle">
			<?php 
			
			session_start();
			error_reporting(0); 
			$cname=$_SESSION['username'];
			if($cname){ echo ' <div class="left_link"><a class="home"  href="../index.php">';echo $cname; echo'</a>&nbsp;|&nbsp;
		
             <a class="home"  href="../php/logout.php">Logout</a></div>';}
			else echo '<div class="left_link">
			<a class="home" href="../signin.php">SignIn</a>&nbsp;|&nbsp;<a class="home" href="../signup.php">SignUp</a>
			</div>'
			//include('../html/header_right_link.html');

			
			?>
			<div class="right_link">
			<a class="home" href="../index.php">Home</a>&nbsp;|&nbsp;<a class="home" href="../knowus.php">KnowUs</a>&nbsp;|&nbsp;<a class="home" href="./">Upload</a>
			</div>
			
			
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

   <style type="text/css">
		  body { font-family: Verdana, Arial, sans-serif; font-size: 90%;	}
		  h1, h2, h3, h4 { margin-top: 0px; }
		  div.row { margin-bottom: 10px; }
		  *:focus{ outline:none; }
		  .floatLeft { float: left; }
		  .floatRight { float: right; }
		  .clear { clear: both; }
		  
		  #form1 {
		    padding: 20px;
		    border: 1px solid #cccccc;
		    border-radius:10px;
		    -moz-border-radius: 10px;
			  -webkit-box-shadow:0 0 10px #ccc;
			  -moz-box-shadow: 0 0 10px #ccc;
			  box-shadow: 0 0 10px #ccc;
		  
		    width: 600px;
		    margin: 20px auto;		  
			  background-image: -moz-linear-gradient(top, #ffffff,#f2f2f2);
			  background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f2f2f2));			
		  }
		  
		  .input {			
			  border:1px solid #ccc;
			  font-size: 13pt;			
			  padding: 5px 10px 5px 10px;			
			  border-radius:10px;
			  -moz-border-radius: 10px;			
			  -webkit-transition: all 0.5s ease-in-out;
	      -moz-transition: all 0.5s ease-in-out;
  			transition: all 0.5s ease-in-out;		
		  }
		  
		  .input[type=button] {
		    background-image: -moz-linear-gradient(top, #ffffff, #dfdfdf);
	  		background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dfdfdf));
		  }  				  

		  
		.input:focus {
			-webkit-box-shadow:0 0 10px #ccc;
			-moz-box-shadow: 0 0 10px #ccc;
			box-shadow: 0 0 5px #ccc;
			
			-webkit-transform: scale(1.05);
			-moz-transform: scale(1.05);
			transform: scale(1.05);			
		}
		
		#fileToUpload { width: 478px; 
		 background:#FFF;}
		
		#progressIndicator { font-size: 10pt; }
		
		#fileInfo 
		{
		  font-size: 10pt;
		  font-style: italic;
		  color: #aaa;
		  margin-top: 10px;
		}
		
		#progressBar 		
		{		  
		  height: 14px;
		  border: 1px solid #cccccc;
		  display: none;
			border-radius:10px;
		  -moz-border-radius: 10px;		  
			background-image: -moz-linear-gradient(top, #66cc00, #4b9500);
			background-image: -webkit-gradient(linear, left top, left bottom, from(#66cc00), to(#4b9500));		  
		}
		
		#uploadResponse {
		  margin-top: 10px;
		  padding: 20px;
		  overflow: hidden;
		  display: none;
		  border-radius:10px;
		  -moz-border-radius: 10px;
		  border: 1px solid #ccc;		  
		  box-shadow: 0 0 5px #ccc;
				  
		}	
		#submit_done {
		width:200px;
		background-image: -moz-linear-gradient(top, #ffffff, #CCC);
  		background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dfdfdf));
		}
		#submit_done:hover {
		width:200px;
		background-image: -moz-linear-gradient(top, #FFF, #EEE);
  		background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dfdfdf));
		-webkit-box-shadow:0 0 20px #ccc;
			-moz-box-shadow: 0 0 20px #ccc;
			box-shadow: 0 0 5px #ccc;
		}
    </style>
</head>
<body>

<form id="form1" enctype="multipart/form-data" method="post" action="upload_commit.php" style = 'padding-left:100px; padding-right:100px;
border:#CCC thin solid;'>


<?php
error_reporting(0);
session_start();




$keywords = $_POST['keywords'];
$name = $_POST['video_name'];
$format = $_POST['format'];


//$name1 = $name;
$select_name = $_POST['select_name'];
$select_vid_name = $_POST['select_name'];
$description = $_POST['limitedtextarea'];
$image_name = $_POST['thumbnail'];
$ses_name = $_SESSION['upload_name'];

//$name  = explode(".",$ses_name);
$image_path_to_upload = "../inc/vS/$select_name/";
$video_path_to_upload = "../inc/vS/$select_name/";
	
	$flag = 0;
	$category_array = array('entertainment','linux','games','sports','technology');
	for($i=0;$i<5;$i++)
	{
		//$query = mysql_query("SELECT * FROM $category_array[$i]");
		//$row = mysql_num_rows($query);
		$result = mysql_query("SELECT * FROM $category_array[$i] WHERE name = '$name'");
		$num_rows = mysql_num_rows($result);
		if($num_rows >0)
		{
			$flag=1;
			break;
			
		}
	}
	
if($flag == 0)	
{
	//retrieve data
	if( $keywords )
{	
  if(true)
	{
		//video uploading
		if ((copy("dir/temp.mp4","$video_path_to_upload/$name.mp4") || copy("dir/temp.flv","$video_path_to_upload/$name.flv") )) //|| copy("dir/temp.mp4","$video_path_to_upload/$name.flv")) && copy("dir/temp.3gp","$video_path_to_upload/$name.3gp") && copy("dir/temp.webm","$video_path_to_upload/$name.webm"))
		{
			
			//3gp video file upload
			copy("dir/temp.3gp","$video_path_to_upload/$name.3gp");

			//image upload 
			if (copy($image_name,"$image_path_to_upload/$name.jpg" ))
			{
				//connect to DB
				$key = str_replace(',',' ',$keywords);
				include("../config.php");
				$queryupdt=mysql_query("INSERT into $select_name VALUES('','$name','$select_vid_name/$name.$format','$description','$key','$select_name/$name.jpg','','')") ;
				echo "<label style='color:#F00; font-size:18px;'><strong>File Uploaded Successfully </strong></label><hr color='#FAAA3c'><a href='../'>Click</a> to go to home page";
				
				
				
			}
			else
				echo "<label style='color:#F00; font-size:18px;'><strong>Image Upload Fail</strong></label> <br/><hr color='#FAAA3c'><a href='./'>Go Back</a>";
		
		}
		else 
		  {
		  
		  echo "<label style='color:#F00; font-size:18px;'><strong>Video Upload Fail </strong></label><br/><hr color='#FAAA3c'><a href='./'>Go Back</a> ";
		}
	}
  else
	{
		echo "<label style='color:#F00; font-size:18px;'><strong>Please Upload a Correct Snapshot Format(jpeg/png) size < 1Mib</strong></label><br/><hr color='#FAAA3c'><a href='./'>Go Back</a>";
	}
  }
	else
	{
		echo "<label style='color:#F00; font-size:18px;'><strong>Please Enter at least one keyword.</strong></label><br/><hr color='#FAAA3c'><a href='./'>Go Back</a>";
	}
}
else
	{
		echo "<label style='color:#F00; font-size:18px;'><strong>A video Already Exist With the same name please Try a different Name</strong></label><br/><hr color='#FAAA3c'><a href='./'>Go Back</a>";
	}

	unlink("dir/temp.mp4"); //unlink("dir/temp.flv"); 
	unlink("dir/temp.3gp"); //unlink("dir/temp.webm");
		
?></form>
</td>
</tr></table>
<!-- Footer of body part start here -->
</td>
</tr></table>
</td>
</tr>
<!-- Footer of body part start here -->
<?php include('../html/footer.html'); ?>

</body>
</html>
<?php include('../php/db_disconnect.php');?>
