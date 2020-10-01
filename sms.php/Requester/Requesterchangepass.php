<?php
  define('TITLE', 'Change Password');
  define('PAGE', 'Requesterchangepass');
  include('includes/header.php');
  include('../dbConnection.php');
  session_start();
   //Agar user login h to profile page open honga or else login wala.
  if($_SESSION['is_login']){
    
  } else {
    echo "<script> location.href= 'Requesterlogin.php' </script>";
  }
  $rEmail = $_SESSION['rEmail']; //email already show karenga jo ki niche echo honga as a readonly.
 if(isset($_REQUEST['passupdate'])){  //nice form mai jo value di h vohi likhna h.
   if($_REQUEST['rPassword'] == ""){     //agar name filed empty h to error denga.
    $passmsg = '<div class="alert alert-warning text-center col-sm-6 " role="alert"> * All Fileds Are Required </div>';
   }else{
    $rPass = $_REQUEST["rPassword"]; //rName niche form wala value h.
    //query jp h vo name ko update karengi jiska email match honga.
    $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";
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

  <div class="col-1"></div>
      <!---Start change password Area 2nd col--->
    <div class="col-sm-5 mt-5 shadow-lg ">
      <form action="" method="POST" class="mx-5">
      </br>
      </br>
         <div class="form-group">
         <label for="inputEmail">Email</label><input type="email" class="form-control"
             id="inputEmail" value="<?php echo $rEmail ?>" readonly>
         </div>
         <div class="form-group">
         <label for="inputnewpassword">New Password</label><input type="password" class="form-control"
             name="rPassword" id="inputnewpassword" placeholder="New Password">
         </div>
         <!--$passmsg variable h, agr vo set h to jo msg upar define kiya h variable $passmsg mai vo echo hojaenga yaha.-->
         <?php if(isset($passmsg)) {echo $passmsg; } ?>
         <div class="text-center">
         <button type="submit" class="btn butn-colour mr-4 mt-4 mb-2
         shadow-sm font-weight-bold" name="passupdate">Update</button>
         <button type="reset" class="btn bg-secondary text-white mr-4 mt-4 mb-2
         shadow-sm font-weight-bold">Reset</button>
         
         </div>
      </form>
      </div>
      

     
  


  <?php
  include('includes/footer.php');
  ?>
      
  