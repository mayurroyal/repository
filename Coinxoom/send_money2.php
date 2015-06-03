<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'sendmoney.class.php');
include_once ($configVars['SiteBasePath'].'head_menu.php');
$ObjSendmoney = new Sendmoney();
if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{  

	$UserId = $_SESSION['UserId'];
	$UserName = $_SESSION['UserName'];
	$Email = $_SESSION['Email'];
	$message = '';
	$setting_value = 0;

    $ArrSendmoney = $ObjSendmoney->FetchUser($UserId);

	if(isset($_POST['submit'])){

        if (isset($_POST['setting_value']) && $_POST['setting_value'] = 'on'){
	        $setting_value = 1;
	    }else{
	 	    $setting_value = 0;
	    }

		$amount     	  = $_POST['amount'];
		$send_form_wallet = $_POST['send_form_wallet'];
		$seller_id        = $_POST['seller_id'];
		$setting_name     = 'Search_Trusted_Users';
		$passkey          = md5(uniqid(rand()));	
		
		try{
			$ObjSendmoney->AddSendMoney($UserId,$send_form_wallet,$amount,$seller_id,$passkey);
		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
    	}	
		//echo'<pre>';print_r($_POST); die;
	}
}
?>
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
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>withdraw.php">Withdraw Money</a><i class="sprit-withdray"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>buycoins.php">Buy Bitcoin</a><i class="sprit-buy"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>sellcoin.php">Sell Bitcoin</a><i class="sprit-sell"></i></li>
					<li><a class="active" href="<?php echo $configVars['SiteUrlPath'];?>send_money.php">Send Money</a><i class="sprit-sendm"></i></li>
				</ul>
			</aside><!--profile-aside end-->
			<div class="right-mainsection">
				<div class="account-arapper" style="display:block;">
                <form action="#" method="post">

					<div class="account-accordia">Sell BITCOIN</div>
					<div class="content-cover">
						<p class="warning1"><span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit.
								<a href="#">View Daily Limit</a></p>
						<div class="account-info">
							
                            <div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Send from Wallet</div>
								<div class="btcbox-m pull-right">
									<select name="send_form_wallet" onchange='CheckAmount(this.value);'> 
                                        <option value="Bitcoin Wallet">Bitcoin Wallet</option>
                                        <option value="Cash Wallet" selected="selected">Cash Wallet</option>
                                      </select>
								</div>
							</div>
                            
                            
                            <div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Amount to Sell
									<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
								</div>
								<div class="btcbox-m inputconverter pull-right">
									 <input type="text" id="btc_wallet" placeholder="BTC 15.00" class="hide" />
                                     <input type="text" name="amount" id="usd_wallet" placeholder="USD 15.00"  />
								</div>
							</div>
							
							<div class="btcbox-row buy2adjust clearfix">
								<div class="search-trust clearfix">
									<div class="btcbox pull-left">Seach Trusted Users</div>
									<div class="btcbox-m pull-right">
                                    <input type="checkbox" class="_bootstap-checkbox" name="setting_value" <?php echo($setting_value == 1 ? "checked" : "") ?> />
										
									</div>
								</div>
								<div class="clearfix">
									<div class="btcbox pull-left">Send to</div>
									<div class="btcbox-m inputconverter pull-right">										
											<div class="search-main">
                                                <select name="seller_id"> 
                                                  	<option value="">select</option>
                                          			<?php foreach($ArrSendmoney as $id => $row) { ?>
                                        				<option value="<?php echo $row['Id']; ?>"><?php echo $row['UserName']; ?></option>
                                              		<?php } ?>     
                                              </select>
	                                    	</div>
	                                    	<span class="recomnded">Recomended User</span>
	                                    	<button type="submit" name="submit" value="submit" class="resume-btn buy2btn">Send money</button>
                                    	</form>
									</div>
								</div>
								
							</div>
					
							<div class="adjust-a btcbox-row">
								<div class="btcbox">Transaction Summary
									<span><small>USD 15.00</small> Withdraw by <small>Jayson Chanchico</small> on Paypall at <small>jaysoncyhanchico@gmail.com</small></span>
								</div>
							</div>
						</div><!--account-info end-->
					</div><!--content-cover ends-->
				</div><!--account-arapper end-->

				<!--account-arapper end-->

				<!--account-arapper end-->

				<!--account-arapper end-->

				<!--account-arapper end-->
				
			</div><!--right-mainsection end-->
		</div>
	</div>
</div><!--deposite-section end-->


	
</div><!--main-content-->
</div><!--wrapper end-->
<?php include($configVars['SiteBasePath'].'footer.php') ?>


<script type="text/javascript">

	var $btc_wallet=$('#btc_wallet');
	var $usd_wallet=$('#usd_wallet');

	function CheckAmount(val){
		if(val=='Bitcoin Wallet'){
			$btc_wallet.removeClass('hide').prop("name", "amount");
			$usd_wallet.addClass('hide').removeProp("name");
		}
		else{
			$btc_wallet.addClass('hide').removeProp("name");
			$usd_wallet.removeClass('hide').prop("name", "amount");
		}
	}

</script> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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