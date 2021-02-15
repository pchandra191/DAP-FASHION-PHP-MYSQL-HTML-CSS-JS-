<?php
require_once "connect.php";

	$id = $_POST['id'];
	
				
										
										
										$conn->query("DELETE FROM i_new_product
													WHERE id=$id ") 
															or die(mysqli_error($conn));		
		
			header('Location: delete.php');
		
		?>