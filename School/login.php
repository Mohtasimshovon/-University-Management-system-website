<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <title>Login</title>
</head>
<body>
    <div class = "container mt-5 text-center">
        <div class = "row">
            <div class = 'col'>
                <h2 class = "mb-5">Login</h2>
                <form class="mb-3" action = "adminlogin.php">
                    <button class = "btn btn-outline-success ml-2">Admin</button>
                </form>
                <form class="mb-3" action = "facultylogin.php">
                    <button class = "btn btn-outline-warning ml-2">Faculty</button>
                </form>
                <form class="mb-3" action = "studentlogin.php">
                    <button class = "btn btn-outline-primary ml-2">Student</button>
                </form>



            </div>
        </div>
    </div>
</body>
</html>