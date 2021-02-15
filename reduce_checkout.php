<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";

											
											
				//REDUCE CART QUANTITY TO NULL, 29-03-2018, Prabhat Chandra
				$sql = $conn->query("SELECT u_cart.p_id, u_cart.user_name, u_cart.u_qty,
										i_new_product.id, i_new_product.price,
										u_cart.u_qty - u_cart.u_qty AS ext_price
										FROM i_new_product
										LEFT JOIN u_cart ON i_new_product.id = u_cart.p_id")
										or die(mysqli_error($conn)) ;
										
						while($min = $sql->fetch_array()){
					
					
											
												//$id = $min['id'];				
												$t_price = $min['ext_price'];
											
			
			
			$conn->query("UPDATE `u_cart` SET `u_price` = '$t_price'  
			WHERE user_name='$us_name' ") 
				or die(mysqli_error($conn));
				
						}

						//Cart Price Calculation, Here to NULL, Created on 30-03-2018, Prabhat Chandra
								$sql = $conn->query("SELECT p_id, user_name, SUM(u_price) AS t_price
								FROM u_cart
								GROUP BY user_name = '$us_name' 
								 ;")
								or die(mysqli_error($conn)) ;
										
								while($min = $sql->fetch_array()){
					
												$id = $min['p_id'];
												$cus_name = $min['user_name'];	
												$totalprice = $min['t_price'];
												
					
									$conn->query("REPLACE INTO `cart_t` VALUES( '$cus_name', '$totalprice' )") or die(mysqli_error($conn));
								}
								

								
								
								//REDUCE CART QUANTITY TO NULL, 29-03-2018, Prabhat Chandra
				$sql = $conn->query("SELECT u_cart.p_id, u_cart.user_name, u_cart.u_qty,
										i_new_product.id, i_new_product.price,
										u_cart.u_qty - u_cart.u_qty AS ext_qty
										FROM i_new_product
										LEFT JOIN u_cart ON i_new_product.id = u_cart.p_id")
										or die(mysqli_error($conn)) ;
										
						while($min = $sql->fetch_array()){
					
					
											
												//$id = $min['id'];				
												$ext_qty = $min['ext_qty'];
											
			
			
			$conn->query("UPDATE `u_cart` SET `u_qty` = '$ext_qty'  
			WHERE user_name='$us_name' ") 
				or die(mysqli_error($conn));
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
						
								

					//REMOVE ITEM FROM CART, 30-03-2018, Prabhat Chandra
													$conn->query("DELETE FROM u_cart
													WHERE user_name='$us_name' ") 
															or die(mysqli_error($conn));		
		
					// END OF QUERY, aPCreations
																	 
//Redirection while checking query error, 10-04-2018, Prabhat Chandra
if (!$sql) {
    header('Location: error.php', TRUE, 303);
    die('Invalid query: ' . mysql_error());
} else {
    header('Location: paydone.php', TRUE, 303);
    die('Success');
}	
	
	}	else {
		header('Location: error.php');
	}	
	
	
?>	