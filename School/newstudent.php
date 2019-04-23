<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">AUST ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="adminpanel.php">Admins<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="student.php">Students Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faculty.php">Faculty Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addnotice.php">Notice Board</a>
            </li>
        </ul>
        <form class = "mb-3" action = "logoutadmin.php">
            <button class="btn btn-primary">Logout</button>
        </form>
    </div>
</nav>
<div class = "container">
    <div class = "row">
        <div class = "col-md-3">

        </div>
        <div class = "col mt-5">
            <h2 class = "text-center">New Student Information</h2>
            <form method="post" action ="addstudent.php" >
                <div class = "form-group mb-2">
                    <label>Name</label>
                    <input id = "name" name = "name" class = "form-control" value = ""placeholder="Enter student's name">
                </div>
                <div class = "form-group mb-2 disabled">
                    <label>Username</label>
                    <input id = "username" name = "username" class = "form-control" value = "" placeholder="Enter an username">
                </div>
                <div class = "form-group mb-2 disabled">
                    <label>Student ID</label>
                    <input id = "studentid" name = "studentid" class = "form-control" value = "" placeholder="Enter Student ID">
                </div>
                <div class = "form-group mb-2">
                    <label>Email</label>
                    <input id = "email" name = "email" class = "form-control" value = ""placeholder="Enter email address">

                </div>
                <div class = "form-group mb-2">
                    <label>New Password</label>
                    <input type = "password" id = "password" name = "password" class = "form-control" value = "" placeholder="Enter password">
                </div>
                <div class = "form-group mb-2">
                    <label>Phone</label>
                    <input id = "phone" name = "phone" class = "form-control" value = ""placeholder="Enter Phone Number">
                </div>
                <div class = "form-group mb-2">
                    <label>Student's Year</label>
                    <input id = "year" name = "year" class = "form-control" value = ""placeholder="Enter Student's year">
                </div>
                <div class = "form-group mb-2">
                    <label>Student's Semester</label>
                    <input id = "semester" name = "semester" class = "form-control" value = ""placeholder="Enter Student's Semester">
                </div>
                <div class = "form-group mb-2">
                    <label>Department</label>
                    <input id = "department" name = "department" class = "form-control" value = ""placeholder="Enter Department Name">
                </div>

                <div class = "form-group float-right">
                    <button type="submit" class = "btn btn-primary"id = "addstudentbtn">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>