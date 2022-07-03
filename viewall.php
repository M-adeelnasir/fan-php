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
            <li class="nav-item active"><a href="index.php" class="nav-link"> HOME </a>		</li>
            <li class="nav-item">		<a href="insertionform.php" class="nav-link"> INSERTION </a>	</li>
            <li class="nav-item">		<a href="viewall.php" class="nav-link"> VIEW ALL </a>	</li>
         
            <li class="nav-item">		<a href="logout.php" class="nav-link"> LOGOUT </a>	</li>
        </ul>
    </div>
</div> <!-- div container -->
</nav> <!-- div navbar -->
<!-- for Columns -->
<div class="container-fluid bg">
	<div class="row">
    	
         <div class="col-md-10 col-sm-4 col-xs-12">
          <!-- form fields -->  
    	
       <table class="table table-bordered ml-5">
         <thead>
          <tr>
           <th>Name</th><th>Brand</th><th>Price</th><th>Color</th><th>Size</th><th>Type</th><th>Made By</th><th>Image</th> <th colspan="2" align="center"  >  &nbsp; &nbsp;  &nbsp; Actions</th>
          </tr>
         </thead>
          
          <?php 
            include"connection.php";


             $sql="SELECT * FROM products ";
     $result=mysqli_query($conn,$sql);
     $i=1;

     while ($rows=mysqli_fetch_assoc($result)) {

      $id=$rows['id'];
      $name=$rows['name'];
      $brand=$rows['brand'];
        
      $price=$rows['price'];
       $color=$rows['color'];
      
      $size=$rows['size'];
      
      $type=$rows['type'];
      $madeby=$rows['madeby'];
    
      $image=$rows['image'];

      // echo "<tr>";
      // echo "<th>".$i."</th>";
      echo "<td>".$name."</td>";
      echo "<td>".$brand."</td>";
      
      echo "<td>".$price."</td>";
       echo "<td>".$color."</td>";
        echo "<td>".$size."</td>";
       echo "<td>".$type."</td>";
      echo "<td>".$madeby."</td>";
        


      echo "<td>";?><img src="images/<?php echo $rows["image"]; ?>" height="50px" width="80px"><?php echo "<td>";
     
      echo '<td ><a href=updateForm.php?id='.$id.'><button class="btn btn-warning">Edit </button></a></td>';
      echo '<td><a href=deleteData.php?id='.$id.'><button class="btn btn-info">Delete</button></a></td>';
       echo "</tr>";

      
        $i++;

     }

     ?>

           ?>


       </table>
     
        </div>
        </div>
	</div>
</div> 
      
 
</body>
</html>