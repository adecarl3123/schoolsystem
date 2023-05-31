<?php 
session_start();
session_destroy();

header("location: login/login_admin.php");

?>