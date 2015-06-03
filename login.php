<?php

@session_start();

//if($_SESSION['login']){
//header("Refresh:0;URL=http://localhost/Coinxoom/login.php");return;
//}
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'login.class.php');
$ObjLogin = new Login();

$Msg = '';

if (isset($_POST['submit']) && $_POST['submit'] != '') {

	$Email      = $_POST['Email'];
	$Password   = $_POST['Password'];

	// To protect MySQL injection (more detail about MySQL injection)
	
	$ArrayUser  = $ObjLogin->LoginUser($Email,$Password);
	//echo'<pre>';print_r($ArrayUser); die;
	//echo'<pre>';print_r($ArrayUser[0]['UserName']); die;

	$arrayUser = $ArrayUser[0];

	if($arrayUser['UserName']){
		$_SESSION['UserId'] = $arrayUser['Id'];
		$_SESSION['Email']  = $arrayUser['Email'];
		$_SESSION['UserName']  = $arrayUser['UserName'];
		header("Location: account.php");
		die();
	}
	else {
		$Msg = "Wrong Username or Password";	
	}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Welcome to Coinxoom</title>
<link rel="shortcut icon" href="<?php echo $configVars['ImageUrlPath']; ?>x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo $configVars['CssUrlPath']; ?>style.css"/>
</head>

<body class="login-bg">
<div id="wrapper">
<?php include($configVars['SiteBasePath'].'header.php'); ?>



<div class="main-content">
	<div class="container login-section">
		<div class="row">
			<div class="col-md-6">
				<div class="login-article">
					<div class="login-heading"><small>Welcome to</small><span>COINXOOM</span></div>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris </p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="loginbox">
					<div class="login-row">
						<form method="post">
							<div class="login-top"><span>Client</span> Login <span class="error-text"><?php echo $Msg;?></span></div>
							<ul class="logininput-row">
								<li>
									<div class="log-input"><input type="text" name="Email" required placeholder="Email Address"><span class="login-icon"><i class="fa fa-envelope"></i></span></div>
								<li>
								<li>
									<div class="log-input password-width">
										<input type="password" name="Password" placeholder="Password" required class="password-s"> 
										<span class="login-icon"><i class="fa fa-lock"></i></span>
										<span class="password-icon"><i class="fa fa-eye"></i> 
											<span class="tool-on">Show Password <i class="fa fa-sort-asc"></i></span>
										</span>
									</div>
		
									<button type="submit" name="submit" value="submit"class="btn-log">log in</button>
								<li>
								<li>
									<div class="checkbox1">
									     <input type="checkbox" name="checkboxa" id="checkbox-d">
									     <label for="checkbox-d" class="css-label">Remember Me</label>
								   	</div>
								   	<a href="#" class="for-got">Forgot Password?</a>
								</li>
								<li>
									<span class="share-btn fb-btn">
										<a title="Share With Friends" href="#">
										<i class="fa fa-facebook"></i>
										Share With Friends
										</a>
									</span>

									<span class="share-btn twit-btn">
										<a title="Twit With Friends" href="#">
										<i class="fa fa-twitter"></i>
										Twit With Friends
										</a>
									</span>
								</li>
								<li><span class="sinup-row">New Client? <a href="<?php echo $configVars['UrlPath']; ?>singup.php" class="sinup-btn">Signup</a></span></li>
							</ul>
						</form>
					</div>

					
				</div><!--loginbox end-->
			</div>
		</div>
	</div>
</div><!--main-content-->
</div><!--wrapper end-->

<?php include($configVars['SiteBasePath'].'footer.php')?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"></script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	

	$('.password-icon').on('click',function(){
		$(this).parents('.log-input').find('.password-s').attr('type', 'text');
	
	});



});
</script>
</body>
</html>