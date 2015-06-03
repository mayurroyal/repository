<?php
	class Buycoins extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Buycoins(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

		public function Buycoinsadd($UserId,$amount,$user_wallet,$seller_userid, $passkey){
	  	 	$this->sql = "INSERT INTO ".$this->tables['buy_bit_coin']." (buyer_user_id , amount , user_wallet , seller_userid , add_date, passkey) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($user_wallet)."' , '".$this->CleanData($seller_userid)."' , '".date('Y-m-d H:i:s')."', '".$this->CleanData($passkey)."')"; 
			$this->query($this->sql,0);
		}
		
		
		public function FetchtrustedNetwork($userid){
		 $this->sql = "Select t1.* , t2.* from ".$this->tables['user_network']." as t1 LEFT JOIN ".$this->tables['User']." as t2 ON t1.userid = t2.id where t1.parentid = '".$this->CleanData($userid)."' ";
	  	return $this->query($this->sql,1);
		}

		
		public function UpdateSearchTrustedUserSetting($setting_value, $UserId , $seller_userid){
			$sql = "Update ".$this->tables['other_setting']." set setting_value =  '".$this->CleanData($setting_value)."' Where buyer_userid = '".$UserId."' AND seller_userid = '".$this->CleanData($seller_userid)."'";
            $this->query($sql,0);
		}
		
		public function InsertSearchTrustedUserSetting($setting_name,$setting_value,$UserId,$seller_userid,$page_type){
	  	 	$this->sql = "INSERT INTO ".$this->tables['other_setting']." (buyer_userid , setting_name , setting_value , seller_userid , page_type , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($setting_name)."' , '".$this->CleanData($setting_value)."' , '".$this->CleanData($seller_userid)."' , '".$this->CleanData($page_type)."' , '".date('Y-m-d H:i:s')."')"; 
			$this->query($this->sql,0);
		}
		
		
		public function SelectSearchTrustedUserSetting($UserId){
		 	$this->sql = "Select * from ".$this->tables['other_setting']." WHERE buyer_userid= '".$this->CleanData($UserId)."' ";
	  		return $this->query($this->sql,1);
		}
		
      	public function CheckIfUserExist($UserId, $seller_userid){
	   		$this->sql = "Select seller_userid from ".$this->tables['other_setting']." where buyer_userid='".$this->CleanData($UserId)."' AND seller_userid = '".$this->CleanData($seller_userid)."'";
		   	return $this->query($this->sql,1);
		}

		public function GetBitCoinForPasskey($passkey){
		 	$this->sql = "Select * from ".$this->tables['buy_bit_coin']." WHERE passkey= '".$this->CleanData($passkey)."' ";
	  		return $this->query($this->sql,1);
		}

		public function ApproveSellerForPasskey($passkey){
			$sql = "Update ".$this->tables['buy_bit_coin']." set seller_aprovel =  1 Where passkey = '".$passkey."'";
            $this->query($sql,0);
		}
       
	   public function ValidAmount($amount){
		   $this->sql = "Select * from ".$this->tables['User']." WHERE passkey >= '".$this->CleanData($amount)."' ";
	  		return $this->query($this->sql,1);
		}
	   
	      
              
 
		
	}
?>