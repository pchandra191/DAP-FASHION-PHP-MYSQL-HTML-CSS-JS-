<?php
	session_start();
	if(isset($_SESSION['u_name'])){
		$us_name= $_SESSION['u_name'] ;	
	require_once "connect.php";

		
		$user_name = $_SESSION['u_name'];
		$p_id = $_POST['p_id'];
		$qty = 1;
		$price = $_POST['price'];
	
		//Insert Into Cart, Created on 29-03-2018, Prabhat Chandra
		$conn->query("REPLACE INTO `u_cart` VALUES( $p_id, $qty, $price, '$user_name' )") or die(mysqli_error($conn));
	
	
	//$conn->query("UPDATE `u_cart` SET `u_name` = '$u_name', `u_qty` = $qty , `u_price` = $price  
		//	WHERE p_id = $id ") 
			//	or die(mysqli_error($conn));
	
	
	
		
		//Cart Calculation, Created on 30-03-2018, Prabhat Chandra
		$sql = $conn->query("SELECT p_id, user_name, SUM(u_price) AS t_price
								FROM u_cart
								GROUP BY user_name ;

								 ;")
										or die(mysqli_error($conn)) ;
										
				while($min = $sql->fetch_array()){
					
												$id = $min['p_id'];
												$cus_name = $min['user_name'];
											
													
												$totalprice = $min['t_price'];
												//echo $t_price;
					
				$conn->query("REPLACE INTO `cart_t` VALUES( '$cus_name', '$totalprice' )") or die(mysqli_error($conn));
				}
	
	
	
	
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