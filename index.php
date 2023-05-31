<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
            <ul>
                <li> <a href="#" style="color:white"> <img src="images/dashboard (2).png"> &nbsp; Dashboard</li> </a>
                <li> <a href="manage_student.php" style="color:white"> <img src="images/reading-book (1).png">&nbsp; Students</li></a>
                <li> <a href="#" style="color:white"> <img src="images/teacher2.png"> &nbsp; Teachers</li> </a>
                <li> <a href="#" style="color:white"> <img src="images/school.png"> &nbsp; Courses</li> </a>
                <li> <a href="#" style="color:white"> <img src="images/help-web-button.png"> &nbsp; Help</li> </a>
                <li> <a href="#" style="color:white"> <img src="images/settings.png"> &nbsp; Settings</li> </a>
            </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit" class="btn btn-danger"><img src="images/search.png"> </button>
                </div>
                <i class="fa fa-user" href=""> </i>
            </div>
        </div>
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