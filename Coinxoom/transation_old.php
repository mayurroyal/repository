<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'transation.class.php');
include_once ($configVars['SiteBasePath'].'head_menu.php'); 
$ObjTransation = new Transation();
if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{ 

	$UserId = $_SESSION['UserId'];
	$UserName = $_SESSION['UserName'];
	$Email = $_SESSION['Email'];

$ArrTransation = $ObjTransation->FetchUser($UserId);
//echo'<pre>';print_r($FetchUser); die;
}
 ?>
<div class="deposite-section">
	<div class="container">
		<div class="clearfix">
			<?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>
           <div class="right-mainsection">
				<div class="account-arapper" style="display:block;">
					<div class="account-accordia clearfix">trabsaction history</div>
					<div class="content-cover account-info">
						<div class="warning1-text">
							<ul class="calender clearfix">
								<li>
									<label for="from">From</label>
									<input type="text" id="from" name="from">
								</li>

								<li>
									<label for="to">to</label>
									<input type="text" id="to" name="to">
								</li>
							</ul>
						</div>
						<table cellpadding="0" width="100%" class="trabsaction-list">
							<tr>
								<th>Date</th>
								<th>Amount</th>
								<th>Type</th>
								<th>User</th>
								<th>Payment Status</th>
								<th>Details</th>
							</tr>
                            <?php foreach($ArrTransation as $id => $row) { ?>
							<tr class="border-adjust">
								<td><?php echo $row['add_date']; ?></td>
								<td><?php echo $row['amount']; ?></td>
								<td>Deposit</td>
								<td><?php echo $row['UserName']; ?></td>
								<td><?php echo $row['status']; ?></td>
								<td>Trans. Complete</td>
							</tr>
                            <?php } ?>
							
						</table>
					</div><!--content-cover ends-->
				</div><!--account-arapper end-->

            </div><!--right-mainsection end-->
                
		</div>
	</div>
</div><!--deposite-section end-->
</div><!--main-content-->
</div><!--wrapper end-->

<?php include_once ($configVars['SiteBasePath'].'footer.php'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	

    $( "#from" ).datepicker({
    	showOn: "button",
      buttonImage: "images/jq-ui/calender-icon.png",
      buttonImageOnly: true,
	  buttonText: "", 
      onClose: function( selectedDate ) {
        //$( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
    	showOn: "button",
      buttonImage: "images/jq-ui/calender-icon.png",
      buttonImageOnly: true,
	  buttonText: "",
      onClose: function( selectedDate ) {
        //$( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });


});
</script>
</body>
</html>