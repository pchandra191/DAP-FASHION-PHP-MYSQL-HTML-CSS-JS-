<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";

	
	
		// FINALIZE THE ORDERS, 08-04-2018, Prabhat Chandra
		 if(isset($_POST['order_q_id'])){
			$order_q_id = $_POST['order_q_id'];
		// $order_q_id;
			$doneid = 1;
			//echo $doneid;
		 
									
				//		$conn->query("UPDATE `u_orders` SET `donezo` = 1  
					 //		WHERE order_uni = '$gameid' ") 
							//	or die(mysqli_error($conn));
								
								
								$conn->query("UPDATE `u_orders` SET `donezo` = $doneid  
												WHERE u_orders.order_q_id = $order_q_id ") 
													or die(mysqli_error($conn));
		 
		 } else {
			
		 header('Location: checkout.php'); 
			 
	 }
			
	
	
	
								
								//UPDATE CART PRICE, 02-04-2018, Prabhat Chandra
								$sql = $conn->query("SELECT product_id,  SUM(f_qty) AS s_qty
								FROM u_orders
								GROUP BY product_id ;")
										or die(mysqli_error($conn)) ;
										
								while($min = $sql->fetch_array()){
					
								$id = $min['product_id'];
								$soldqty = $min['s_qty'];
												
				
											
						$conn->query("REPLACE INTO `s_sold_product` VALUES( '$id', '$soldqty' )") or die(mysqli_error($conn));

								
								}
								
								//Reduce from warehouse, Prabhat Chandra, 05-04-2018
										$sql = $conn->query("SELECT u_cart.p_id ,  u_cart.u_qty,
										i_new_product.id, i_new_product.qty,
										i_new_product.qty - u_cart.u_qty  AS ss_qty
										FROM u_cart
										LEFT JOIN i_new_product ON i_new_product.id = u_cart.p_id")
										or die(mysqli_error($conn)) ;
										
				while($min = $sql->fetch_array()){
						
											
												$id = $min['p_id'];													
												$ss_qty = $min['ss_qty'];
											
						$conn->query("UPDATE `i_new_product` SET `qty` = '$ss_qty'  
							WHERE id = $id  ") 
								or die(mysqli_error($conn));
								
								
				}
				
	//Redirection while checking query error, 10-04-2018, Prabhat Chandra
if (!$sql) {
    header('Location: error.php', TRUE, 303);
    die('Invalid query: ' . mysql_error());
} else {
    header('Location: reduce_checkout.php', TRUE, 303);
    die('Success');
}	
				
	}	else {		
header('Location: login.php'); 	
	}							
?>