<?php @session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'security.class.php');

$ObjSecurity = new Security();
$Msg = '';

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{   

$UserId = $_SESSION['UserId'];
 

					}
					
			
		
	  

					
//echo'<pre>';print_r("inside submit"); die;

		
	    

					 include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>
                   

<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>

			<div class="right-mainsection">

				<div class="account-arapper" style="display:block;">
					<div class="account-accordia">Account Setting</div>
					<div class="content-cover">
						<p class="warning1"><span>WARNING!</span> This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit<br/> auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</p>

						<div class="account-info">
							<div class="row-one clearfix">
								<div class="button-rowtext pull-left">2 Step Verification<i class="radius-one">&#161;</i></div>
								<div class="button-row pull-right">
									<input type="checkbox" name="my-checkbox" checked>
								</div>
							</div>
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="script.js"></script>
<?php  error_reporting(E_ALL & ~E_NOTICE);
 $arraysetting1 = $ObjSecurity->SelectSecurityCode($UserId);
foreach($arraysetting1 as $id => $row1)
 $row2=$row1['Mobile']; 
 if($row2 == ""){
	
 ?>
							<div class="row-one security-row">
								
									<ul>
										<li class="clearfix"><label for="mobile">Enter Mobile Number</label>
											<span> 
												<input type="text" id="code" placeholder="+63" class="input-widthadjust"> 
												<input type="text" id="mobile">
											</span>
										</li>
										
										<li class="clearfix"><button type="button" id="submit" class="btn-account-ver">SAVE</button></li>
									</ul>
								
							</div> 
                            <?php }
							else{ ?>
								
								<div class="row-one security-row">
								
									<ul>
										<li class="clearfix"><label for="mobile">Your Mobile Number</label>
											<span> 
												

										 <h4><?php echo $row2; ?></h4>
									
											</span>
										</li>
										
										
									</ul>
								
							</div>

								<?php }
							
							?>
                           <?php /*?> <?php  $arraysetting2 = $ObjSecurity->SelectMobileVerification($UserId);
foreach($arraysetting2 as $id => $row3)
 $row4 = $row3['mobile_verification'];
 if($row4 != "1"){
 ?>
		<?php */?>
                            <div class="row-one security-row">
                            
        
                            <form action="" method="post">
                             							<ul>
										
										<li class="clearfix"><label for="Security">Enter Security Code</label> <span><input type="text" placeholder="" id="code" name="code" class="input-widthadjust1" ></span></li><li></li>
										<li class="clearfix"><button type="submit" name="submit" id="subbbgb" class="btn-account-ver">Verify Account</button></li>
									</ul>
                                    
								</form> <?php
								
		                                $arraysetting = $ObjSecurity->SelectSecurityCode($UserId);
			
									         foreach($arraysetting as $id => $row)
											 $row1=$row['Security_Code']; 
                                              $code2=$_POST["code"];
                                               if(isset($_POST['submit'])){
												 if($row1 == $code2){
													 
													
                                                    $ObjSecurity->UpdateSecurityCode($UserId);
													
												
													 echo "Your No is Verify";
													 } 
													 else{
														 echo "Please Enter Correct code";
													 } }

												 ?> </div> <?php /*?><?php }
							else{ ?>
								
								<div class="row-one security-row">
								
									<ul>
										<li class="clearfix"><label for="mobile">Your Mobile Number</label>
											<span> 
												

										 <p>your Mobile No is already Verified</p>
									
											</span>
										</li>
										
										
									</ul>
								
							</div><?php */?>

								
                          <?php /*?> <?php include"secure.php"; ?><?php */?>
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