<?php @session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'security.class.php');

$ObjSecurity = new Security();
$Msg = '';

if(empty($_SESSION['UserId'])) {
    header("Location: login.php");
	die();
}else{   

$UserId = $_SESSION['UserId'];
 

					} 
					
$code2=$_POST['code1'];
$arraysetting = $ObjSecurity->SelectSecurityCode($code2);
 foreach($arraysetting as $code2 => $row)
 
echo '$code2';
		
			   					 include_once ($configVars['SiteBasePath'].'head_menu.php'); ?>	