<?php
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;
	require_once "connect.php";
	
		
				//UPDATE CART PRICE, 30-03-2018, Prabhat Chandra
								$sql = $conn->query("SELECT p_id, user_name, SUM(u_price) AS t_price
								FROM u_cart
								GROUP BY user_name = '$us_name' ;")
										or die(mysqli_error($conn)) ;
										
								while($min = $sql->fetch_array()){
					
								$id = $min['p_id'];
								$cus_name = $min['user_name'];
								$totalprice = $min['t_price'];
												
				
											
						$conn->query("REPLACE INTO `cart_t` VALUES( '$cus_name', '$totalprice' )") or die(mysqli_error($conn));

								
					
						
						}
						
						//Cart QUANTITY Calculation, Created on 30-03-2018, Prabhat Chandra
								$sql = $conn->query("SELECT user_name, SUM(u_qty) AS tt_qty
								FROM u_cart
								GROUP BY user_name = '$us_name'
								 ;")
								or die(mysqli_error($conn)) ;
										
								while($tq = $sql->fetch_array()){
					
												$totalqty = $tq['tt_qty'];
										//echo $totalqty;
												
									$conn->query("REPLACE INTO `cart_t_q` VALUES( '$us_name', '$totalqty' )") or die(mysqli_error($conn));

						
						
						
}




	}
						
	
	
	?>