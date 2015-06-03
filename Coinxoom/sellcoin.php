<?php 
@session_start();
 include_once('./global.inc.php');
  
include_once($configVars['ClassesBasePath'].'sellcoins.class.php');
$ObjSellcoins = new Sellcoins();
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

	$arraysetting = $ObjSellcoins->SelectSearchTrustedUserSetting($UserId);
	//echo'<pre>';print_r($arraysetting); die;

	$setting_value = empty($arraysetting) ? 1 : $arraysetting[0]['setting_value'];

 	$ArrayUser = $ObjSellcoins->FetchtrustedNetwork($UserId);
	//echo'<pre>';print_r($ArrayUser); die;

 	function sendMailFun($to, $passkey, $UserName, $Email){
							
		// Your subject
		$subject="Your confirmation link here";
		
		// From
		$header="from: your '".$UserName."' <your '".$Email."'>";
		
		// Your message
		$message="Your Comfirmation link \r\n";
		$message.="Click on this link to activate your account \r\n";
		$message.="http://Localhost/Coinxoom/sellcoin_request.php?passkey=".$passkey;
		
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
        
		if(isset($_POST['amount']) && $_POST['amount'] > 0){
        $UserRow = $ObjBuycoins->ValidAmount($UserId);
        $userRow = $UserRow[0];
        $_SESSION['Coin_wallet'] = $userRow["Coin_wallet"];

        echo $userRow["Coin_wallet"]; die;
		//echo'<pre>';print_r($message); die;
 	}
	

 /*	if (isset($_POST["passkey"]) && $_POST['passkey'] != ''){ //Checks if action value exists
  		$passkey = $_POST['passkey'];
	    $BitcoinRow= $ObjSellcoins->GetBitCoinForPasskey($passkey);

	    return $BitcoinRow[0]; die;
	}*/
   /*
	if(isset($_POST['submit'])){

		$ip             = $_SERVER['REMOTE_ADDR'];
		$amount     	= $_POST['amount'];
		$user_wallet    = $_POST['user_wallet'];
		$buyer_userid  = $_POST['buyer_userid'];
		$setting_name   = 'Search_Trusted_Users';
		$buyer_useremail 	= $_POST['buyer_useremail'];
		$passkey        = md5(uniqid(rand()));
		$page_type  = 'Sell Coins';

		//echo'<pre>';print_r($passkey); die;

		if (isset($_POST['setting_value']) && $_POST['setting_value'] = 'on'){
		    $setting_value = 1;
			//echo'<pre>';print_r($setting_value); die;
		}else{
		 	$setting_value = 0;
			
		}

	  	$ObjSellcoins->Sellcoinsadd($UserId,$amount,$user_wallet,$buyer_userid,$passkey);

	  	$sendMail = 1;
	  	//echo'<pre>';print_r($passkey); die;

	  	sendMailFun($buyer_useremail, $passkey, $UserName, $Email);

		$alreadyExist = $ObjSellcoins->CheckIfUserExist($UserId, $buyer_userid);
	    //echo'<pre>';print_r($alreadyExist); die;
	  	if(empty($alreadyExist)){
	  		//echo'<pre>';print_r("user dont exists, insert it"); die;
	  		$ObjSellcoins->InsertSearchTrustedUserSetting($setting_name,$setting_value,$UserId,$buyer_userid,$page_type);
	  	}else{
	  		//echo'<pre>';print_r("User already exist, update it"); die;
	  		$ObjSellcoins->UpdateSearchTrustedUserSetting($setting_value,$UserId,$buyer_userid);
	  	}
	}
	
	
	*/
}
}
 ?>


