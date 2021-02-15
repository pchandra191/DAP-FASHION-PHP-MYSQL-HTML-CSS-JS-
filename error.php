<html>
    <?php
    session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
        require_once "connect.php";
        require_once "header1.php";
    ?>
    
    <div class="about">
		<div class="container">
		<div class="row">
			 <ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Error</li>
				 </ol>
				    <div class="panel panel-default">
						   <div class="panel-body">
							  <div class="col-md-3 col-sm-5 col-lg-40">
                               
                                  <p>
                                     Opps!
                                  </p>
                                  <br>
                                    <h1><b>404!!</b></h1>
                                  <br>
                                 
                               </div>
                           </div>
                    </div>
        
        </div>
            
        </div>
                <div class="container">
                        <div class="panel panel-default">
                                           <div class="panel-body">
                                              <div class="col-md-3 col-sm-5 col-lg-40">


                                                  <h4>Error........!</h4> 
                                                        <br><p><i>Something went wrong.</i></p>
                                               </div>
                                           </div>
                                    </div>
                </div>
   </div>


<?php
 require_once "men_footer.php";
    }
?>
  </body>
</html>