<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;
	require_once "connect.php";

	$id = $_POST['id'];
	$qty = $_POST['qty'];
	
	
	
	
			//UPDATE CART QUANTITY, 30-03-2018, Prabhat Chandra
			$conn->query("UPDATE `u_cart` SET `u_qty` = '$qty'  
			WHERE p_id = $id AND u_cart.user_name='$us_name'") 
				or die(mysqli_error($conn));
				
				
				
				
			//CALCULATE CART QUANTITY, 30-03-2018, Prabhat Chandra
				$sql = $conn->query("SELECT u_cart.p_id, u_cart.user_name, u_cart.u_qty,
										i_new_product.id, i_new_product.price,
										u_cart.u_qty * i_new_product.price AS t_price
										FROM i_new_product
										LEFT JOIN u_cart ON i_new_product.id = u_cart.p_id")
										or die(mysqli_error($conn)) ;
										
					while($min = $sql->fetch_array()){
					
					
											
										$id = $min['id'];	
										$t_price = $min['t_price'];
											
												
										$conn->query("UPDATE `u_cart` SET `u_price` = '$t_price'  
										WHERE p_id = $id AND user_name='$us_name' ") 
										or die(mysqli_error($conn));
				
													}
												 
												 
				
				
				//Cart Price Calculation, Created on 30-03-2018, Prabhat Chandra
								$sql = $conn->query("SELECT p_id, user_name, SUM(u_price) AS t_price
								FROM u_cart
								GROUP BY user_name 
								 ;")
								or die(mysqli_error($conn)) ;
										
								while($min = $sql->fetch_array()){
					
												$id = $min['p_id'];
												$cus_name = $min['user_name'];	
												$totalprice = $min['t_price'];
												
					
									$conn->query("REPLACE INTO `cart_t` VALUES( '$cus_name', '$totalprice' )") or die(mysqli_error($conn));
		
																	} // END OF QUERY, aPCreations
					
						
						//Cart Price Calculation, Created on 30-03-2018, Prabhat Chandra
								$sql = $conn->query("SELECT p_id, user_name, SUM(u_price) AS t_price
								FROM u_cart
								GROUP BY user_name 
								 ;")
								or die(mysqli_error($conn)) ;
										
								while($min = $sql->fetch_array()){
					
												$id = $min['p_id'];
												$cus_name = $min['user_name'];	
												$totalprice = $min['t_price'];
												
					
									$conn->query("REPLACE INTO `cart_t` VALUES( '$cus_name', '$totalprice' )") or die(mysqli_error($conn));
		
																	} // END OF QUERY, aPCreations

//Redirection while checking query error, 10-04-2018, Prabhat Chandra
if (!$sql) {
    header('Location: error.php', TRUE, 303);
    die('Invalid query: ' . mysql_error());
} else {
    header('Location: qty_total.php', TRUE, 303);
    die('Success');
}			
					
	} else {
		
		
		header('Location: login.php');
	
	}  	
?>	