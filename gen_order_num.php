<?php

session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
	
				//GENERATE ORDERS' NUMBER, 01-04-2018, Prabhat Chandra
				$start = 'ORDDAP';
				$characters = array_merge(range('A','Z'), range('0','9'));
				for ($i = 0; $i < 9; $i++) {
					$rand = rand(0, count($characters)-1);
					$start .= $characters[$rand];
				}
				echo $start;

				
			//UPDATE ORDERS' NUM, 02-04-2018, Prabhat Chandra
			$conn->query("UPDATE `u_orders` SET `order_num` = '$start'  
					WHERE u_orders.user_name='$us_name' ") 
							or die(mysqli_error($conn));
	
	echo'
			<script type = "text/javascript">
				alert("DATA SAVED");
				window.location = "select_u_address.php";
			</script>
		';
	
	}
	
		
?>