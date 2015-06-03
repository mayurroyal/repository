<?php
	class Sellcoins extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Sellcoins(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

		public function SellCoinsAdd($UserId,$amount,$user_wallet,$buyer_user_id){
	  	 	$this->sql = "INSERT INTO ".$this->tables['sell_bit_coin']." (seller_user_id , amount , user_wallet , buyer_user_id , add_date)                          value ('".$this->CleanData($UserId)."' , '".$this->CleanData($amount)."' , 
			              '".$this->CleanData($user_wallet)."' , '".$this->CleanData($buyer_user_id)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
			return mysql_insert_id();
		}
		
		public function FetchtrustedNetwork($UserId){
		 	$this->sql = "Select t1.* , t2.* from ".$this->tables['user_network']." as t1 LEFT JOIN ".$this->tables['User']." as t2 ON t1.userid = t2.id where t1.parentid = '".$this->CleanData($UserId)."' ";
	  		return $this->query($this->sql,1);
		}

		
		public function UpdateSearchTrustedUserSetting($setting_value , $UserId  , $setting_name){
			$this->sql = "Update ".$this->tables['other_setting']." set setting_value =  '".$this->CleanData($setting_value)."' Where                          buyer_userid = '".$UserId."' AND setting_name = '".$this->CleanData($setting_name)."'";
            $this->query($this->sql,0);
		}
		
		public function InsertSearchTrustedUserSetting($UserId , $setting_name, $setting_value,$page_type){
	  	 	$this->sql = "INSERT INTO ".$this->tables['other_setting']." (buyer_userid , setting_name , setting_value , 
			              page_type , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($setting_name)."' ,
						  '".$this->CleanData($setting_value)."' , '".$this->CleanData($page_type)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
		public function SelectSearchTrustedUserSetting($UserId){
		 	$this->sql = "Select * from ".$this->tables['other_setting']." WHERE buyer_userid= '".$this->CleanData($UserId)."' ";
	  		return $this->query($this->sql,1);
		}
		
      	public function CheckIfUserExist($UserId , $Setting_name){
	   		$this->sql = "Select * from ".$this->tables['other_setting']." where buyer_userid='".$this->CleanData($UserId)."' AND                          setting_name = '".$Setting_name."'";
		   	return $this->query($this->sql,1);
		}

		public function GetBuyCoinRequestStatus($Tid){
		 	$this->sql = "Select buyer_aprovel from ".$this->tables['sell_bit_coin']." WHERE id = '".$this->CleanData($Tid)."' ";
	  		return $this->query($this->sql,1);
		}

		public function ApproveSellerForPasskey($TransactionId){
		   	$sql = "Update ".$this->tables['sell_bit_coin']." set buyer_aprovel = '1' Where id = '".$TransactionId."'"; 
            $this->query($sql,0);
		}
       
	    
		
	    public function ValidAmount($UserId){
		    $this->sql = "Select Coin_wallet from user where id='".$this->CleanData($UserId)."' ";
	  		return $this->query($this->sql,1);
		}
		
		public function AddToBuyCoinEscrow($TransactionId,$amount,$coinwallet,$status){
			$this->sql = "insert into ".$this->tables['escrow']." (transactionid , 	cashwallet , coinwallet , status , adddate) values                         ('".$this->CleanData($TransactionId)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($coinwallet)."'                         , '".$this->CleanData($status)."' , '".date('Y-m-d H:i:s')."')";
	  		$this->query($this->sql,0);	
		}
		
		
		
		public function UpdateCoinWalletSeller($SellerId , $Coin_wallet){
			$this->sql = "Update ".$this->tables['User']." set Coin_wallet = Coin_wallet - '".$Coin_wallet."'  where id = '".$this->                         CleanData($SellerId)."'";
	  		$this->query($this->sql,0);
		}
		
		
		
		public function UpdateCashWalletbuyer($BuyerId , $CashWallet){
			$this->sql = "Update ".$this->tables['User']." set Cash_wallet = Cash_wallet - '".$CashWallet."'  where id = '".$this->                         CleanData($BuyerId)."'";
	  		$this->query($this->sql,0);
		}
		
		
		
		
		public function GetEscrowTransactionDetail($TransactionId){
			$this->sql = "Select * from ".$this->tables['escrow']." where transactionid = '".$this->CleanData($TransactionId)."' ";
	  		return $this->query($this->sql,1);
		}
		
		public function GetBuyCoinTransactionDetail($TransactionId){
			$this->sql = "Select * from ".$this->tables['sell_bit_coin']." where id = '".$this->CleanData($TransactionId)."' ";
	  		return $this->query($this->sql,1);
		}
		
		public function UpdateCoinWallet($BuyerId , $CoinWallet){
			$this->sql = "Update ".$this->tables['User']." set Coin_wallet = Coin_wallet + '".$CoinWallet."'  where id = '".$this->                         CleanData($BuyerId)."'";
	  		$this->query($this->sql,0);
		}
		
		public function UpdateCashWallet($SellerId , $CashWallet){
			$this->sql = "Update ".$this->tables['User']." set Cash_wallet = Cash_wallet + '".$CashWallet."'  where id = '".$this->                         CleanData($SellerId)."'";
	  		$this->query($this->sql,0);
		}
		
		
		public function UpdateCancelCoinWallet($BuyerId , $CashWallet){
			$this->sql = "Update ".$this->tables['User']." set Cash_wallet = Cash_wallet + '".$CashWallet."'  where id = '".$this->                         CleanData($BuyerId)."'";
	  		$this->query($this->sql,0);
		}
		
		public function UpdateCancelCashWallet($SellerId , $CoinWallet){
			$this->sql = "Update ".$this->tables['User']." set Coin_wallet = Coin_wallet + '".$CoinWallet."'  where id = '".$this->                         CleanData($SellerId)."'";
	  		$this->query($this->sql,0);
		}
		
		
	}
?>