<?php
	class Singup extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Singup(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		
		public function Registration($Name,$Email,$Password){
		   $this->sql = "INSERT INTO ".$this->tables['User']." (UserName , Email , Password , AddDate , UserIp) value ('".$this->CleanData($Name)."' , '".$this->CleanData($Email)."' , '".$this->CleanData($Password)."' , '".date('Y-m-d H:i:s')."' , '".$_SERVER['REMOTE_ADDR']."')"; 
			//echo $this->sql; DIE;
			 $this->query($this->sql,0);
			 return mysql_insert_Id();
		}

		
		public function SetDefaultAccountSettings($Userid){
			$this->sql = "INSERT INTO ".$this->tables['user_account_setting']." (userid , add_date) value ('".$this->CleanData($Userid)."' , '".date('Y-m-d H:i:s')."')"; 
         	$this->query($this->sql,0);
		}
	
	 public function VarificationSettings($Userid){
			$this->sql = "INSERT INTO ".$this->tables['user_verification']." (user_id , add_date) value ('".$this->CleanData($Userid)."' , '".date('Y-m-d H:i:s')."')"; 
         	$this->query($this->sql,0);
		}
	
	
	    public function NetworkFindParent($Parentusername){
		   $this->sql = "Select Id from ".$this->tables['User']." WHERE UserName='".$this->CleanData($Parentusername)."'";
		   return $this->query($this->sql,1);
		}
		
	   public function SetDefaultNetworkSettings($Userid,$ParentId){
			$this->sql = "INSERT INTO ".$this->tables['user_network']." (userid , parentid , adddate) value ('".$this->CleanData($Userid)."' , '".$this->CleanData($ParentId)."' , '".date('Y-m-d H:i:s')."')"; 
         	$this->query($this->sql,0);
		}
	    
		
		
		
		
		
      	public function EmailValidation($Email){
		   $this->sql = "Select * from ".$this->tables['User']." WHERE Email='".$this->CleanData($Email)."'";
		   return $this->query($this->sql,1);

		}

       public function UserValidation($Name){
		   $this->sql = "Select * from ".$this->tables['User']." WHERE UserName='".$this->CleanData($Name)."'";
		   return $this->query($this->sql,1);
		}

       }
	  
 ?>