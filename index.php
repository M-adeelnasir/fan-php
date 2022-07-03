<?php 

include"connection.php";


$sql="select * from products";
$result= mysqli_query($conn,$sql);

 ?>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top navbar-light bg-warning">
        <div class="container ">
            <a href="#" class="navbar-brand font-weight-bold">CODIUX</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_navbar"> 
<span class="navbar-toggler-icon"> </span> 
</button>
            <div id="collapse_navbar" class="collapse navbar-collapse text-center">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link"> HOME </a> </li>
                    <li class="nav-item"> <a href="login.php" class="nav-link"> ADMIN </a> </li>
                </ul>
            </div>
        </div>
        <!-- div container -->
    </nav>

    <div class="container my-5">
        <div class="row">
            <?php 
                while ($rows=mysqli_fetch_assoc($result))
                 {
                    
                
             ?>
            <div class="product text-center col-lg-3 col-md-4 col-12 border border-warning m-3">
            <a href="details.php?id= <?php echo $rows["id"]; ?> "><img class="img-fluid m-0"  src="images/<?php echo $rows["image"]; ?>" width="200px" height="100px"></a>
           <hr class="m-1">
            <h5 class="m-1"><?php echo $rows["brand"] ;?></h5>
            <hr class="m-1">
            <h5>Rs. <?php echo $rows["price"]; ?></h5>
            
<a class="btn btn-outline-warning mb-2 btn-block" href="details.php?id=<?php echo $rows["id"];?>">View Details</a>
        </div>
            <?php 
                }
             ?>
 
    </div>
</div>
   
</body>

</html>