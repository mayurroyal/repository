<?php @session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'deposite.class.php');

$ObjDeposite = new Deposite();
$message = '';

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{   

$UserId = $_SESSION['UserId'];
$UserName = $_SESSION['UserName'];
$Email = $_SESSION['Email'];
$arraysetting = $ObjDeposite->SelectBankName();
 $ArrDeposite = $ObjDeposite->FetchUser($UserId);
 
 function sendMailFun($to, $passkey, $UserName, $Email){				
		// Your subject
		$subject="Your confirmation link here";
		// From
		$header="from: your '".$UserName."' <your '".$Email."'>";
	    // Your message
		$message="Your Comfirmation link \r\n";
		$message.="Click on this link to activate your account \r\n";
		$message.="http://Localhost/Coinxoom/deposite_request.php?passkey=".$passkey;
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
			$SendToRow= $ObjSendmoney->GetBitCoinForPasskey($passkey);
	
			return $SendToRow[0]; die;
	     }
 
	//echo'<pre>';print_r($arraysetting); die;				
     if(isset($_POST['submit'])){

        $amount     	= $_POST['amount'];
		$user_wallet    = $_POST['user_wallet'];
		$deposite_method  = $_POST['deposite_method'];
		$bank_name      =   $_POST['bank_name'];
		$seller_id        = $_POST['bank_name'];
		$passkey          = md5(uniqid(rand()));	
		$seller_useremail 	= $_POST['seller_useremail'];
		$page_type = 'Deposite Money';
		
		
		
		$ObjDeposite->DepositeBankAdd($amount,$user_wallet,$deposite_method,$bank_name);
		$ObjDeposite->InsertEscrow($UserId,$seller_id,$amount,$page_type);	
	    
		} 
		}
		 include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>
					
		<div class="deposite-section">
			<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>

			<div class="right-mainsection">

				<div class="account-arapper" style="display:block;">
					<div class="account-accordia">Deposite Money</div>
						<div class="content-cover">
							<p class="warning1 margin-adjust"><span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit.
									<a href="#">View Daily Limit</a></p>
							<div class="account-info deposite2">
              					<form action="transaction.php" method="post">
								<div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Amount
										<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
									</div>
									<div class="btcbox-m inputconverter pull-right">
										
											<input type="text" name="amount" placeholder="USD 15.00">
										
									</div>
								</div>
								<div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Deposit to wallet</div>
									<div class="btcbox-m pull-right">

								<input type="text" placeholder="CoinXoom Cash Wallet" name="user_wallet" value="CoinXoom Cash Wallet">
									</div>
								</div>
 
								<div class="btcbox-row clearfix">
									<div class="radio-wrapper clearfix">
										<div class="btcbox pull-left">Deposit Method
											<span>Current Bank Account: Ending in xx5869 <a href="#">Change Account</a></span>
										</div>
										<div class="btcbox-m pull-right">
									
                                            <select name="deposite_method" onchange='CheckAmount(this.value);'> 
                                                <option value="Bank Transfer">Bank Transfer</option>
                                                <option value="Cash" selected="selected">Cash Deposit Agent</option>
                                              </select>
                                            </div>
									</div></div>
                                    
                                    <div id="usd_wallet" class="btcbox-row clearfix hide">
                                            <div class="radio-wrapper clearfix">
                                                <div class="btcbox pull-left">Select Cash Deposite Agent
                                                 </div>
                                                 <div class="btcbox-m pull-right">
                                                                
                                                 <select name="bank_name" class="custom widthadjust2">
                                                 <option value="">select</option>
                                          			<?php 
													 $ArrDeposite1 = $ObjDeposite->FetchCDA($UserId);
                                                        $amount=$_GET["amount"];
														
													foreach($ArrDeposite as $id => $row1) 
													 $row2=$row1['Cash_wallet']; 
													 if($row2 >= $amount){
													  
                                                  foreach($ArrDeposite1 as $id => $row)
												  
													{ ?>
                                        			<option value="<?php echo $row['Id']; ?>"><?php echo $row['UserName']; ?></option>
                                              		<?php } ?>  
                                                 </select>
                                                 <?php }  ?>
                                                <input type="hidden" name="seller_useremail" id="selectedSellerEmail" value="" />
                                               </div>
                                                </div>
							                    </div>

                                    <div class="bank-row clearfix hide" id="btc_wallet">
										<ul class="bank-list pull-left"> 
                                       <?php $i=1;
									         foreach($arraysetting as $bank_name => $row) { ?>
								<li>
							   <div class="radio1 adjust">
								<input type="radio" name="bank_name" value="<?php echo $row['bank_name'];?>" id="radio<?php echo $i;?>">
													<?php echo $row['bank_name'];?> 
									</div>
									</li>
									<?php $i++;} ?>	
                                    </ul><!--ul end-->
									<div class="chat-row pull-right">
											
												<div class="text-astore-main">	
													<span>Western Union Chat Box</span>
														<div class="text-atore clearfix">
															<figure><img src="images/coment2.png" alt="img"></figure>
															<div class="article">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit </div>
														</div>
														<textarea placeholder="Enter Message" id="enter-textarea"></textarea></div>
                                                      
									</div>
                                    
                                    
								</div>
                             
                                  <div id="bank" class="bank-row clearfix">
								  </div><button type="submit" name="submit" onclick="secondPassed()" class="resume-btn enter-btn">Deposit money</button>
								</div>

							

								<div class="adjust-a btcbox-row">
									<div class="btcbox">Deposit Summary
										<span><small>USD 15.00</small> Deposit by <small>Jayson Chanchico</small> on Account number ending in <small>xx125</small></span>
									</div>
								</div></form>
							</div><!--account-info end-->
					</div><!--content-cover end-->
				</div><!--account-arapper end-->

				

			</div><!--right-mainsection end-->
		</div>
	</div>
</div><!--deposite-section end-->


	
</div><!--main-content-->
</div><!--wrapper end-->
<script type="text/javascript">

	var $btc_wallet=$('#btc_wallet');
	var $usd_wallet=$('#usd_wallet');

	function CheckAmount(val){
		if(val=='Bank Transfer'){
			$btc_wallet.removeClass('hide').prop("name", "bank_name");
			$usd_wallet.addClass('hide').removeProp("name");
		}
		else{
			$btc_wallet.addClass('hide').removeProp("name");
			$usd_wallet.removeClass('hide').prop("name", "bank_name");
		}
	}

</script>

<input type="hidden" id="sentmail" value="<?php echo $sendMail;?> " />
<input type="hidden" id="passkey" value="<?php echo $passkey;?> " />

<?php include($configVars['SiteBasePath'].'footer.php') ?>

<!--FOOTER END-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/bootstrap-switch.js"></script>
<script type="text/javascript" src="js/SelectBox.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/custome.js"></script>
<script>
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