<?php @session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'blogpost.class.php');
$ObjBlogPost = new BlogPost();
$Msg = '';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Welcome to Coinxoom</title>
<link rel="stylesheet" type="text/css" href="<?php echo $configVars['CssUrlPath']; ?>style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div id="wrapper">
<?php include($configVars['SiteBasePath'].'indexheader.php') ?>
<div class="main-content blogpost-bg">
	<div class="breadcrum-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="breadcrum"><a href="#">Home</a>><a href="#">Press Release</a></div>
				</div>
			</div>
		</div>
	</div><!--breadcrum-section end-->	

	<div class="container latest-blog">
		<div class="row">
			<div class="col-sm-12 col-md-12"><h1>Latest blog</h1></div>
		</div>
		<div class="row">             <?php 

			$arraysetting = $ObjBlogPost->SelectBlogPost();
			$i=1;
									         foreach($arraysetting as $id => $row) {
			?>
			<div class="col-sm-4 col-md-4">
				<div class="latest-img"><img src="<?php echo $configVars['ImageUrlPath'];?>blog-images/<?php echo $row['image'];?>" alt="img" title=""></div>
				<div class="latest-title">
					<h6><?php echo $row['title'];?></h6>
					<p>By <a href="#"><?php echo $row['author_name'];?></a> <span><?php echo $row['add_date'];?></span></p>
					<p><?php echo substr($row['description'] , 0 ,  300 );?><a href="blog.php?id=<?php echo $row['id'];?>">Read More</a>
					</p>
				</div>
				<div class="social-row">
					<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>fb-btn.png" alt="img" title=""></a>
					<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>twi-btn.png" alt="img" title=""></a>
					<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>googl-btn.png" alt="img" title=""></a>
				</div>
			</div><?php } ?>
			
			
		</div>
	</div><!--latest-blog-->

	<div class="othreblog-section">
		<div class="container">
			<div class="row other-blog">
				<div class="col-sm-4 col-md-4"><h2>other blog</h2></div>
				<div class="col-sm-3 col-md-3 col-md-offset-5">
					<div class="sort-box pull-right">
						<form action="#" method="post" class="select-speed">
						<label for="speed" >sort by</label>
						  <select name="speed" id="speed">
						      <option selected="selected">date</option>
						      <option>date1</option>
						      <option>date2</option>
						      <option>date3</option>
					    </select>
						</form>
					</div>
				</div>
			</div>
   <?php 

			$arraysetting = $ObjBlogPost->SelectBlogPost1();
			$i=1;
									         foreach($arraysetting as $id => $row) {
			?>
			<div class="clearfix other-blog2">
				<div class="other-imgbox pull-left">
					<span><img src="<?php echo $configVars['ImageUrlPath'];?>blog-images/<?php echo $row['image'];?>"></span>
					<div class="social-row">
					<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>fb-btn.png" alt="img" title=""></a>
					<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>twi-btn.png" alt="img" title=""></a>
					<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>googl-btn.png" alt="img" title=""></a>
					</div>
				</div>
				<div class="othreblog-text">
					<div class="latest-title">
						<h5><?php echo $row['title'];?></h5>
						<p>By <a href="#"><?php echo $row['author_name'];?></a><span><?php echo $row['add_date'];?></span></p>
						<p><?php echo substr($row['description'] , 0 ,  300 );?> <a href="blog.php?id=<?php echo $row['id'];?>">Read More</a></p>
					</div>
				</div>
			</div> <?php } ?><!--other-blog2 end-->

			
		</div>
	</div><!--othreblog-section end-->

</div><!--main-content-->
</div><!--wrapper end-->

<?php include($configVars['SiteBasePath'].'footer.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath'];?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#speed").selectmenu();
});
</script>
</body>
</html>