<?php 
    include "config.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM crud WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location:manage_student.php?msg=Record Deleted Successfully");
    }
    else{
        echo "Failed:" . mysqli_error($conn);
    }
?>
