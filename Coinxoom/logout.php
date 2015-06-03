<?php
@session_start();
include_once('./global.inc.php');
  

session_destroy();//destroy the session

header("location:index.php");
exit();
?>