<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'press.class.php');
$ObjPressRelease = new PressRelease();
$Msg = '';
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Welcome to Coinxoom</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div id="wrapper">
<?php include($configVars['SiteBasePath'].'header.php') ?>
<!--HEADER END-->

<div class="main-content blogpost-bg">
	<div class="breadcrum-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="breadcrum"><a href="<?php echo $configVars['SiteUrlPath'];?>index.php">Home</a>><a href="#">Press Release</a></div>
				</div>
			</div>
		</div>
	</div><!--breadcrum-section end-->	

	<div class="container press">
		<div class="row">
			<div class="col-sm-12 col-md-12"><h1>Press Release</h1></div>
		</div>
		<div class="row press-article">
			<div class="col-sm-12 col-md-12">
            <?php 

			$arraysetting = $ObjPressRelease->SelectPressRelease();
			$i=1;
									         foreach($arraysetting as $title => $row) {
			?>
				<div class="clearfix other-blog2">
					<div class="other-imgbox pull-left">
						<span><img src="<?php echo $configVars['ImageUrlPath'];?>blog-images/<?php echo $row['image'];?>"></span>
						<div class="social-row">
						<a href="#"><img src="images/fb-btn.png" alt="img" title=""></a>
						<a href="#"><img src="images/twi-btn.png" alt="img" title=""></a>
						<a href="#"><img src="images/googl-btn.png" alt="img" title=""></a>
						</div>
					</div>
					<div class="othreblog-text">
						<div class="latest-title">
							<h5><?php echo $row['title'];?> </h5>
							<p><?php echo substr($row['description'] , 0 ,  300 );?> <a href="pressrelease-detail.php?id=<?php echo $row['id'];?>">Read More</a></p>
						</div>
					</div>
				</div><!--other-blog2 end-->
             <?php }?>
				
			</div>
		</div>
	</div><!--press end-->

</div><!--main-content-->
</div><!--wrapper end-->

<?php include ($configVars['SiteBasePath'].'footer.php');?>
<!--FOOTER END-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['SiteUrlPath'];?>js/jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	


});
</script>
</body>
</html>