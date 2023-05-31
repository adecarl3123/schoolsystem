<?php 
    include "../config.php";
    $id = $_GET['ID'];
    $sql = "DELETE FROM admin WHERE ID = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location:registeradmin.php?msg=Record Deleted Successfully");
    }
    else{
        echo "Failed:" . mysqli_error($conn);
    }
?>
