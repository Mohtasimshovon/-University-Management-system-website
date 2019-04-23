<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css" />
    <title>AUST</title>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="adminpanel.php">AUST ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="">
                    <a class="nav-link" href="adminpanel.php">Admins<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student.php">Students Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Faculty Account</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-primary my-2 my-sm-0" name = "logout" id = "logout" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <img src="images/2.jpg" class="img-fluid" alt="Responsive image">
    <div class = "container text-center mt-5">
        <div class = "row">
            <div class = "col">
                <h2 class = "text-dark">AUST FACULTY DATABASE</h2>
                <button class = "btn btn-outline-warning">Existing Faculty</button>
                <button class = "btn btn-outline-warning">New Faculty</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>