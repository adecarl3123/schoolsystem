<?php
@include '../config.php';
$id = $_GET['ID'];

if(isset($_POST['submit'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
 

  $sql = "UPDATE admin SET `first_name`='$first_name',`last_name`='$last_name',`username`='$username', `email`='$email' WHERE ID =$id";

  $result = mysqli_query($conn, $sql);

  if($result) {
   header("Location:registeradmin.php?msg=New Data Updated successfully");
  }
  else{
   echo "Failed :" . mysqli_error($conn);
  }
} 
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="../style.css"> 
   
   <title>Admin</title>
   <!--link rel="stylesheet" href="style.css"--> 


</head>
<body>
<div class="side-menu">
        <div class="brand-name">
            <h1>Staff</h1>
        </div>
            <ul>
                <li> <a href="admin.php" style="color:white"> <img src="../images/dashboard (2).png"> &nbsp; Dashboard</li> </a>
                <li> <a href="manage_student.php" style="color:white"> <img src="../images/reading-book (1).png">&nbsp; Students</li></a>
                <li> <a href="add_admin.php" style="color:white"> <img src="../images/teacher2.png"> &nbsp; Teachers</li> </a>
                <li> <a href="#" style="color:white"> <img src="../images/school.png"> &nbsp; Courses</li> </a>
                <li> <a href="#" style="color:white"> <img src="../images/help-web-button.png"> &nbsp; Help</li> </a>
                <li> <a href="#" style="color:white"> <img src="../images/settings.png"> &nbsp; Settings</li> </a>
            </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <!-- <input type="text" placeholder="Search..">
                    <button type="submit" class="btn btn-primary"><img src="images/search.png"> </button> -->
                    <h1> Edit Staff Information</h1>

                </div>
                <!-- <i class="fas fa-user float-end" href=""> </i> -->
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
   
   <div class="container">
      <div class="text-center mb-4">
         <h3 style="color:red"> You're About to Change a Staff Information </h3>
         <p class="text-muted"> click update after changing any information</p>
      </div>

      <?php
        $sql = " SELECT * FROM admin WHERE ID = $id ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
      ?>
   
      
      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col"> 
                  <label class="form-label"> First name :</label>
                  <input type="text" class="form-control" name="first_name"
                    value="<?php echo $row['first_name'] ?>">
               </div>

               <div class="col"> 
                  <label class="form-label"> Last name :</label>
                  <input type="text" class="form-control" name="last_name"
                  value="<?php echo $row['last_name'] ?>">
               </div>
            </div>

            <div class="mb-3"> 
                  <label class="form-label"> User Name :</label>
                  <input type="username" class="form-control" name="username"
                  value="<?php echo $row['username'] ?>">
            </div>
            <div class="mb-3"> 
                  <label class="form-label"> Email :</label>
                  <input type="email" class="form-control" name="email"
                  value="<?php echo $row['email'] ?>">
            </div>

            <div>
               <button href="manage_student.php" type="submit" class="btn btn-success" name="submit">Update </button>
               <a href="manage_student.php" class="btn btn-danger"> Cancel </a> 
            </div>


      
         </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>