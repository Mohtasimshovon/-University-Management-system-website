<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <title>AUST</title>
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
<div class = "row">
    <div class = "col-md-2">

    </div>
    <div class = "col-md-10">
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'school');
        $queryResult = mysqli_query($connection, "SELECT * FROM student");
        ?>
        <table class="table text-center">
            <thead>
            <tr>
                <th>Name</th>
                <th>Student ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Department</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            <?php while( $rowResult = mysqli_fetch_assoc($queryResult) ): ?>
                <tr>
                    <td><?php echo $rowResult['name']; ?></td>
                    <td><?php echo $rowResult['studentid']; ?></td>
                    <td><?php echo $rowResult['username']; ?></td>
                    <td><?php echo $rowResult['email']; ?></td>
                    <td><?php echo $rowResult['dept']; ?></td>
                    <td><?php echo $rowResult['phone'] ?></td>
                </tr>

            <?php  endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>