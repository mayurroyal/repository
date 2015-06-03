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
 
$arraysetting = $ObjBuycoins->SelectSearchTrustedUserSetting($UserId);
	$arraysetting = $arraysetting[0];
 	$ArrayUser = $ObjBuycoins->FetchtrustedNetwork($UserId);
  	$seller_userid = $ArrayUser[0]['userid'];
	$UserName = $ArrayUser[0]['UserName'];
	$Email = $ArrayUser[0]['Email'];
			//echo'<pre>';print_r($ArrayUser); die;				
 	if(isset($_POST['submit']))
	 {
//echo'<pre>';print_r("inside submit"); die;
		$amount     	= $_POST['amount'];
		$user_wallet    = $_POST['user_wallet'];
		$seller_userid  = $_POST['seller_userid'];
		$setting_name   = 'trusted_user';
		$setting_value  = 1;
	  	$ObjBuycoins->Buycoinsadd($UserId,$amount,$user_wallet,$seller_userid);
	    
	  	if (isset($_POST['setting_value']) && $_POST['setting_value'] = 'on')
		  { //Checks if action value exists
	  		//echo'<pre>';print_r('setting value is on'); die;
		    //$setting_value = 1;
			$ByuerSettingNameValidation  = $ObjBuycoins->ByuerSettingNameValidation($setting_name);
	  		
			//echo'<pre>';print_r($ByuerSettingValueValidation); die;
			//if(empty($ByuerSettingNameValidation)){
			//	$ByuerSettingValueValidation  = $ObjBuycoins->ByuerSettingValueValidation($setting_value);
				
				//if(empty($ByuerSettingValueValidation)){
		    $ObjBuycoins->InsertSearchTrustedUserSetting($UserId,$setting_name,$setting_value);
			//}else{
					//$Msg = "User network value exists";
				//}
		//}else{
					//$Msg = "User network exists";
			//	}

	  	   }
		else
		{
			//echo'<pre>';print_r("setting value is off"); die;
			
			$ObjBuycoins->UpdateSearchTrustedUserSetting($setting_name, $setting_value, $UserId);
		 }
	// if suceesfully inserted data into database, send confirmation link to email 
							
							// ---------------- SEND MAIL FORM ----------------
							
							// send e-mail to ...
							$to=$Email;
							
							// Your subject
							$subject="Your confirmation link here";
							
							// From
							$header="from: your '".$UserName."' <your '".$Email."'>";
							
							// Your message
							$message="Your Comfirmation link \r\n";
							$message.="Click on this link to activate your account \r\n";
							$message.="http://Localhost/Coinxoom/buycoin_request.php?passkey=$confirm_code";
							
							// send email
							$sentmail = mail($to,$subject,$message,$header);
							
							
							
							// if your email succesfully sent
							if($sentmail){
							echo "Your Confirmation link Has Been Sent To Your Email Address.";
							}
							else {
							echo "Cannot send Confirmation link to your e-mail address";
							}
				
	
	} 
}

?>

<?php include_once ($configVars['SiteBasePath'].'head_menu.php');?>

<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<aside class="profile-aside">
				<div class="wallet-row clearfix">
					<span>wallet</span>
					<button type="button" class="pull-right btn-wallet">go to wallet</button>
				</div>
				<div class="btc-row">
					<span>BTC - 0.003</span>
					<span>USD - 53.001</span>
				</div>
				<ul class="money-row" id="moneyrow">
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>deposite.php">Deposit Money</a><i class="sprit-deposit"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>withdraw_money.php">Withdraw Money</a><i class="sprit-buy"></i></li>
                    <li class="active"><a href="<?php echo $configVars['SiteUrlPath'];?>buycoins.php">Buy Bitcoin</a><i class="sprit-withdray"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>sellcoin.php">Sell Bitcoin</a><i class="sprit-sell"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>send_money">Send Money</a><i class="sprit-sendm"></i></li>
				</ul>
			</aside><!--profile-aside end-->

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
                                 			<input type="checkbox" class="_bootstap-checkbox" name="setting_value" <?php echo($arraysetting['setting_value'] == 1 ? "checked" : "") ?> />
										</div>
									</div>
                                    
                                    
                                    
                                 <!--div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Email</div>
									<div class="btcbox-m pull-right">

										
                                            <input type="text" placeholder="Email Id">
									
									</div>-->
								</div>
                                
                                
									<div class="btcbox-row clearfix">
										<div class="btcbox pull-left">Buy to</div>
                                        
										<div class="btcbox-m inputconverter pull-right">
											
                                       		<div class="search-main">
	                                    		<!--input type="text" placeholder="search user" class="search-seller" id="photoSelect"-->
                                                <select name="seller_userid" onChange="showUser(this.value)">
 
  												<option value="">Select a person:</option>
												<?php foreach($ArrayUser as $id => $row) { ?>
  												<option value="<?php echo $row['id'];?>"><?php echo $row['UserName'];?> </option>
 												 <?php } ?>
                                                 </select>
	                                    		<!--span class="hoverInput"><i></i></span-->
	                                    	</div>
                                           
	                                    	<span class="recomnded"><?php echo $Msg; ?></span>
	                                    	<button type="submit" name="submit" class="resume-btn buy2btn">BUY money</button>
                                        	
										</div>
									</div>
								
									<div class="adjust-a btcbox-row">
										<div class="btcbox"><!--span id="countdown" class="timer"--></span>Transaction Summary
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var $cb = $("._bootstap-checkbox"); 
		$cb.bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30, 
			onSwitchChange: function(event, state){
				//var $val = state ? 1 : 0;
				//$cb.val($val);
			}
		});
	});
</script>

<!--script>
var seconds = 600;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
setInterval(function () {alert("<--?php echo $row['UserName'] ;?>")}, 10000);


</script-->

<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>


</body>
</html>