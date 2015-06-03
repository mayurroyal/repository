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
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>withdraw_money.php">Withdraw Money</a><i class="sprit-withdray"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>buycoins.php">Buy Bitcoin</a><i class="sprit-buy"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>sellcoin.php">Sell Bitcoin</a><i class="sprit-sell"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>send_money.php">Send Money</a><i class="sprit-sendm"></i></li>
				</ul>
			</aside><!--profile-aside end-->

			<div class="right-mainsection">
				<div class="account-arapper" style="display:block;">
					<div class="account-accordia">Find seller</div>
					<div class="content-cover">
						<div class="trusted-box">Seller</div>
						<div class="seller-row clearfix">
							<ul class="trusted-list sellerpage">
								<li>
									<div class="trusted-article">
										<figure><img src="<?php echo $configVars['ImageUrlPath']; ?>image1.jpg" alt="img"></figure>
										<div class="trusted-info">
											<span>Misty Carter</span>
											<small>USD1 to BTC 0.1</small>
											<button type="button" class="btn-sel">send</button>
										</div>
									</div>
								</li>
								<li>
									<div class="trusted-article">
										<figure><img src="<?php echo $configVars['ImageUrlPath']; ?>image2.jpg" alt="img"></figure>
										<div class="trusted-info">
											<span>Alfred Dean</span>
											<small>USD1 to BTC 0.1</small>
											<button type="button" class="btn-sel">send</button>
										</div>
									</div>
								</li>
								<li>
									<div class="trusted-article">
										<figure><img src="<?php echo $configVars['ImageUrlPath']; ?>image1.jpg" alt="img"></figure>
										<div class="trusted-info">
											<span>Misty Carter</span>
											<small>USD1 to BTC 0.1</small>
											<button type="button" class="btn-sel">send</button>
										</div>
									</div>
								</li>
								<li>
									<div class="trusted-article">
										<figure><img src="<?php echo $configVars['ImageUrlPath']; ?>image2.jpg" alt="img"></figure>
										<div class="trusted-info">
											<span>Alfred Dean</span>
											<small>USD1 to BTC 0.1</small>
											<button type="button" class="btn-sel">send</button>
										</div>
									</div>
								</li>
							</ul>
							<div class="seller-fillter">
								<span class="sel-heading">fillter seller</span>
								<ul class="seller-chck">
									<li>
										<div class="checkbox1">
										     <input type="checkbox" name="checkboxa" id="checkbox-1">
										     <label for="checkbox-1" class="css-label">Rating</label>
								   		</div>
									</li>
									<li>
										<div class="checkbox1">
										     <input type="checkbox" name="checkboxa" id="checkbox-2">
										     <label for="checkbox-2" class="css-label">Average Response time</label>
								   		</div>
									</li>
									<li>
										<div class="checkbox1">
										     <input type="checkbox" name="checkboxa" id="checkbox-3">
										     <label for="checkbox-3" class="css-label">Online status</label>
								   		</div>
									</li>
									<li>
										<div class="checkbox1">
										     <input type="checkbox" name="checkboxa" id="checkbox-4">
										     <label for="checkbox-4" class="css-label">Price/BTC (Exchange Rate )</label>
								   		</div>
									</li>
								</ul>
							</div>
						</div>
					</div><!--account-arapper end-->

				<div class="account-arapper">
					<div class="content-cover">
						<div class="account-accordia">withdraw Money</div>
						<p class="warning1 margin-adjust"><span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit.
								<a href="#">View Daily Limit</a></p>
						<div class="account-info deposite2">
							
							<div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Amount
									<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
								</div>
								<div class="btcbox-m inputconverter pull-right">
									<form action="#" method="post">
										<input type="text" placeholder="BTC15.00">
									</form>
								</div>
							</div>
	
							<div class="btcbox-row clearfix">
								<div class="withdraw2row clearfix">
									<div class="btcbox pull-left">Send to</div>
									<div class="btcbox-m pull-right">
										
										<form action="#" method="post">
											<select name="option-select" class="custom widthadjust2">
												<option value="">Bank Transfer</option>
												<option value="1">Bank Transfer1</option>
											</select>
										</form>
									</div>
								</div>
								
								<div class="paypalbox">
									<span class="paypalbox-head">Paypall Account</span>
									
									<form action="#" method="post">
										<div class="paypal-form clearfix">
											<div class="paypal-forminput">
												<label for="email">Email Address</label>
												<input type="text" placeholder="Eg. jaysonchanchico@gmail.com" id="email">
											</div>
											<button type="button" class="resume-btn depositeadjust">Withdraw money</button>
										</div>
									</form>
								</div><!--paypalbox end-->
							</div><!--btcbox-row end-->

							<div class="adjust-a btcbox-row">
								<div class="btcbox">Withdraw Summary
									<span><small>USD 15.00</small> Deposit by <small>Jayson Chanchico</small> on Account number ending in <small>xx125</small></span>
								</div>
							</div>
						</div><!--account-info end-->
					</div><!--content-cover end-->
				</div><!--account-arapper end-->

				<div class="account-arapper">
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

				<div class="account-arapper">
					<div class="account-accordia">Sell BITCOIN</div>
					<div class="content-cover">
						<p class="warning1">
							<span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit. <a href="#">View Daily Limit</a></p>
						<div class="account-info">
							<div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Amount to Sell
									<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
								</div>
								<div class="btcbox-m inputconverter pull-right">
									<form action="#" method="post">
										<input type="text" placeholder="BTC15.00">
										<input type="text" placeholder="USD15.00">
									</form>
								</div>
							</div>

							<div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Sell from Wallet
									<span>Sell from other wallet? <a href="#">Change Wallet</a></span>
								</div>
								<div class="btcbox-m pull-right">
									<form action="#" method="post">
										<select name="option-select" class="custom widthadjust2">
											<option value="">Coinxoom Cash Wallet</option>
											<option value="1">Coinxoom Cash Wallet</option>
											<option value="2">Coinxoom Cash Wallet</option>	
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
									<div class="btcbox pull-left">Sell to</div>
									<div class="btcbox-m inputconverter pull-right">
										<form action="#" method="post">
	                                        <div class="search-main">
	                                        	<div class="jScrollbar">
	                                        		<div class="jScrollbar_mask">
	                                        			<input type="text" placeholder="search user" class="search-seller" id="photoSelect">
	                                    		<span class="hoverInput"><i></i></span>

	                                        		</div>
	                                        	</div>
	                                    		
	                                    	</div>
	                                    	<span class="recomnded">Recomended User</span>
	                                  		<button type="button" class="resume-btn buy2btn">Send money</button>
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
					</div><!--content-cover end-->
				</div><!--account-arapper end-->

				<div class="account-arapper">
					<div class="account-accordia">Sell BITCOIN</div>
					<div class="content-cover">
						<p class="warning1"><span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit.
								<a href="#">View Daily Limit</a></p>
						<div class="account-info">
							<div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Amount to Sell
									<span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
								</div>
								<div class="btcbox-m inputconverter pull-right">
									<form action="#" method="post">
										<input type="text" placeholder="BTC15.00">
										<input type="text" placeholder="USD15.00">
									</form>
								</div>
							</div>
							<div class="btcbox-row clearfix">
								<div class="btcbox pull-left">Send from Wallet</div>
								<div class="btcbox-m pull-right">
									<form action="#" method="post">
										<select name="option-select" class="custom widthadjust2">
											<option value="">Coinxoom Cash Wallet</option>
											<option value="1">Coinxoom Cash Wallet2</option>
											<option value="2">Coinxoom Cash Wallet</option>	
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
									<div class="btcbox pull-left">Send to</div>
									<div class="btcbox-m inputconverter pull-right">
										<form action="#" method="post">

											<div class="search-main">
	                                    		<input type="text" placeholder="search user" class="search-seller" id="photoSelect">
	                                    		<span class="hoverInput"><i></i></span>
	                                    	</div>
	                                    	<span class="recomnded">Recomended User</span>
	                                    	<button type="button" class="resume-btn buy2btn">Send money</button>

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