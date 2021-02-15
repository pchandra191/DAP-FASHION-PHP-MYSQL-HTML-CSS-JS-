<?php
	include 'connect.php';
	$u_name = $_POST['u_name'];
	$password = $_POST['password'];

	
	//USER LOGIN VALIDATION, 09-04-2018, Prabhat Chandra	
	$sql=mysqli_query($conn,"SELECT u_name, password FROM i_new_user_details WHERE u_name='$u_name' && password='$password'");  
   
   
  
	$retval = mysqli_num_rows($sql);
   
   
   if(!$retval){
	   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; wlogin.php">' ;
		
   } else {
	   
	   session_start();
		$_SESSION['u_name'] = $u_name;
		setcookie('setcook','$u_name', time()-86400);
		
		
									
	    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; index.php">' ;
			
   }   
?>