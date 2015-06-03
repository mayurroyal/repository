<?php
@session_start(); 
?>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3">
				<a href="<?php echo $configVars['SiteUrlPath'];?>index.php" title="Welcome to Coinxoom" class="logo img-responsive"><img src="<?php echo $configVars['ImageUrlPath'];?>logo.png" alt="logo"></a>
			</div>
			<div class="col-sm-9 col-md-8 col-md-offset-1">
				<nav>
					<ul class="clearfix" id="menu">
						<li><a href="<?php echo $configVars['SiteUrlPath'].'buycoins.php'; ?>">Buy Bit Coins </a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'].'sellcoin.php'; ?>">Sale Bit Coins </a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'].'send_money.php'; ?>">Send/Receive</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'].'under_process.php'; ?>">Resources</a></li>
						<li><a href="<?php echo $configVars['SiteUrlPath'].'earn.php'; ?>">Earn Bitcoin</a></li>
						<?php if(empty($_SESSION['UserId'])){ ?><li><a href="<?php echo $configVars['SiteUrlPath'].'login.php'; ?>">Sign in</a></li>
						<?php }
						else {?> <li><a href="<?php echo $configVars['SiteUrlPath'].'logout.php'; ?>">Sign Out</a></li> <?php
}						?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header><!--HEADER END-->