<?php
	class BlogPost extends dbClass{
		var $tables,$sitevariable,$sql,$ext;
		
		function BlogPost(){
			global $configTables,$configVars;
			$this->tables = $configTables;
			$this->sitevariable = $configVars;
			$this->dbClass();
		}
		

			
        
		public function SelectBlogPost(){
		 	$this->sql = "Select * from ".$this->tables['blog_post']." limit 0,2";
	  		return $this->query($this->sql,1);
		}
		  
		public function SelectBlogPost1(){
		 	$this->sql = "Select * from ".$this->tables['blog_post']." limit 2,6";
	  		return $this->query($this->sql,1);
		}
		
	public function GetBlogPost($id){
		

		 	$this->sql = "Select * from ".$this->tables['blog_post']." where id= '".$this->CleanData($id)."'";
	  		return $this->query($this->sql,1);
		}
		
	
		
		
		}
?>