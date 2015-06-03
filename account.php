<?php 
include_once('./global.inc.php');

include($configVars['SiteBasePath'].'head_menu.php'); 
?>

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
									<div class="button-rowtext pull-left"><span>TRUSTED NETWORK</span><i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
									<input type="checkbox" class="_bootstap-checkbox" name="trusted_network" <?php echo($accountSetting["trusted_network"] == 1  ? "checked" : "")  ?>  />
									</div>
								</div>
                                
                                
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left">Be a Cash Deposite Agent<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" class="_bootstap-checkbox" name="cash_deposite_agent" <?php echo($accountSetting["cash_deposite_agent"] == 1 ? "checked" : "") ?> />
									</div>
								</div>
								
                                
                                
                                <div class="row-one clearfix">
									<div class="button-rowtext pull-left">Be a Cash Withdraw Agent<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" class="_bootstap-checkbox" name="cash_withdraw_agent" <?php echo($accountSetting["cash_withdraw_agent"] == 1 ? "checked" : "") ?> />
									</div>
								</div>
                                
								<div class="row-one lastborder clearfix">
									<div class="button-rowtext pull-left">NOTIFICATIONS<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" class="_bootstap-checkbox" name="notification" <?php echo($accountSetting["notification"] == 1 ? "checked" : "") ?> />
									</div>
								</div>
                                
                               
							</div><!--account-info end-->
						</div><!--content cover-->
				</div><!--account-arapper end-->

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

// update enable disable buttons
function saveAccountSetting(columnName, columnValue){
	var data = {};
    data["setting"] = [columnName, columnValue];
	console.log(data);

    $.ajax({
      type: "POST",
      dataType: "json",
      url: "account.php", //Relative or absolute path to response.php file
      data: data,
      success: function(data) {
    	console.log("success");
      },error: function(jqXHR, textStatus){
		console.log("error");
      }
    });

}

function onSwitchChange(event, state){
	console.log("name > " + event.currentTarget.name + " value > " + state);
	saveAccountSetting(event.currentTarget.name, state ? 1 : 0)
};

$(document).ready(function(){

	$("._bootstap-checkbox").bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30, onSwitchChange: onSwitchChange});
   // end update enable disable buttons
	// RANGE SLIDER
	$( "#slider" ).slider({
		range: "min",
		min: 1,
		max: 100,
		value:30,
		slide: function(event,ui){
		$(this).find(".ui-slider-handle").text( ui.value + ' %');  
		},
		create: function(event,ui){
			$(this).find(".ui-slider-handle").text($("#slider").slider("value") + ' %');  
			} 
	});
	// RANGE SLIDER END


});
</script>
</body>
</html>