<?php session_start();
	error_reporting(0);
	include('current_url.php');		
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link rel="shortcut icon"  href="inc/fevicon.ico" type="image/x-icon"/>
<title>Vidcol</title> 
<style type="text/css">

a:link,a:visited,a:hover {text-decoration:none;color:#0033CC}
.videoListItem:active {background:#EEE}
.videoListItem:hover {background:#EEE;cursor:pointer}
.sprites {background:no-repeat}
.thumbnails {background:no-repeat;width:40px;height:30px;}
</style>


<style type="text/css"></style><style type="text/css"></style></head>
<body style="background-color:#fff;margin:0;font-family:sans-serif;font-size:80%;color:#333">
<table width="100%" cellspacing="0">
<tbody><tr>
<td valign="top" style="padding: 6px 0 2px 5px; font-size: 0">
<a href="index.php"><img src="inc/LOGO.png" alt="Vidcol logo" width="56" height="22" class="sprites" style="border:0;margin:0px;background-position:0px 0px;width:60px;height:22px;"></a>
<a id="top"></a>
</td>
<td align="right" valign="middle" style="padding-right: 3px">
<?php if(isset($_SESSION['username'])) echo '<b>'.$_SESSION['username'].'</b>'; else echo '<span style="color:#000000"><a href="login.php">Sign in</a></span>'; ?>
</td>
</tr>
</tbody></table>

<div align="center" style="text-align:center;margin:3px"><div align="center" style="font-size:small;font-style:normal;font-weight:normal;margin-top:3px;margin-bottom:3px"><br></div></div>
<div style="margin-left:3px;margin-right:3px">
<div style="border-top:1px solid #999;border-bottom: 1px solid #999;padding:10px;font-size:140%;background:#EEE;text-align:center">
<b>Mobile</b>
</div>

<!-- Search Form start -->
<form id="searchForm" action="search.php" method="get" style="padding:5px 0">
<div>
<input accesskey="*" name="q" type="text" size="15" maxlength="128" style="color:#333;font-family:sans-serif;width:65%;padding:0" value="">
<input type="submit" name="submit" value="Search" style="font-size:100%;padding:0;margin-top:2px;color:black">
</div>
</form>
<!-- Search From ends -->

</div>

<hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">
<div>
<!-- Video Listing starts here -->
<?php 

	include('index_rndm_vid.php');	
	include('index_catgry.php');
?>
<!-- Video Listing ends here -->
<br>
<hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">

<div style="border-top:1px solid #999;font-size:80%;background:#EEE;text-align:center">
<br>

<div>
<?php if(isset($_SESSION['username'])) echo 'Logged in as <b>'.$_SESSION['username'].'</b> (<a href="logout.php">Logout</a>)'; else echo '<span style="color:#000000"><a href="login.php">Sign in</a></span>'; ?>
</div>
<div>
<a href="terms.php">Terms</a> &amp; <a href="privacy.php">Privacy</a>
</div>
<br>
<b>Mobile</b>
<div dir="ltr">
©
2013 Vidcol
</div>
<br>
</div>
</body></html>
