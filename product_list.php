<?php
session_start();
	if(isset($_SESSION['u_name'])){
$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
	
								$sql = $conn->query("SELECT p_id FROM u_cart 
													WHERE u_cart.user_name='$us_name' ")
														or die(mysqli_error($conn)) ;
																	
															while($fimpo = $sql->fetch_array()){					
																	
						$id = $fimpo['p_id'];
						echo $id;
						
					}
	}	
?>					