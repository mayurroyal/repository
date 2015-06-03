
<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'network.class.php');
$ObjNetwork = new Network();
if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{    // display detail
     $UserId = $_SESSION['UserId'];
	  $ArrayUser = $ObjNetwork->FetchNetwork($_SESSION['UserId']);
	 // $ArrUser = $ObjNetwork->FetchallNetwork($_SESSION['UserId']);
	//echo'<pre>';print_r($ArrayUser[0]['UserName']); die;
}
	 
 ?>
 // Additional part of Network.php