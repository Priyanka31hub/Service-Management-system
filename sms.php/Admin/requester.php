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
?>

<!--Start 2nd col--->
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white p-2">List of Requesters</p>
    <?php
     $sql = "SELECT * FROM requesterlogin_tb"; 
     $result = $conn->query($sql);
     if($result-> num_rows > 0){
        echo '<table class="table">
        <thead>
         <tr>
          <th scope="col">Requester ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
         </tr>
        </thead>
        <tbody>';
         while($row = $result->fetch_assoc()){
         echo '<tr>';
         echo '<th scope="row">'.$row["r_login_id"].'</th>';   //r_login_id db k tb k col ka naam h.
         echo '<td>'. $row["r_name"].'</td>';
         echo '<td>'.$row["r_email"].'</td>';
         echo '<td>
         <form action="editreq.php" method="POST" class="d-inline"> 
         <input type="hidden" name="id" value='. $row["r_login_id"] .'>  <!--name=id k form mai hideen data jo ki r_login_id h vo editreq.php wale pge mai jaaengi aur uska data display honga.-->
         <button type="submit" class="btn butn-colour mr-3" name="view" value="View">
         <i class="fas fa-pen"></i></button></form>  
         <form action="" method="POST" class="d-inline"><input type="hidden" name="id" 
         value='. $row["r_login_id"] .'><button type="submit" class="btn btn-secondary" 
         name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form>
         </td>
        </tr>';
        }

        echo '</tbody>
    </table>';

     }
     else {
        echo "0 Result";
      }
      if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM requesterlogin_tb WHERE r_login_id = {$_REQUEST['id']}";
        if($conn->query($sql) === TRUE){
          // echo "Record Deleted Successfully";
          // below code will refresh the page after deleting the record
          echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
          } else {
            echo "Unable to Delete Data";
          }
        }
?>
</div>
</div> <!---End row--->
<div class="float-right"><a href="insertreq.php" class="btn butn-colour mr-3 mt-3">
<i class="fas fa-plus fa-2x text-white"></i></a></div>
</div> <!---End container--->


<!---Javascript---->
<script src="../js/jquery.min.js"></script>
 <script src="../js/popper.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/all.min.js"></script> 

</body>
</html>