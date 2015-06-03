<?php
	class Login extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Login(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		
		public function LoginUser($Email,$Password){
		   $this->sql = "Select * from ".$this->tables['User']." WHERE Email='".$this->CleanData($Email)."' AND Password='".$this->CleanData($Password)."'";
		   return $this->query($this->sql,1);
		}
}
?>