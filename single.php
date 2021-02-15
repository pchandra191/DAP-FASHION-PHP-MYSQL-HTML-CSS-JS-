<html>
<?php
session_start();
 require_once "header1.php";
 
 
?>
<!--Single Page starts Here-->
<div class="product-main">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php" class="home_link">Home</a></li>
		  <li class="active">Single</li>
		 </ol>
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">					 
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="css/etalage.css">
						<script src="js/jquery.etalage.min.js"></script>
					 <!-- Include the Etalage files -->
					 <script>
							jQuery(document).ready(function($){
					
								$('#etalage').etalage({
									thumb_image_width: 300,
									thumb_image_height: 400,
									source_image_width: 700,
									source_image_height: 800,
									show_hint: true,
									click_callback: function(image_anchor, instance_id){
										alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
									}
								});
								// This is for the dropdown list example:
								$('.dropdownlist').change(function(){
									etalage_show( $(this).find('option:selected').attr('class') );
								});
					
							});
						</script>
						<!--//details-product-slider-->
						<?php
								
								// if(isset($_REQUEST['id'])){
	
							//	$id = $_REQUEST['id'];
							//	$id = $_SESSION['id'];
							 //	echo $id;
							if(isset($_GET["data"]))
    {
        $id = $_GET["data"];
						
									$qimpo = $conn->query("SELECT * FROM `i_new_product` WHERE id = '$id'") or die(mysqli_error($conn));
									while($fimpo = $qimpo->fetch_array()){	
									
									$qty = $fimpo['qty'];
									
									
									?>
					 <div class="details-left-slider">
						  <ul id="etalage">
							 <li>
								<a href="optionallink.html">
								<div class="etalage_thumb_image">
								
									<?php	
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $fimpo['image'] ).'" />';
							$id = $fimpo['id']; 
							$price = $fimpo['price'];
										 ?>
									</div>		
							<?php	echo '<img class="etalage_source_image"  src="data:image/jpeg;base64,'.base64_encode( $fimpo['image'] ).'" />';
								?>
							
								
							<img class="etalage_source_image" src="" /> 
								
								</a>
							 </li>
							
							 <div class="clearfix"></div>
						 </ul>
					 </div>
					 <div class="details-left-info">
							<h3><?php echo $fimpo['name'];?></h3>
							<h9>Product id:<?php echo $fimpo['id'];?></h9>							
							<p><?php echo "Rs.".$fimpo['price'];?><a href="#"></a></p>
							<p class="qty"><b>Qty Available ::</b></p><?php 
							
							if($qty>0){
							echo $qty."  Pieces Left  ";
								
							?>
							
							<form action="u_cart.php" method="post">
							<input type="hidden" name="p_id" value=" <?php echo $id; ?>  ">
							<input type="hidden" name="price" value=" <?php echo $price; ?>  ">
							<button class="btns">ADD TO CART</button>
							</form>
							
							<?php
									} else {
										
										echo "OUT OF STOCK";
							//<button class="btns"></button>
							?>
							
							
							
							<?php
							
									}
									
									?>
							
							<div class="flower-type">
							<p class = "model_num">Model  ::<?php echo $fimpo['model'];?></p>
							<p>Brand  ::<?php 
							// Created On 19-04-2018, Prabhat Chandra
								$sql = $conn->query("SELECT * FROM i_new_product, brand_list
											WHERE i_new_product.id = '$id' AND i_new_product.brand=brand_list.id ")
											or die(mysqli_error($conn)) ;
													
											while($details = $sql->fetch_array()){	
											
								echo $details['name']; } ?>
							
							
							</p>
							
							
							<p class = "cateogory">Category ::<?php 
							
								$sql = $conn->query("SELECT * FROM i_new_product, cat_list
											WHERE i_new_product.id = '$id' AND i_new_product.cat=cat_list.id ")
											or die(mysqli_error($conn)) ;
													
											while($detail = $sql->fetch_array()){	
											
								echo $detail['name']; } ?>
							
							
							</p>
							
							
							</div>
							<h5>Description  ::</h5>
							<p class="desc"><?php echo $fimpo['des'];?></p>
					 </div>
								 <?php  }} else {
										
								echo "back";
							//	header('Location: index.php');
										
									} ?>
					 <div class="clearfix"></div>				 	
				 </div>
			 </div>
		 </div>
</div>
</div>		 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
 require_once "men_footer.php";
?>
</div>

</body>
</html>