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
		  <li class="active">Men</li>
		 </ol>
			<h2>OUR PRODUCTS</h2>

 <div class="col-md-9 product-model-sec">	
		 

		<?php
			for($b=0;$b<99;$b++){
					$qimpo = $conn->query("SELECT * FROM brand_list
											WHERE brand_list.id=$b ")
											or die(mysqli_error($conn)) ;
									while($fimp1 = $qimpo->fetch_array()){
									$brand_id[] = $fimp1['id'];
									$name = $fimp1['name'];									
									}	}
				?>					
				<div class="clearfix"></div>		
			<?php			 
				for($b=0;$b<99;$b++){
					$qimpo = $conn->query("SELECT * FROM cat_list
											WHERE cat_list.id=$b ")
											or die(mysqli_error($conn)) ;
									while($fimp1 = $qimpo->fetch_array()){
									$cat_id[] = $fimp1['id'];
									$name = $fimp1['name'];									
									}	}
									?>					
									
									
									
	<div class="searchresults">
	
	
	<!-- SHOW ALL, 20-04-2018, Prabhat Chandra -->
	<div class="resultblock" data-tag="" style="display: block" >
		<div class="desc">
 		<div class="desc_text">
		<?php 	
		for($bid=0;$bid<99;$bid++){
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE brand = '$bid' ") or die(mysqli_error($conn)); 	 
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
							<form action="single.php" method="post">
							<input type="hidden" name="id" value=" <?php echo $id; ?>  ">
							<button class="btns">ORDER NOW</button>
							</form>
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
		}
									?>
					
			</div>
		</div>
 	</div>
	
	
	
	
	<?php 
	
	
	
	foreach($brand_id as $brid){	
		?>
	
			<div class="resultblock" data-tag=" <?php 
							 
		echo $brid;	 ?> " style="display: none">
		<div class="desc">
 		<div class="desc_text">
		<?php 	
						
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE brand = '$brid' ") or die(mysqli_error($conn)); 	 
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
							<form action="single.php" method="post">
							<input type="hidden" name="id" value=" <?php echo $id; ?>  ">

							<button class="btns">ORDER NOW</button>
							</form>
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
			
 		
		
		<?php 
	
	foreach($cat_id as $catd){	
		?>
	
			<div class="resultblock" data-tag=" <?php 
							 
		echo $catd;	 ?> " style="display: none">
		<div class="desc">
 		<div class="desc_text">
		<?php 	
						
			$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE cat = '$catd' ") or die(mysqli_error($conn)); 	 
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
							<form action="single.php" method="post">
							<input type="hidden" name="id" value=" <?php echo $id; ?>  ">

							<button class="btns">ORDER NOW</button>
							</form>
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
			
 <div class="clearfix"></div>

</div>
</div>
														
	
		 <!-- Created On 31-03-2018, Prabhat Chandra -->
		
<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4>Category</h4>
							<div class="row row1 scroll-pane"> 
							
							<div id="filters">
					
					<label class="checkbox"><input type="checkbox" id="check3" value="<?php //echo $brand_id[2] ?>" name="checkbox" checked=""><i></i>ALL</label>
					
								
							<?php for($b=0;$b<5;$b++){	?>
							   
								<div class="col col-4">
									
									<label class="checkbox"><input type="checkbox" id="check1" name="checkbox" value=" <?php 
									$qimpo = $conn->query("SELECT * FROM i_new_product, cat_list
											WHERE i_new_product.cat='$b' AND cat_list.id = i_new_product.cat ")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												$cat_id =  $fimp1['id']; 
												echo $cat_id;
												?> " > 
												<i></i><?php echo $fimp1['name']; }?></label>	
											 <div class="clearfix"></div>
							<?php
							}
							?>		
							</div> 		 
						</div> 
					</div>			 			 
				</div> 
		   </section> 
		   
				<section  class="sky-form">					 
						 <h4>Brand</h4>		

							<div class="row1 row scroll-pane"> 	
							
						<div id="filters">
						 <label class="checkbox"><input type="checkbox" id="check3" value="<?php //echo $brand_id[2] ?>" name="checkbox" checked=""><i></i>ALL</label>
								
								<?php for($b=0;$b<5;$b++){	?>
										 
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" id="check1" name="checkbox" value=" <?php 
									$qimpo = $conn->query("SELECT * FROM i_new_product, brand_list
											WHERE i_new_product.brand='$b' AND brand_list.id = i_new_product.brand ")
											or die(mysqli_error($conn)) ;
												while($fimp1 = $qimpo->fetch_array()){
												$b_id =  $fimp1['id']; 
												echo $b_id;
												?> " > 
												<i></i><?php echo $fimp1['name']; }?></label>		
									</div>
										<div class="clearfix"></div>
							<?php
							}
							?>		
						
					</div>  <div class="clearfix"></div>

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