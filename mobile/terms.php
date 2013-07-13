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

<!-- Terms Start here -->
<div align="center" style="margin-top:20px;margin-left:5%;margin-right:5%;text-align:left; line-height:1em; font-size:80%" data-role="content">	
     
<h2>Terms of Service</h2>
<p><b style="">Your Acceptance</b></br>
<span style="margin-left:20px">By</span> using or visiting the website or any of our data feeds, and services provided to you through this website (collectively the "Service") you signify your agreement to 
<li>These terms and conditions (the "Terms of Service"),</li>
<li>Our Privacy Policy, found at <a href="policy.php">http://m.vidcol.com/policy.php</a> and incorporated herein by reference.</li></p>

<p><b>Services</b><br>
<span style="margin-left:20px">These</span> Terms of Service apply to all users of the Service. "Content" includes the text, scripts, photos, sounds, music, videos and other materials you may view on. 
The Service includes all aspects of this website, including all applications.</p>

<p><b>License</b>
<li>You may watch an ordered item of Pay Content only for personal, non-commercial use.</li>
<li>You agree not to display Pay Content in whole or in part for any public presentation even if no fee is charged.</li>
<li>You are receiving a license under copyright to the Pay Content and all rights, not expressly granted to you in these Terms are reserved by VidCol and its licensors.</li>
<li>If you violate any of the terms and conditions of the Pay Content Terms, your rights will immediately terminate and we may terminate your access to the Pay Content, the Service and/or your account without notice and without refund to you.</li>

<p><b>User Account</b><br>
<span style="margin-left:20px">In</span> order to access some features of the Service, you will have to create a account. You may never use another's account without permission. 
You are solely responsible for the activity that occurs on your account, and you must keep your account password secure.

<p><b>Limitation of Liability</b><br>
<span style="margin-left:20px">TO</span> THE FULLEST EXTENT PERMITTED BY LAW, IN NO EVENT SHALL VIDCOL, ITS OFFICERS, DIRECTORS, EMPLOYEES, OR AGENTS, BE LIABLE TO YOU FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, LOSSES OR EXPENSES OR CONSEQUENTIAL DAMAGES WHATSOEVER RESULTING FROM ANY (I) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT, (II) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF OUR SERVICES, (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (IV) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM OUR SERVICES, (IV) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE, WHICH MAY BE TRANSMITTED TO OR THROUGH OUR SERVICES BY ANY THIRD PARTY, AND/OR (V) ANY ERRORS OR OMISSIONS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF YOUR USE OF ANY CONTENT POSTED, EMAILED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SERVICES, WHETHER BASED ON WARRANTY, CONTRACT, TORT, OR ANY OTHER LEGAL THEORY, AND WHETHER OR NOT THE COMPANY IS ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.

<p><b>Ability to Accept Terms of Service</b><br>
<span style="margin-left:20px">You</span> affirm that you are either more than 18 years of age, or an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in these Terms of Service, and to abide by and comply with these Terms of Service. In any case, you affirm that you are over the age of 13, as the Service is not intended for children under 13. If you are under 13 years of age, then please do not use the Service. There are lots of other great web sites for you. Talk to your parents about what sites are appropriate for you.We provide these Terms of Service with our Service so that you know what terms apply to your use. You acknowledge that we have given you a reasonable opportunity to review these Terms of Service and that you have agreed to them.

<p><b>Assignment</b></br>
<span style="margin-left:20px">These</span> Terms of Service, and any rights and licenses granted hereunder, may not be transferred or assigned by you,to anyone else without restriction.
     
	</div>
<!-- Terms End here -->
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
