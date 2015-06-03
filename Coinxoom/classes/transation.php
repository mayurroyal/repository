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

if(isset($_POST['checkCurrentStatus'])){
	$BitcoinRow = $ObjBuycoins->GetBitCoinForPasskey($passkey);
	$bitcoinRow = $BitcoinRow[0];

	if(empty($bitcoinRow)){
    	echo 'not_valid'; die;
    } 

	$add_date_time = strtotime($bitcoinRow["add_date"]);
	$current_time = strtotime(date('Y-m-d H:i:s'));

    $timeDiferenceInMinute = round(abs($current_time - $add_date_time) / 60,0);

	//echo $timeDiferenceInMinute. " minute"; die;

	if ($timeDiferenceInMinute > 10) {
		echo 'time_up'; die;
	}else{
		echo $bitcoinRow["seller_aprovel"];  die;
	}

	//$return["json"] = json_encode($row);
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
									<?php
										if(empty($Msg)){
											?>
											<div id="countdown" class="timer"></div>
											<?php
										}else{
											echo $Msg;
										}
									?>
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

	function checkCurrentStatus () {
		var message;
		$.ajax({
			type: "post",
			data : {checkCurrentStatus : true},
			url: "transation.php",
			success: function(returnData) {
				if(returnData = "not_valid"){
					message = "Not a valid passkey";
				}else if(returnData = "time_up"){
					message = "time already finished";
				}else if(returnData = "1"){
					message = "seller approved";	
				}

				if(message){
					killTimer();
					$('#countdown').html(message);
				}

			},error: function(jqXHR, textStatus){
				console.log(textStatus);
			}
		});
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

	$(document).ready(function(){
		if($('#countdown'){
			seconds = 600;
			countdownTimer = setInterval(checkCurrentStatus, 10*1000);	
			timer = setInterval(showTime, 1*1000);
		}		
	});
</script>
</body>
</html>