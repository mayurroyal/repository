<?php

$con = mysqli_connect('localhost','root','','coinxoom');
mysqli_select_db($con,"coinxoom");
$code = $_POST["code"]; 

?>   <div class="row-one security-row">
                            <?php
if (!isset($_POST["code"]))
{
?>
                           		<form action="" method="post">
                             							<ul>
										
										<li class="clearfix"><label for="Security">Enter Security Code</label> <span><input type="text" placeholder="" id="Security_Code" name="code" class="input-widthadjust1" ></span></li><li></li>
										<li class="clearfix"><button type="submit" name="submit" id="sub" class="btn-account-ver">Verify Account</button></li>
									</ul>
                                    
								</form>
                                <?php
}else
{
$code = $_POST["code"]; }
$sql = "SELECT Security_Code FROM user WHERE id = 5";
$result = mysqli_query($con,$sql);

while($row = $result->fetch_object())
{     
      
    if($row->Security_Code == $code)
    {
       $sql1 = "UPDATE user_verification SET mobile_verification ='Y' WHERE id = 2";
	   $result = mysqli_query($con,$sql1);

	   echo 'verify';
    }
    else
    {
        echo 'Try Again';
    }
}
?>                  				</div>