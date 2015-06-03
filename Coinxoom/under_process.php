<?php
@session_start();
include_once('./global.inc.php');
//include_once($configVars['ClassesBasePath'].'account.class.php');
//$ObjAccount = new Account();
//if(empty($_SESSION['UserName'])) {
  //  header("Location: login.php");
	//die();
//}


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
					<div class="breadcrum"><a href="<?php echo $configVars['SiteUrlPath'];?>index.php">Home</a> ><a href="#">UnderProcess</a></div>
				</div>
			</div>
		</div>
	</div><!--breadcrum-section end-->	

	<div class="container carerr-section">
		<div class="row career-text">
			<div class="col-sm-12 col-md-12">
				<h1>SORRY!!!!......    Under Process...</h1>
				<h3>Please Visit after Sometime.</h3>
				<h5>Thank you. </h5>
				<h6>EL Group International.</h6>
			</div>
		</div><!--career-text end-->

		

	



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