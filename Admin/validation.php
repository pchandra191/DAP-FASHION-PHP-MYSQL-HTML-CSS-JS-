
<?php
	include 'connect.php';
	$admin_name = $_POST['admin_name'];
	$password = $_POST['password'];

	
	//USER LOGIN VALIDATION, 09-04-2018, Prabhat Chandra	
	$sql=mysqli_query($conn,"SELECT admin_name, password FROM admin_ver WHERE admin_name='$admin_name' && password='$password'");  
   
   
  
	$retval = mysqli_num_rows($sql);
   
   
   if(!$retval){
	   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; wlogin.php">' ;
		
   } else {
	   
	   session_start();
		$_SESSION['admin_name'] = $admin_name;
		
		
									
	    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; admin.php">' ;
			
   }   
?>