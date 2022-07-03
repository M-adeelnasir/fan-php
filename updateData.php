<?php

include"connection.php";
if(isset($_POST['submit']))
 {
 	 
	  $id=$_POST['id'];
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

	 	$sql =  "UPDATE products set name='$name',brand='$brand',price='$price',color='$color ',size='$size',type='$type ',madeby='$madeby' where id='$id'";

		if (mysqli_query($conn,$sql)) {
			 
			header("location:viewall.php");

		}
		else {
			echo 'some error';
		}
	}
	 	

else {
	 move_uploaded_file($temp, "images/".$image);
	 

	  	$sql =  "UPDATE products set name='$name',brand='$brand',price='$price',color='$color ',size='$size',type='$type ',madeby='$madeby',image='$image' where id='$id'";

	  	

	if (mysqli_query($conn,$sql)) {
		header("location:viewall.php");
		}
	else {
		echo 'some error';
		}
}

}


	
	  
	  	
	  
 
	

	



?>