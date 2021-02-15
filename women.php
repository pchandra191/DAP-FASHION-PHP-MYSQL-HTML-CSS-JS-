<?php
session_start();
require_once "header1.php";
?>

<head>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
    $(document).ready(function(){
    $('.checkbox').on('change', function(){
      var checkbox_list = [0];
      $('#filters :input:checked').each(function(){
        var checkbox = $(this).val();
        checkbox_list.push(checkbox);
      });

      if(checkbox_list.length == 0)
        $('.resultblock').fadeIn();
      else {
        $('.resultblock').each(function(){
          var item = $(this).attr('data-tag');
          if(jQuery.inArray(item,checkbox_list) > -1)
            $(this).fadeIn('slow');
		// element.hide();
          else
            $(this).hide();
        });
      }
});	  
    });
   
  </script>

</head>



<!--header//-->
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Women</li>
		 </ol>
			<h2>OUR PRODUCTS</h2>

			
	
	
	
			
			
<div class="col-md-9 product-model-sec">	
 
 
 <?php
			
					$qimpo = $conn->query("SELECT * FROM brand_list
											 ")
											or die(mysqli_error($conn)) ;
									while($fimp1 = $qimpo->fetch_array()){
									$brand_id[] = $fimp1['id'];
									//$name = $fimp1['name'];									
									}	
									
				
					$qimpo = $conn->query("SELECT * FROM cat_list
											")
											or die(mysqli_error($conn)) ;
									while($fimp1 = $qimpo->fetch_array()){
									$cat_id[] = $fimp1['id'];
									//$name = $fimp1['name'];									
									}		
		?>		
		
 
 	
	<?php
	// MEN Category link data from header1, 21-04-2018, Prabhat Chandra
	if(isset($_GET["data"]))
    {
        $cat_i = $_GET["data"];
       // echo $cat_i; ?>
	   <div class="resultblock" data-tag="a" style="display:block" >
		<div class="desc">
 		<div class="desc_text">
		<?php
   for($b=0;$b<99;$b++){
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE brand = '$b' AND cat='$cat_i' AND m_cat=2  ") or die(mysqli_error($conn)); 	 
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
						
								<h4 class="product_title"><?php echo $fimp1['name'];?></h4>
								<h5><?php echo "Product id:".$fimp1['id'];?></h5>
								<span class="item_price"><?php echo "Rs.".$fimp1['price'];?></span>
									
							</div>													
							<div class="clearfix"> </div>
							</div>
							</div>
									<?php
											} 
		}
		?>
		</div>
		</div>
 	</div>
	<?php } 
	else { ?>
		
		<!-- SHOW ALL, 20-04-2018, Prabhat Chandra -->
	<div class="resultblock" data-tag="a" style="display:block" >
		<div class="desc">
 		<div class="desc_text">
		<?php 	
		for($bid=0;$bid<99;$bid++){
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE brand = '$bid' AND m_cat=2   ") or die(mysqli_error($conn)); 	 
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
						
								<h4 class="product_title"><?php echo $fimp1['name'];?></h4>
								<h5><?php echo "Product id:".$fimp1['id'];?></h5>
								<span class="item_price"><?php echo "Rs.".$fimp1['price'];?></span>
									
							</div>													
							<div class="clearfix"> </div>
							</div>
							</div>
									<?php
											} 
		}
									?>
					
			</div>
		</div>
 	</div>
		
	<?php }
		?>
		

				
 
		 

					
