<?php
    $dept = $_GET['dept'];
    $connection = mysqli_connect('localhost', 'root', '', 'school');
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel = "stylesheet" href="css/main.css"/>
    <title>AUST</title>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">AUST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Departments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="departments.php?dept=CSE">Computer Science and Engineering</a>
                        <a class="dropdown-item" href="departments.php?dept=EEE">Electrical and Electronics Engineering</a>
                        <a class="dropdown-item" href="departments.php?dept=TE">Textile Engineering</a>
                        <a class="dropdown-item" href="departments.php?dept=IPE">Industrial and Production Engineering</a>
                        <a class="dropdown-item" href="departments.php?dept=MPE">Mechanical and Production Engineering</a>
                        <a class="dropdown-item" href="departments.php?dept=CE">Civil Engineering</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </nav>
    <img src="images/2.jpg" class="img-fluid" alt="Responsive image">
</div>
<div class = "row">
    <div class = "col-md-12">
        <?php
        $queryResult = mysqli_query($connection, "SELECT * FROM faculty WHERE dept = '$dept'");
        ?>
        <h3 class = "text-center"><?php echo $dept; ?></h3>
        <table class="table text-center">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Designation</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            <?php while( $rowResult = mysqli_fetch_assoc($queryResult) ): ?>
                <tr>
                    <td><?php echo $rowResult['name']; ?></td>
                    <td><?php echo $rowResult['email']; ?></td>
                    <td><?php echo $rowResult['designation']; ?></td>
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
