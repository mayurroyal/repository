<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'buycoins.class.php');
$ObjBuycoins = new Buycoins();
$Msg = '';

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{  
	$UserId = $_SESSION['UserId'];
	$UserName = $_SESSION['UserName'];
	$Email = $_SESSION['Email'];

	if (empty($_SESSION['passkey'])) {
		$Msg = "No passkey found";
		$passkey = -1; 
		
	}else{
		$passkey = $_SESSION['passkey'];
		
	}	
	
}




#######################################  Code for buy coin start ##############################################
    if(isset($_POST['buycoin']) && $_POST['buycoin'] != ''){
       //echo"<pre>";print_r($_POST); die;
        $ip               = $_SERVER['REMOTE_ADDR'];
        $amount           = $_POST['amount'];
        $user_wallet      = $_POST['user_wallet'];
        $seller_userid    = $_POST['seller_userid'];
		$seller_useremail = $_POST['seller_useremail'];
        $setting_name     = 'search_trusted_users';
        $page_type        = 'buy_coins';

        $coinwallet = '20';

        if($_SESSION['Cash_wallet'] < $amount){
            echo "insufficient amount"; die;
        }

        if (isset($_POST['setting_value']) && $_POST['setting_value'] = 'on'){
             $setting_value = 1;
        }else{
             $setting_value = 0;
        }

        $TransactionId  = $ObjBuycoins->Buycoinsadd($UserId,$amount,$user_wallet,$seller_userid);
		                  $ObjBuycoins->AddToBuyCoinEscrow($TransactionId,$amount,$coinwallet,'0');
        $sendMail = 1;
          //echo'<pre>';print_r($passkey); die;

        //sendMailFun($seller_useremail, $passkey, $UserName, $Email);

        $alreadyExist = $ObjBuycoins->CheckIfUserExist($UserId, $setting_name);
        
        if(empty($alreadyExist)){
              
              $ObjBuycoins->InsertSearchTrustedUserSetting($UserId , $setting_name, $setting_value,$page_type);
        }else{
            
              $ObjBuycoins->UpdateSearchTrustedUserSetting($setting_value , $UserId  , $setting_name);
        }
    }


#######################################  Code for buy coin end ##############################################


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
<div class="overlay1"></div>
<div class="popup-two">
<div class="transition-timer">
	<div class="timer-t">
	 <?php
		if(empty($Msg)){
	 ?>
		<div id="countdown" class="timer"></div>
	 <?php
		}else{
			echo $Msg;
		}
	 ?>
	</div>
	<span class="btn-can">cancle</span>
	</form>
</div>
</div>
<?php if(isset($_POST['buycoin']) && $_POST['buycoin'] != ''){ ?>
  <input type="hidden" name="buy_transaction_id" id="buy_transaction_id" value="<?php echo $TransactionId; ?>"
<?php } ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">
	var countdownTimer;
	var timer;
	var seconds;

	function killTimer () {
		clearInterval(countdownTimer);
		clearInterval(timer);
	}

	function showTime () {
 		var minutes = Math.round((seconds - 30)/60);
	    var remainingSeconds = seconds % 60;
	    if (remainingSeconds < 10) {
	        remainingSeconds = "0" + remainingSeconds;  
	    }
	    $('#countdown').html(minutes + ":" + remainingSeconds);
	    if (seconds == 0) {
	        killTimer();
	        $('#countdown').html("Time up");
	    } else {
	        seconds--;
	    }
	}

	function checkbuycoinCurrentStatus () {
		var tid = $("#buy_transaction_id").val();
		//alert("buy_coin_request_status.php?transactionid="+tid);
		var message = '';
		$.ajax({
			type: "post",
			data : {transactionid : tid},
			url: "buy_coin_request_status.php",
			success: function(returnData) {
				if(returnData == "invalid_transaction"){
					message = "Some Error Occered, Please Try Again";
					killTimer();
					$('#countdown').html(message);
				}else if(returnData == "1"){
					message = "seller has approved your request";
					 killTimer();
					$('#countdown').html(message);
					UpdateBuyCoinTransaction(tid);
				}

			},error: function(jqXHR, textStatus){
				console.log(textStatus);
			}
		});
	}


	function UpdateBuyCoinTransaction(tid){
        alert("update_buy_coin_request.php?transactionid="+tid);
		$.ajax({
			type: "post",
			data : {transactionid : tid},
			url: "update_buy_coin_request.php",
			success: function(returnData) {
				if(returnData == "error"){
					message = "There is some error. Please try again";
					$('#countdown').html(message);
				}else if(returnData == "success"){
					message = "You have successfully purchased coins";
					$('#countdown').html(message);
				}

			},error: function(jqXHR, textStatus){
				console.log(textStatus);
			}
		});
	}


<?php
if(isset($_POST['buycoin']) && $_POST['buycoin'] != ''){ ?>

	$(document).ready(function(){
		if($('#countdown')){
			seconds = 600;
			countdownTimer = setInterval(checkbuycoinCurrentStatus, 10*1000);	
			timer = setInterval(showTime, 1*1000);
		}		
	});
	
<?php } ?>	
	
</script>

</body>
</html>