<?php include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>
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
							<form action="transaction.php" method="post">
								<div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Amount to Buy
										<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
									</div>
									<div class="btcbox-m inputconverter pull-right">
										
											<input id="amountTB" type="text" name="amount" placeholder="BTC15.00">
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
                                    
                                    
                                
								</div>
                                
                                
									<div class="btcbox-row clearfix">
										<div class="btcbox pull-left">Sell to</div>
                                        
										<div class="btcbox-m inputconverter pull-right">
											
                                       		<div class="search-main">
	                                    		<!--input type="text" placeholder="search user" class="search-seller" id="photoSelect"-->
                                                <select name="buyer_userid" id="setSelectedBuyer">
	  												<option value="">Select a person:</option>
													<?php foreach($ArrayUser as $id => $row) { ?>
	  												<option data-email="<?php echo $row['Email'];?>" value="<?php echo $row['userid'];?>"><?php echo $row['UserName'];?> </option>
	 												 <?php } ?>
                                                 </select>
                                                 <input type="hidden" name="buyer_useremail" id="selectedBuyerEmail" value="" />

	                                    		<!--span class="hoverInput"><i></i></span-->
	                                    	</div>
                                           
	                                    	<span class="recomnded"><?php echo $Msg; ?></span>
	                                    	<button type="submit" name="submit" class="resume-btn buy2btn">Send money</button>
                                        	
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
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"></script>')</script>
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

        $("#setSelectedSeller").change(function(){
            var email = $(this).find('option[value='+$(this).val()+']').data('email');
            $("#selectedSellerEmail").val(email);
        });

        $("#amountTB").blur(function (e) {
            var $this = $(this);
            var filledAmount = $this.val();

            if(filledAmount && parseInt(filledAmount) > 0){
                var filledAmount = parseInt(filledAmount);

                $.ajax({
                    type: "post",
                    data : {amount : filledAmount},
                    url: "buycoins.php",
                    success: function(returnData) {
                        console.log(returnData);
                        if(parseInt(returnData) < filledAmount){
                            message = "insufficient amount";    
                            alert(message);
                        }else{
                            $("#submitButton").removeAttr("disabled");
                        }
                    },error: function(jqXHR, textStatus){
                        console.log(textStatus);
                    }
                });
            }else{
                alert("Not a valid amount");
                //$("#errorMessage").html("Not a valid amount");
            }
        });

    });

$(document).ready(function(){


/* CREATE SEARCH USER SELECT*/
	var data = [
		{"label":"Aragorn", "actor":"profil"},
		{"label":"Arwen", "actor":"pro-2"},
		{"label":"Bilbo Baggins", "actor":"profil"},
		{"label":"Boromir", "actor":"pro-2"},
		{"label":"Frodo Baggins", "actor":"profil"},
		{"label":"Gandalf", "actor":"pro-2"},
		{"label":"Gimli", "actor":"profil"},
		{"label":"Gollum", "actor":"pro-2"},
		{"label":"Legolas", "actor":"profil"},
		{"label":"Meriadoc Merry", "actor":"pro-2"},
		{"label":"Peregrin Pippin", "actor":"profil"},
		{"label":"Samwise Gamgee", "actor":"pro-2"},
		{"label":"Legolas", "actor":"profil"},
		{"label":"Meriadoc Merry", "actor":"pro-2"},
		{"label":"Peregrin Pippin", "actor":"profil"},
		{"label":"Samwise Gamgee", "actor":"pro-2"}
		];
		
		$( "#photoSelect" ).autocomplete(
	{
		source:data,
		select: function( event, ui ) {
			$( "#photoSelect" ).val( ui.item.label)
			.attr('style', 'background-image: url(images/select/'+ui.item.actor+'.jpg'+'); background-repeat: no-repeat;');			
			return false;
		},
		open: function( event, ui ) {
			$('.ui-autocomplete').wrapInner('<div class="scroll-menu"></div>').append('<button type="button" class="btn-fi-seler"><i class="fa fa-search"></i> find seller</button>');
		}
	}).data( "uiAutocomplete" )._renderItem = function( ul, item ) {
		return $( "<li></li>" )
			.data( "item.autocomplete", item )
			.addClass('listMenu')
			.attr('style', 'background-image: url(images/select/'+item.actor+'.jpg'+'); background-repeat: no-repeat;')
			.append(item.label)			
			.appendTo( ul );
		};
		
		$( "#photoSelect" ).on('keyup', function(){
			if($(this).val() == ''){
				$(this).removeAttr('style');
			}
		});
		/* CREATE SEARCH USER SELECT END*/



});
</script>

</body>
</html>