<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'buycoins.class.php');
$ObjBuycoins = new Buycoins();
$Msg = '';
$sendMail = 0;

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
    die();
}else{  
 
    $UserId    = $_SESSION['UserId'];
    $UserName  = $_SESSION['UserName'];
    $Email     = $_SESSION['Email'];
    $message   = '';

    $arraysetting = $ObjBuycoins->SelectSearchTrustedUserSetting($UserId);
    //echo'<pre>';print_r($arraysetting); die;

    $setting_value = empty($arraysetting) ? 1 : $arraysetting[0]['setting_value'];
     //echo'<pre>';print_r($arraysetting); die;
     $ArrayUser = $ObjBuycoins->FetchtrustedNetwork($UserId);
    //echo'<pre>';print_r($ArrayUser); die;

     function sendMailFun($to, $passkey, $UserName, $Email){
                            
        // Your subject
        $subject="Your confirmation link here";
        
        // From
        $header="from: your '".$UserName."' <your '".$Email."'>";
        
        // Your message
        $message="Your Comfirmation link \r\n";
        $message.="Click on this link to activate your account \r\n";
        $message.="http://Localhost/Coinxoom/buycoins_request.php?passkey=".$passkey;
        
        // send email        

        try {
           $sentmail = mail($to,$subject,$message,$header);
        } catch (Exception $e) {
            //echo 'Caught exception: ',  $e->getMessage(), "\n";
        }    

        //echo'<pre>';print_r($sentmail); die;
        
        // if your email succesfully sent
        if($sentmail == 1){
            $msg = "Your Confirmation link Has Been Sent To Your Email Address.";
        }else {
            $msg = "Cannot send Confirmation link to your e-mail address";
        } 

        //echo'<pre>';print_r($message); die;
     }	 


    if(isset($_POST['amount']) && $_POST['amount'] > 0){
        $UserRow = $ObjBuycoins->ValidAmount($UserId);
        $userRow = $UserRow[0];
        $_SESSION['Cash_wallet'] = $userRow["Cash_wallet"];

        echo $userRow["Cash_wallet"]; die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to Coinxoom</title>
<link rel="shortcut icon" href="<?php echo $configVars['ImageUrlPath']; ?>favicon.ico" type="x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo $configVars['CssUrlPath']; ?>style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div id="wrapper">
<?php include($configVars['SiteBasePath'].'indexheader.php') ?>
<div class="main-content">
    <div class="account-banner">
        <div class="container">
            <div class="row accout-profile">
                <div class="col-sm-2 col-md-2"><figure><img src="<?php echo $configVars['ImageUrlPath']; ?>account-profile.jpg" alt="profile"></figure></div>
                <div class="col-sm-10 col-md-10">
                    <div class="profile-heading">
                        <h3>Jayson Chanchico</h3>
                        <span>Verified! <a href="#">View Limits</a></span>
                        <ul class="clearfix" id="profile-tab">
                            <li><a href="<?php echo $configVars['SiteUrlPath'];?>profile.php">Profile</a></li>
                            <li><a href="<?php echo $configVars['SiteUrlPath'];?>network.php">My Network</a></li>
                            <li class="active"><a href="<?php echo $configVars['SiteUrlPath'];?>account.php">Account setting </a></li>
                            <li><a href="<?php echo $configVars['SiteUrlPath'];?>security.php">Security setting</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--account-banner end-->

<div class="deposite-section">
    <div class="container">
        <div class="clearfix">
            <?php include_once ($configVars['SiteBasePath'].'side_bar.php'); ?>

            <div class="right-mainsection">
                <div class="account-arapper" style="display:block;">
                    <div class="account-accordia">BUY BITCOIN</div>
                        <div class="content-cover">
                            <p class="warning1"><span>WARNING!</span> 2 BTC remaining out of your 2 BTC daily limit.
                                    <a href="#">View Daily Limit</a></p>

                            <div class="account-info">
                            <form action="transaction.php" method="post">
                                <div class="btcbox-row clearfix">
                                    <div class="btcbox pull-left">Amount to Buy
                                        <span>Current Rate: <small>USD 1.00</small> to<small> BTC 1.2356</small></span>
                                    </div>
                                    <div class="btcbox-m inputconverter pull-right">
                                        
                                            <input id="amountTB" type="text" name="amount" placeholder="USD15.00">
                                            <!-- <input id="validationTB" type="hidden" value="false" / > -->
                                            <!--input type="text" placeholder="BTC15.00"-->
                                        
                                    </div>
                                </div>
                                <div class="btcbox-row clearfix">
                                    <div class="btcbox pull-left">Use Wallet</div>
                                    <div class="btcbox-m pull-right">

                                        
                                            <!--select name="option-select" class="custom widthadjust2">
                                                <option value="">CoinXoom Cash Wallet</option>
                                                <option value="1">CoinXoom Cash Wallet</option>
                                                <option value="2">CoinXoom Cash Wallet</option>    
                                            </select-->
                                            <input type="text" placeholder="CoinXoom Cash Wallet" name="user_wallet" value="CoinXoom Cash Wallet">
                                    
                                    </div>
                                </div>
                                <div class="btcbox-row buy2adjust clearfix">
                                    <div class="search-trust clearfix">
                                        <div class="btcbox pull-left">Seach Trusted Users</div>
                                        <div class="btcbox-m pull-right">
                                             <input type="checkbox" class="_bootstap-checkbox" name="setting_value" <?php echo($setting_value == 1 ? "checked" : "") ?> />
                                        </div>
                                    </div>
                                    
                                    
                                    
                                 <!--div class="btcbox-row clearfix">
                                    <div class="btcbox pull-left">Email</div>
                                    <div class="btcbox-m pull-right">

                                        
                                            <input type="text" placeholder="Email Id">
                                    
                                    </div>-->
                                </div>
                                
                                
                                    <div class="btcbox-row clearfix">
                                        <div class="btcbox pull-left">Buy from</div>
                                        
                                        <div class="btcbox-m inputconverter pull-right">
                                            
                                               <div class="search-main">
                                                <!--input type="text" placeholder="search user" class="search-seller" id="photoSelect"-->
                                                <select name="seller_userid" id="setSelectedSeller">
                                                      <option value="">Select a person:</option>
                                                    <?php foreach($ArrayUser as $id => $row) { ?>
                                                      <option data-email="<?php echo $row['Email'];?>" value="<?php echo $row['userid'];?>"><?php echo $row['UserName'];?> </option>
                                                      <?php } ?>
                                                 </select>
                                                 <input type="hidden" name="seller_useremail" id="selectedSellerEmail" value="" />

                                                <!--span class="hoverInput"><i></i></span-->
                                            </div>
                                           
                                            <span class="recomnded"><?php echo $Msg; ?></span>
                                            <button type="submit" disabled id="submitButton" name="buycoin" class="resume-btn buy2btn" value="Buy Coin">Buy Coin</button>
                                            
                                        </div>
                                    </div>
                                
                                    <div class="adjust-a btcbox-row">
                                        <div class="btcbox"><span id="countdown" class="timer"></span>Transaction Summary
                                            <span><small>USD 15.00</small> Withdraw by <small>Jayson Chanchico</small> on Paypall at <small>jaysoncyhanchico@gmail.com</small></span>
                                        </div>
                                    </div>
                                </form>
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

 <!--input type="hidden" id="sentmail" value="<--?php echo $sendMail;?> " /-->
<!--input type="hidden" id="tid" value="<--?php echo $passkey;?> " /-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>SelectBox.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        var $cb = $("._bootstap-checkbox");
        $cb.bootstrapSwitch({onText:'Enabled', offText:'Disabled', handleWidth:55, labelWidth:30,
            onSwitchChange: function(event, state){
                //var $val = state ? 1 : 0;
                //$cb.val($val);
            }
        });

        $("#setSelectedSeller").change(function(){
            var email = $(this).find('option[value='+$(this).val()+']').data('email');
            $("#selectedSellerEmail").val(email);
        });

        $("#amountTB").blur(function (e) {
            var $this = $(this);
            var filledAmount = $this.val();

            if(filledAmount && parseInt(filledAmount) > 0){
                var filledAmount = parseInt(filledAmount);

                $.ajax({
                    type: "post",
                    data : {amount : filledAmount},
                    url: "buycoins.php",
                    success: function(returnData) {
                        console.log(returnData);
                        if(parseInt(returnData) < filledAmount){
                            message = "insufficient amount";    
                            alert(message);
                        }else{
                            $("#submitButton").removeAttr("disabled");
                        }
                    },error: function(jqXHR, textStatus){
                        console.log(textStatus);
                    }
                });
            }else{
                alert("Not a valid amount");
                //$("#errorMessage").html("Not a valid amount");
            }
        });

    });
</script>
</body>
</html>
