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
.thumbnails {background:no-repeat;width:120px;height:90px;}
</style>


<style type="text/css"></style><style type="text/css"></style></head>
<body style="background-color:#fff;margin:0;font-family:sans-serif;font-size:13px;color:#333">
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
<input accesskey="*" name="q" type="text" size="15" maxlength="128" style="color:#333;font-family:sans-serif;width:65%;padding:0" value="<?php if(isset($_GET['q'])) echo $_GET['q'];?>">
<input type="submit" name="submit" value="Search" style="font-size:100%;padding:0;margin-top:2px;color:black">
</div>
</form>
<!-- Search From ends -->

</div>

<hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">
<div>

<!-- Privacy Policy Start here -->

<div align="center"  style="text-align:left; line-height:1em; font-size:80%;margin-top:20px;" data-role="content">	
	<div style="margin-left:5%;margin-right:5%;">
<h2>Privacy Policy</h2>    
<p><b>Personal information</b><br />
This is information which you provide to us which personally identifies you, such as your name, email address or billing information, or other data which can be reasonably linked to such information by Google.</p>

<p><b>VidoCol Account</b><br />
<span style="margin-left:20px">You</span> may access some of our previlaged services by signing up for a VidCol Account and providing us with some personal information (typically your name, email address and a password). This account information will be used to authenticate you when you access our services and protect your account from unauthorized access by others. You can edit or terminate your account at any time through your Account settings.</p></p>

<p><b>Cookie</b><br />
<span style="margin-left:20px">A</span> cookie is a small file containing a string of characters that is sent to your computer when you visit a website. When you visit the website again, the cookie allows that site to recognize your browser. Cookies may store user preferences and other information. You can reset your browser to refuse all cookies or to indicate when a cookie is being sent. However, some website features or services may not function properly without cookies.</p>

<p><b>Anonymous identifier</b><br />
<span style="margin-left:20px">An</span> anonymous identifier is a random string of characters that is used for the same purposes as a cookie on platforms, including certain mobile devices, where cookie technology is not available.</p>

<p><b>IP address</b><br />
<span style="margin-left:20px">Every</span> computer connected to the Internet is assigned a unique number known as an Internet protocol (IP) address. Since these numbers are usually assigned in country-based blocks, an IP address can often be used to identify the country from which a computer is connecting to the Internet.</p>

<p><b>Server logs</b><br />
<span style="margin-left:20px">Like</span> most websites, our servers automatically record the page requests made when you visit our sites. These server logs typically include your web request, Internet Protocol address, browser type, browser language, the date and time of your request and one or more cookies that may uniquely identify your browser.</p>

<p><b>Sensitive personal information</b><br />
<span style="margin-left:20px">This</span> is a particular category of personal information relating to confidential medical facts, racial or ethnic origins, political or religious beliefs or sexuality.</p>

<p><b>Non-personally identifiable information</b><br />
<span style="margin-left:20px">THis</span> is information that is recorded about users so that it no longer reflects or references an individually identifiable user.</p>

<p><b>Pixel tag</b><br />
<span style="margin-left:20px">A</span> pixel tag is a type of technology placed on a website or within the body of an email for the purpose of tracking activity on websites, or when emails are opened or accessed, and is often used in combination with cookies.</p>
    
    
    </div>

<!-- Privacy Policy End here -->
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
