<?php
	class Test extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function Test(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		
        public function Test1(){
            $this->sql = 'this is test function';
			return $this->sql;
		}
		
		public function madhusmita(){
			$this->sql = 'this function is made by madhusmita';	
			return $this->sql;			
		}

		public function Test2($from=0,$to=0){
			$this->sql = " Select * from ".$this->tables['TableName']."";
			!empty($to)?($this->ext =" limit ".$from.",".$to):($this->ext = " ");
			!empty($this->ext)?($this->sql.=$this->ext):($this->sql.= " ");
		    return $this->query($this->sql,1);
		}	

		
		
		public function view(){
			$this->sql = " Select * from ".$this->tables['User'];
		    return $this->query($this->sql,1);
		}
		
		
		
		public function adduser($name,$mobile,$email){
			//list($id,$name,$mobile,$email,$Date)= $TestArray;
		    //$this->sql = "INSERT INTO ".$this->tables['User']." set name = '".$name."' , mobile = '".$mobile."' , email = '".$email."'";
		    $this->sql   = "INSERT INTO ".$this->tables['User']." (name , mobile , email) value ('".$name."' , '".$mobile."' , '".$email."')";
			//echo $this->sql; DIE;
			$this->query($this->sql,0);
		
		
		if($this->sql){
			header('location:edituser.php');	
		}
		}
		
			
		//public function edituser($name,$mobile,$email){
		 //   $sql = "Update ".$this->tables['User']." set name = '".$name."' , mobile = '".$mobile."' Where email = '".$email."'";
		//	$this->query($sql,0);
		//}
		
		
		
		public function edituser($id,$name,$mobile,$email){
			//list($id,$name,$mobile,$email,$Date)= $TestArray;
		    //$this->sql = "INSERT INTO ".$this->tables['User']." set name = '".$name."' , mobile = '".$mobile."' , email = '".$email."'";
		    $sql = "Update ".$this->tables['User']." set name = '".$name."' , mobile = '".$mobile."' , email = '".$email."' Where id = '".$id."'";
			$this->query($sql,0);
		}
		
		
		public function del($id){
			//list($UserId,$name,$mobile,$Date,$IP)= $TestArray;
		    $sql = "Delete from ".$this->tables['User']." Where id = '".$id."'";
			$this->query($sql,0);
			
			if($sql){
			header('location:edituser.php');	
		}
		}
		
		
		
		
		
		public function update($id,$name,$mobile,$email){
			//list($UserId,$name,$mobile,$Date,$IP)= $TestArray;
		    $sql = "Update ".$this->tables['User']." set Name = '".$name."' , mobile = '".$mobile."' , email = '".$email."' Where Id = '".$Id."'";
			$this->query($sql,0);
		}
		
		
		public function Test3($TestArray){
			list($UserId,$name,$mobile,$Date,$IP)= $TestArray;
		    $this->sql = "INSERT INTO ".$this->tables['User']." set UserId = '".$UserId."' , Name = '".$name."' , Mobile = '".$mobile."' , TimeAdded = '".$Date."' , IP = '".$IP."'";
			$this->query($this->sql,0);
		}
		
		public function Test4($TestArray){
			list($UserId,$name,$mobile,$Date,$IP)= $TestArray;
		    $sql = "Update ".$this->tables['TableName']." set UserId = '".$UserId."' , Name = '".$name."' , Mobile = '".$mobile."' , TimeAdded = '".$Date."' , IP = '".$IP."' Where Id = '".$Id."'";
			$this->query($sql,0);
		}
		
		public function Test5(){
			list($UserId,$name,$mobile,$Date,$IP)= $TestArray;
		    $sql = "Delete from ".$this->tables['TableName']." Where Id = '".$Id."'";
			$this->query($sql,0);
		}
}
?>