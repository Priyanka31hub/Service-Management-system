<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
   $aEmail = $_SESSION['aEmail'];
  } else {
   echo "<script> location.href='login.php'; </script>";
  }

  //for dynamic dashboard.
 $sql = "SELECT max(request_id) FROM submitrequest_tb";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submitrequest = $row[0]; //0 means it will select 1st row tats id.

 $sql = "SELECT max(request_id) FROM assignwork_tb";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $assignwork = $row[0];

 $sql = "SELECT * FROM technician_tb";
 $result = $conn->query($sql);
 $totaltech = $result->num_rows;

?>


<!-----------Start Dashboard 2nd col---------->
<div class="col-sm-9 col-md-10">
   <div class="row text-center mx-5">
      <div class="col-sm-4 mt-5"> <!----1st col---->
         <div class="card text-white dash1 mb-3  shadow-lg" style="max-width:18rem;">
            <div class="card-header">Requester Received</div>
            <div class="card-body">
            <h4 class="card-title"> <?php echo $submitrequest; ?> </h4>
            <a class="btn text-white" href="request.php">View</a>
            </div>
         </div>
      </div>
      <div class="col-sm-4 mt-5">  <!----2nd col---->
         <div class="card text-white dash2 mb-3  shadow-lg" style="max-width:18rem;">
            <div class="card-header">Assigned Work</div>
            <div class="card-body">
            <h4 class="card-title"> <?php echo $assignwork; ?> </h4>
            <a class="btn text-white" href="work.php">View</a>
            </div>
         </div>
      </div>
      <div class="col-sm-4 mt-5">  <!----3rd col---->
         <div class="card text-white dash3 mb-3  shadow-lg" style="max-width:18rem;">
            <div class="card-header">No. of Technician</div>
            <div class="card-body">
            <h4 class="card-title">  <?php echo $totaltech; ?> </h4>
            <a class="btn text-white" href="technician.php">View</a>
            </div>
         </div>
      </div>
   </div>
      <div class="mx-5 mt-5 text-center">
         <p class="bg-dark text-white p-2">List of Requesters</p>
         <?php
           $sql = "SELECT * FROM requesterlogin_tb";
           $result = $conn->query($sql);
           if($result->num_rows > 0){  //if no. of rows is greater than 0 then data will be echo.
            echo '<table class="table">
            <thead>
            <tr>
             <th scope="col">Requester ID</th>   <!--scope is a html attribute which defines wheater a header cell is a header for a col, row or grup.-->
             <th scope="col">Name</th>
             <th scope="col">Email</th>
            </tr>
           </thead>
           <tbody>';
           while($row = $result->fetch_assoc()){     // while loop chalta rahenga jab tk data aata rahenga associative fetch hota rahenga.
            echo '<tr>';
             echo '<th scope="row">'.$row["r_login_id"].'</th>'; //database ka data echo honga jisk database row ka naam likha h.
             echo '<td>'. $row["r_name"].'</td>';
             echo '<td>'.$row["r_email"].'</td>';
           }
            echo '</tbody>
            </table>';
           } else {
             echo "0 Result";
           }
         ?>
      </div>
</div><!--End dashboard-->


      




<?php
include('includes/footer.php'); 
?>