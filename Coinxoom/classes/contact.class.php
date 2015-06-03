<?php
	class Contact extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Contact(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

			
        
	public function Selectcontact(){
		 	$this->sql =  "Select * from ".$this->tables['contact']."";
	  		return $this->query($this->sql,1);
		}
		
		
		}
?>