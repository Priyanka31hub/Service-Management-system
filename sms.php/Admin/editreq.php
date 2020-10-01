<?php
define('TITLE', 'Requesters');
define('PAGE', 'requesters');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['requpdate'])){
    // Checking for Empty Fields
    if(($_REQUEST['r_login_id'] == "") || ($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "")){
     // msg displayed if required field missing
     $msg = '<div class="alert alert-warning text-center ml-5 mr-5 mt-2" role="alert"> * All Fileds Are Required </div>';
    } else {
      // Assigning User Values to Variable
      $rid = $_REQUEST['r_login_id'];
      $rname = $_REQUEST['r_name'];
      $remail = $_REQUEST['r_email'];
  
    $sql = "UPDATE requesterlogin_tb SET r_login_id = '$rid', r_name = '$rname', r_email = '$remail' WHERE r_login_id = '$rid'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $msg = '<div class="alert alert-success text-center ml-5 mr-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $msg = '<div class="alert alert-danger text-center ml-5 mr-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
    }
?>

<div class="col-1"></div>
<!--Start 2nd col---->
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Requester Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM requesterlogin_tb WHERE r_login_id = {$_REQUEST['id']}"; // requester.php wale pge se name=id h uski r_login_id match hongi aur data  dislay honga.
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
<form action="" method="POST">
    <div class="form-group">
      <label for="r_login_id">Requester ID</label>
      <input type="text" class="form-control" id="r_login_id" name="r_login_id" 
      value="<?php if(isset($row['r_login_id'])) {echo $row['r_login_id']; }?>" readonly>
    </div>
    <div class="form-group">
      <label for="r_name">Name</label>
      <input type="text" class="form-control" id="r_name" name="r_name" 
      value="<?php if(isset($row['r_name'])) {echo $row['r_name']; }?>">
    </div>
    <div class="form-group">
      <label for="r_email">Email</label>
      <input type="text" class="form-control" id="r_email" name="r_email" 
      value="<?php if(isset($row['r_email'])) {echo $row['r_email']; }?>">
    </div>
     
    <div class="text-center">
      <button type="submit" class="btn butn-colour" id="requpdate" name="requpdate">Update</button>
      <a href="requester.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>



<?php
include('includes/footer.php'); 
?>
