<?php
include_once('./global.inc.php');  
include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>

<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>

			<div class="right-mainsection">

				<div class="account-arapper" style="display:block;">
					<div class="account-accordia clearfix">Transaction history <span class="back-view">- Last 7 days (Mar 9, 2015-Mar 16, 2015)</span> 
						<button type="button" class="pull-right btn-wallet">View Transaction</button>
					</div>
					<div class="content-cover">	
						<table cellpadding="0" width="100%" class="text-adjust trabsaction-list">
							<tr>
								<th>Date</th>
								<th>Amount</th>
								<th>Type</th>
								<th>User</th>
								<th>Payment Status</th>
								<th>Details <span class="diraction-airo"></span></th>
							</tr>
							<tr class="border-adjust">
								<td>Feb 1, 2015</td>
								<td>$150.15</td>
								<td>Dep.</td>
								<td><a href="#">Jayson C.</a></td>
								<td>DONE</td>
								<td>Need more detailes</td>
							</tr>
							<tr>
								<td>Feb 1, 2015</td>
								<td>$150.15</td>
								<td>With.</td>
								<td><a href="#">Jayson C.</a></td>
								<td>PENDING</td>
								<td>Need more detailes</td>
							</tr>
							<tr class="border-adjust">
								<td>Feb 1, 2015</td>
								<td>$150.15</td>
								<td>SlCoi</td>
								<td><a href="#">Jayson C.</a></td>
								<td class="failed">FAILED</td>
								<td>Need more detailes</td>
							</tr>
							<tr>
								<td>Feb 1, 2015</td>
								<td>$150.15</td>
								<td>ByCoi.</td>
								<td><a href="#">Jayson C.</a></td>
								<td class="failed">FAILED</td>
								<td>Need more detailes</td>
							</tr>
						</table><!--table end-->

						<div class="graph-section">
							<div class="account-accordia clearfix">Transaction history
								<div class="pull-right">

									<form action="#" method="post">
										<select name="option-select" class="custom graphselect">
											<option value="">Money withdraw in USD</option>
											<option value="1">Money withdraw in USD</option>
											<option value="2">Money withdraw in USD</option>	
										</select>
									</form>
								</div>
							</div>
							<div class="graph-map">
								<img src="<?php echo $configVars['ImageUrlPath']; ?>graph.jpg" alt="">
							</div>
						</div><!--graph-section end-->

					</div><!--content-cover ends-->
					<div class="viewall-row clearfix"><a hrer="#" class="btn-viewall">View All my transaction</a></div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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