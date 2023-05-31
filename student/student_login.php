<?php 
include '../config.php';   
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM crud WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            header('location:../student/student.php');
        }else{
         echo "
         <script>
             alert('Invalid Credentials');
             window.location.href='student_login.php';
         </script>";
        }
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Student Login</title>
  

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Student Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="email" required placeholder="Enter your Email">
      <input type="password" name="password" required placeholder="Enter your password">
      <button type="submit" name="submit" class="form-btn" style="background-color: green" > Login </button>
      <label for="forgotpassword"><a href="../forgot.php">Forgot password?</a></label>


      <!-- <p>register as an Admin ->  <a href="register.php">register now</a></p> -->
   </form>

</div>

</body>
</html>