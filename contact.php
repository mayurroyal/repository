<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'contact.class.php');
$ObjContact = new Contact();
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
					<div class="breadcrum"><a href="#">Home</a>><a href="#">Press Release</a></div>
				</div>
			</div>
		</div>
	</div><!--breadcrum-section end-->	

	<div class="container contact-section">
		<div class="row">
			<div class="col-sm-12 col-md-12"><h1>Contact us</h1></div>
		</div>
         <?php 

			$arraysetting = $ObjContact->Selectcontact();
			$i=1;
									         foreach($arraysetting as $title => $row) 
			?>
		<div class="row">
			<div class="col-sm-5 col-md-5">
				<address class="contact-address">
					<h6>Address</h6>
					<small><?php echo $row['comp_name'];?></small>
					<p><?php echo $row['address'];?> </p>
					<span>Phone:<?php echo $row['phone'];?></span>
					<span>Fax:<?php echo $row['fax'];?></span>
					<span>Email:<?php echo $row['email'];?></span>
				</address>
			</div>
			<div class="col-sm-7 col-md-7">
				<form action="#" method="post">
					<ul class="contact-form">
						<li><span><i class="fa fa-user"></i></span><input type="text" placeholder="Name"></li>
						<li><span><i class="fa fa-envelope"></i></span><input type="text" placeholder="Email"></li>
						<li><span><i class="fa fa-phone"></i></span><input type="text" placeholder="Phone"></li>
						<li><span><i class="fa fa-pencil"></i></span><textarea placeholder="Message"></textarea></li>
						<button type="button" class="btn-send">send</button>
					</ul>
				</form>
			</div>
		</div>
	</div><!--contact-section end-->
</div><!--main-content-->
</div><!--wrapper end-->

<?php include($configVars['SiteBasePath'].'footer.php') ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['ImageUrlPath'];?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['ImageUrlPath'];?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['ImageUrlPath'];?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	


});
</script>
</body>
</html>