<div class="searchresults">

	
<!-- SHOW ALL, 20-04-2018, Prabhat Chandra -->
	<div class="resultblock" data-tag="" style="display: none" >
		<div class="desc">
 		<div class="desc_text">
		<?php 	
		for($bid=0;$bid<99;$bid++){
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE brand = '$bid' AND m_cat=2   ") or die(mysqli_error($conn)); 	 
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
						
								<h4 ><?php echo $fimp1['name'];?></h4>
								<h5><?php echo "Product id:".$fimp1['id'];?></h5>
								<span class="item_price"><?php echo "Rs.".$fimp1['price'];?></span>
									
							</div>													
							<div class="clearfix"> </div>
							</div>
							</div>
									<?php
											} 
		}
									?>
					
			</div>
		</div>
 	</div>
	
	
	

	<?php 	
	foreach($brand_id as $brid){	
		?>
	
			<div class="resultblock" data-tag=" <?php 
							 
		$qimpo = $conn->query("SELECT * FROM  brand_list
											WHERE brand_list.id='$brid' ")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												//echo $ccid."".$c_id;
												$n =  $fimp1['id'];
													}
												 echo $n;
												// echo $brid;
													 ?> " style="display: none">
		<div class="desc">
 		<div class="desc_text">
		<?php 	
						
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE brand = '$n'  AND m_cat=2 ") or die(mysqli_error($conn)); 	 
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
					
			</div>
		</div>
 	</div>
 		
		<?php
		} 	?>
			
 		
		
		<?php 
		foreach($cat_id as $catd){	
		?>
	
			<div class="resultblock" data-tag=" <?php 
							 
		$qimpo = $conn->query("SELECT * FROM  cat_list
											WHERE cat_list.id='$catd' AND m_cat_as = 2")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												//echo $ccid."".$c_id;
												$n =  $fimp1['id'];
													}
												 echo $n;	 ?> " style="display: none">
		<div class="desc">
 		<div class="desc_text">
		<?php 	
						
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE cat = '$catd'  AND m_cat=2") or die(mysqli_error($conn)); 	 
			while($fimp1 = $qimpo->fetch_array()){
				?>
					<div class="product-grid love-grid">
						<div class="more-product-info"><span></span></div>						
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
					
			</div>
		</div>
 	</div>
 		
		<?php
		} 
									?>
									
									
			
</div>
</div>

														
	
		 <!-- Created On 31-03-2018, Prabhat Chandra -->
		 

<div class="rsidebar span_2_of_left">					
				 <section  class="sky-form">
						<h4>Brand</h4>
						<div id="filters">
						
						<label class="checkbox"><input type="checkbox" id="check3" value="<?php //echo $brand_id[2] ?>" name="checkbox"><i></i>ALL</label>
					
						
							<?php foreach($brand_id as $bbid => $bid){	?>
							
							
								<div class="col col-4">
									
									<label class="checkbox"><input type="checkbox" id="check1" name="checkbox" value=" <?php 
									$qimpo = $conn->query("SELECT * FROM i_new_product, brand_list
											WHERE i_new_product.brand='$bid' AND brand_list.id = i_new_product.brand  AND m_cat=2 ")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												$b_id =  $fimp1['id']; 
												echo $b_id;
												$name_n = $fimp1['name'];
												
												?> " > 
												<i></i><?php 
												$qimpo = $conn->query("SELECT * FROM  brand_list
											WHERE brand_list.id='$b_id' ")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												//echo $ccid."".$c_id;
												$n =  $fimp1['name'];
													}
												 echo $n;
							}
												?> </label>							
							<div class="clearfix"> </div>
							<?php
							}
							?>		
								</div>
								
								
								
								<h4>Category</h4>
								<?php foreach($cat_id as $ccid => $c_id){	?>
							<div id="filters">
								<div class="col col-100">
									
									<label class="checkbox"><input type="checkbox" id="check1" name="checkbox" value=" <?php 
									$qimpo = $conn->query("SELECT * FROM i_new_product, cat_list
											WHERE i_new_product.cat='$c_id' AND cat_list.id = i_new_product.cat  AND m_cat=2")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												$cat_id =  $fimp1['id']; 
												//$cat_name[] = $fimp1['name'];
												echo $cat_id;
												?> " > 
								<i></i><?php 
												$qimpo = $conn->query("SELECT * FROM  cat_list
											WHERE cat_list.id='$c_id' ")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												//echo $ccid."".$c_id;
												$n =  $fimp1['name'];
													}
												 echo $n;
												}
												?> </label>	
										<div class="clearfix"> </div>		
							<?php
												
								}
							?>		
								</div>
								
				</div>
			</div>
		
	 </section>	
	 </div>



</div>
</div>


 <?php
 require_once "men_footer.php";
 ?>	


</body>
</html>
