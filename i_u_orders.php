<?php
session_start();
	if(isset($_SESSION['u_name'])){
	$us_name= $_SESSION['u_name'] ;	
	require_once "connect.php";

	
	
		
	//			echo $start;
			

		$donezo = 0;
		$a_id = 0;
		
	$date=(date("Y-m-d",time()));
	
				$sql = $conn->query("SELECT * FROM u_cart 
									WHERE u_cart.user_name='$us_name' ")
														or die(mysqli_error($conn)) ;
																	
															while($fimpo = $sql->fetch_array()){					
																	
						$id2= $fimpo['p_id'];
				
						$u_price= $fimpo['u_price'];
				
						$u_name= $fimpo['user_name'];
				
						$qty2 = $fimpo['u_qty'];
						
						
															
	
		//echo $product_id = $_POST['product_id'];
	
	//GENERATE ORDERS' NUMBER, 01-04-2018, Prabhat Chandra
				$characters = array_merge(range('0','999999'));
				
					$rand = rand(0, count($characters)-1);	
				$id = 0;
		
		$conn->query("INSERT INTO `u_orders` VALUES( $id ,$id2, '$u_name',  $qty2, '$a_id', $u_price, '$date', $rand, $donezo )") or die(mysqli_error($conn));
															}
	
	//$conn->query("UPDATE `u_cart` SET `u_name` = '$u_name', `u_qty` = $qty , `u_price` = $price  
		//	WHERE p_id = $id ") 
			//	or die(mysqli_error($conn));
			
			
			
			
			if(isset($_POST['a_id'])){
				$a_id = $_POST['a_id'];
		
		
			//UPDATE ORDERS' FROM PREVIOUS ADDRESS ID, 02-04-2018, Prabhat Chandra
			$conn->query("UPDATE `u_orders` SET `a_id` = '$a_id'  
			WHERE u_orders.user_name='$us_name' AND u_orders.order_q_id=$rand ") 
				or die(mysqli_error($conn));
		
		} else {
			
			$sql = $conn->query("SELECT a_id FROM u_shipping_details
								WHERE u_shipping_details.u_name='$us_name' ")
								or die(mysqli_error($conn)) ;
													
											while($details = $sql->fetch_array()){	
											
											$s_a_id = $details['a_id'];

								//UPDATE ORDERS' ADDRESS ID, 02-04-2018, Prabhat Chandra
								$conn->query("UPDATE `u_orders` SET `a_id` = '$s_a_id'  
								WHERE u_orders.user_name='$us_name' AND u_orders.order_q_id=$rand ") 
								or die(mysqli_error($conn));
										
										}
		}
	}

		header('Location: payment.php?order_q_id='.$rand);

?>