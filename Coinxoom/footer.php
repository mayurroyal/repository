<?php
@session_start(); 
?>
<footer>
	<div class="container primary-footer">
		<div class="row">
			<div class="col-sm-3 col-md-4">
				<a href="<?php echo $configVars['SiteUrlPath'];?>index.php" title="Welcome to Coinxoom" class="footer-logo"><img src="<?php echo $configVars['ImageUrlPath'];?>logo.png"/></a>
				<div class="footer-article">
					<p>About CoinXoom
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
				</div>
			</div>
			<div class="col-sm-2 col-md-2">
				<div class="footer-article">
					<span>Quick Links</span>
					<ul>
						<?php 
						    if(isset($_SESSION['UserId'])){ ?> 
							    <li> <a href="<?php echo $configVars['SiteUrlPath'];?>logout.php"> LogOut </a></li>
						 <?php }
						       else {?>
						       	 <li> <a href="<?php echo $configVars['SiteUrlPath'];?>login.php"> Login </a></li>
						      <?php }?>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>account.php">Account Settings</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>wallet.php">Wallet</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>buycoins.php">Buy</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>sellcoin.php">Sale</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>send_money.php">Send/Receive</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>deposite.php">Withdraw/Deposit</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2 col-md-2">
				<div class="footer-article">
					<span>Resources</span>
					<ul>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>under_process.php">About CoinXoom</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>under_process.php">Apps Page</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>under_process.php">Help</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>under_process.php">How To Buy</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>under_process.php">How To Sale </a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>under_process.php">How to send Money</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>under_process.php">How to withdraw money</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>blog.php">Blog</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2 col-md-2">
				<div class="footer-article">
					<span>Get in Toucj</span>
					<ul>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>contact.php">Contact Us</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>press.php">Press Page</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>careers.php">Careers</a></li>
						<li class="footer-socile">
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-skype"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="secondry-footer">
		<div class="container">
			<ul class="clearfix">
				<li><a href="<?php echo $configVars['SiteUrlPath'];?>terms.php">Terms and Policy</a></li>
				<li><a href="#">© coinzoom.org</a></li>
			</ul>
		</div>
	</div>
</footer><!--FOOTER END-->
<div class="overlay" id="img_upload"></div>
<div class="popup-one" id="img_upload1">
	<div class="popup-article">
		<span class="popup-h">Update Profile Picture <i class="popup-close">X</i></span>
		<div class="uplod-rowbox clearfix">
		  <form id="uploadForm" action="upload.php" method="post">
		  
			<div class="uplodimg">
				<span>uplod photo</span>
				<input type="file" id="file_id" name="userImage" class="browse-p"/>
			</div>
			<input type="submit" value="submit"  class="pup-btn"/>
		</form>
		</div>
	</div>
</div>