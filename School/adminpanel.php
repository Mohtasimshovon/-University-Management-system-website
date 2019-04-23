<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>AUST</title>
</head>
<body>
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'school');
    $result = mysqli_query($connection, "SELECT * from adminlogin WHERE status = 1");
    if ( !$result ) {
        header("Location: login.php");
    }
?>
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
</body>
</html>