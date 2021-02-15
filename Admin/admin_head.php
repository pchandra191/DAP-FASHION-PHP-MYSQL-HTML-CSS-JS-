<style>
container {
	font-family: "Lato", sans-serif;
}
.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
<div class="cart">
<div class="container">

		<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
	<!--	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Brand
			</a>
		</div>  -->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			
			<ul class="nav navbar-nav navbar-right">
			<?php
				
				// ADMIN DETAILS, 09-04-2018, Prabhat Chandra
						
									$qimpo = $conn->query("SELECT * FROM `admin_ver` WHERE admin_name = '$admin_name'") or die(mysqli_error($conn));
									while($fimpo = $qimpo->fetch_array()){	

									//echo $admin_name = $fimpo['admin_name'];
									//echo $fname =$fimpo['fname']; 
								?>			
									<li>Hi,<?php echo $fimpo['fname']; }?> -ADMIN</li>
				
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class=""><a href="admin.php">Home</a></li>
				<li><a href="insert.php">Insert</a></li>
					<li><a href="delete.php">Delete</a></li>
				<li><a href="up_all.php">Update</a></li>
				<li><a href="up_query.php">Update QTY</a></li>
				<li><a href="logout.php">Logout</a></li>
				
				
			</ul>
		</div>