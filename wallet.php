<?php  include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>

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
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>depodite.php">Deposit Money</a><i class="sprit-deposit"></i></li>
					<li class="active"><a href="<?php echo $configVars['SiteUrlPath'];?>withdraw_money.php">Withdraw Money</a><i class="sprit-withdray"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>buycoins.php">Buy Bitcoin</a><i class="sprit-buy"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>sellcoin.php">Sell Bitcoin</a><i class="sprit-sell"></i></li>
					<li><a href="<?php echo $configVars['SiteUrlPath'];?>send_money.php">Send Money</a><i class="sprit-sendm"></i></li>
				</ul>
			</aside><!--profile-aside end-->
			<div class="right-mainsection">
				<div class="account-arapper" style="display:block;">
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