<?php 
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'withdraw.class.php');

$ObjWithdraw = new Withdraw();
 include_once ($configVars['SiteBasePath'].'head_menu.php');
 
 $Msg = '';
$sendMail = 0;

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{  
 
	$UserId = $_SESSION['UserId'];
	$UserName = $_SESSION['UserName'];
	$Email = $_SESSION['Email'];
	$message = '';
	$setting_value = 0;
	
	$setting_value = empty($arraysetting) ? 1 : $arraysetting[0]['setting_value'];
	$FetchUser = $ObjWithdraw->FetchUser($UserId);
	
	function sendMailFun($to, $passkey, $UserName, $Email){
							
		// Your subject
		$subject="Your confirmation link here";
		
		// From
		$header="from: your '".$UserName."' <your '".$Email."'>";
		
		// Your message
		$message="Your Comfirmation link \r\n";
		$message.="Click on this link to activate your account \r\n";
		$message.="http://Localhost/Coinxoom/withdraw_request.php?passkey=".$passkey;
		
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
	    $WithdrawRow= $ObjWithdraw->GetWithdrawForPasskey($passkey);

	    return $WithdrawRow[0]; die;
	}
	
	if(isset($_POST['submit'])){

		$ip             = $_SERVER['REMOTE_ADDR'];
		$amount     	= $_POST['amount'];
		$transation_fee    = $_POST['transation_fee'];
		$total_amount    = $_POST['total_amount'];
		$withdraw_type     = $_POST['withdraw_type'];
		$agent_id         = $_POST['agent_id'];
		$setting_name   = 'Search_Trusted_Users';
		$seller_useremail 	= $_POST['seller_useremail'];
		$passkey        = md5(uniqid(rand()));
		$page_type  = 'Withdraw Money';
		
        
		//echo'<pre>';print_r($seller_useremail); die;
       
		if (isset($_POST['setting_value']) && $_POST['setting_value'] = 'on'){
		    $setting_value = 1;
		}else{
		 	$setting_value = 0;
		}
	
	$ObjWithdraw->WithdrawDetailAdd($UserId,$amount,$transation_fee,$total_amount,$withdraw_type,$agent_id,$passkey);
	$ObjWithdraw->InsertEscrow($UserId,$agent_id,$total_amount,$page_type);
	$sendMail = 1;
	  	//echo'<pre>';print_r($passkey); die;

	  	sendMailFun($seller_useremail, $passkey, $UserName, $Email);

	
	$alreadyExist = $ObjWithdraw->CheckIfUserExist($UserId, $agent_id);
	    //echo'<pre>';print_r($alreadyExist); die;
	  	if(empty($alreadyExist)){
	  		//echo'<pre>';print_r("user dont exists, insert it"); die;
	  		$ObjWithdraw->InsertSearchTrustedUserSetting($setting_name, $setting_value, $UserId,$agent_id,$page_type);
	  	}else{
	  		//echo'<pre>';print_r("User already exist, update it"); die;
	  		$ObjWithdraw->UpdateSearchTrustedUserSetting($setting_value,$UserId,$agent_id);
	  	}
	
}
}

function test($amt)
{
	$b=3;
	$c=$amt*$b;
	$d=$c/100;
	echo $d;
}


 ?>
<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>
			<div class="right-mainsection">
				<div class="account-arapper" style="display:block;">
					<div class="content-cover">
						<div class="account-accordia">withdraw Money</div>
						<p class="warning1 margin-adjust"><span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit.
								<a href="#">View Daily Limit</a></p>
						<div class="account-info deposite2">
							<form action="#" method="post">
							<div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Amount
									<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
								</div>
								<div class="btcbox-m inputconverter pull-right">
									
										<input type="text" placeholder="BTC15.00" name="amount" id="txt1"  onkeyup="sum();">
									
								</div>
							</div>
                            
                            
                            <div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Transation Fee</div>
								<div class="btcbox-m inputconverter pull-right">
									
							<input type="text" placeholder="BTC15.00" name="transation_fee" value="0" id="txt2"  onkeyup="sum();">

									
								</div>
							</div>
                            
                            
                            
                            <div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Total Amount</div>
								<div class="btcbox-m inputconverter pull-right">
									
										<input type="text" placeholder="BTC15.00" name="total_amount" id="txt3">
									
								</div>
							</div>
                            
                            
                            
                            <div class="withdraw2row clearfix">
									<div class="btcbox pull-left">Withdraw Type</div>
									<div class="btcbox-m pull-right">
										
										
											<select name="withdraw_type">
												
												<option value="1">Cash</option>
											</select>
										
									</div>
								</div>
                            
                            
                            
                            <div class="btcbox-row clearfix">
                            <div class="search-trust clearfix">
										<div class="btcbox pull-left">Seach Trusted Users</div>
										<div class="btcbox-m pull-right">
                                 		<input type="checkbox" class="_bootstap-checkbox" name="setting_value" <?php echo($setting_value == 1 ? "checked" : "") ?> />
										</div>
									</div>
                                    </div>
	
							<div class="btcbox-row clearfix">
								<div class="withdraw2row clearfix">
									<div class="btcbox pull-left">Send to</div>
									<div class="btcbox-m pull-right">
										
									
											 <select name="agent_id" id="setSelectedSeller">
	  												<option value="">Select a person:</option>
													<?php foreach($FetchUser as $id => $row) { ?>
	  												<option data-email="<?php echo $row['Email'];?>" value="<?php echo $row['Id'];?>"><?php echo $row['UserName'];?> </option>
	 												 <?php } ?>
                                                 </select>
										 <input type="hidden" name="seller_useremail" id="selectedSellerEmail" value="" />
									</div>
								</div>
								
								<div class="paypalbox">
									<!--span class="paypalbox-head">Paypall Account</span-->
									
									
										<div class="paypal-form clearfix">
											<span class="recomnded"><?php echo $Msg; ?></span>
											<button type="submit" name="submit" class="resume-btn depositeadjust">Withdraw money</button>
										</div>
							
								</div><!--paypalbox end-->
                                </form>
							</div><!--btcbox-row end-->

							<div class="adjust-a btcbox-row">
								<div class="btcbox">Withdraw Summary
									<span><small>USD 15.00</small> Deposit by <small>Jayson Chanchico</small> on Account number ending in <small>xx125</small></span>
								</div>
							</div>
						</div><!--account-info end-->
					</div><!--content-cover end-->
				</div><!--account-arapper end-->

				

				

				
			</div><!--right-mainsection end-->
		</div>
	</div>
</div><!--deposite-section end-->


	
</div><!--main-content-->
</div><!--wrapper end-->
<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
			var c = parseInt(txtFirstNumberValue) * 3 / 100;
			document.getElementById('txt2').value=c;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
            }
        }
        </script>
<?php include($configVars['SiteBasePath'].'footer.php') ?>
<input type="hidden" id="sentmail" value="<?php echo $sendMail;?> " />
<input type="hidden" id="passkey" value="<?php echo $passkey;?> " />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>

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