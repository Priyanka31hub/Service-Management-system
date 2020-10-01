<?php
  define('TITLE', 'Requester Profile');
  define('PAGE', 'RequesterProfile');
  include('includes/header.php'); 
  include('../dbConnection.php');
  session_start();
   //Agar user login h to profile page open honga or else login wala.
  if(isset($_SESSION['is_login'])){
    $rEmail = $_SESSION['rEmail'];
  } else {
    echo "<script> location.href= 'Requesterlogin.php' </script>";
  }
  $sql = "SELECT r_name ,r_email FROM requesterlogin_tb WHERE
   r_email = '$rEmail'";
   $result = $conn->query($sql);
   if($result->num_rows == 1){
     $row = $result->fetch_assoc();  //data fetch honga.
     $rName = $row['r_name'];  // jo b data variable $rName or $rEmail mai hai vo fetch ho jaenga.
   }                           // $rEmail yaha isliye nhi likhe q ki upar already variable $rEmail mai data daal chuke.

 if(isset($_REQUEST['nameupdate'])){  //nice form mai jo value di h vohi likhna h.
   if($_REQUEST['rName'] == ""){     //agar name filed empty h to error denga.
    $passmsg = '<div class="alert alert-warning col-sm-6  mt-2" role="alert"> * Fill All Fileds </div>';
  } else {
    $rName = $_REQUEST["rName"]; //rName niche form wala value h.
    //query jp h vo name ko update karengi jiska email match honga.
    $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
    if($conn->query($sql) == TRUE){  //agar query true rahi to.
      // below msg display on form submit success
      $passmsg = '<div class="alert alert-success col-sm-6 mt-2" role="alert"> Updated Successfully </div>';
      } else {
      // below msg display on form submit failed
      $passmsg = '<div class="alert alert-danger col-sm-6 mt-2" role="alert"> Unable to Update </div>';
         }
  
   }
 }

?>


  <div class="col-sm-1"> </div>
  <!---Start Profile Area 2nd col--->
    <div class="col-sm-5 mt-5 shadow-lg ">
      <form action="" method="POST" class="mx-5">
      
      </br>
         <div class="form-group">
         <label for="rEmail">Email</label><input type="email" class="form-control"
             name="rEmail" id="rEmail" value="<?php echo $rEmail ?>" readonly>
         </div>
         <div class="form-group">
         <label for="rName">Name</label><input type="text" class="form-control"
             name="rName" id="rName" value="<?php echo $rName ?>">
         </div>
         <button type="submit" class="btn butn-colour
         shadow-sm font-weight-bold mb-2" name="nameupdate">Update</button>
         <!--$passmsg variable h, agr vo set h to jo msg upar define kiya h variable $passmsg mai vo echo hojaenga yaha.-->
         <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>
      </div>



      <?php
  include('includes/footer.php');
  ?>