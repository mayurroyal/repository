<?php  
include_once('./global.inc.php');
include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>
<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>

			<div class="right-mainsection">
				<div class="account-arapper" style="display:block;">
					<div class="account-accordia">trabsaction history</div>
					<div class="content-cover">
						<div class="trusted-box">Trusted Network</div>
						<ul class="trusted-list">
							<?php foreach($ArrayUser as $id => $row) { ?>
                            <li>
                            <div class="trusted-article">
									<figure><img src="<?php echo $configVars['ImageUrlPath'];?>image1.jpg" alt="img"><i></i></figure>
									<div class="trusted-info">
										<span><?php echo $row['UserName'] ?></span>
										<!--small>USD1 to BTC 0.1</small-->
										<!--span class="edit-user">EDIT USER</span-->
									</div>
								</div>
                               
							</li>
						 <?php }?>
						</ul>

						<div class="trusted-box clearfix">List of Network 
							<form action="#" method="post" class="pull-right">
								<div class="input-search"><input type="text" placeholder="Search User">
									<span><i class="fa fa-search"></i></span>
								</div>
							</form>
						</div>
                        
						<!--ul class="trusted-list">
                        <--?php foreach($ArrUser as $id => $row1) { ?>
							<li>
								<div class="trusted-article">
									<figure><img src="<--?php echo $configVars['ImageUrlPath'];?>image1.jpg" alt="img"><i></i></figure>
									<div class="trusted-info">
										<span><--?php echo $row1['UserName'] ?></span>
										<small>USD1 to BTC 0.1</small>
										span class="edit-user">EDIT USER</span>
									</div>
								</div>
							</li>
                            <--?php } ?>
						
						</ul>-->
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
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath'];?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath'];?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){




});
</script>
</body>
</html>