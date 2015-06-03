<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'account.class.php');
$ObjAccount = new Account();
/**
 * if(is_array($_FILES)) {
 * if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
 * $sourcePath = $_FILES['userImage']['tmp_name'];
 * $targetPath = "images/".$_FILES['userImage']['name'];
 * if(move_uploaded_file($sourcePath,$targetPath)) {
 * ?>
 * <img src="<?php echo $targetPath; ?>" width="135px" height="135px" />
 * <?php
 * }
 * }
 * }
 */
$new_id=$_SESSION['UserId'];
if(is_array($_FILES)) 
{
if(is_uploaded_file($_FILES['userImage']['tmp_name']))
	{
		$ext_file=explode(".",$_FILES['userImage']['tmp_name']);
		$ext_image_file=$ext_file[count($ext_file)-1];
	//	echo $ext_image_file; 
		if(strtolower($ext_image_file)==strtolower("png") || strtolower($ext_image_file)==strtolower("jpg") || 
		strtolower($ext_image_file)==strtolower("jpeg") || strtolower($ext_image_file)==strtolower("tiff") || strtolower($ext_image_file)==strtolower("tmp") || 
		strtolower($ext_image_file)==strtolower("bmp"))
		{
			$dirpath="userdata";
			//echo $dirpath; 
			//die();
			if(!file_exists($dirpath))
			{
				mkdir($dirpath,"0755");
			}
			if(file_exists($dirpath))
			{
				$dirpath.="/".$new_id;
				if(!file_exists($dirpath))
				{
					mkdir($dirpath,"0755"); 
				}
				if(file_exists($dirpath))
				{
					$dirpath.="/profile_pic"; 
					if(!file_exists($dirpath))
					{
						mkdir($dirpath,"0755");
					}
					if(file_exists($dirpath))
					{
						$dirpath.="/".$_FILES['userImage']['name']; 
						if(!move_uploaded_file($_FILES['userImage']['tmp_name'],$dirpath))
						{
						?>
						<script>
							alert("there might be some isuue with server while uploading file....");
						</script>
						<?php
						}
						?>
							<img src="<?php echo $dirpath; ?>" width="135px" height="135px" />
					<?php
					 //  $profile=trim($dirpath);
					  // $id=$_SESSION['UserId'];
					   //$date=date("Y-m-d H:i:s");
					  //$exe_upadte= $ObjAccount->Updateprofile_pic($profile, $date, $id);
					 $updt_user_data="update user set profile_Pic='".trim($dirpath)."', pic_upadte_date='".date("Y-m-d H:i:s")."' where Id=".$_SESSION['UserId']."";
					 $exe_upload= mysql_query($updt_user_data);
					 die(mysql_error());
					 if(isset($exe_update))
					 {
					 	?>
						 <script>
							alert("Profile pic updated Successfully....");
						</script>
						 <?php
					 }	// execute your query here
					}
				}
			}
		}
		else
		{
			?>
			<script>
				alert("please upload a valid image with extensions : .jpg, .jpeg...etc");
				</script>
			<?php
		}
	}
   }	
?>