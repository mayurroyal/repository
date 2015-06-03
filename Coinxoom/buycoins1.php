<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'buycoins.class.php');
$ObjBuycoins = new Buycoins();
if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{   

 $UserId = $_SESSION['UserId'];
 
$arraysetting = $ObjBuycoins->SelectSearchTrustedUserSetting($UserId);

	$arraysetting = $arraysetting[0];
	//echo'<pre>';print_r($arraysetting['buyer_userid']); die;

    // update enable disable buttons
  

	

	  if (isset($_POST["setting"])!= ''){ //Checks if action value exists
	    $setting_value = $_POST['search_trusted_user'];
  		$setting_name = 'search_trusted_user';
  		
	    $ObjBuycoins->UpdateSearchTrustedUserSetting($setting_name, $setting_value, $UserId);
	}else
	{
		$ObjBuycoins->InsertSearchTrustedUserSetting($UserId,$setting_name,$setting_value);
		}

 // display detail

 
 $ArrayUser = $ObjBuycoins->FetchtrustedNetwork($UserId);
  $seller_userid = $ArrayUser[0]['userid'];
    
	 if(isset($_POST['submit'])){
		
		$amount     = $_POST['amount'];
		$user_wallet    = $_POST['user_wallet'];
		$seller_userid = $_POST['seller_userid'];
	  $ObjBuycoins->Buycoinsadd($UserId,$amount,$user_wallet,$seller_userid);
	  
	 
	 
	 
	 
	 
		
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
								<div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Amount to Buy
										<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
									</div>
									<div class="btcbox-m inputconverter pull-right">
										<form action="#" method="post">
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
                                           
                                 <input type="checkbox" class="_bootstap-checkbox" name="search_trusted_user" <?php echo($arraysetting['setting_value'] == 1 ? "checked" : "") ?> />
										</div>
									</div>
                                    
                                    
                                    
                                 <!--div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Email</div>
									<div class="btcbox-m pull-right">

										
                                            <input type="text" placeholder="Email Id">
									
									</div>
								</div-->
                                
                                
									<div class="clearfix">
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
                                           
	                                    	<span class="recomnded">Recomended User</span>
	                                    	<button type="submit" name="submit" class="resume-btn buy2btn">BUY money</button>
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


function saveAccountSetting(columnName, columnValue){
	var data = {};
    data["setting"] = [columnName, columnValue];
	console.log(data);

    $.ajax({
      type: "POST",
      dataType: "json",
      url: "bitcoins.php", //Relative or absolute path to response.php file
      data: data,
      success: function(data) {
    	console.log("success");
      },error: function(jqXHR, textStatus){
		console.log("error");
      }
    });

}

function onSwitchChange(event, state){
	console.log("name > " + event.currentTarget.name + " value > " + state);
	saveAccountSetting(event.currentTarget.name, state ? 1 : 0)
};

$(document).ready(function(){

	$("._bootstap-checkbox").bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30, onSwitchChange: onSwitchChange});



});
</script>
</body>
</html>