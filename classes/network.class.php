<?php
	class Network extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Network(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}

	

public function FetchNetwork($userid){
		 $this->sql = "Select t1.* , t2.* from ".$this->tables['user_network']." as t1 LEFT JOIN ".$this->tables['User']." as t2 ON t1.userid = t2.id where t1.parentid = '".$this->CleanData($userid)."' ";
	  		return $this->query($this->sql,1);
		}



public function FetchallNetwork($userid){
		echo $this->sql = "Select t1.* , t2.* from ".$this->tables['user_network']." as t1 LEFT JOIN ".$this->tables['User']." as t2 ON t1.userid = t2.id ";
	  		return $this->query($this->sql,1);
		}

}
?>