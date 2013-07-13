<?php
include('../config.php');
include('../php/current_url.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            	
               
                
                <form class="searchform1" action="../search.php" method="POST" runat="server">
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
		  padding: 8px;
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
    <script type="text/javascript">
	function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}    
	</script>
    <script type="text/javascript">
      var bytesUploaded = 0;
      var bytesTotal = 0;
      var previousBytesLoaded = 0;
      var intervalTimer = 0;

      function fileSelected() {
        var file = document.getElementById('fileToUpload').files[0];
        var fileSize = 0;
        if (file.size > 1024 * 1024)
          fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
        else
          fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
        document.getElementById('fileInfo').style.display = 'block';
        document.getElementById('fileName').innerHTML = 'Name: ' + file.name;
        document.getElementById('fileSize').innerHTML = 'Size: ' + fileSize;
        document.getElementById('fileType').innerHTML = 'Type: ' + file.type;
	if(!(file.type=='video/mp4' || /*file.type=='video/avi' ||*/ file.type=='' ||  file.type=='video/x-flv' ))
	{	window.alert("please upload a correct video format mp4 or flv"); return false;}
	
loadXMLDoc();uploadFile();
      }
      
	//Ajax to load the form along with the video selected
	function loadXMLDoc()
	{
		var xmlhttp;
		var file = document.getElementById('fileToUpload').files[0];
		
		//document.write(file.name);
		if (window.XMLHttpRequest)
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("uploadformResponse").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","uploadform.php?name="+file.name,true);
	xmlhttp.send();
	}

      function uploadFile() {
        previousBytesLoaded = 0;
        var uploadFile = document.getElementById('uploadResponse');
            uploadFile.innerHTML = '<center><span style="font-family:helvetica">Converting Video into different Formats & Generating Thumbnails. Please Wait...</span><br><br><img src="ajax-loader-tr.gif"></center>';
            uploadFile.style.display = 'block';
       document.getElementById('progressNumber').innerHTML = '';
        var progressBar = document.getElementById('progressBar');
        progressBar.style.display = 'block';
        progressBar.style.width = '0px';        
        
        /* If you want to upload only a file along with arbitary data that
           is not in the form, use this */
        var fd = new FormData();
        //fd.append("author", "Shiv Kumar");
        //fd.append("name", "Html 5 File API/FormData");
        fd.append("fileToUpload", document.getElementById('fileToUpload').files[0]);

        /* If you want to simply post the entire form, use this */
        //var fd = document.getElementById('form1').getFormData();
        
        var xhr = new XMLHttpRequest();        
        xhr.upload.addEventListener("progress", uploadProgress, false);
        xhr.addEventListener("load", uploadComplete, false);
        xhr.addEventListener("error", uploadFailed, false);
        xhr.addEventListener("abort", uploadCanceled, false);
        xhr.open("POST", "upload.php");
        xhr.send(fd);

        intervalTimer = setInterval(updateTransferSpeed, 500);
      }

      function updateTransferSpeed() {
        var currentBytes = bytesUploaded;
        var bytesDiff = currentBytes - previousBytesLoaded;
        if (bytesDiff == 0) return;
        previousBytesLoaded = currentBytes;
        bytesDiff = bytesDiff * 2;
        var bytesRemaining = bytesTotal - previousBytesLoaded;
        var secondsRemaining = bytesRemaining / bytesDiff;

        var speed = "";
        if (bytesDiff > 1024 * 1024)
          speed = (Math.round(bytesDiff * 100/(1024*1024))/100).toString() + 'MBps';
        else if (bytesDiff > 1024)
          speed =  (Math.round(bytesDiff * 100/1024)/100).toString() + 'KBps';
        else
          speed = bytesDiff.toString() + 'Bps';
        document.getElementById('transferSpeedInfo').innerHTML = speed;
        document.getElementById('timeRemainingInfo').innerHTML = '| ' + secondsToString(secondsRemaining);        
      }

      function secondsToString(seconds) {        
        var h = Math.floor(seconds / 3600);
        var m = Math.floor(seconds % 3600 / 60);
        var s = Math.floor(seconds % 3600 % 60);
        return ((h > 0 ? h + ":" : "") + (m > 0 ? (h > 0 && m < 10 ? "0" : "") + m + ":" : "0:") + (s < 10 ? "0" : "") + s);
      }

      function uploadProgress(evt) {
        if (evt.lengthComputable) {
          bytesUploaded = evt.loaded;
          bytesTotal = evt.total;
          var percentComplete = Math.round(evt.loaded * 100 / evt.total);
          var bytesTransfered = '';
          if (bytesUploaded > 1024*1024)
            bytesTransfered = (Math.round(bytesUploaded * 100/(1024*1024))/100).toString() + 'MB';
          else if (bytesUploaded > 1024)
            bytesTransfered = (Math.round(bytesUploaded * 100/1024)/100).toString() + 'KB';
          else
            bytesTransfered = (Math.round(bytesUploaded * 100)/100).toString() + 'Bytes';

          document.getElementById('progressNumber').innerHTML = percentComplete.toString() + '%';
          document.getElementById('progressBar').style.width = (percentComplete * 6).toString() + 'px';
          document.getElementById('transferBytesInfo').innerHTML = bytesTransfered;
          if (percentComplete == 100) {
            document.getElementById('progressInfo').style.display = 'none';
           /* var uploadResponse = document.getElementById('uploadResponse');
            uploadResponse.innerHTML = '<span style="font-size: 18pt; font-weight: bold;">Please wait...</span>';
            uploadResponse.style.display = 'block';
	*/          
	}
        }
        else {
          document.getElementById('progressBar').innerHTML = 'unable to compute';
        }  
      }

      function uploadComplete(evt) {
        clearInterval(intervalTimer);
        var uploadResponse = document.getElementById('uploadResponse');
        uploadResponse.innerHTML = evt.target.responseText;
        uploadResponse.style.display = 'block';
      }  
  
      function uploadFailed(evt) {
        clearInterval(intervalTimer);
        alert("An error occurred while uploading the file.");  
      }  
  
      function uploadCanceled(evt) {
        clearInterval(intervalTimer);
        alert("The upload has been canceled by the user or the browser dropped the connection.");  
      }  

    </script>
