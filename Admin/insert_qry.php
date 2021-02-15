<?php
require_once "connect.php";

if(isset($_POST["submit"])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$qty = $_POST['qty'];
	$model = $_POST['model'];
	$brand = $_POST['brand'];
	$cat = $_POST['cat'];
	$m_cat = $_POST['m_cat'];
	$des = $_POST['des'];
	$date=(date("Y-m-d",time()));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
		
		
		

		$insert = $conn->query("INSERT into i_new_product VALUES ($id,'$imgContent','$name', $price , $qty , '$model' , $brand , $cat , $m_cat , '$des' , '$date')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
 echo '<META HTTP-EQUIV=REFRESH CONTENT="1; insert.php">' ;

?>