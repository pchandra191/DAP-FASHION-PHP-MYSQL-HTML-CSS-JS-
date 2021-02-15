<?php
require_once "connect.php";

	$id = $_POST['id'];
	$qty = $_POST['qty'];
	$date=(date("Y-m-d",time()));
	
	
	$sql = $conn->query("SELECT 		i_new_product.id, i_new_product.qty,
										i_new_product.qty + '$qty' AS a_qty
										FROM i_new_product
										WHERE i_new_product.id = '$id'")
										or die(mysqli_error($conn)) ;
										
					while($min = $sql->fetch_array()){
						
						
						//$id = $min['id'];	
						$a_qty = $min['a_qty'];
											
	
	
			$conn->query("UPDATE `i_new_product` SET `qty` = '$a_qty' 
			WHERE id = $id ") 
				or die(mysqli_error($conn));
				
				
				
			$conn->query("UPDATE `i_new_product` SET `date` = '$date' 
			WHERE id = $id ") 
				or die(mysqli_error($conn));
				
					}
					
					header('Location: up_query.php');	
		
?>