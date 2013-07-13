<?php 
	session_start();
	error_reporting(0);
	include('current_url.php');
	include('likedis.php');
	include('url_check.php');
	
	
?>
		
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title><?php $name=$_GET['name']; if(!$name) die('URL not found');  echo $name; ?></title>  
<link rel="shortcut icon"  href="inc/fevicon.ico" type="image/x-icon"/>
<style type="text/css">

a:link,a:visited,a:hover {color:#0033CC;text-decoration:none}
.videoListItem:active {background:#EEE}
.videoListItem:hover {cursor:pointer;background:#EEE}
.sprites {background:no-repeat}
.thumbnails {background:no-repeat;width:40px;height:30px;}

</style>

<style type="text/css"></style><style type="text/css"></style></head>
<body style="background-color:#fff;margin:0;font-family:sans-serif;font-size:13px;color:#333">

<!-- Header starts here !-->
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
<!-- Header ends here !-->

<!-- Search From Starts here !-->
<form id="searchForm" action="search.php" method="get" style="padding:5px 0">
<div>
<input accesskey="*" name="q" type="text" size="15" maxlength="128" style="color:#333;padding:0;font-family:sans-serif;width:65%" value="">
<input type="submit" name="submit" value="Search" style="padding:0;color:black;margin-top:2px;font-size:100%">
</div>
</form>
</div>
<!-- Search Form ends here !-->

<!-- Video Section Starts here !-->
<hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">
<div style="margin-left:3px;margin-right:3px">
<div style="border-top:none;margin:3px 0;padding-top:8px;text-align:left">
<div dir="ltr" style="font-weight:bold;padding-bottom:1px">
<?php echo $name;?>
</div>
<table>
<tbody><tr valign="top">
<td align="left" width="">

<?php echo '<a href="rtsp://'.$rtsp_server.'/'.$category.'/'.$name.'.3gp"  type="video/3gp"> <img src="inc/vS/'.$thumb.'" alt="video" width="80" height="60" style="border:0;"></a>'; ?>
</td>
<td>
<div style="font-size:13px">
<div style="font-size:80%;padding-left:2px;text-align:left">
<div>

<span style="color: #006500"><?php echo $lk; ?></span> likes, <span style="color: #CB0000"><?php echo $dk; ?></span> dislikes
</div>
<div>
in <?php echo '<b>'.$category.'</b>';?>
</div>
by
<a style="color:blue">vidcol</a>

</div>
</div>
</td>
</tr>
</tbody></table>
</div>
<?php include('like_check.php');?>
<?php 
      $like = '?category='.$category.'&val=like&name='.$name;
      $unlike = '?category='.$category.'&val=dislike&name='.$name;
      $facebook = 'http://m.facebook.com/sharer.php?u='.$_SERVER['SERVER_NAME'].'/Vidcol/public_html/mobile/video.php?category='.$category.'&name='.$name;
      $twitter = 'http://twitter.com/home?status='.$_SERVER['SERVER_NAME'].'/Vidcol/public_html/mobile/video.php?category='.$category.'&name='.$name;
      
?>
<div><a href="<?php echo $like ?>"><span style="color: #006500">Like</span></a> | <a href="<?php echo $unlike ?> "><span style="color: #CB0000">Dislike</span></a></div>
<div><?php echo '<a href="rtsp://'.$rtsp_server.'/'.$category.'/'.$name.'.3gp"  type="video/3gp">Watch Video</a>';?>
</div>
<a href="#watch_actions">
Share Video
</a>
<br/>
<a href="#post_comment">
Comment
</a>
</div>
<br>
<div style="margin-left:3px;margin-right:3px">
<div dir="ltr" align="left">
<?php echo $desc; ?>
</div>
</div>
<br>
<a name="more"></a>
<!-- Video Section Ends here !-->

<!-- Related Videos Section !-->
<div style="border-top:1px solid #999;background:#EEE;font-weight:bold;padding:4px 6px">
Related Videos
</div>
<?php include('suggestions.php');?>
<!-- Related Video Section Ends Here !-->

<!-- Comments section starts here !-->
<div style="border-top:1px solid #999;background:#EEE;font-weight:bold;padding:4px 6px">
<a name="post_comment" id="post_comment"></a>
Comments
</div>
<?php include('comment_disp.php'); ?>

<!-- Comments section ends here!-->

<!-- Video sharing section starts here!-->
<br/>
Share Video
</div>
<a name="watch_actions" id="watch_actions"></a>
<div style="padding-bottom:0">
<div><a href="<?php echo $facebook; ?>">Facebook</a></div>
<div><a href="<?php echo $twitter ?>">Twitter</a></div>
</div>
</div>
<!-- Video sharing section ends here!-->

<hr size="1" noshade="noshade" color="999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">

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
