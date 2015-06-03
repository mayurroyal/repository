<?php
if(!$configVars || !is_array($configVars)){
	//echo  "<center><font color=red><b>Conig file required to proceed further !! error in dbClassfile! <br>Please include the config file before the dbclass file thanks !</b></font></center>";
	die();
}
class dbClass {
	var $dbHost,
      $dbUser,
        $dbName,
          $dbPass,
            $dbTable,
              $dbLink,
                $resResult,
                    $dbPort,
				         $string;		


		 function dbClass($status=0) {
		   global $configVars;
		   $this->dbHost = $configVars['dbhost'];
		   $this->dbUser = $configVars['dbuser'];
		   $this->dbPass = $configVars['dbpassword'];
		   $this->dbName = $configVars['mainDB'];
		   $this->connect();
		 }
		
		 function connect() {
		   $this->dbLink = mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
			if(!$this->dbLink) die();
			mysql_select_db($this->dbName);
		 }
		
		 function query($query,$output=1,$record=0) {
		   $result = mysql_query($query);
		   $this->resResult=$result;	
		   if(!$result) die();
		   if ($output == 1) {
			 $results = array();
			 while($row = mysql_fetch_assoc($result)) {
			   $results[] = $row;		   
			 }
			 if($record) 
			 {
				 $this->_recordQuery(date("d-m-Y  H:m:s").' : '.$query);
			 }
		   return $results;
		   }
		   else {
			 return 0;
		   }
		 }
		
		 function getMaxID($id, $table){
		   $query = 'SELECT MAX('. $id .') AS l_insert_id FROM '. $table ;
		   $results = $this->query($query);
		   return $results[0]['l_insert_id'];
		 }
		
		 function lastInsertId(){
		    return mysql_insert_id($this->dbLink);
		 }
		
		 function _recordQuery($query){
		    $myFile = "testFile1.txt";
			$fh = fopen($myFile, 'w') or die("can't open file");
			$stringData = $query."\n";
			fwrite($fh, $stringData);
			$stringData = "Rishi Raj Nigam\n";
			fwrite($fh, $stringData);
			fclose($fh);
		 }

		 function CleanData($value){
			$this->string = htmlentities($value);
			$this->string = strip_tags($this->string);
			$this->string = mysql_real_escape_string($this->string);
			$this->string = str_replace("char", "x", $this->string);
			return $this->string;
		}

		 function numRows(){
			return mysql_num_rows($this->resResult);
		 }
			
}
?>
