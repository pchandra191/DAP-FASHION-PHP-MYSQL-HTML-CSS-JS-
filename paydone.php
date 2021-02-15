<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
	 require_once "header1.php";

?>
<!--header//-->

<br>
</br>
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Payment Done</li>
		 </ol>
		 
		 
		  <div class="col-md-9 cart-items">
			 <h2>SUCCESSFULLY PLACED ORDER</h2>
				
			 <br>
			 <br>
					<a href="order.php">  !Check Your Orders Here! </a>
					  <br>
		 
		 
		 <div class=" text-right col-md-12">
		 <p class="click"><h3><b>THANKS!!</b><br>
			 Thank you for placing your order with us.     
					 
					  <br>
					<a href="index.php">  !Shop More Here! </a>
					  <br></h3>
				  
		 </p>
		  <br><br>
		   
		 </div>
		 <div class="clearfix"></div>		 
	 </div>
	 </div>

<?php

require_once "men_footer.php";
			} 
?>

</html>
