<?php 
@session_start();
include_once('./global.inc.php');
include($configVars['SiteBasePath'].'head_menu.php'); 
if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{  
 
	$UserId = $_SESSION['UserId'];
	$UserName = $_SESSION['UserName'];
 }
?>
<div id="fb-root"></div>
<div id="fb-root"></div>

<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>

			<div class="right-mainsection">
				
				<div class="account-arapper" style="display:block;">
					<div class="account-accordia">Earn BItcoin</div>
					<div class="content-cover">
						<p class="warning1">lifetime earnings: 0 bits ≈ BTC 0</p>
						<div class="account-info">
							<div class="earn-row">
								<h3>Earn Money by inviting friends</h3>
								<p>Copy  your referral link.  This is Photoshop's version  of Lorem Ipsum. Proin<br/> gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
								<a href="http://localhost/Coinxoom/index.php?network=<?php echo"$UserName"; ?>" target="_blank">http://localhost/Coinxoom/index.php?network=<?php echo"$UserName"; ?></a>
							</div>

							<div class="earn-share">
								  
                        <span class="share-btn fbs-btn">
									<a href="http://www.facebook.com/share.php?u=http://localhost/Coinxoom/index.php?network=<?php echo"$UserName"; ?>#&title=[TITLE]" target="_blank" title="Facebook Code"><i class="fa fa-envelope"></i>Share On Facebook</a>
								</span>        
								
						<!-- <div class="fb-share-button" data-href="https://mettl.com" data-layout="button"></div> -->


<!--<a href="https://www.facebook.com/sharer/sharer.php?s=100&p[title]=EXAMPLE&p[summary]=EXAMPLE&p[url]=EXAMPLE&p[images][0]=EXAMPLE " target="_blank" title="Share With Friends"><i class="fa fa-facebook"></i>
 Share on Facebook
</a>-->	
							<span class="share-btn twit-btn">
									
<a href="http://twitter.com/home?status=http://localhost/Coinxoom/index.php?network=<?php echo"$UserName"; ?>#&title=[TITLE]" target="_blank title="Email Code"><i class="fa fa-twitter"></i>Tweet With Friends</a>
								</span>
								<span class="share-btn emai-btn">
					<a href="mailto:?subject=The%20subject%20of%20the%20email&amp;body=http://localhost/Coinxoom/index.php?network=<?php echo"$UserName"; ?>" title="Email Code"><i class="fa fa-envelope"></i>Share With Email</a>
                   
								</span>
							</div><!--earn-share end-->
							
							<div class="terms-row-wrapper">
								<div class="terms-row">
									<span>Affiliate program terms</span>
									<p>You can link to any individual page, such as country listing or payment method listing, or anything else on COINXOOOM.COM</p>
									<p>You will earn bitcoins from the users who </p>
									<ul>
										<li>1) arrive to the site through your affiliate lin</li>
										<li>2) register and</li>
										<li>3) make trades i.e. Buy/Sell bitcoins.</li>
									</ul>
									<p>A visitor will be considered as your affiliate for 4 months.</p>
									<p>Payouts will be paid daily to your LocalBitcoins wallet as bitcoins Commissions will be paid for one year from the user's registration. Commission is based on the income the new user brings for coinxoom.com (trading fees).</p>
									<p>Any foul play, such as misleading advertising, is forbidden. coinxoom.com has the right to disable any affiliate user at any given time.</p>
								</div><!--terms-row end-->

								<div class="terms-row">
									<span>Commission example</span>
									<p>You get two users registered on LocalBitcoins.com, and they do one trade valued 100 BTC. You earn 10% commission on the coinxoom.com trading fees from both participants, in total 20% of the coinxoom.com fee.<br/>Your earned sum is 0.20 BTC.Only finalized sales that go though our transaction process matter.</p>
								</div><!--terms-row end-->
							</div><!--terms-row-wrapper end-->

						</div><!--account-info end-->
					</div><!--content-cover end-->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">

window.fbAsyncInit = function(){
FB.init({
    appId: 'xxxxx', status: true, cookie: true, xfbml: true }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if(d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; 
    js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
var obj = {method: 'feed',link: url, picture: 'http://www.url.com/images/'+image,name: title,description: desc};
function callback(response){}
FB.ui(obj, callback);
}

$(document).ready(function(){
$('.fb-btn').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

return false;
});

});
</script>
</body>
</html>