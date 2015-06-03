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
	  	 	$this->sql = "INSERT INTO ".$this->tables['send_money']." (user_id , send_form_wallet , amount , seller_id , passkey , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($send_form_wallet)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($seller_id)."' , '".$this->CleanData($passkey)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
			public function FetchUser($UserId){
		 	$this->sql = "Select * from ".$this->tables['User']."";
	  		return $this->query($this->sql,1);
		}
		
		
		public function InsertSearchTrustedUserSetting($setting_name,$setting_value,$UserId,$seller_id,$page_type){
	  	 	$this->sql = "INSERT INTO ".$this->tables['other_setting']." (buyer_userid , setting_name , setting_value , seller_userid , page_type , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($setting_name)."' , '".$this->CleanData($setting_value)."' , '".$this->CleanData($seller_id)."' , '".$this->CleanData($page_type)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
		public function InsertEscrow($UserId,$seller_id,$amount,$page_type){
	  	 	$this->sql = "INSERT INTO ".$this->tables['esrow']." (user_id , seller_id , send_amount , page_type , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($seller_id)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($page_type)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
		public function UpdateSearchTrustedUserSetting($setting_value,$UserId,$seller_id){
			$sql = "Update ".$this->tables['other_setting']." set setting_value = '".$this->CleanData($setting_value)."' Where buyer_userid = '".$UserId."' AND seller_userid = '".$this->CleanData($seller_id)."'";
            $this->query($sql,0);
		}
		
		
		public function CheckIfUserExist($UserId, $seller_id){
	   		$this->sql = "Select seller_userid from ".$this->tables['other_setting']." where buyer_userid='".$this->CleanData($UserId)."' AND seller_userid = '".$this->CleanData($seller_id)."'";
		   	return $this->query($this->sql,1);
		}
		
		public function GetBitCoinForPasskey($passkey){
		 	$this->sql = "Select * from ".$this->tables['send_money']." WHERE passkey= '".$this->CleanData($passkey)."' ";
	  		return $this->query($this->sql,1);
		}

		public function ApproveSellerForPasskey($passkey){
			$sql = "Update ".$this->tables['send_money']." set seller_aprovel =  1 Where passkey = '".$passkey."'";
            $this->query($sql,0);
		}
		
	}
?>