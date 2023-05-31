<?php 
include '../config.php';   
session_start();

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $admin = mysqli_fetch_assoc($result);
        if(password_verify($password, $admin['password'])){
            $_SESSION['admin_ID'] = $admin['ID'];
            header('location: ../admin.php');
        }else{
            echo "
            <script>
                alert('Invalid Credentials');
                window.location.href='login_admin.php';
            </script>
        ";
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

   <link rel="stylesheet" href="login.css">
   <title>Login Admin</title>
   <style>
    html, body {
    height: 100%;
    
}

body {
    display: flex;
    align-items: center;
}
    </style>

</head>
<body>
   
<div class="login-container p-5">

   <form action="" method="post">
      <h3>Admin Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="email" required placeholder="Enter your Email">
      <input type="password" name="password" required placeholder="Enter your password">
      <button type="submit" name="submit"> Login </button>
      <label for="forgotpassword"><a href="forgot.php">Forgot password?</a></label>
   </form>

</div>

</body>
</html>