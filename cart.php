<html>
<?php
session_start();
require_once "header1.php";
 
if(isset($_SESSION['u_name'])){
	$us_name= $_SESSION['u_name'] ;	
		require_once "refresh_cart.php";
?>
<div class="cart">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>

			
		 <div class="col-md-9 cart-items">
			 <h2>My Shopping Bag</h2>
				
			 <!-- Created On 31-March-2018, Prabhat Chandra -->
			 <div class="cart-header">
				
				  <div class="cart-sec">
				  <?php
		//	 $sql=mysqli_query($conn,"SELECT * FROM `testing` WHERE u_name='$u_name'");
			//	  while($fimpo = $sql->fetch_array()){
								//echo "Yo!".$u_name;									
									$sql = $conn->query("SELECT * FROM u_cart , i_new_product
															WHERE u_cart.p_id = i_new_product.id AND u_cart.user_name='$u_name' ")
														or die(mysqli_error($conn)) ;
																	
															while($fimpo = $sql->fetch_array()){					
																	
						$id = $fimpo['p_id'];
						$qty = $fimpo['u_qty'];
						?>
					<div class="cart-item">
						 
					<?php
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $fimpo['image'] ).'" />';
							// echo $fimpo['user_name'];
										 ?>
						</div>
						
						
					   <div class="cart-item-info">
							 <h3 class="item_name"><?php echo $fimpo['name'];?><span>Model id: <?php echo $fimpo['p_id'];?> </span></h3>
							 <h4><span>Rs. </span> <?php echo $fimpo['u_price'];?></h4>
							 
							 
								<form action="update_cart_qty.php" method="post">
									<input type="hidden" name="id" value=" <?php echo $id; ?>  ">
							<p class="qty">Selected Qty ::<?php echo $fimpo['u_qty']; ?><br>UPDATE:</p><input min="1" type="number" name="qty" value="1" class="form-control input-small">
								<input type="submit" value="Apply"> 
								</form>
					   	<form action="remove_item_cart.php" method="post">
									<input type="hidden" name="id" value=" <?php echo $id; ?>  ">
									<input type="submit" value="Remove"> 
								</form>		
								</div>    <?php 	
			                     	 }						
									?>
					   <div class="clearfix"></div>
						<div class="delivery">					
							 <span>Delivered in 2-3 business days</span>
							 <div class="clearfix"></div>
				      </div>						
				  </div>
			  </div>  
		 </div>
		 
		 
		 <div class="col-md-3 cart-total">
			 <p>SEE FINAL PRICE:</p><BR>
			 <div class="price-details">
				 <h3>Price Details</h3>
												<?php
				 
									$sql = $conn->query("SELECT * FROM cart_t WHERE cart_t.cus_name='$u_name'
																")
																	or die(mysqli_error($conn)) ;
																	
																
																while($fimpo = $sql->fetch_array()){
											
					$t_price = $fimpo['totalprice'];											
																	
													?>
				 <span>Total</span>
				 <span class="total">Rs.<?php echo $fimpo['totalprice']; ?>.00</span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 
				 <div class="clearfix"></div>				 
				</div>	
				<h4 class="last-price">TOTAL</h4>
			  
				
				<span class="total final">Rs.<?php 
																echo $t_price ;}
									?>.00
									
						<?php
				 
									$sql = $conn->query("SELECT * FROM cart_t_q WHERE cart_t_q.user_name='$us_name'
																")
																	or die(mysqli_error($conn)) ;
																	
																
																while($fimpo = $sql->fetch_array()){
											
					$t_qty2 = $fimpo['t_qty'];											
																	
													?>
													
													<br>
															<h5>Total Number Of Items: <?php echo $t_qty2;} ?></h5>
						
				
				</span>
				
				
				
				
			 <div class="clearfix"></div>
			
<br><br>
<?php 
if($t_qty2 == 0 ){
	echo'
			<script type = "text/javascript">
				alert("NO ITEM IN CART!!!");
				window.location = "index.php";
			</script>
		';
		} else { ?>

 <form action="checkout.php" method="post">
				
			 <button class="btns">PLACE ORDER</button>
			</form>
			 <?php
			}
			?>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<!--	 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div> -->
			</div>
	 </div>
</div>
<?php
 require_once "men_footer.php";
			} else {
				
				echo'
			<script type = "text/javascript">
				alert("Sign In First!!!");
				window.location = "login.php";
			</script>
		';
		}
?>
</html>