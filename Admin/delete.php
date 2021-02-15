
<html>
<?php
	session_start();
		if(isset($_SESSION['admin_name'])){	
		$admin_name= $_SESSION['admin_name'] ;	
		require_once "connect.php";
		require_once "header.php";
		require_once "admin_head.php";
?>

		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
				<ol class="breadcrumb">
				  <li><a href="admin.php">Dashboard</a></li>
				  <li class="active">Delete</li>
				 </ol>
                </div>
                <div class="panel-body">
                    					  
								 <div class="col-md-6 reg-form">
										  <div class="reg">
												<form action="delete_query.php" method="post" enctype="multipart/form-data">
													<h5><b>ENTER DETAILS to --DELETE--:</b></h5>
													<br>
													<ul>
														Product ID: <input type="text" name="id" value=""/>
													</ul><br>
													
													
												
												 
													<ul>				
														<input type="submit" name="submit" value="Submit"/>
													</ul><br>
												</form>
												
												Note: Product will be permentaly deleted. 
												<br>

													
										  </div>
							     </div>
					
					</div>
					  
                </div>
            </div>
		</div>
	</div>

</div>
</div>

<?php

require_once "footer.php";
		} else {
				
				echo'
			<script type = "text/javascript">
				alert("Sign In First!!!");
				window.location = "admin_login.php";
			</script>
		';
		}
?>
</body>
</html>