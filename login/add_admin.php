<?php
include '../config.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $query = "INSERT INTO admin(username, password, first_name, last_name, email) VALUES ('$username', '$password', '$first_name', '$last_name', '$email' )";
    mysqli_query($conn, $query);

    header("location: registeradmin.php");

};
?>  

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="logo.png" href="logo.png">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1 style="color:white">Admin</h1>
        </div>
            <ul>
                <li> <a href="../admin.php" style="color:white"> <img src="../images/dashboard (2).png"> &nbsp; Dashboard</li> </a>
                <li> <a href="manage_student.php" style="color:white"> <img src="../images/reading-book (1).png">&nbsp; Students</li></a>
                <li> <a href="registeradmin.php" style="color:white"> <img src="../images/teacher2.png"> &nbsp; Teachers</li> </a>
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
                    <h1>List of Admins</h1>
                </div>
                <i class="fa fa-user float-end" href=""> </i>
            </div>
        </div>
        <br>
        <br>  
        <br>
        <br>

<div class="form-container" style="margin-top: 20px">

<form action="" method="post">
   <h3>Add an Admin</h3>
   
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
    <input type="text" name="first_name" required placeholder="Albert">
    <input type="text" name="last_name" required placeholder="Einstein">
    <input type="email" name="email" required placeholder="Einstein@gmail.com">
   <input type="text" name="username" required placeholder="Admin123">
   <input type="password" name="password" required placeholder="Password">
   <input type="submit" name="submit" value="Add Now" class="btn btn-success ">
   <a href="registeradmin.php" class="btn btn-danger"> Cancel </a> 

</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>