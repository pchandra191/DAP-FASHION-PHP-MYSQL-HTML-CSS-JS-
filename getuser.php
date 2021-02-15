<html>				
<body>
	
<?php
require_once "connect.php";

					 
	$sql = $conn->query("SELECT * FROM i_new_user_details
								")
						or die(mysqli_error($conn)) ;
					
					while($fimpo = $sql->fetch_array()){
											
											
					$u_name[] = $fimpo['u_name'];
					}
					
					// get the q parameter from URL
				$q = $_REQUEST["q"];
				
				
if ($q !== "") {
   $q = strtolower($q);			
foreach($u_name as $name) {
        if ($name == $q) {
             ?> <h5 style= "color:red"> <b> "Choose Another Username... !Username already taken!</h5> </b> <?php
} }   if ($name != $q) {
                ?>  <h5 "display:none" style= "color:Green"> <b> Username Available </h5> </b><?php ; 
            } else {
				echo "Checking";
			}
}
        

// lookup all hints from array if $q is different from "" 
//if ($q !== "") {
  //  $q = strtolower($q);
   // $len=strlen($q);
    
    


// Output "no suggestion" if no hint was found or output correct values 
//echo $hint === "" ? "no suggestion" : $hint;
					
?>
					

			
</body>																	
													
</html>