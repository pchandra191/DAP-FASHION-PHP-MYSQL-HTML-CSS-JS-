<html>
<?php
 require_once "header.php";
 
 
?>
<!--header-->

<div class="categoires">
	 <div class="container">
		 <a href="women.php"><div class="col-md-4 sections fashion-grid-a">
			 <h4>Fashion</h4>
			 <p>EveryOne</p>			 					
		 </div></a>
		 <a href="women.php"><div class="col-md-4 sections fashion-grid-b">
			 <h4>Beauty</h4>
			 <p>For You</p>			 					
		 </div></a>
		 <a href="women.php"><div class="col-md-4 sections fashion-grid-c">
			 <h4>Creativity</h4>
			 <p>Inside You</p>				
		 </div></a>
	 </div>
</div>
<!---->
<div class="features" id="features">
	 <div class="container">
		 <div class="tabs-box">
			<div class="clearfix"> </div>
		 <div class="tab-grids">
			 

				<!-- Item wise, Er. Prabhat Chandra, 30-03-2018 -->
				
				
				
				
				<?php $qimpo = $conn->query("SELECT * FROM `i_new_product`") or die(mysqli_error($conn));
							while($fimp1 = $qimpo->fetch_array()){ 	 $id[] = $fimp1['id'];  }
							
							
							
				foreach($id as $cid){
	
							$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE id = $cid") or die(mysqli_error($conn));
							while($fimp1 = $qimpo->fetch_array()){
				?>
					<div class="product-grid">
						<div class="more-product-info"><span>NEW</span></div>						
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
							<div class="product-info-cust">
						
								<h4><?php echo $fimp1['name'];?></h4>
								<h5><?php echo "Product id:".$fimp1['id'];?></h5>
								<span class="item_price"><?php echo "Rs.".$fimp1['price'];?></span>
									
							</div>													
								
							<div class="clearfix"> </div>
							</div>
							</div>
							
							
									<?php
				} }
									?>
					
					
		 	
				
				</div>
					</div>
					
					
					
				
				
			
	 
	 
	 
			<!-- tabs-box -->
			<!-- Comman-js-files -->
			<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid1,.tab-grid2,.tab-grid3").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
				$("ul.tabs-menu li a").click(function(){
					$(this).parent().addClass("active a");
					$(this).parent().siblings().removeClass("active a");
				});
			});
			</script>
			<!-- Comman-js-files -->
	 </div>
</div>
<?php
 require_once "footer.php";
 
?>

</body>
</html>