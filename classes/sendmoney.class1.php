<?php
	class Sendmoney extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Sendmoney(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

		public function AddSendMoney($UserId,$send_form_wallet,$amount,$seller_id,$passkey){
	  	 	$this->sql = "INSERT INTO ".$this->tables['send_money']." (userid , send_form_wallet , amount , seller_id , passkey ,  add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($send_form_wallet)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($seller_id)."' , '".$this->CleanData($passkey)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
			public function FetchUser($UserId){
		 	$this->sql = "Select * from ".$this->tables['User']."";
	  		return $this->query($this->sql,1);
		}
		
		
	}
?>