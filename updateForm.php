<?php



include "connection.php";


if (!isset($_SESSION['USER_NAME'])) {

  header("location:login.php");
  die();
  
}
 
 
?>


<?php 

 

$id=$_REQUEST['id'];

$sql= "select * from products where id= $id ";

$result=mysqli_query($conn,$sql);

if ($result) {
  $row=mysqli_fetch_assoc($result);
  
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
            
            <li class="nav-item">   <a href="viewall.php" class="nav-link"> VIEW ALL </a> </li>
             
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
          <h3 class="text-dark">Update Product</h3>
    <form  method="post" action="updateData.php" enctype="multipart/form-data">
       <div class="form-group">
       <label class="text-dark">Id </label>
       <input type="text" id="pname" name="id" class="form-control" value="<?php echo $row['id'] ?>" readonly>
      </div>

      <div class="form-group">
        <label class="text-dark">Name</label>
        <input type="text" id="category" name="name" class="form-control" placeholder="Name" value="<?php echo $row['name'] ?>">
      </div>
      <div class="form-group">
       <label class="text-dark">Brand </label>
       <input type="text" id="pname" name="brand" class="form-control" placeholder="Brand" value="<?php echo $row['brand'] ?>">
      </div>
      <div class="form-group">
       <label class="text-dark">Price</label>
       <input type="text" id="color" name="price" class="form-control" placeholder=" Price" value="<?php echo $row['price'] ?>">
      </div>
       <div class="form-group">
       <label class="text-dark">Color </label>
       <input type="text" id="color" name="color" class="form-control" placeholder=" Color" value="<?php echo $row['color'] ?>">
      </div>
       <div class="form-group">
       <label class="text-dark">Size </label>
       <input type="text" id="color" name="size" class="form-control" placeholder="Size" value="<?php echo $row['size'] ?>">
      </div>
       <div class="form-group">
       <label class="text-dark">Type </label>
       <input type="text" id="color" name="type" class="form-control" placeholder="Type" value="<?php echo $row['type'] ?>">
      </div>
      <div class="form-group">
      <label class="text-dark">Made By </label>
        <input type="text" id="price" name="madeby" class="form-control" placeholder="Made by" value="<?php echo $row['madeby'] ?>">
      </div>
    <div class="form-group">
      <label class="text-dark">Image </label>
        <input type="file" id="file" name="mfile" class="form-control" placeholder="Upload image" >
      </div>
      <div class="form-group">
       <label>  </label>
       <input class="btn btn-outline-warning" type="submit" id="submit" name="submit" class="btn btn-success btn-block"  value="Update Product">
      </div>
          </form> 
        </div>
  </div>
</div> 
      
 
</body>
</html>