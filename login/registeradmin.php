<?php 
session_start();

if (!isset($_SESSION['admin_ID'])) {
   header("Location: login_admin.php");
   exit;
}

include('../config.php');

//get page no.
if(isset($_GET['page_no'])&& $_GET['page_no'] !==""){
    $page_no = $_GET['page_no'];
}else{
    $page_no = 1;
}

//total rows to display
$total_records_per_page = 10;
//get page offset for limit query
$offset = ($page_no - 1) * $total_records_per_page;
//get previous page
$previous_page = $page_no - 1;
//next page
$next_page = $page_no + 1;

//get total count of records
$result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM admin") or die(mysqli_error($conn));
//total records
$records = mysqli_fetch_array($result_count);
//store total_records to a variable
$total_records = $records['total_records'];
//get total_page
$total_no_of_pages = ceil($total_records / $total_records_per_page);

//query string
$sql = "SELECT * FROM admin LIMIT $offset , $total_records_per_page";
//result
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

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
   <title style="color:white">BCAS-ADMIN</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1 style="color: white">Admin</h1>
        </div>
            <ul>
                <li> <a href="../admin.php" style="color:white"> <img src="../images/dashboard (2).png"> &nbsp;<span> Dashboard </span></li> </a>
                <li> <a href="../manage_student.php" style="color:white"> <img src="../images/reading-book (1).png">&nbsp; <span> Students </span></li></a>
                <li> <a href="registeradmin.php" style="color:white"> <img src="../images/teacher2.png"> &nbsp; <span> Teachers </span></li> </a>
                <!-- <li> <a href="#" style="color:white"> <img src="../images/school.png"> &nbsp; <span> Course </span></li> </a> -->
                <li> <a href="#" style="color:white"> <img src="../images/help-web-button.png"> &nbsp; <span> Help </span></li> </a>
                <li> <a href="#" style="color:white"> <img src="../images/settings.png"> &nbsp; <span> Settings </span></li> </a>
            </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <!-- <input type="text" placeholder="Search..">
                    <button type="submit" class="btn btn-primary"><img src="images/search.png"> </button> -->
                    <h1> List of Staffs </h1>

                </div>
                </div> <a href="log_out.php" class="btn btn-flat btn-sm btn-danger mb-3"> Log Out </a>  </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
   <div class="container" style ="background: white" > 
    <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
         }
    ?>
        <div class="card-header">
            <h3 class="card-title"> List of Staffs</h3>
            <div class="card-tools">
                <a href="add_admin.php" class="btn btn-flat btn-sm btn-primary mb-3"> <i class="fa fa-add"></i> Add 
                </a> 
                <a href="search_admin.php" class="    btn btn-flat btn-sm btn-info float-end mb-3"> <i class="fa fa-search"> </i> Search  </a>  
            </div>
            
        <!-- <a href="add_student.php" class="btn btn-flat btn-sm btn-primary"> <i class="fa fa-add"></i> Add New Student </a>
        <a href="admin.php" class="btn btn-danger mb-3"> Cancel </a> -->
        <!-- <a href="search_student.php" class="btn btn-info float-end mb-3"> <i class="fa fa-search"> </i> Search Student </a>  -->
        </div>
     
            <table class="table table-hover- text-center" >
                    <thead class=" table-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                            while ($row = mysqli_fetch_array($result)) { ?>
                              
                                 <tr> 
                                        <td><?=  $row ['ID']; ?></td>
                                        <td><?=  $row ['first_name'];?></td>
                                        <td><?=  $row ['last_name'];?></td>
                                        <td><?=  $row ['username'];?></td>
                                        <td><?=  $row ['email'];?></td>

                            
                                        <td> 
                                            <a href="edit_admin.php?ID=<?php echo $row['ID'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square 
                                            fs-5 me-3"></i></a>
                                            <a href="delete_admin.php?ID=<?php echo $row['ID'] ?>" onclick="return confirm('Are you sure you want to delete this staff');"class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>   
                                        </td>
                                 </tr>

                                <?php } 
                                mysqli_close($conn)  ?>
        
                    </tbody>
            </table>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">

                                <li class="page-item"><a class="page-link <?= 
                                ($page_no <= 1) ? 'disabled' : ''; ?>" <?=
                                ($page_no > 1) ? 'href=?page_no=' . $previous_page : ''; ?>> Previous</a></li>

                                <?php for ($counter = 1; $counter <=
                                $total_no_of_pages; $counter++) { ?>
                                    <li class="page-item"><a class="page-link"  href="?page_no=<?= $counter; ?>"><?=$counter; ?></a></li> <?php } ?>
                               
                                
                                <li class="page-item"><a class="page-link <? ($page_no >=
                                $total_no_of_pages)? 'disabled' : ''; ?>" <?= ($page_no <
                                $total_no_of_pages)? 'href=?page_no=' . $next_page : ''; ?>>Next</a></li>
                
                            </ul>
                        </nav>
                        <div class="p-10">
                            <strong> Page <?= $page_no; ?> of <?=$total_records_per_page; ?></strong>
                        </div>
                        
   </div>

   <!--bootstrap-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
</body>
</html>