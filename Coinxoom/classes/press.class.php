<?php
	class PressRelease extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function PressRelease(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

			
        
	public function SelectPressRelease(){
		 	$this->sql =  "Select * from ".$this->tables['press_release']."";
	  		return $this->query($this->sql,1);
		}
		public function GetPressRelease($id){
		 	$this->sql =  "Select * from ".$this->tables['press_release']." where id= '".$this->CleanData($id)."'";
	  		return $this->query($this->sql,1);
		}
		
		
		}
?>