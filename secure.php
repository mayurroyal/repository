  <div class="row-one security-row">
                                              		 <?php
$row =$ObjSecurity->SelectSecurityCode();
 foreach($row as $row) 
{
 
 ?>
                             							<ul>
										
										<li class="clearfix"><label for="Security">Enter Security Code</label> <span><input type="text" placeholder="" id="Security_Code" name="code" class="input-widthadjust1" ></span></li><li><?php echo $row['Security_Code'];?></li>
										<li class="clearfix"><button type="submit" name="submit" id="sub" class="btn-account-ver">Verify Account</button></li>
									</ul>
                                    <?php } ?>
								
                                   				</div>