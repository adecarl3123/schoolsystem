<?php 
session_start();

if (!isset($_SESSION['admin_ID'])) {
   header("Location: login/login_admin.php");
   exit;
}

include('config.php');

$userID = $_SESSION['admin_ID'];

$sql = "SELECT * FROM admin WHERE id = $userID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1 style="color:white">Admin</h1>
        </div>
            <ul>
                <li> <a href="#" style="color:white"> <img src="images/dashboard (2).png"> &nbsp; Dashboard</li> </a>
                <li> <a href="manage_student.php" style="color:white"> <img src="images/reading-book (1).png">&nbsp; Students</li></a>
                <li> <a href="login/registeradmin.php" style="color:white"> <img src="images/teacher2.png"> &nbsp; Teachers</li> </a>
                <!-- <li> <a href="#" style="color:white"> <img src="images/school.png"> &nbsp; Courses</li> </a> -->
                <li> <a href="#" style="color:white"> <img src="images/help-web-button.png"> &nbsp; Help</li> </a>
                <li> <a href="#" style="color:white"> <img src="images/settings.png"> &nbsp; Settings</li> </a>
            </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <!-- <input type="text" placeholder="Search..">
                    <button type="submit" class="btn btn-primary"><img src="images/search.png"> </button> -->
                    <h1> Student Information List</h1>
                </div>
                <a href="log_out.php" class="btn btn-flat btn-sm btn-danger mb-3"> Log Out </a> 
            </div>
        </div>
        <br>
        <br>    
        <br>
        <div class="welcome">
            <div class="row">
                <h1 class="pt-5 pb-2"> Welcome to BCAS COLLEGE INFORMATION SYSTEM</h1>
                <div class="list p-5 pb-0" style="background-color: #DAEFDE">
                <h2> In this page you can :</h2>
                <h4> - Add Students Information</h4>
                <h4> - View Students Information</h4>
                <h4> - Update or Edit Students Information</h4>
                <h4> - Delete Information</h4>
                </div>


            </div>
        </div>
<div class="container">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1> Students</h1>
                        <h3>  </h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/students.png">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1> Teachers</h1>
                        <h3> </h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/teachers.png">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1> Courses</h1>
                        <h3> </h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/schools.png">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1> </h1>
                        <h3>  </h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/students.png">
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>