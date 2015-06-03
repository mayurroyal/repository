<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'career.class.php');
$ObjCareer = new Career();
$Msg = '';
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to Coinxoom</title>
<link rel="shortcut icon" href="favicon.ico" type="<?php echo $configVars['ImageUrlPath'];?>x-icon">
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
<?php include($configVars['SiteBasePath'].'header.php') ?>

<div class="main-content blogpost-bg">
	<div class="breadcrum-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="breadcrum"><a href="<?php echo $configVars['SiteUrlPath'];?>index.php">Home</a>><a href="#">Careers</a></div>
				</div>
			</div>
		</div>
	</div><!--breadcrum-section end-->	

	<div class="container carerr-section">
		<div class="row career-text">
			<div class="col-sm-12 col-md-12">
				<h1>Careers</h1>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.<br/> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis<br/>sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi </p>
			</div>
		</div><!--career-text end-->
<?php 

			$arraysetting = $ObjCareer->Selectcareer();
			$i=1;
									         foreach($arraysetting as $title => $row) {
			?>
		<div class="row career-text">
			<div class="col-sm-12 col-md-12">
				<h5><?php echo $row['job_title'];?></h5>
				<div class="carrer-article">
				<p><?php echo $row['description'];?>  </p>
				</div>
				<ul class="jobtitle-list">
					<li>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </li>
					<li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </li>
					<li>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per</li>
				</ul>
				<button type="button" class="resume-btn">send resume</button>
			</div>
		</div><!--career-text end-->
<?php } ?>
		



	</div><!--press end-->

</div><!--main-content-->
</div><!--wrapper end-->
<?php include($configVars['SiteBasePath'].'footer.php') ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath'];?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	


});
</script>
</body>
</html>