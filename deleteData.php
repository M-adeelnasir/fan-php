<?php 

include"connection.php";

$id=$_REQUEST['id'];

$sql = "delete from products where id=$id";


	if (mysqli_query($conn,$sql)) {
		 
		header("location:viewall.php");

	}
	else {
		echo 'some error';
	}




 ?>