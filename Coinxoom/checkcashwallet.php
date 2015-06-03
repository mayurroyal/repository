<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'buycoins.class.php');
$ObjBuycoins = new Buycoins();
$Msg = '';
$success='';


 $UserId=$_GET['UserId'];
 echo"<br>";
 $amount=$_GET['amount'];
   $ArrValidAmount = $ObjBuycoins->ValidAmount($UserId);
   $ValidAmount = $ArrValidAmount[0];
  //echo'<pre>';print_r(); 
 
 
 

if($ValidAmount['Cash_wallet'] > $amount) {
   echo $ValidAmount;
}else {
    echo $error = "Insufficient balance";
}


 
 

?>