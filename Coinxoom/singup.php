<?php
	@session_start();
	include_once('./global.inc.php');
	include_once($configVars['ClassesBasePath'].'singup.class.php');
	$ObjSingup = new Singup();
	$Msg  = '';
	//request url
	if(isset($_REQUEST['network'])){
	   $Network  = $_REQUEST['network'];
	   $ArrParentid = $ObjSingup->NetworkFindParent($Network);
	   $ParentId    = $ArrParentid[0]['Id']; 
	}else{
	   $Network  = '';	
	   $ParentId = 0;
	}

	if(isset($_POST['submit'])){
		
		$Name     = $_POST['Name'];
		$Email    = $_POST['Email'];
		$Password = $_POST['Password'];
		
		if(trim($Name) == ''){
		   $Msg = 'Please Enter UserName';	
		}elseif(trim($Email) == ''){
		   $Msg = 'Please Enter Email';
		}elseif(trim($Password) == ''){
			$Msg = 'Please Enter Password'; 
		
		}else{
			$EmailValidation  = $ObjSingup->EmailValidation($Email);
			
			if(empty($EmailValidation)){
				$Uservalidation  = $ObjSingup->Uservalidation($Name);
				if(empty($Uservalidation)){
					
					$Userid = $ObjSingup->Registration($Name,$Email,$Password);
					//echo'<pre>';print_r($Userid); die;
					$ObjSingup->SetDefaultAccountSettings($Userid);
					$ObjSingup->SetDefaultNetworkSettings($Userid,$ParentId);
					$ObjSingup->VarificationSettings($Userid);
					
				}else{
					$Msg = "User id already exists";
				}
			}else{
				$Msg = "Email id already exists";
			}
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

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
			
					<div class="login-row singup-row">
						<form action="" method="post" onSubmit="return validate_contact_form(this);">
							<div class="login-top"><span>New Client?</span> Signup Now <span class="error-text"><?php echo $Msg;?></span></div>
							<ul class="logininput-row">
                            
								<li>
									<div class="log-input"><input type="text" name="Email" id="Email" placeholder="Email Address"><span class="login-icon"><i class="fa fa-envelope"></i></span></div>
								</li>
								<li>
									<div class="log-input"><input type="text" name="Name" id="Name" placeholder="User Name"><span class="login-icon"><i class="fa fa-envelope"></i></span></div>
								</li>

								<li>
									<div class="log-input">
										<input type="password" placeholder="Password" name="Password" id="Password" class="password-s"> 
										<span class="login-icon"><i class="fa fa-lock"></i></span>
										<span class="password-icon"><i class="fa fa-eye"></i> 
											<span class="tool-on">Show Password <i class="fa fa-sort-asc"></i></span>
										</span>
									</div>
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
								
								<li class="clearfix">
									<div class="singng-row">
										<p>By Singing up, your agree with the
										<a href="#">Terms and Condition</a> of <span>CoinXoom</span></p> 
									</div>
									<button type="submit" name="submit" class="btn-sing">Sign up</button>
								</li>
							</ul>
						</form>
					</div>
				</div><!--loginbox end-->
			</div>
		</div>
	</div>
</div><!--main-content-->
</div><!--wrapper end-->

<?php include($configVars['SiteBasePath'].'footer.php'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$('.password-icon').on('click',function(){
		$(this).parents('.log-input').find('.password-s').attr('type', 'text');
	});

});
</script>



<script type="text/javascript">
	function validateValues(str,validatetype){
		var arr = {
			email : /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
		};
		if(arr[validatetype].test(str)){
			return true;
		}
		return false;
	}
</script>

<script type="text/javascript">
	function validate_contact_form(form){
	  	var error_msg = "";
		var focus_element = null;

		if(form['Email'].value==''){
		  error_msg = "Enter Your Email";
		  $('.error-text').html(error_msg);
		  if(focus_element==null)focus_element=form['Email'];
		  focus_element.focus();
		  return false;
		}else if(!validateValues(form['Email'].value,'email')){
		  error_msg = "Enter Correct Email";
		  $('.error-text').html(error_msg);
		  if(focus_element==null)focus_element=form['Email'];
		  focus_element.focus();
		  return false;
		}

		if(form['Name'].value==''){
		  error_msg = "Enter your Name.";
		  $('.error-text').html(error_msg);
		  if(focus_element==null)focus_element=form['Name'];
		  focus_element.focus();
		  return false;
		}

		if(form['Password'].value==''){
		  error_msg = "Enter your Password.";
		  $('.error-text').html(error_msg);
		  if(focus_element==null)focus_element=form['Password'];
		  focus_element.focus();
		  return false;
		}

  	}
	
</script>

</body>
</html>