
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
				  <li class="active">Insert</li>
				 </ol>
                    
                </div>
                <div class="panel-body">
                    					  
					  <div class="col-md-6 reg-form">
	  
						  <div class="reg">
								<form action="insert_qry.php" method="post" enctype="multipart/form-data">
									<h5><b>ENTER DETAILS to --INSERT NEW DETAILS--:</b></h5>
									</br>
									<ul>
										Product ID: <input type="text" name="id" value=""/>
									</ul></br>
									<ul>	
										Name: <input type="text" name="name"/>
									</ul></br>
									<ul>	
										Image: <input type="file" name="image"/>
									</ul></br> 
									<ul>
										Price: <input type="number" name="price">
									</ul></br>
									<ul>
										Quntity: <input type="number" name="qty"/>
									</ul></br>
									
									<ul>
										Model: <input type="text" name="model"/>
									</ul></br>
									<ul>
										Brand: <input type="number" name="brand"/>
									</ul></br>
									<ul>
										CATEGORIES : <input type="number" name="cat"/>
									</ul></br>
									<ul>
									<ul>
										MAIN_CATEGORY : <input type="number" name="m_cat"/> 
										{1:MEN & 2:WOMEN}
									</ul></br>
									<ul>
										Full Description: <input type="text" name="des"/>
									</ul></br>
									
									
									<ul>				
										<input type="submit" name="submit" value="Submit"/>
									</ul>
								</form>
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