<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 

    <!--Custome CSS-->
    <link rel="stylesheet" href="../css/custom.css">


    <title> <?php echo TITLE ?> </title>
</head>
<body >

<!-------------------Top navbar-------------------->
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
   <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php"><i class="fas fa-cogs i-color"></i> Services's MS</a>
</nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-dark sidebar py-5 d-print-none"> <!--d-print none so that sidebar will not get printed-->
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'RequesterProfile') { echo 'text-col'; } ?>" href="RequesterProfile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'SubmitRequest') { echo 'text-col'; } ?>" href="SubmitRequest.php">
        <i class="fab fa-accessible-icon"></i>
        Submit Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'CheckStatus') { echo 'text-col'; } ?>" href="CheckStatus.php">
        <i class="fas fa-align-center"></i>
        Service Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'Requesterchangepass') { echo 'text-col'; } ?>" href="Requesterchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>






      