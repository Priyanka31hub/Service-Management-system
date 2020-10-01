<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">

</head>

<body>
 <!-------------------Top navbar-------------------->
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
   <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php"> <i class="fas fa-cogs i-color"></i> Services's MS</a>
</nav>

 <!-------------------Side Bar ------------------->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-dark sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'dashboard') { echo 'text-col'; } ?> " href="dashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'work') { echo 'text-col'; } ?>" href="work.php">
        <i class="fa fa-list-alt"></i>
        Work Order
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'request') { echo 'text-col'; } ?>" href="request.php">
        <i class="fas fa-align-center"></i>
        Requests
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'assets') { echo 'text-col'; } ?>" href="assets.php">
        <i class="fas fa-database"></i>
        Assets
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'technician') { echo 'text-col'; } ?>" href="technician.php">
        <i class="fab fa-teamspeak"></i>
        Technician
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'requesters') { echo 'text-col';} ?>" href="requester.php">
        <i class="fas fa-users"></i>
        Requester
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'sellreport') { echo 'text-col'; } ?>" href="soldproductreport.php">
        <i class="fa fa-folder-open"></i>
        Sell Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'workreport') { echo 'text-col'; } ?>" href="workreport.php">
        <i class="fas fa-table"></i>
        Work Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text <?php if(PAGE == 'changepass') { echo 'text-col'; } ?>" href="changepass.php">
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