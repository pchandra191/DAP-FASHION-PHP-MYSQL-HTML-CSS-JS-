<?php
session_start();
	if(isset($_SESSION['u_name'])){
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
	
				$sql = $conn->query("SELECT u_cart.p_id, u_cart.user_name, u_cart.u_qty,
										i_new_product.id, i_new_product.price,
										u_cart.u_qty * i_new_product.price AS t_price
										FROM i_new_product
										LEFT JOIN u_cart ON i_new_product.id = u_cart.p_id")
										or die(mysqli_error($conn)) ;
										
				while($min = $sql->fetch_array()){
					
					
											
												$id = $min['id'];													
												$t_price = $min['t_price'];
											
												
	//									$conn->query("UPDATE INTO `u_cart` VALUES( '$u_name' , $id, $u_qty, $t_price ) WHERE p_id = $id") or die(mysqli_error($conn));
			$conn->query("UPDATE `u_cart` SET `u_price` = '$t_price'  
			WHERE p_id = $id AND user_name='$us_name' ") 
				or die(mysqli_error($conn));
				
echo'
			<script type = "text/javascript">
				alert("Successfully saved data");
				window.location = "cart_total.php";
			</script>
		';				
		
				}
	}
					
				?>