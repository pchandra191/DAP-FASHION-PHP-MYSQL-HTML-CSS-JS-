<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;
	require_once "connect.php";
	
	
	 
	 if(isset($_POST['gameid'])){
	 $gid = $_POST['gameid'];
	 echo $gid;
//	 $id_a = $id_a;
	
			//REMOVE CANCELED ITEM FROM ORDERS, 08-04-2018, Prabhat Chandra
		$conn->query("DELETE FROM u_orders
		WHERE u_orders.order_q_id=$gid AND u_orders.user_name='$us_name' ") 
				or die(mysqli_error($conn));								
//	}

//Redirection while checking query error, 10-04-2018, Prabhat Chandra
if (!$sql) {
    header('Location: error.php', TRUE, 303);
    die('Invalid query: ' . mysql_error());
} else {
    header('Location: cart.php', TRUE, 303);
    die('Success');
}	

	} else {
		
	header('Location: checkout.php');
	}
	} else {
		header('Location: login.php');
	}
	?>
			