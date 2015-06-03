<?php
	class Security extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Security(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		
	public function UpdateMobileNo($UserId ,$code2,$mobile2){
			$sql = "Update ".$this->tables['User']." set Mobile_code = '".$this->CleanData($code2)."',Mobile = '".$this->CleanData($mobile2)."',Security_Code = '".$this->CleanData(rand())."' Where id = '".$UserId."'";
            $this->query($sql,0);
		}
		
			
				public function SelectSecurityCode($UserId){
		 	 $sql = "Select * from ".$this->tables['User']." Where id = '".$UserId."'"; 
	  		return $this->query($sql,1);
		}
		
		public function UpdateSecurityCode($UserId){
			$sql = "Update ".$this->tables['user_verification']." set mobile_verification = 'Y' Where user_id ='".$UserId."'";
            $this->query($sql,0);
		}
        public function SelectMobileVerification($UserId){
			 $sql = "Select mobile_verification from ".$this->tables['user_verification']." Where id = '".$UserId."'"; 
	  		return $this->query($sql,1);
		}

		
		
		}
?>