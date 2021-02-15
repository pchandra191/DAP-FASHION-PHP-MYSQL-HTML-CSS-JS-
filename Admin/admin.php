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
                    Dashboard
                </div>
                <div class="panel-body">
                    					  
					  <h1>Welcome ADMIN !!!</h1>
					
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