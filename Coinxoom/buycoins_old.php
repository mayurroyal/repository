<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'buycoins.class.php');
$ObjBuycoins = new Buycoins();
$Msg = '';
$sendMail = 0;

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{  
 
	$UserId = $_SESSION['UserId'];
	$UserName = $_SESSION['UserName'];
	$Email = $_SESSION['Email'];
	$message;

	$arraysetting = $ObjBuycoins->SelectSearchTrustedUserSetting($UserId);
	//echo'<pre>';print_r($arraysetting); die;

	$setting_value = empty($arraysetting) ? 1 : $arraysetting[0]['setting_value'];
     //echo'<pre>';print_r($arraysetting); die;
 	$ArrayUser = $ObjBuycoins->FetchtrustedNetwork($UserId);
	//echo'<pre>';print_r($arraysetting); die;

 	function sendMailFun($to, $passkey, $UserName, $Email){
							
		// Your subject
		$subject="Your confirmation link here";
		
		// From
		$header="from: your '".$UserName."' <your '".$Email."'>";
		
		// Your message
		$message="Your Comfirmation link \r\n";
		$message.="Click on this link to activate your account \r\n";
		$message.="http://Localhost/Coinxoom/buycoins_request.php?passkey=".$passkey;
		
		// send email		

		try {
           $sentmail = mail($to,$subject,$message,$header);
        } catch (Exception $e) {
    		//echo 'Caught exception: ',  $e->getMessage(), "\n";
        }	

        //echo'<pre>';print_r($sentmail); die;
		
		// if your email succesfully sent
		if($sentmail == 1){
			$msg = "Your Confirmation link Has Been Sent To Your Email Address.";
		}else {
			$msg = "Cannot send Confirmation link to your e-mail address";
		}  

		//echo'<pre>';print_r($message); die;
 	}

 	if (isset($_POST["passkey"]) && $_POST['passkey'] != ''){ //Checks if action value exists
  		$passkey = $_POST['passkey'];
	    $BitcoinRow= $ObjBuycoins->GetBitCoinForPasskey($passkey);

	    return $BitcoinRow[0]; die;
	}

	if(isset($_POST['submit'])){

		$ip             = $_SERVER['REMOTE_ADDR'];
		$amount     	= $_POST['amount'];
		$user_wallet    = $_POST['user_wallet'];
		$seller_userid  = $_POST['seller_userid'];
		$setting_name   = 'Search_Trusted_Users';
		$seller_useremail 	= $_POST['seller_useremail'];
		$passkey        = md5(uniqid(rand()));
		$page_type  = 'Buy Coins';

		//echo'<pre>';print_r($seller_useremail); die;

		if (isset($_POST['setting_value']) && $_POST['setting_value'] = 'on'){
		    $setting_value = 1;
		}else{
		 	$setting_value = 0;
		}

	  	$ObjBuycoins->Buycoinsadd($UserId,$amount,$user_wallet,$seller_userid, $passkey);

	  	$sendMail = 1;
	  	//echo'<pre>';print_r($passkey); die;

	  	sendMailFun($seller_useremail, $passkey, $UserName, $Email);

		$alreadyExist = $ObjBuycoins->CheckIfUserExist($UserId, $seller_userid);
	    //echo'<pre>';print_r($alreadyExist); die;
	  	if(empty($alreadyExist)){
	  		//echo'<pre>';print_r("user dont exists, insert it"); die;
	  		$ObjBuycoins->InsertSearchTrustedUserSetting($setting_name, $setting_value, $UserId,$seller_userid,$page_type);
	  	}else{
	  		//echo'<pre>';print_r("User already exist, update it"); die;
	  		$ObjBuycoins->UpdateSearchTrustedUserSetting($setting_value,$UserId,$seller_userid);
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
<link rel="shortcut icon" href="<?php echo $configVars['ImageUrlPath']; ?>favicon.ico" type="x-icon">
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
<div class="main-content">
	<div class="account-banner">
		<div class="container">
			<div class="row accout-profile">
				<div class="col-sm-2 col-md-2"><figure><img src="<?php echo $configVars['ImageUrlPath']; ?>account-profile.jpg" alt="profile"></figure></div>
				<div class="col-sm-10 col-md-10">
					<div class="profile-heading">
						<h3>Jayson Chanchico</h3>
						<span>Verified! <a href="#">View Limits</a></span>
						<ul class="clearfix" id="profile-tab">
							<li><a href="<?php echo $configVars['SiteUrlPath'];?>profile.php">Profile</a></li>
							<li><a href="<?php echo $configVars['SiteUrlPath'];?>network.php">My Network</a></li>
							<li class="active"><a href="<?php echo $configVars['SiteUrlPath'];?>account.php">Account setting </a></li>
							<li><a href="<?php echo $configVars['SiteUrlPath'];?>security.php">Security setting</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--account-banner end-->

<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>

			<div class="right-mainsection">
				<div class="account-arapper" style="display:block;">
					<div class="account-accordia">BUY BITCOIN</div>
						<div class="content-cover">
							<p class="warning1"><span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit.
									<a href="#">View Daily Limit</a></p>

							<div class="account-info">
							<form action="#" method="post">
								<div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Amount to Buy
										<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
									</div>
									<div class="btcbox-m inputconverter pull-right">
										
											<input type="text" name="amount" placeholder="BTC15.00">
											<!--input type="text" placeholder="BTC15.00"-->
										
									</div>
								</div>
								<div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Use Wallet</div>
									<div class="btcbox-m pull-right">

										
											<!--select name="option-select" class="custom widthadjust2">
												<option value="">CoinXoom Cash Wallet</option>
												<option value="1">CoinXoom Cash Wallet</option>
												<option value="2">CoinXoom Cash Wallet</option>	
											</select-->
                                            <input type="text" placeholder="CoinXoom Cash Wallet" name="user_wallet" value="CoinXoom Cash Wallet">
									
									</div>
								</div>
								<div class="btcbox-row buy2adjust clearfix">
									<div class="search-trust clearfix">
										<div class="btcbox pull-left">Seach Trusted Users</div>
										<div class="btcbox-m pull-right">
                                 			<input type="checkbox" class="_bootstap-checkbox" name="setting_value" <?php echo($setting_value == 1 ? "checked" : "") ?> />
										</div>
									</div>
                                    
                                    
                                    
                                 <!--div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Email</div>
									<div class="btcbox-m pull-right">

										
                                            <input type="text" placeholder="Email Id">
									
									</div>-->
								</div>
                                
                                
									<div class="btcbox-row clearfix">
										<div class="btcbox pull-left">Buy from</div>
                                        
										<div class="btcbox-m inputconverter pull-right">
											
                                       		<div class="search-main">
	                                    		<!--input type="text" placeholder="search user" class="search-seller" id="photoSelect"-->
                                                <select name="seller_userid" id="setSelectedSeller">
	  												<option value="">Select a person:</option>
													<?php foreach($ArrayUser as $id => $row) { ?>
	  												<option data-email="<?php echo $row['Email'];?>" value="<?php echo $row['userid'];?>"><?php echo $row['UserName'];?> </option>
	 												 <?php } ?>
                                                 </select>
                                                 <input type="hidden" name="seller_useremail" id="selectedSellerEmail" value="" />

	                                    		<!--span class="hoverInput"><i></i></span-->
	                                    	</div>
                                           
	                                    	<span class="recomnded"><?php echo $Msg; ?></span>
	                                    	<button type="submit" name="submit" class="resume-btn buy2btn">BUY money</button>
                                        	
										</div>
									</div>
								
									<div class="adjust-a btcbox-row">
										<div class="btcbox"><span id="countdown" class="timer"></span>Transaction Summary
											<span><small>USD 15.00</small> Withdraw by <small>Jayson Chanchico</small> on Paypall at <small>jaysoncyhanchico@gmail.com</small></span>
										</div>
									</div>
								</form>
							</div><!--account-info end-->
						</div><!--content-cover ends-->
				</div><!--account-arapper end-->
			</div><!--right-mainsection end-->
		</div>
	</div>
</div><!--deposite-section end-->
	
</div><!--main-content-->
</div><!--wrapper end-->
<?php include($configVars['SiteBasePath'].'footer.php') ?>

<input type="hidden" id="sentmail" value="<?php echo $sendMail;?> " />
<input type="hidden" id="passkey" value="<?php echo $passkey;?> " />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">

	function checkCurrentStatus () {

		var data = {};
    	data["passkey"] = $('#passkey').val();
		//console.log(data);

		$.ajax({
			type: "POST",
			dataType: "json",
			url: "buycoins.php",
			data: data,
			success: function(data) {
				if(data == 1){

				}else{
					timerFun();
				}
				console.log("success");
			},error: function(jqXHR, textStatus){
			console.log("error");
				timerFun();
			}
		});
	}

	function timerFun () {
		setTimeout(function(){ 
			checkCurrentStatus();
		}, 10*1000);	
	}

	$(document).ready(function(){
		var $cb = $("._bootstap-checkbox"); 
		$cb.bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30, 
			onSwitchChange: function(event, state){
				//var $val = state ? 1 : 0;
				//$cb.val($val);
			}
		});

		$("#setSelectedSeller").change(function(){
			var email = $(this).find('option[value='+$(this).val()+']').data('email');
			$("#selectedSellerEmail").val(email);
		});

		if(parseInt($("#sentmail").val()) == 1){
			timerFun();
		}

	});
</script>
</body>
</html>