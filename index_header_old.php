<?php @session_start();?>
 <header>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3">
				<a href="<?php echo $configVars['SiteUrlPath'];?>index.php" title="Welcome to Coinxoom" class="logo img-responsive"><img src="<?php echo $configVars['ImageUrlPath'];?>logo.png" alt="logo"/></a>
			</div>
			<div class="col-sm-9 col-md-8 col-md-offset-1">
				<nav>
					<ul class="clearfix" id="menu">
						<li><a href="#">Buy/Sell<i class="fa fa-sort-desc"></i></a>
							<div class="submenu">
								<i></i>
								<ul>
									<li><a href="<?php echo ($configVars['SiteUrlPath'].'buycoins.php'); ?>">Buy Bit Coins</a></li>
									<li><a href="<?php echo ($configVars['SiteUrlPath'].'sellcoin.php'); ?>">Sale Bit Coins</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo $configVars['SiteUrlPath'];?>send_money.php">Send money </a></li>
						<li><a href="#">Resources<i class="fa fa-sort-desc"></i></a>
							<div class="submenu">
								<i></i>
								<ul>
									<li><a href="<?php echo $configVars['SiteUrlPath'].'under_process.php'; ?>">Resources</a></li>
									
								</ul>
							</div>
						</li>
						<li><a href="<?php echo ($configVars['SiteUrlPath'].'earn.php'); ?>">Earn Bitcoin</a></li>
						<li> 
						<?php if(isset($_SESSION['Email'] )){?> <a href="<?php echo ($configVars['SiteUrlPath'].'logout.php'); ?>"> Logout </a> 
						<?php } else { ?> <a href="<?php echo ($configVars['SiteUrlPath'].'login.php'); ?>"> SignIn </a> <?php }?> 
						</li>
						<!--<li><a href="#"><span title="<?php //if(isset($_SESSION['Email'])){ $s=$_SESSION['Email'];} else $s=""; echo $s; ?>" class="user-name"><?php // echo $s;; ?></span><i class="fa fa-sort-desc"></i></a>
							<div class="submenu paddingadjust">
								<i></i>
								<div class="mail-r">
									<p>This account is managed by</p>
								</div>
								<div class="buttorow">
									<button type="button" class="btn-addaccount">add account</button>
                                    <!--a href="logout.php"><button type="button" class="btn-signout">sign out</a></button-->
                                <!--    <button onclick="window.location.href='logout.php'" type="button" class="btn-signout">sign out</button>
								</div>
							</div>
						</li>-->
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header><!--HEADER END-->
