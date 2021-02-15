<?php
require_once "connect.php";


	if(ISSET($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$u_name = $_POST['u_name'];
		$password = $_POST['password'];
		$mobile_num = $_POST['mobile_num'];
		$email = $_POST['email'];
		$doj=(date("Y-m-d",time()));
	//	$profile_pic = 0;
		

		
		
		
		
			$conn->query("INSERT INTO `i_new_user_details` VALUES('$fname','$lname','$u_name', '$password','$mobile_num','$email','$profile_pic','$doj')") or die(mysqli_error($conn));
		
		
		
	}
		
		 else {
		
		header('Location: error.php');
		
}



if (!$conn) {
    header('Location: error.php', TRUE, 303);
    die('Invalid query: ' . mysql_error());
} else {
    header('Location: login.php', TRUE, 303);
    die('Success');
}

		
		
			

?>


