<?php
	class Career extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Career(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

			
        
	public function Selectcareer(){
		 	$this->sql =  "Select * from ".$this->tables['career']."";
	  		return $this->query($this->sql,1);
		}
		
		
		}
?>