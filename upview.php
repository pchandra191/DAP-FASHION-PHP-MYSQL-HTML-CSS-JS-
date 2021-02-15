<?php
//ob_start();
require_once "header.php";
require_once "connect.php";
  
 
 $result = $conn->query("SELECT * FROM i_new_product WHERE id = '3'");
 $stmt = $conn->prepare($result);
 
$result=mysqli_fetch_array($result);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
?>	
