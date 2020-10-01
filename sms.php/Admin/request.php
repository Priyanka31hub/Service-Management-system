<?php
define('TITLE', 'Request');
define('PAGE', 'request');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
   } else {
    echo "<script> location.href='login.php'; </script>";
   }
?>


<!-----Start 2nd col---->
<div class="col-sm-4 mb-5">
<?php 
 $sql = "SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
   echo '<div class="card mt-5 mx-5">';
   echo '<div class="card-header bg-dark text-white">';
   echo 'Request ID : '. $row['request_id'];
   echo '</div>';
   echo '<div class="card-body bg-light">';
   echo '<h5 class="card-title">Request Info : ' . $row['request_info'] . '</h5>';
   echo '<p class="card-text">' . $row['request_desc'] . '</p>';
   echo '<p class="card-text">Request Date: ' . $row['request_date'] . '</p>';
   echo '<div class="float-right">';
   //data show  karane k liye form tag k andar likhenge btn...jaise hi view pr click kr k hidden data active ho jaenga.
   //type submit se jo data h vo kahi n kahi show honga aur hidden data k andar ek specific value id h jaise hi view pr click honga uski id show honga.
   echo '<form action="" method="POST"> <input type="hidden" name="id" value='. $row["request_id"] .'> 
         <input type="submit" class="btn butn-colour mr-3" name="view" value="View">
         <input type="submit" class="btn btn-secondary" name="close" value="Close">
         </form>';
   echo '</div>' ;
   echo '</div>' ;
   echo'</div>';
  }
 } else {
  echo '<div class="alert alert-info mt-5 col-sm-6" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully assigned all Requests.</p>
  <hr>
  <h5 class="mb-0">No Pending Requests</h5>
</div>';
 }


?> 
</div>



<?php
include('assignworkform.php');
include('includes/footer.php'); 
?>