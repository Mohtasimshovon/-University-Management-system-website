<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>AUST</title>
</head>
<body>

<div>
    <div>
        <div>
            <?php include "header.php"; ?>
            <img src="images/2.jpg" class="img-fluid" alt="Responsive image">
        </div>

        <div class = "container mt-5">
            <div class = "row">
                <div class = "col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="images/tm3.jpg">
                                    <img src="images/tm3.jpg" alt="Lights" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <a href="images/tm3.jpg">
                                    <img src="images/tm3.jpg" alt="Lights" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="images/tm1.jpg">
                                    <img src="images/tm1.jpg" alt="Nature" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <a href="images/tm1.jpg">
                                    <img src="images/tm1.jpg" alt="Nature" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="images/tm2.jpg">
                                    <img src="images/tm2.jpg" alt="Fjords" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <a href="images/tm2.jpg">
                                    <img src="images/tm2.jpg" alt="Fjords" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-md-4">
                    <h3 class = "text-center">Notice Board</h3>
                    <ul class = "list-group">
                        <?php
                            $connection = mysqli_connect('localhost', 'root', '', 'school');
                            $result = mysqli_query($connection, "SELECT * FROM notice");
                            while( $rowNotice = mysqli_fetch_assoc($result) ) :
                        ?>
                        <ul class = "list-group-item"><?php echo $rowNotice['notice']; ?></ul>
                        <?php endwhile; ?>
                    </ul>
                    <div class = "mt-4 text-center">
                    <h3 class = "text-center">Login</h3>
                    <a href = "adminlogin.php" class = "btn btn-outline-primary mb-2">Admin</a>
                    <a href = "facultylogin.php" class = "btn btn-outline-primary mb-2">Teacher</a>
                    <a href = "studentlogin.php" class = "btn btn-outline-primary mb-2">Student</a>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div class="footer-copyright text-center py-3 bg-dark text-white">
                <p>&copy; 2018 AUST CSE || All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>