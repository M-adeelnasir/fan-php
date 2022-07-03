<?php

include"connection.php";
if(isset($_POST['submit']))
 {
 	 
	 
      $name=$_POST['name'];
      $brand=$_POST['brand'];
        
      $price=$_POST['price'];
       $color=$_POST['color'];
      
      $size=$_POST['size'];
      $type=$_POST['type'];
       $madeby=$_POST['madeby'];
	  $image= $_FILES['mfile']['name'];
	  $temp=$_FILES['mfile']['tmp_name'];

	 if ($image=='') {

	 	$sql =  "INSERT INTO products(name,brand,price,color,size,type,madeby) VALUES ('$name',' $brand','$price ','$color ','$size ','$type ', '$madeby')";

		if (mysqli_query($conn,$sql)) {
			 
			header("location:viewall.php");

		}
		else {
			echo 'some error';
		}
	 	
	 }
	 else {

	  


	  if (move_uploaded_file($temp, "images/$image")) {

	  $sql =  "INSERT INTO products(name,brand,price,color,size,type,madeby,image) VALUES ('$name',' $brand','$price ','$color ','$size ','$type ', '$madeby','$image')";

	if (mysqli_query($conn,$sql)) {
		 
		header("location:viewall.php");

	}
	else {
		echo 'some error';
	}
	 	
	 }

	
	  
	  	
	  }
 
	

	

}

?>