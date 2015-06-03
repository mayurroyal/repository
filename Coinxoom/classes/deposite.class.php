<?php
	class Deposite extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Deposite(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

			public function DepositeBankAdd($amount,$user_wallet,$deposite_method,$bank_name){
		  	 $this->sql = "INSERT INTO ".$this->tables['deposite_bank']." ( amount , user_wallet , deposite_method ,bank_name, add_date) value ('".$this->CleanData($amount)."' , '".$this->CleanData($user_wallet)."' , '".$this->CleanData($deposite_method)."' ,'".$this->CleanData($bank_name)."' , '".date('Y-m-d H:i:s')."')"; 
			//echo $this->sql; DIE;
			$this->query($this->sql,0);

			}
			public function SecurityMobileAdd($code2,$mobile2){
		  	 $this->sql = "INSERT INTO ".$this->tables['user']." (Mobile_code ,Mobile) value ('".$this->CleanData($code2)."' , '".$this->CleanData($mobile2)."')"; 
			//echo $this->sql; DIE;
			$this->query($this->sql,0);

			}
		
        
		public function SelectBankName(){
		 	$this->sql = "Select * from ".$this->tables['bank_name']."";
	  		return $this->query($this->sql,1);
		}
		
	public function FetchUser($UserId){
		 	$this->sql = "Select * from ".$this->tables['User']."";
	  		return $this->query($this->sql,1);
		}
		
		
		public function InsertEscrow($UserId,$seller_id,$amount,$page_type){
	  	 	$this->sql = "INSERT INTO ".$this->tables['esrow']." (user_id , seller_id , send_amount , page_type , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($seller_id)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($page_type)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
		public function GetBitCoinForPasskey($passkey){
		 	$this->sql = "Select * from ".$this->tables['send_money']." WHERE passkey= '".$this->CleanData($passkey)."' ";
	  		return $this->query($this->sql,1);
		}

		public function ApproveSellerForPasskey($passkey){
			$sql = "Update ".$this->tables['send_money']." set seller_aprovel =  1 Where passkey = '".$passkey."'";
            $this->query($sql,0);
		}
		public function FetchCDA($UserId){
		 	$this->sql = "Select * from ".$this->tables['User']." Where cash_deposit_agent = '1'";
	  		return $this->query($this->sql,1);
		}
		
		}
?>