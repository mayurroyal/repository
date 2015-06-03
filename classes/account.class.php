<?php
	class Account extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Account(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

		public function FetchAccountSetting($UserId){
		 	$this->sql = "Select * from ".$this->tables['user_account_setting']." WHERE userid= '".$this->CleanData($UserId)."' ";
	  		return $this->query($this->sql,1);
		}

		// by Amit- for geting profile pic from db
		public function get_profile_pic($UserId){
		 	$this->sql = "Select profile_pic from ".$this->tables['User']." WHERE Id= '".$UserId."' ";
	  		return $this->query($this->sql,1);
		}
		// end
		//updating profile pic in the db
		public function Updateprofile_pic($profile, $date, $id){
			$sql = "Update ".$this->tables['User']." set profile_pic = '".$profile."',pic_update_date = '".$date."' Where Id = '".$id."'";
            $this->query($sql,0);
		}
		// end
		public function UpdateAccountSetting($ColumnName, $ColumnValue, $id){
			$sql = "Update ".$this->tables['user_account_setting']." set ".$this->CleanData($ColumnName)." = '".$ColumnValue."' Where userid = '".$id."'";
            $this->query($sql,0);
		}

}
?>