<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
   header("Location: student_login.php");
   exit;
}

include('../config.php');

$userID = $_SESSION['user_id'];

$sql = "SELECT * FROM crud WHERE id = $userID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$firstName = $row['first_name'];
$lastName = $row['last_name'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="icon" type="logo.png" href="logo.png">
   <link rel="stylesheet" href="../style.css">
   <link rel="stylesheet" href="print.css">
  

</head>
<body>
   <div class="side-menu " style="padding-top:20px;">
      <div class="brand-name">
            
      <div class="profile-info">
         <h2 style="color: white; padding-top:10px; ">Welcome <br> <?php echo $firstName . ' ' . $lastName; ?></h2>
      </div>
            
      </div>
      <ul  style="padding-top:20px;">
         <!-- <li> <a href="#" style="color:white"> <img src="../images/dashboard (2).png"> &nbsp; Dashboard</li> </a> -->
         <li> <a href="manage_student.php" style="color:white"> <img src="../images/reading-book (1).png">&nbsp; My Profile</li></a>
         <li> <a href="#" style="color:white"> <img src="../images/help-web-button.png"> &nbsp; Help</li> </a>
         <li> <a href="#" style="color:white"> <img src="../images/settings.png"> &nbsp; Settings</li> </a>
      </ul>
   </div>
   <div class="container">
      <div class="header">
         <div class="nav">
            <div class="search">
               <h1> Batangas College of Arts and Sciences</h1>
            </div>
            <a href="student_logout.php" class="btn btn-flat btn-sm btn-danger mb-3"> Log Out </a>  </div>
      </div>
    
      

      <div class="center-table" style="padding-top: 100px">
      <table class="table table-hover text-center">
         <thead class=" table-dark" >
            <tr>
               <th scope="col">ID</th>
               <th scope="col">First Name</th>
               <th scope="col">Last Name</th>
               <th scope="col">Email</th>
               <th scope="col">Course</th>
               <th scope="col">Year</th>
               <th scope="col">Gender</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
        
         <tbody>
            <?php
            if ($row) {
               echo '<tr> 
                        <td>'. $row['id'] .'</td>
                        <td>'. $row['first_name'] .'</td>
                        <td>'. $row['last_name'] .'</td>
                        <td>'. $row['email'] .'</td>
                        <td>'. $row['course'] .'</td>
                        <td>'. $row['year'] .'</td>
                        <td>'. $row['gender'] .'</td>
                        <td> 
                           <button onclick="printTable()" class="btn btn-primary mb-3">Print</button> 
                        </td>
                     </tr>';
            } else {
               echo '<tr><td colspan="8">No data available.</td></tr>';
            }
            mysqli_close($conn);
            ?>
         </tbody>
      </table>
      </div>
      
      <script>
         function printTable() {
            window.print();
         }
      </script>
   </body>
</html>