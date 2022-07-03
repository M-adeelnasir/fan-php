<?php



include "connection.php";


if (!isset($_SESSION['USER_NAME'])) {

  header("location:login.php");
  die();
  
}
 
 
?>




<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js"></script>            
<script src="js/bootstrap.js"> </script>
</head>
<body>
<!--- Navigation Bar --->
<nav class="navbar navbar-expand-md sticky-top navbar-light bg-warning"> 
   <div class="container ">
<a href="https://codiux.net/" class="navbar-brand font-weight-bold" >CODIUX</a> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_navbar"> 
<span class="navbar-toggler-icon"> </span> 
</button>
    <div id="collapse_navbar" class="collapse navbar-collapse text-center">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">		<a href="viewall.php" class="nav-link"> VIEW ALL </a>	</li>
             
        </ul>
    </div>
</div> <!-- div container -->
</nav> <!-- div navbar -->
<!-- for Columns -->
<div class="container-fluid bg">
	<div class="row">
    	<div class="col-md-4 col-sm-4 col-xs-12"></div>
         <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- form fields -->  
    <form class="mt-5"  method="post" action="insertData.php" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" id="category" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
       <input type="text" id="pname" name="brand" class="form-control" placeholder="Brand">
      </div>
      <div class="form-group">
       <input type="text" id="color" name="price" class="form-control" placeholder=" Price">
      </div>
       <div class="form-group">
       <input type="text" id="color" name="color" class="form-control" placeholder=" Color">
      </div>
       <div class="form-group">
       <input type="text" id="color" name="size" class="form-control" placeholder="Size">
      </div>
       <div class="form-group">
       <input type="text" id="color" name="type" class="form-control" placeholder="Type">
      </div>
      <div class="form-group">
        <input type="text" id="price" name="madeby" class="form-control" placeholder="Made by">
      </div>
    <div class="form-group">
        <input type="file" id="file" name="mfile" class="form-control" placeholder="Upload image">
      </div>
      <div class="form-group">
       <input type="submit" id="submit" name="submit" class="btn btn-outline-warning btn-block"  value="Add Product">
      </div>
          </form> 
        </div>
	</div>
</div> 
      
 
</body>
</html>