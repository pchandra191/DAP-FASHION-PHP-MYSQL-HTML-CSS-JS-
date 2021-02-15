 <?php
				// require_once "header.php";
 
 
 require_once "connect.php";
 session_start();
 if(isset($_SESSION['u_name'])){
		$u_name = $_SESSION['u_name'] ;
				 
						 $c = "pchandra114";		
																
$qimpo = $conn->query("SELECT * FROM `testing` WHERE u_name = '$u_name'") or die(mysqli_error($conn));
									while($fimpo = $qimpo->fetch_array()){	

									$u_name = $fimpo['u_name'];
									$mob = $fimpo['qty'];
									echo $mob;
									echo $u_name;
   
}
 }
?>