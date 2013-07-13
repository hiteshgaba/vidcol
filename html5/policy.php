<?php session_start();
			error_reporting(0);

			include('current_url.php');			?>
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

	<div align="center"  style="text-align:left; line-height:1em; font-size:14px;margin-top:70px;" data-role="content">	
	<div style="margin-left:5%;margin-right:5%;">
<h1>Privacy Policy</h1>    
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
<span style="margin-left:20px">Like</span> most websites, our servers automatically record the page requests made when you visit our sites. These “server logs” typically include your web request, Internet Protocol address, browser type, browser language, the date and time of your request and one or more cookies that may uniquely identify your browser.</p>

<p><b>Sensitive personal information</b><br />
<span style="margin-left:20px">This</span> is a particular category of personal information relating to confidential medical facts, racial or ethnic origins, political or religious beliefs or sexuality.</p>

<p><b>Non-personally identifiable information</b><br />
<span style="margin-left:20px">THis</span> is information that is recorded about users so that it no longer reflects or references an individually identifiable user.</p>

<p><b>Pixel tag</b><br />
<span style="margin-left:20px">A</span> pixel tag is a type of technology placed on a website or within the body of an email for the purpose of tracking activity on websites, or when emails are opened or accessed, and is often used in combination with cookies.</p>
    
    
    </div>
	</div><!-- /content -->
<?php include('footer.php');?>
	<!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
