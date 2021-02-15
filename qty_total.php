<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;
	require_once "connect.php";
	
	
	
	
			
	
	
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
							
		
//Redirection while checking query error, 10-04-2018, Prabhat Chandra
if (!$sql) {
    header('Location: error.php', TRUE, 303);
    die('Invalid query: ' . mysql_error());
} else {
    header('Location: cart.php', TRUE, 303);
    die('Success');
}
	
	} else{
		header('Location: login.php');
	}
?>