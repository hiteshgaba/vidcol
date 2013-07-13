<?php session_start();
			error_reporting(0);

			include('current_url.php');
			?>
			<?php include('likedis.php'); 
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
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>	
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

	
	<script src="index.js">
	</script>
	<script src="limittext.js">
	</script>
	<script src="ajax/review.js">
	</script>
	<script src="ajax/comment_post.js">
	</script>
	<script src="ajax/comment_update.js"></script>
	<script type="text/javascript" src="jwplayer.js"></script>
	<!---- start-->
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="no title" charset="utf-8">	
	<script type="text/javascript" charset="utf-8" src="moo4q/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="moo4q/mootools-base.js"></script>
	<script type="text/javascript" charset="utf-8" src="moo4q/Class.Mutators.jQuery.js"></script>
	<script type="text/javascript" charset="utf-8" src="classes/Tabs.js"></script>
	<script type="text/javascript" charset="utf-8" src="classes/Tabs.Ajax.js"></script>
	<script type="text/javascript" charset="utf-8" src="demo.js"></script>

	
	
	<!-- end-->
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

	<div align="center" style="margin-top:70px" data-role="content">	
	<div class="video_name"><?php error_reporting(0);$name=$_GET['name']; if(!$name) die('URL not found');  echo $name;?></div>
	<div style="width:90%;height:260px;background:#000;">
	<video id="container" src="inc/vS/<?php echo $category; ?>/<?php echo $name; ?>.mp4">Loading the player ...</video>
	<script type="text/javascript">
jwplayer("container").setup({
height: 260,
width: 340,
modes: [
{ type: "html5" },
{ type: "download"}
]
});
</script>

	</div>
	<div style="width:90%;height:auto;background:#ddd;text-align:left;font-family:helvetica;font-size:12px;padding-left:10px;">
	<?php include('url_check.php');?>
	<?php include('video_desc.php')?>
		
		
		<div style="margin-top:10px;">
		<?php include('likedis.php'); ?>
		<table style="width:100%;"><tr>
	
<td>
<div title="val=like&category=<?php echo $category; ?>&name=<?php echo $vname;?>" style="float:left;"  value="" onclick="showCustomer(this.title)" class="like" ></div>
<div title="val=dislike&category=<?php echo $category; ?>&name=<?php echo $vname;?>" style="float:left;margin-left:2px;"  value="" onclick="showCustomer(this.title)" class="dislike" ></div>
</td>

<td>
<div id="txtHint">
<?php include('like_check.php');?>
		

<div class="num"><div class="numlike" style="font-family:Arial, Helvetica, sans-serif;" >

<?php echo $lk;?> likes,</div><div class="numdislike" style="font-family:Arial, Helvetica, sans-serif;">&nbsp;<?php echo $dk;?> dislikes</div></div>
</div>
</td>	</tr>	</table>										</div>
		
		
		
		
		
		
		
		
		
	</div>
	<div id=pane class=pane>
		<div class=nav>
			<a href="#">Comments</a>
			<a style="float:right;" href="#">Related Videos</a>
		</div>
		<div class=section>
			<h2>Add your Comment...</h2>
			<?php include('comment_disp.php');?>
			</div>
		</div>
		<div class=section>
			<h1>More suggested videos...</h1>
			<?php include('suggestions.php');?>
		
		</div>
		
	</div>
	
	
	
	
	</div><!-- /content -->
	<?php include('footer.php');?>
	<!-- /footer -->
	
</div><!-- /page -->

</body>
</html>

