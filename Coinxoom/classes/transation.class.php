<?php
	class Transation extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Transation(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
/*		
public function FetchUser($UserId){
		 $this->sql = "Select t1.* , t2.* from ".$this->tables['buy_bit_coin']." as t1 LEFT JOIN ".$this->tables['User']." as t2 ON t1.userid = t2.id where t1.buyer_user_id = '".$this->CleanData($UserId)."' ";
	  	return $this->query($this->sql,1);
		}*/
	
		
	public function FetchUser($UserId){
		 	$this->sql = "Select * from ".$this->tables['buy_bit_coin']."";
	  		return $this->query($this->sql,1);
		}	
		}
?>