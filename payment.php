<?php

session_start();
	if(isset($_SESSION['u_name'])){
	$us_name= $_SESSION['u_name'] ;	
	require_once "connect.php";
	require_once "header1.php";

?>
<!--header//-->
<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Payment</li>
		 </ol>
		 <h2>Payment of 
			
								<?php
								
								$order_q_id = $_GET['order_q_id'];
								
								
									$sql = $conn->query("SELECT * FROM cart_t WHERE cart_t.cus_name='$us_name'
																")
																	or die(mysqli_error($conn)) ;
																	while($fimpo = $sql->fetch_array()){		
								?>			
			  Rs.<?php 
			
			 echo $fimpo['totalprice']; }?>.00/-
			 </h2>
		<br>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
					
					
					
					
			<!--	 <form action="" method="post">
				 	 	<div class="radio">					 
						 <label><input type="radio" name="optradio" value="Credit Card"> Credit Card</label> 
					    </div>
						<div class="radio">
						 <label><input type="radio" name="optradio" value="Debit Card"> Debit Card</label> 
					    </div>
						<div class="radio">
						<label><input type="radio" name="optradio" value="PayPal"> PayPal</label>
					    </div>
						<div class="radio">
						 <label><input type="radio" name="optradio" value="Cash on Delibery"> Cash on Delibery </label>
					    </div>
					 </br>
					 </br></br></br></br>
					 </br></br></br></br>
					 </br></br></br></br>
					 </br> -->
					 <p class="click">DAP Fashion<br>
					     <a href="#"> Yours <b>  Card Details </b> will be <b> Not Saved</b> </a></p>  
				 </form>
			 </div>
		 </div>
		 <h2>Card Detail</h2>
		 <div class="col-md-6 reg-right">
		  <div class="reg">
					 <form action="s_sold_product.php" method="post">
						<ul>
						     <li class="text-info"><b>Name on Card:<b></li>
							<input type="text" name="Name on Card">
						
						    <li class="text-info"><b>Card Number:<b></li>
							<input type="text" name="Card Number">
						
							<li class="text-info"><b>CVV:<b></li>
							<input type="text" name="CVV"/> 
							
							<li class="text-info"><b>Expiration:<b></li>
							<input type="text" name="Expiration"/>
					  	</ul>
							
					

					<?php
						$sql = $conn->query("SELECT * FROM u_orders 
															WHERE u_orders.order_q_id ='$order_q_id' ")
														or die(mysqli_error($conn)) ;
																	
															while($fimpo = $sql->fetch_array()){					
																	
						 $o_id = $fimpo['order_q_id'];
						 $qty = $fimpo['user_name'];
															}
					?>
															  
					 
							<input type="hidden" name="order_q_id" value=" <?php echo $o_id; ?> ">
							<input type="submit" value="Place Order">
					  </form>
					  
					  <form action="failed_order.php" method="post">
					<input type="hidden" name="gameid" value=" <?php echo $o_id;?>  ">
					  <input type="submit" value="Cancel">
					  </form>
					  
			</div>
		</div>
		 <div class="clearfix"></div>		 
	 </div>
</div>		
</body>

</html>
<?php
 require_once "men_footer.php";
	}
?>