<?php
  include('dbConnection.php');
    // Request jo h vo universal h vo post b krta h aur get b.
  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields if fields are empty then data will not get store on database.
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> * All Fields are Required </div>';
    } else {
      // If email is already register then
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-danger mt-2" role="alert"> * Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];  //$rName variable hai kuch b naam de skte.
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName','$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>
<header class="section-header">
<div class="container-fluid pt-5 " id="registration">
  <h3 class="text-center">Create an Account</h3>
  </br>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="" class="show p-4" method="POST">
        <div class="form-group">
          <i class="fas fa-user"></i><label for="name" class="pl-2 font-weight-bold">Name</label><input type="text"
            class="form-control" placeholder="Name" name="rName" Required>
        </div>
        <div class="form-group">
          <i class="fa fa-envelope"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="rEmail" Required>
          <!--Add text-white below if want text color white-->
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">New
            Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword" Required>
        </div>
        <button type="submit" class="btn butn-colour mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
        <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>

      </form>
</br>
</br>
    </div>
  </div>
</div>
</header>




