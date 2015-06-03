<?php  include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>


<div class="deposite-section">
	<div class="container">
		<div>Profile content</div>
	</div>
</div><!--deposite-section end-->

<div class="deposite-section">
	<div class="container">
		<div>My Network content</div>
	</div>
</div><!--deposite-section end-->


<div class="deposite-section" style="display:block;">
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
					<li class="active"><a href="#">Deposit Money</a><i class="sprit-deposit"></i></li>
					<li><a href="#">Withdraw Money</a><i class="sprit-withdray"></i></li>
					<li><a href="#">Buy Bitcoin</a><i class="sprit-buy"></i></li>
					<li><a href="#">Sell Bitcoin</a><i class="sprit-sell"></i></li>
					<li><a href="#">Send Money</a><i class="sprit-sendm"></i></li>
				</ul>
			</aside><!--profile-aside end-->

			<div class="right-mainsection">

				<div class="account-arapper" style="display:block;">

					<div class="account-accordia">Account Setting</div>

						<div class="content-cover">
							<p class="warning1"><span>WARNING!</span> This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit<br/> auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
							<div class="account-info">
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left"><span>TRUST</span><i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
									<input type="checkbox" data-id="trust" name="my-checkbox" checked>
									</div>
								</div>
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left"><span>TRUSTED NETWORK CASH BUY</span><i class="radius-one">&#161;</i><span class="alert-a">(EXTREMELY HIGH RISK)</span></div>
									<div class="button-row pull-right">
									<input type="checkbox" data-id="tncb" name="my-checkbox" unchcked>
								</div>
								</div>
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left">TRUSTED NETWORK FUNDED BUY<i class="radius-one">&#161;</i><span class="alert-a">(HIGH RISK)</span></div>
									<div class="button-row pull-right">
										<input type="checkbox" data-id="tnfb" name="my-checkbox" unchcked>
									</div>
								</div>
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left">Minimum rate (Per 1.0btc)<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" data-id="min_rate" name="my-checkbox" checked>
									</div>
								</div>
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left">Miximum trade amount<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" data-id="max_trade_amount" name="my-checkbox" checked>
									</div>
								</div>
								<div class="row-one clearfix">
									<div class="row-adjustslider clearfix">
										<div class="button-rowtext pull-left">Volume discount settings<i class="radius-one">&#161;</i></div>
										<div class="button-row pull-right">
											<input type="checkbox" data-id="volume_d_s" name="my-checkbox" checked>
										</div>
									</div>	
									<div class="button-row rangeslider pull-right">
										<div id="slider"></div>
									</div>
								</div>
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left">CASH BUY<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" data-id="cash_by" name="my-checkbox" checked>
									</div>
								</div>
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left">FUNDED BUY<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" data-id="funded_by" name="my-checkbox" checked>
									</div>
								</div>
								<div class="row-one clearfix">
									<div class="button-rowtext pull-left">PAYMENT METHOD<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
							        	<!--<form action="#" method="post" class="select-speed1">
										  <select name="speed" id="speed">
										      <option selected="selected">Paypall</option>
										      <option>Paypall 1</option>
									    </select>
										</form>-->
                                        
                                        <select data-id="payment_method" class="custom" id="countries">
                                          <option value="selectone">Select a country</option>
                                          <option class="usa" value="usa">USA</option>
                                          <option class="italy" value="italy">Italy</option>
                                          <option class="france" value="france">France</option>
                                          <option class="germany" value="germany">Germany</option>
                                        </select>
									</div>
								</div>
								<div class="row-one lastborder clearfix">
									<div class="button-rowtext pull-left">POOLING<i class="radius-one">&#161;</i></div>
									<div class="button-row pull-right">
										<input type="checkbox" data-id="polling" name="my-checkbox" checked>
									</div>
								</div>
							</div><!--account-info end-->
						</div><!--content cover-->
				</div><!--account-arapper end-->

				<div class="account-arapper">
					<div class="account-accordia">Deposite Money</div>
				</div><!--account-arapper end-->

				<div class="account-arapper">
					<div class="account-accordia">BUY BITCOIN</div>
				</div><!--account-arapper end-->

				<div class="account-arapper">
					<div class="account-accordia">Sell Bitcoin</div>
				</div><!--account-arapper end-->
				
				<div class="account-arapper">
					<div class="account-accordia">Send Money</div>
				</div><!--account-arapper end-->
			</div><!--right-mainsection end-->
		</div>
	</div>
</div><!--deposite-section end-->


<div class="deposite-section">
	<div class="container">
		<div>Security setting content</div>
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




function saveAccountSetting(key, value){
	$.ajax({ //Process the form using $.ajax()
            type      : 'POST', //Method type
            url       : "ajax.php", //Your form processing file URL
            data      : {key : key, value : value}, //Forms name
            success   : function(data) {
                            if (data.success) { //If fails
                                
                            }
                            else {
                                    
                                }
                            },
            error     : function( jqXHR, textStatus, errorThrown){

            }
        });

}

function onSwitchChange(event, state){
		console.log("event is > " + event + " and state is > " + state);
		console.log("name > " + event.currentTarget.attributes['data-id'].value + " value > " + state);

		saveAccountSetting(event.currentTarget.attributes['data-id'].value, state)
};



$(document).ready(function(){

	/*custem checkbox*/
	$("[name='my-checkbox']").bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30, onSwitchChange : onSwitchChange});
 
	$("#speed, #speed1, #speed2").selectmenu();
	
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

	$('#profile-tab li').on('click',function(){
		var num = $(this).index();
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.deposite-section:eq('+num+')').slideDown().show().siblings('.deposite-section').slideUp();
		return false;
	});

	$('#moneyrow li').on('click', function(){
		var num = $(this).index();
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.account-arapper:eq('+num+')').slideDown().siblings('.account-arapper').slideUp();
		return false;
	});
	
	
	
/*SELECT BOX*/
$(function() {		
$("select.custom").each(function() {					
	var sb = new SelectBox({
		selectbox: $(this),
		height: 150,
		width: 200
	});
});

});
/*SELECT BOX END*/

});
</script>
</body>
</html>