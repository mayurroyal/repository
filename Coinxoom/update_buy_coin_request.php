<?php
	@session_start();
	include_once('./global.inc.php');
	include_once($configVars['ClassesBasePath'].'buycoins.class.php');
	$ObjBuycoins = new Buycoins();

	$Tid        = $_REQUEST['transactionid'];
	$ArrRes     = $ObjBuycoins->GetEscrowTransactionDetail($Tid);
	$ArrRes1    = $ObjBuycoins->GetBuyCoinTransactionDetail($Tid);
	//echo"<pre>";print_r($ArrRes1); die;
	$CashWallet = $ArrRes[0]['cashwallet'];
	$CoinWallet = $ArrRes[0]['coinwallet'];
	$BuyerId    = $ArrRes1[0]['buyer_user_id'];
	$SellerId   = $ArrRes1[0]['seller_userid'];
  		
  	$ObjBuycoins->UpdateCoinWallet($BuyerId , $CoinWallet);
	$ObjBuycoins->UpdateCashWallet($SellerId , $CashWallet);
	
	
	if(empty($ArrRes)){
    	echo 'invalid_transaction'; die;
    }else{ 
		echo $Status;  die;
	}
?>