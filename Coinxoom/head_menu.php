<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'account.class.php');
$ObjAccount = new Account();
include_once($configVars['ClassesBasePath'].'network.class.php');
$ObjNetwork = new Network();

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{
	$UserId = $_SESSION['UserId'];
	$UserName = $_SESSION['UserName'];
	$ArrayUser = $ObjNetwork->FetchNetwork($_SESSION['UserId']);

	$AccountSetting = $ObjAccount->FetchAccountSetting($UserId);

	$accountSetting = $AccountSetting[0];
//	echo $AccountSetting; die;

    // update enable disable buttons
  	if (isset($_POST["setting"]) && $_POST['setting'] != ''){ //Checks if action value exists
  		$columnName = $_POST['setting'][0];
  		$columnValue = $_POST['setting'][1];
	    $ObjAccount->UpdateAccountSetting($columnName, $columnValue, $UserId);
	}
$uid=$_SESSION['UserId'];
   $data=$ObjAccount->get_profile_pic($uid);
   foreach($data as $id => $row) {
   	  $pic= $row['profile_pic'];
	    }
   
	//$ObjAccount->UpdateAccountSetting($CoulmnName,$ColumnValue,$UserId);

	//echo'<pre>';print_r($accountSetting); die;
	
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to Coinxoom</title>
<link rel="shortcut icon" href="<?php echo $configVars['ImageUrlPath']; ?>favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo $configVars['CssUrlPath']; ?>style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript">

        $(document).ready(function(){

            $("select").change(function(){

                $( "select option:selected").each(function(){

                    if($(this).attr("value")=="Cash Deposit Agent")
					{
                        $(".bank-row clearfix2").hide();
                    
                        $(".bank-row clearfix").show();

                    }
                    if($(this).attr("value")=="Bank Transfer"){

                        $(".bank-row clearfix").hide();

                        $(".bank-row clearfix2").show();

                    }

                });

            }).change();

        });

    </script>
    
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			 $("#targetLayer").html(data);
			$('#img_upload').hide();
			$('#img_upload1').hide();
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>
<div id="wrapper">
<?php include($configVars['SiteBasePath'].'indexheader.php') ?>

<div class="main-content">
	<div class="account-banner">
		<div class="container">
			<div class="row accout-profile">
				<div class="col-sm-2 col-md-2">
				     <figure id="targetLayer"><img src="<?php echo $pic; ?>" height="135px" width="135px"/>
				     <i class="fa fa-camera camera-icon"></i>
						<div class="ph-uplod"><span>update profile picture</span></div>
                      </figure> 

				</div>
				<div class="col-sm-10 col-md-10">
					<div class="profile-heading">
						<h3>Welcome <?php echo $UserName; ?></h3>
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