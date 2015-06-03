<?php
	class Withdraw extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Withdraw(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

		public function WithdrawDetailAdd($UserId,$amount,$transation_fee,$total_amount,$withdraw_type,$agent_id,$passkey){
	  	 	$this->sql = "INSERT INTO ".$this->tables['withdraw']." (user_id , amount , transation_fee , total_amount , withdraw_type , agent_id , add_date, passkey) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($transation_fee)."' , '".$this->CleanData($total_amount)."' , '".$this->CleanData($withdraw_type)."' , '".$this->CleanData($agent_id)."' , '".date('Y-m-d H:i:s')."', '".$this->CleanData($passkey)."')"; 
			$this->query($this->sql,0);
		}

			public function FetchUser($UserId){
		 	$this->sql = "Select * from ".$this->tables['User']."";
	  		return $this->query($this->sql,1);
		}
		
		
	
		
		public function UpdateSearchTrustedUserSetting($setting_value, $UserId , $agent_id){
			$sql = "Update ".$this->tables['other_setting']." set setting_value =  '".$this->CleanData($setting_value)."' Where buyer_userid = '".$UserId."' AND seller_userid = '".$this->CleanData($agent_id)."'";
            $this->query($sql,0);
		}
		
		public function InsertSearchTrustedUserSetting($setting_name,$setting_value,$UserId,$agent_id,$page_type){
	  	 	$this->sql = "INSERT INTO ".$this->tables['other_setting']." (buyer_userid , setting_name , setting_value , seller_userid , page_type , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($setting_name)."' , '".$this->CleanData($setting_value)."' , '".$this->CleanData($agent_id)."' , '".$this->CleanData($page_type)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		public function InsertEscrow($UserId,$agent_id,$total_amount,$page_type){
	  	 	$this->sql = "INSERT INTO ".$this->tables['esrow']." (user_id , seller_id , send_amount , page_type , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($agent_id)."' , '".$this->CleanData($total_amount)."' , '".$this->CleanData($page_type)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
		public function SelectSearchTrustedUserSetting($UserId){
		 	$this->sql = "Select * from ".$this->tables['other_setting']." WHERE buyer_userid= '".$this->CleanData($UserId)."' ";
	  		return $this->query($this->sql,1);
		}
		
      	public function CheckIfUserExist($UserId, $agent_id){
	   		$this->sql = "Select seller_userid from ".$this->tables['other_setting']." where buyer_userid='".$this->CleanData($UserId)."' AND seller_userid = '".$this->CleanData($agent_id)."'";
		   	return $this->query($this->sql,1);
		}

		public function GetWithdrawForPasskey($passkey){
		 	$this->sql = "Select * from ".$this->tables['buy_bit_coin']." WHERE passkey= '".$this->CleanData($passkey)."' ";
	  		return $this->query($this->sql,1);
		}

		public function ApproveSellerForPasskey($passkey){
			$sql = "Update ".$this->tables['buy_bit_coin']." set seller_aprovel =  1 Where passkey = '".$passkey."'";
            $this->query($sql,0);
		}

		
	}
?>