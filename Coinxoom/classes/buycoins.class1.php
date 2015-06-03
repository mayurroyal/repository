<?php
	class Buycoins extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Buycoins(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

			public function Buycoinsadd($UserId,$amount,$user_wallet,$seller_userid){
		  	 $this->sql = "INSERT INTO ".$this->tables['buy_bit_coin']." (buyer_user_id , amount , user_wallet , seller_userid , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($amount)."' , '".$this->CleanData($user_wallet)."' , '".$this->CleanData($seller_userid)."' , '".date('Y-m-d H:i:s')."')"; 
			//echo $this->sql; DIE;
			$this->query($this->sql,0);

			}
		
        
		
		public function FetchtrustedNetwork($userid){
		 $this->sql = "Select t1.* , t2.* from ".$this->tables['user_network']." as t1 LEFT JOIN ".$this->tables['User']." as t2 ON t1.userid = t2.id where t1.parentid = '".$this->		CleanData($userid)."' ";
	  	return $this->query($this->sql,1);
		}
		
		
		
		public function UpdateAccountSetting($setting_name, $setting_value, $UserId){
			$sql = "Update ".$this->tables['other_setting']." set ".$this->CleanData($setting_value)." = 'setting_value' Where buyer_userid = '".$UserId."'";
            $this->query($sql,0);
		}
		
		
		
		public function InsertSearchTrustedUserSetting($UserId,$setting_name,$setting_value){
		  	 $this->sql = "INSERT INTO ".$this->tables['other_setting']." (buyer_userid , setting_name , setting_value , add_date) value ('".$this->CleanData($UserId)."' , '".$this->CleanData($setting_name)."' , '".$this->CleanData($setting_value)."' , '".date('Y-m-d H:i:s')."')"; 
			//echo $this->sql; DIE;
			$this->query($this->sql,0);

			}
		
		
		public function SelectSearchTrustedUserSetting($UserId){
		 	$this->sql = "Select * from ".$this->tables['other_setting']." WHERE buyer_userid= '".$this->CleanData($UserId)."' ";
	  		return $this->query($this->sql,1);
		}
		
		
		}
?>