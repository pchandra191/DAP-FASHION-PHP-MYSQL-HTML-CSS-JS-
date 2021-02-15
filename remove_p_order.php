<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";

	
	
		// REMOVE CURRENT PLACED THE ORDERS, 20-04-2018, Prabhat Chandra
		 if(isset($_POST['order_q_id'])){
			$order_q_id = $_POST['order_q_id'];
		
			$doneid = 3;
	
		 
			
								
								$conn->query("UPDATE `u_orders` SET `donezo` = $doneid  
												WHERE u_orders.order_q_id = $order_q_id ") 
													or die(mysqli_error($conn));
		 
		 } else {
			
		 header('Location: error.php'); 
		 
		 }
		 
		 header('Location: order.php'); 
			 
	 }
	 
	 
	 
?>