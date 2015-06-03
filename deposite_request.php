<?php
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'deposite.class.php');
$ObjDeposite = new Deposite();

// Passkey that got from link 
$passkey=$_GET['passkey'];

//echo'<pre>';print_r($passkey); die;

// Retrieve data from table where row that match this passkey 
$SendToRow = $ObjDeposite->GetBitCoinForPasskey($passkey);

//echo'<pre>';print_r($BitcoinRow); die;

// If successfully queried 
if(!empty($SendToRow)){

	$SendToRow = $SendToRow[0];

    if($SendToRow["seller_aprovel"] == 1){
    	echo'<pre>';print_r("Seller Already approved"); die;
    } 

	$add_date_time = strtotime($SendToRow["add_date"]);
	$current_time = strtotime(date('Y-m-d H:i:s'));

    $timeDiferenceInMinute = round(abs($current_time - $add_date_time) / 60,0);

	//echo $timeDiference. " minute"; die;

	if ($timeDiferenceInMinute <= 10) {
		$ObjDeposite->ApproveSellerForPasskey($passkey);
		echo'<pre>';print_r("Seller approved"); die;
	}else{
		echo'<pre>';print_r("10 min time limit already crossed"); die;
	}

//$sql2 = "UPDATE items SET seller_aprovel' = ".$seller_aprovel.",id = LAST_INSERT_ID(id)WHERE id= ".$id.";SELECT LAST_INSERT_ID()";

// if not found passkey, display message "Wrong Confirmation code" 
}
else {
	echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db
?>