

<?php 

include"connection.php";
  
$sql="select * from products where id='$_GET[id]' ";
$result= mysqli_query($conn,$sql);

$rows=mysqli_fetch_assoc($result);

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
<a href="#" class="navbar-brand font-weight-bold" >CODIUX</a> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_navbar"> 
<span class="navbar-toggler-icon"> </span> 
</button>
    <div id="collapse_navbar" class="collapse navbar-collapse text-center">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link"> HOME </a>		</li>
                
            <li class="nav-item">		<a href="login.php" class="nav-link"> ADMIN </a>	</li>
        </ul>
    </div>
</div> <!-- div container -->
</nav> <!-- div navbar -->
<!--- image Slider --->
 
</div> 
</div>
<!--- Main contents --->
<div class="container mt-5">
    <div class="row">
           	
        <div class="col-md-6" align="center">
          <table width="90%" class="table table-light">
            <tbody>
            <tr>
                <td colspan="2" align="center" class=" bg-warning"> <b>Product Detail </b></td>
                
              </tr>
              <tr>
                <td>Name</td>
                <td> <?php echo $rows["name"] ;?></td>
              </tr>
              <tr>
                <td>Brand</td>
                <td> <?php echo $rows["brand"] ;?></td>
              </tr>
              <tr>
                <td>Price</td>
                <td> <?php echo $rows["price"] ;?></td>
              </tr>
              <tr>
                <td>Color</td>
                <td> <?php echo $rows["color"] ;?></td>
              </tr>
               <tr>
                <td>Size</td>
                <td> <?php echo $rows["size"] ;?></td>
              </tr>
               <tr>
                <td>Type</td>
                <td> <?php echo $rows["type"] ;?></td>
              </tr>
               
              <tr><td>Made By </td>
                <td>  <?php echo $rows["madeby"] ;?></td>
              </tr>

              

            </tbody>
          </table>
        </div>  

         <div class="col-lg-5 col-md-12 col-12 mt-3">

         

        <img class="img-fluid w-100" src="images/<?php echo $rows["image"]; ?>" alt="">
      </div>
       
             
               
  </div>
</div>

</body>
</html>