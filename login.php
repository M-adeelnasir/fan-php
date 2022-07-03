<?php
 include "connection.php";

 $msg='';

 if (isset($_POST['submit'])) {


  $user=$_POST['user'];
  $pass=$_POST['pass'];

   $sql="select * from admin where user='".$user."' AND pass='".$pass."' limit 1";

   $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);

   if ($num>0) {

    $row=mysqli_fetch_assoc($result);

    $_SESSION['USER_NAME']=$row['user'];
    header("location:viewall.php");
   }
   else {
    $msg="Please enter valid details";
   }
   
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
             
        </ul>
    </div>
</div> <!-- div container -->
</nav> <!-- div navbar -->


<div class="container-fluid">
	<div class="row">
    	<div class="col-md-4 col-sm-4 col-xs-12"></div>
         <div class="col-md-4 col-sm-4 col-xs-12">
          <br>
          <center><h1> Login </h1> </center>
    <form method="post">
    
      <div class="form-group">
       <input type="text" name="user" id="user" class="form-control" placeholder="User">
      </div>
      <div class="form-group">
       <input type="password" name="pass" class="form-control" placeholder="Password">
      </div>
      
      <div class="form-group">
       <label>  </label>
       <input type="submit" id="login" name="submit" class="btn btn-outline-warning btn-block"  value="login">
             <h4 style="color: red"> <?php  echo "$msg"; ?> </h4>  

      </div>
          </form> 
        </div>
	</div>
</div>       
<!-- for footer -->
 
</body>
</html>