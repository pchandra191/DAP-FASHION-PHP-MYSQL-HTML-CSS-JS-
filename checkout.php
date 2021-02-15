<?php
session_start();
require_once "header1.php";
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
?>
<!--header//-->
<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Shipping Address</li>
		 </ol>
		 <h2>Enter New Shipping Address</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
					
				 <form action="u_shipping_details.php" method="post">
				 	 <ul>
						 <li class="text-info">First Name: </li>
						 <li><input type="text" name="f_name" value="" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Last Name: </li>
						 <li><input type="text" name="l_name" value="" required=""></li>
					 </ul>				 
					
					 <ul>
						 <li class="text-info">Address: </li>
						 <li><input type="text" name="address" value="" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Address 2:</li>
						 <li><input type="text" name="address2" value="" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">City:</li>
						 <li><input type="text" name="city" value="" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Contact Number:</li>
						 <li><input type="text" name="p_num" value="" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">State:</li>
						 <li><input type="text" name="state" value="" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">ZipCode:</li>
						 <li><input type="text" name="zip" value="" required=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Country:</li>
						 <li><input type="text" name="country" value="" required=""></li>
					 </ul>
					 <input type="submit" value="Continue to Checkout">
						<ul>
							<li><input type="checkbox"> Shipping address is the same as my billing address</li>
							</ul>
						<ul>
							<li><input type="checkbox"> Save this information for next time</li>
							</ul>
							</br>
							</br>
							
					 <p class="click">&copy; 2018 DAP Fashion By clicking `Checkout` button, you agree to my <br>
					    <b>  Policy Terms </b> and <b> Conditions</b></p> 
				 </form>
			 </div>
		 </div>

			 <br>
			 
			
			 <H4> SELECT AN ADDRESS FROM YOUR PREVIOUS ADDRESS(ES):</H4><BR>
			
					
					
				<?php								
					$sql = $conn->query("SELECT * FROM u_shipping_details
											WHERE u_shipping_details.u_name='$us_name' ")
											or die(mysqli_error($conn)) ;
													
											while($details = $sql->fetch_array()){	
											
								    $a_id = $details['a_id'];		
									$u_name = $details['u_name'];
									
									echo $f_name = $details['f_name'];
									echo " ".$l_name = $details['l_name'];
									echo "<br>";
									echo " ".$address = $details['address'];
									echo ", ".$address2 = $details['address2'];
									echo ", ".$details['city'];
									echo "<br>";
									echo " ".$state = $details['state'];
									echo ", ".$zip = $details['zip'];
									echo "<br>";
									echo " ".$country = $details['country'];
									echo ", PH: ".$details['p_num'];
									echo "<br>";
									echo "<br>";
									?>
									
									
									
	
									
							<form action="i_u_orders.php" method="post">
						    <input type="hidden" name="a_id" value=" <?php echo $a_id; ?>  ">
							<button class="btns">Select Address</button>
							</form>
									<?php
											}														
?>

	
												
			  <div class="col-md-3 cart-total">
			 <H3>FINAL PRICE YOU HAVE TO PAY IS:</H3><BR>
			 <div class="price-details">
				 <h3>TOTAL OF  </H3>
					<?php

									$sql = $conn->query("SELECT * FROM cart_t WHERE cart_t.cus_name='$u_name'
																")
																	or die(mysqli_error($conn)) ;
																
																while($fimpo = $sql->fetch_array()){
						?>
								 
			 </div>	
			 
			  
			 <H2>
			  Rs.<?php 
			
			 echo $fimpo['totalprice']; }?>.00/-
			 </H2>
			 <div class="clearfix"></div>
			 
			 </div>						
</div>			 
			 
			 
		
		 <div class="col-md-6 reg-right">
		 <!--
			 	<div style="background-image: url(../images/1.jpg);
					    height:200px; width:400px; border:1px solid block;">
						</div> -->
		</div>
		 <div class="clearfix"></div>		 
	 </div>
	
<?php
	
	
 require_once "men_footer.php";
 
	} else {
		
			echo'
			<script type = "text/javascript">
				alert("Sign In First!!!");
				window.location = "login.php";
			</script>
		';
		
	}
?>	
</body>
</html>