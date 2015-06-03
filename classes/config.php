<?php 
ini_set("display_errors","1");
ini_set('memory_limit','32M');

// Database configuration //
$configVars['dbhost']				= "localhost";   // Database host address //
$configVars['dbuser']				= "root";		 // Database user name 	//	
$configVars['dbpassword']			= "";		     // Database password   //

$configVars['mainDB']				= "Coinxoom";
$configVars['dbname']				= "Coinxoom";



$configVars['dbport']				= 3306;		 			// Database port	 //s
// Database block end //

$configVars['SiteBasePath']			= "C://xampp/htdocs/Coinxoom/";// Base path of the site  //
$configVars['SiteUrlPath']			= "http://localhost/Coinxoom/"; // Base Url of the site   //


$configVars['ImageBasePath']		= $configVars['SiteBasePath']."images/";
$configVars['ImageUrlPath']			= $configVars['SiteUrlPath']."images/";

$configVars['ClassesBasePath']		= $configVars['SiteBasePath']."classes/";
$configVars['ClassesUrlPath']		= $configVars['SiteUrlPath']."classes/";

$configVars['JsBasePath']			= $configVars['SiteBasePath']."js/";
$configVars['JsUrlPath']			= $configVars['SiteUrlPath']."js/";	

$configVars['CssBasePath']			= $configVars['SiteBasePath']."css/";
$configVars['CssUrlPath']			= $configVars['SiteUrlPath']."css/";


// ---------------------------- User General Information Tables ---------------------------------------------//
$configTables['User']					= $configVars['dbname']."."."user";
$configTables['user_account_setting']	= $configVars['dbname']."."."user_account_setting";
$configTables['user_network']			= $configVars['dbname']."."."user_network";
$configTables['buy_bit_coin']			= $configVars['dbname']."."."buy_bit_coin";
$configTables['other_setting']			= $configVars['dbname']."."."other_setting";
$configTables['deposite_bank']			= $configVars['dbname']."."."deposite_bank";
$configTables['bank_name']				= $configVars['dbname']."."."bank_name";
$configTables['sell_bit_coin']			= $configVars['dbname']."."."sell_bit_coin";
$configTables['press_release']			= $configVars['dbname']."."."press_release";
$configTables['blog_post']		        = $configVars['dbname']."."."blog_post";
$configTables['send_money']				= $configVars['dbname']."."."send_money";
$configTables['cash_deposite_agent']	= $configVars['dbname']."."."cash_deposite_agent";
$configTables['contact']				= $configVars['dbname']."."."contact";
$configTables['career']					= $configVars['dbname']."."."career";
$configTables['user_verification']		= $configVars['dbname']."."."user_verification";
$configTables['escrow']					= $configVars['dbname']."."."escrow";
$configTables['withdraw']				= $configVars['dbname']."."."withdraw";


?>
