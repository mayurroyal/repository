<?php


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="Coinxoom"; // Database name 


//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
mysql_select_db("$db_name")or die("cannot select DB");


// Passkey that got from link 
$passkey=$_GET['passkey'];
// Retrieve data from table where row that match this passkey 

$sql1="SELECT * FROM buy_bit_coin WHERE id ='".$passkey."'";
$result1=mysql_query($sql1);

var_dump($sql1);
// If successfully queried 
if($result1){

// Count how many row has this passkey
$count=mysql_num_rows($result1);
// echo'<pre>';print_r("$sq1"); die;
// if found this passkey in our database, retrieve data from table "temp_members_db"
$seller_aprovel = 1;
if($count==1){
	$rows=mysql_fetch_array($result1);
	$id = $rows['id'];
	
	//$sql2 = "Update ".$this->tables['buy_bit_coin']." set 'seller_aprovel' = 1 Where $id = '".$id."'";
// Insert data that retrieves from "temp_members_db" into table "registered_members" 
$sql2 = "UPDATE buy_bit_coin SET seller_aprovel = '".$seller_aprovel."' WHERE id= '".$id."'";

//$sql2 = "UPDATE items SET seller_aprovel' = ".$seller_aprovel.",id = LAST_INSERT_ID(id)WHERE id= ".$id.";SELECT LAST_INSERT_ID()";


var_dump($sql2);
$result2=mysql_query($sql2);
}

// if not found passkey, display message "Wrong Confirmation code" 
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"




}
?>