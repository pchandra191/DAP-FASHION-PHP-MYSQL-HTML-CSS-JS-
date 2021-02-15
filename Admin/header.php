<?php
	
	require_once "connect.php";

?>
<head>
<title>ADMIN </title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="../js/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>
<script src="../js/jquery.easydropdown.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="../css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/megamenu.js"></script>
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

/* The container  - needed to position the dropdown content */
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
								
								if(isset($_SESSION['admin_name'])){	
								$admin_name= $_SESSION['admin_name'] ;	
									$qimpo = $conn->query("SELECT * FROM `admin_ver` WHERE admin_name = '$admin_name'") or die(mysqli_error($conn));
									while($fimpo = $qimpo->fetch_array()){	

									$admin_name = $fimpo['admin_name'];
									
								?>						
									 <div class="dropdown">
					  <button class="dropbtn"><?php 
		
									echo "ADMIN, ".$fimpo['fname']; 
									?> 
									</button>
									<div class="dropdown-content">
									<a href="insert.php">INSERT</a>
									<a href="up_all.php">UPDATE</a>
									<a href="up_query.php">UPDATE QTY</a>
									<a href="logout.php">LOGOUT</a>
								  </div>
								</div>
								
									
								<?php } } else {
										?>
										
										
										
										<button class="dropbtn"><a href="admin_login.php">LOGIN</a></button>
						<?php			}
						
						
					 ?>			
						
						
						
						
						</div>
			 <div class="logo">
				 <h3><a href="admin.php">DAP FASHIONS-ADMIN</a></h3>
			  </div>			  
						 
			 <div class="clearfix"></div>
		 </div>
				<!-- start header menu -->
		 
				</li>		
				
				</ul> 
			 </div>
			  <div class="clearfix"></div> 
	 </div>
<!--header//-->