</head>
<body>

<form id="form1" enctype="multipart/form-data" method="post" action="upload_commit.php" style = 'padding-left:100px; padding-right:100px;
border:#CCC thin solid;'>
  <div class="row">
    <label for="fileToUpload" style="color:#F00; font-size:18px;"><strong>Select a File to Upload : </strong> </label> <br /><br />
    <input class="input" type="file" name="myfile" id="fileToUpload" onchange="fileSelected();"/>  
	 
</div>
  <div class="row">
  <!-- <input class="input" type="button" onclick="uploadFile()" value="Upload" /> -->
  </div>
  <hr color="#FAAA3c">
  <div id="fileInfo">
    <div id="fileName"></div>
    <div id="fileSize"></div>
    <div id="fileType"></div>
  </div>
  <div style='border-bottom:thin dashed #FAAA3C; margin-top:20px;'> </div>
  <div class="row"></div>
  <div id="progressIndicator">
    <div id="progressBar" class="floatLeft">
    </div>
    <div id="progressNumber" class="floatRight">&nbsp;</div>
    <div class="clear"></div>
    <div>
      <div id="transferSpeedInfo" class="floatLeft" style="width: 80px;">&nbsp;</div>
      <div id="timeRemainingInfo" class="floatLeft" style="margin-left: 10px;">&nbsp;</div>
      <div id="transferBytesInfo" class="floatRight" style="text-align: right;">&nbsp;</div>
      <div class="clear"></div>
    </div>    
    <div id="uploadformResponse"></div>
    <div id="uploadResponse"></div>
  </div>  
</form>
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
