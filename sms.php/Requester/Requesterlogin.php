<?php
include('../dbConnection.php');
session_start(); //ye ky karenga agar user already login h aur wapas site open krta h to usko vohi page open honga.
if(!isset($_SESSION['is_login'])){ //notsset agar login nhi h to if wala run honga
  if(isset($_REQUEST['rEmail'])){   
    // Assigning User Values to Variable
    // Email wale fied mai jo b honga vo access honga $_REQUEST['rEmail'] se ye assign hojaenga variable $rEmail mai.
    $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail'])); //trim isliye diye agar user space wagere de to vo automatically trim hojae aur login failed na ho.
    $rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword'])); // mysqli_real_escape_string($conn, trim ye likhna zaruri nahi h bas ye login ko secure karenga agar koi avayi code ya kuch likhta hai to vo as a string jaaenga.
  
    //sql query for when email and password feilds in database get matched then only login will happen.
    $sql = " SELECT r_email, r_password FROM requesterlogin_tb
    WHERE r_email ='".$rEmail."' AND r_password ='".$rPassword."' limit 1"; //limit jo h user ko bas ek hi bar registration krne denga.
    $result = $conn->query($sql); //$result is variable, $conn is a connection object used in dbConnection pge which will run sql query.
    if($result->num_rows == 1){   //when no. of rows is 1(when email and pass is filled) then login success.
    $_SESSION['is_login']= true; //session upr start ho gya h agar login h to else part run honga aur login hi rahenga.
    $_SESSION['rEmail'] = $rEmail;
    echo "<script> location.href='RequesterProfile.php';</script>";
    exit;
  }else{
    $msg = '<div class="alert alert-danger mt-3"> * Enter Valid Email and Password</div>';
  }
  }
} else{
  echo "<script> location.href='RequesterProfile.php';</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 

    <!--Custome CSS-->
    <link rel="stylesheet" href="../css/custom.css">


</head>
<body>

<header class="jumbotron back-image" style="background-image:url(../images/3.jpg)">
<div class="mb-5 mt-5 text-center" style="font-size: 30px">
  <i class="fa fa-wrench"></i>
  <span>Service Management System</span>
</div>
<div class="container-fluid">

   <div class="row justify-content-center mt-4">
       <div class="col-sm-6 col-md-4">
       <form action="" class="form-container p-4 rounded" method="POST">
        
        <p class="text-center" style="font-size:20px"><i class="fa fa-user-secret mr-2"></i>User Login</p>
        <div class="form-group">
          <i class="fa fa-envelope"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="rEmail">
          <!--Add text-white below if want text color white-->
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">
            Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
        </div>
        <button type="submit" class="btn butn-colour mt-3 btn-block
         shadow-sm font-weight-bold" name="rSignup">Login</button>
        
         <?php if(isset($msg)) {echo $msg; } ?>
      </form>
      <div class="text-center"><a href="../index.php" class="btn btn-dark mt-3  shadow-sm">Back to Home</a>
      </div> 
      
      </div>
   </div>
</div>
</header>


<!---Javascript---->
<script src="../js/jquery.min.js"></script>
 <script src="../js/popper.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/all.min.js"></script>  
</body>
</html>