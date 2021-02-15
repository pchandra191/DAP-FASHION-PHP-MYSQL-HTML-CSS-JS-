<?php
require_once "connect.php";
?>

<head>
<title>DAP FASHIONS</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
<style>
/* Dropdown Button */
.dropbtn {
    background-color: #ff5982;
    color: white;
    padding: 12px;
    font-size: 12px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ff5982;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #000100;
}
</style>
</head>
<body>
<!--header-->
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				
							<?php
								if(isset($_SESSION['u_name'])){	
									$u_name = $_SESSION['u_name'];
									$qimpo = $conn->query("SELECT * FROM `i_new_user_details` WHERE u_name = '$u_name'") or die(mysqli_error($conn));
									while($fimpo = $qimpo->fetch_array()){	

									$u_name = $fimpo['u_name'];
									
								?>						
									 <div class="dropdown">
					  <button class="dropbtn"><?php 
		
									echo "Hi, ".$fimpo['fname']; 
									?> 
									</button>
									<div class="dropdown-content">
									<a href="profile.php">PROFILE</a>
									<a href="order.php">ORDERS</a>
									<a href="cart.php">CART</a>
									<a href="logout.php">LOGOUT</a>
								  </div>
								</div>
								
									
								<?php } } else {
										?>
										
										
										
										<button class="dropbtn"><a href="login.php">LOGIN</a></button>
						<?php			} 
					 ?>			
						
						
						
						
						</div>
			 <div class="logo">
				 <h3><a href="index.php">DAP FASHIONS</a></h3>
			  </div>			  
			 <div class="box_1">	
								<?php
								if(isset($_SESSION['u_name'])){	
									$u_name = $_SESSION['u_name'];
							$sql = $conn->query("SELECT * FROM cart_t WHERE cart_t.cus_name='$u_name'
												")
													or die(mysqli_error($conn)) ;
											while($fimpo = $sql->fetch_array()){
						?>			 
											<a href="cart.php"><h3>Cart: <span> Rs.<?php echo $fimpo['totalprice']; }?>.00</span><img src="images/cart.png" alt=""/></h3></a>
				 <?php
								} else {
									?>
									 <a href="cart.php"><h3>Cart Empty<img src="images/cart.png" alt=""/></h3></a>
							<?php		
								} ?>
			 
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
				<!-- start header menu -->
		 <ul class="megamenu skyblue">
			<li><a href="index.php">HOME</a></li>							
			 <li><a href="women.php">WOMEN</a>
				  <div class="megapanel">
					  <div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Shop</h4>
								<ul>
									
									<li><a href="women.php">Women</a></li>
									
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								
											 <?php
	

					for($b=0;$b<9;$b++){
					$qimpo = $conn->query("SELECT * FROM   cat_list 
											WHERE m_cat_as = 2 AND cat_list.id= '$b'   ")
											or die(mysqli_error($conn)) ;
									while($fimp1 = $qimpo->fetch_array()){
									$cat = $fimp1['id'];
									$name = $fimp1['name'];									
									?>
								<ul>
									<li><a href="women.php?data=<?php echo $cat; ?>"><?php echo $name; ?></a></li>			<?php
									}				
					}
					?>
								
									  										
								</ul>		
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footware</h4>
								<ul>
									<li><a href="">COMING SOON</a></li>
								</ul>	
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="">COMING SOON</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beauty</h4>
								<ul>
									<li><a href="">COMING SOON</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a href="men.php">MEN</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Shop</h4>
								<ul>
									
									<li><a href="men.php">Men</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<?php
	

					for($b=0;$b<9;$b++){
					$qimpo = $conn->query("SELECT * FROM   cat_list 
											WHERE m_cat_as = 1 AND cat_list.id= '$b'   ")
											or die(mysqli_error($conn)) ;
									while($fimp1 = $qimpo->fetch_array()){
									$cat = $fimp1['id'];
									$name = $fimp1['name'];									
									?>
								<ul>
									<li><a href="men.php?data=<?php echo $cat; ?>"><?php echo $name; ?></a></li>			<?php
									}				
					}
					?>
								</ul>
						
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footware</h4>
								<ul>
									<li><a href="">COMING SOON</a></li>
									
									
								</ul>	
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="">COMING SOON</a></li>
									
								</ul>	
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li class="grid"><a href="about.php">ABOUT US</a></li>			
		
				
				</ul> 
			 </div>
			  <div class="clearfix"></div> 
	 </div>
</div>
<!--header//-->