<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
		
		
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$address = $_POST['address'];
		$address2 = $_POST['address2'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$country = $_POST['country'];
		$p_num = $_POST['p_num'];
	
			$conn->query("INSERT INTO `u_shipping_details` VALUES('','$us_name','$f_name','$l_name','$address', '$address2','$city','$p_num' ,'$state' ,$zip ,'$country')") or die(mysqli_error($conn));
		
	
	//Redirection while checking query error, 10-04-2018, Prabhat Chandra

    header('Location: i_u_orders.php', TRUE, 303);
    
}	
	
	 else {

		
		header('Location: error.php');
}
?>