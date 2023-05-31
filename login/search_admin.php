
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
    

   <title>BCAS-ADMIN</title>

</head>


<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
            <ul>
                <li> <a href="admin.php" style="color:white"> <img src="../images/dashboard (2).png"> &nbsp; Dashboard</li> </a>
                <li> <a href="manage_student.php" style="color:white"> <img src="../images/reading-book (1).png">&nbsp; Students</li></a>
                <li> <a href="#" style="color:white"> <img src="../images/teacher2.png"> &nbsp; Teachers</li> </a>
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
                    <h1> Admin List</h1>

                </div>
                <i class="fa fa-user float-end" href=""> </i>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
   
        <div>
   <div class="container">
            <div class="row"> 
                <div class="col md-7">

                        <form action="" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Type a Name Here...">
                                <button type=" submit" class="btn btn-primary"> Search</button>               
                                 <a href="registeradmin.php" class="btn btn-danger"> Cancel </a> 


                            </div>
                        </form>
                    
                    
                    
                </div>
                
             </div>

                            <div class=" col-md-12">
                                <div class="card mt-4">
                                    <div class=" card-body">
                                        <table class="table table-bordered"> 
                                            <thead> 
                                                <tr>
                                                <th >ID</th>
                                                <th >First Name</th>
                                                <th >Last Name</th>
                                                <th >Email</th>
                                
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    $con = mysqli_connect("localhost", "root", "", "student_info");

                                                    if(isset($_GET['search']))
                                                    {
                                                        $filtervalues = $_GET['search'];
                                                        $query = "SELECT * FROM admin WHERE CONCAT(ID, first_name, last_name, username) LIKE '%$filtervalues%'";
                                                        $query_run = mysqli_query($con, $query);

                                                                if(mysqli_num_rows($query_run) >0)
                                                                {
                                                                    foreach($query_run as $items)
                                                                    {
                                                                        ?>
                                                                        <tr>
                                                                            <td> <?=$items['ID'];?> </td>
                                                                            <td> <?=$items['first_name'];?> </td>
                                                                            <td> <?=$items['last_name'];?> </td>
                                                                            <td> <?=$items['username'];?> </td>
                                                                        
                                                                        </tr>
                                                                        <?php
                                                                    }
                                                                
                                                                }
                                                                    else
                                                                     {
                                                                        ?>
                                                                            <tr>
                                                                                <td colspan="4"> NO RECORD FOUND </td>
                                                                            </tr>

                                                                        <?php
                                                            
                                                                     }
                                                    }
                                                ?>
                                            </tbody>

                                    </div>
                                    
                                </div>

                            </div>
    </div>
</div>  


   <!--bootstrap-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  

</body>
</html>