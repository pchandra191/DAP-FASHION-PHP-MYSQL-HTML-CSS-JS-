<?php 	
require_once "connect.php";
						
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE cat = '5'  AND m_cat=1") or die(mysqli_error($conn)); 	 
			while($fimp1 = $qimpo->fetch_array()){
				?>
					<div class="product-grid love-grid">
						<div class="more-product-info"><span>TOP</span></div>						
							<div class="product-img b-link-stripe b-animate-go  thickbox">
								<div class="img-responsive">
										<?php	
										echo '<img src="data:image/jpeg;base64,'.base64_encode( $fimp1['image'] ).'"/>';
										$id = $fimp1['id']; 
										?>
								</div>		
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns"><a href="single.php?data=<?php echo $id; ?>">ORDER NOW</button>
								
							</h4>
							</div>
							</div>						
							<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
						
								<h4><?php echo $fimp1['name'];?></h4>
								<h5><?php echo "Product id:".$fimp1['id'];?></h5>
								<span class="item_price"><?php echo "Rs.".$fimp1['price'];?></span>
									
							</div>													
							<div class="clearfix"> </div>
							</div>
							</div>
									<?php
		} 
									?>