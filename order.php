

<!DOCTYPE html>
<html>
<?php

session_start();
	if(isset($_SESSION['u_name'])){
	$us_name= $_SESSION['u_name'] ;	
	require_once "connect.php";
	require_once "header1.php";

?>
<head>
<style>
#div1 {
    background-color: black;
    
    border: 2px soild green;
    
}
</style>
</head>
<body>

<div class="cart">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="cart.php">Cart</a></li>
		  <li class="active">My Order</li>
		 </ol>
		
		<div id="div1">

										<?php
										
								$sql = $conn->query("SELECT * FROM u_orders , i_new_product, u_shipping_details
															WHERE u_orders.product_id = i_new_product.id AND u_orders.user_name='$us_name' AND u_orders.a_id = u_shipping_details.a_id AND donezo = 1 ORDER BY u_date DESC ")
														or die(mysqli_error($conn)) ;
																	
															while($fimpo = $sql->fetch_array()){
															
															if($fimpo['donezo']=1){
															
																$order_q_id = $fimpo['order_q_id'];
																//echo $order_q_id;
																$a_id =  $fimpo['a_id'];
																//echo $a_id;
																//echo $fimpo['a_id'];
																
																?>
		<div class="cart-header">
				 <div class="close"> <h3><span>Order ID:<?php echo $fimpo['order_q_id'];?>
				 <br>
				 	<form action="remove_p_order.php" method="post">
									<input type="hidden" name="order_q_id" value=" <?php echo $order_q_id; ?>  ">
									<input type="submit" value="Cancel Order"> 
								</form>		
								</span></h3>
							  </div>
				 
				 <div class="cart-sec">
						<div class="cart-item cyc">
							<?php
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $fimpo['image'] ).'" />';
							// echo $fimpo['user_name'];
										 ?>
						</div>
						
						
					   <div class="cart-item-info">
							 <h3><?php echo $fimpo['name'];?><span>Model ID:<?php echo $fimpo['id'];?></span></h3>
							 
							 <h2><span>Purchased On: </span><?php echo $fimpo['u_date'];?></h2>
							 
							
							  
							 <h4><span>Rs.</span><?php echo $fimpo['u_price'];?></h4>
															<p class="qty">Num of Qty ::<?php echo $fimpo['f_qty'];?></p>
					 </div>
					 <br>
					 <br>
					   <div>
					   Delivering to :
						  
						  <?php
					//	  $sql = $conn->query("SELECT * FROM u_shipping_details WHERE u_name='$u_name'") or die(mysqli_error($conn)) ;
						//  while($details = $sql->fetch_array()){
															
							//if($a_id= $fimpo['a_id']){
									echo $f_name = $fimpo['f_name'];
									echo " ".$l_name = $fimpo['l_name'];
									echo "<br>";
									echo " ".$address = $fimpo['address'];
									echo ", ".$address2 = $fimpo['address2'];
									echo ", ".$fimpo['city'];
									echo "<br>";
									echo " ".$state = $fimpo['state'];
									echo ", ".$zip = $fimpo['zip'];
									echo "<br>";
									echo " ".$country = $fimpo['country'];
									echo ", PH: ".$fimpo['p_num'];
									echo "<br>";
									echo "<br>";
										
															
								?>		
						 
						 
						 
						 </div>
						
					   <div class="clearfix"></div>
						<div class="delivery">
						 
							 <div class="clearfix"></div>
				        </div>	
	
								
				  </div>
				  <?php
						}	 else {
							echo "Nothing";
						}	
						}
						
			?>
			 </div>
															
					
					
		
		

		</div>
	
		 </div>
		 </div>
		 
		
<?php

require_once "men_footer.php";
	}
?>
</body>
</html>

