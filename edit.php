<?php
@include 'config.php';
$id = $_GET['id'];

if(isset($_POST['submit'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $course =$_POST['course'];
  $year = $_POST['year'];
  $gender = $_POST['gender'];

  $sql = "UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`course`='$course',`year`='$year',`gender`='$gender' WHERE id=$id";

  $result = mysqli_query($conn, $sql);

  if($result) {
   header("Location: index.php?msg=New Data Updated successfully");
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
   <link rel="stylesheet" href="style.css"> 
   
   <title>admin page</title>
   <!--link rel="stylesheet" href="style.css"--> 


</head>
<body>
<div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
            <ul>
                <li> <a href="admin.php" style="color:white"> <img src="images/dashboard (2).png"> &nbsp; Dashboard</li> </a>
                <li> <a href="manage_student.php" style="color:white"> <img src="images/reading-book (1).png">&nbsp; Students</li></a>
                <li> <a href="add_admin.php" style="color:white"> <img src="images/teacher2.png"> &nbsp; Teachers</li> </a>
                <li> <a href="#" style="color:white"> <img src="images/school.png"> &nbsp; Courses</li> </a>
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
                    <h1> Edit Student Information</h1>

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
         <h3 style="color:red"> You're About to Change an Student Information </h3>
         <p class="text-muted"> click update after changing any information</p>
      </div>

      <?php
       
        $sql ="SELECT * FROM crud WHERE id = $id ";
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
                  <label class="form-label"> Email :</label>
                  <input type="email" class="form-control" name="email"
                  value="<?php echo $row['email'] ?>">
            </div>

            <div class="form-group mb-3"> 
                  <label> Course :</label> &nbsp;
                  <input type="radio" class="form-check-input" name="course"
                  id="BSIT" value="BSIT" <?php echo ($row['course']=='BSIT')?
                  "checked":""?>>
                  <label for="BSIT" class="form-input-label"> BSIT</label> 

                  <input type="radio" class="form-check-input" name="course"
                  id="BSBA" value="BSBA" <?php echo ($row['course']=='BSBA')?
                  "checked":""?>>
                  <label for="BSBA" class="form-input-label"> BSBA</label> 

                  <input type="radio" class="form-check-input" name="course"
                  id="BSED" value="BSED"<?php echo ($row['course']=='BSED')?
                  "checked":""?>>
                  <label for="BSED" class="form-input-label"> BSED</label>  &nbsp;
            </div>

            <div class="form-group mb-3"> 
                  <label> Year :</label> &nbsp;
                  <input type="radio" class="form-check-input" name="year"
                  id="1st Year" value="1st Year" <?php echo ($row['year']=='1st Year')?
                  "checked":""?>>
                  <label for="1st Year" class="form-input-label"> 1st Year</label> 

                  <input type="radio" class="form-check-input" name="year"
                  id="2nd Year" value="2nd Year "<?php echo ($row['year']=='2nd Year')?
                  "checked":""?>>
                  <label for="2nd Year" class="form-input-label"> 2nd Year</label> 

                  <input type="radio" class="form-check-input" name="year"
                  id="3rd Year" value="3rd Year" <?php echo ($row['year']=='3rd Year')?
                  "checked":""?>>
                  <label for="3rd Year" class="form-input-label"> 3rd Year</label> 

                  <input type="radio" class="form-check-input" name="year"
                  id="4th Year" value="4th Year" <?php echo ($row['year']=='4th Year')?
                  "checked":""?>>
                  <label for="4th Year" class="form-input-label"> 4th Year</label>  &nbsp;
            </div>


            <div class="form-group mb-3"> 
                  <label> Gender :</label> &nbsp;
                  <input type="radio" class="form-check-input" name="gender"
                  id="male" value="male" <?php echo ($row['gender']=='male')?
                  "checked":""; ?>>
                  <label for="male" class="form-input-label"> Male</label> &nbsp;

                  <input type="radio" class="form-check-input" name="gender"
                  id="female" value="female" <?php echo ($row['gender']=='female')?
                  "checked":""; ?>>
                  <label for="female" class="form-input-label"> Female</label>
            </div>

            <div>
               <button href="manage_student.php" type="submit" class="btn btn-success" name="submit">Update </button>
               <a href="manage_student.php" class="btn btn-danger"> Cancel </a> 
            </div>


      
         </form>

   
   <!-- <div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div> -->

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>