<?php
	@session_start();
	include_once('./global.inc.php');
	include_once($configVars['ClassesBasePath'].'buycoins.class.php');
	$ObjBuycoins = new Buycoins();

	$Tid        = $_REQUEST['transactionid'];
	$ArrRes     = $ObjBuycoins->GetBuyCoinRequestStatus($Tid);
	$Status     = $ArrRes[0]['seller_aprovel'];
	 
	if(empty($ArrRes)){
    	echo 'invalid_transaction'; die;
    }else{ 
		echo $Status;  die;
	}
?>