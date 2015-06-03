<?php 
include_once('./global.inc.php');
 include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>

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
                    <li class="active"><a href="#">Buy Bitcoin</a><i class="sprit-withdray"></i></li>
					<li><a href="#">Sell Bitcoin</a><i class="sprit-sell"></i></li>
					<li><a href="#">Send Money</a><i class="sprit-sendm"></i></li>
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
											<input type="text" placeholder="BTC15.00">
											<input type="text" placeholder="BTC15.00">
										</form>
									</div>
								</div>
								<div class="btcbox-row clearfix">
									<div class="btcbox pull-left">Use Wallet</div>
									<div class="btcbox-m pull-right">

										<form action="#" method="post">
											<select name="option-select" class="custom widthadjust2">
												<option value="">CoinXoom Cash Wallet</option>
												<option value="1">CoinXoom Cash Wallet</option>
												<option value="2">CoinXoom Cash Wallet</option>	
											</select>
										</form>
									</div>
								</div>
								<div class="btcbox-row buy2adjust clearfix">
									<div class="search-trust clearfix">
										<div class="btcbox pull-left">Seach Trusted Users</div>
										<div class="btcbox-m pull-right">
                                            <input type="checkbox" name="my-checkbox" checked>
										</div>
									</div>
									<div class="clearfix">
										<div class="btcbox pull-left">Buy to</div>
										<div class="btcbox-m inputconverter pull-right">
											<form action="#" method="post">
		                                       <div class="search-main">
	                                    		<input type="text" placeholder="search user" class="search-seller" id="photoSelect">
	                                    		<span class="hoverInput"><i></i></span>
	                                    	</div>
	                                    	<span class="recomnded">Recomended User</span>
	                                    	<button type="button" class="resume-btn buy2btn">BUY money</button>
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
$(document).ready(function(){



	



});
</script>
</body>
</html>