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
        </div>

        <div class = "mb-5">
            <div class ="row">
                <div class = "col-md-4">

                </div>
                <div class = "col-md-6 pl-2 mt-5">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col-md-9">
                                <h4>Contact Us</h4>
                                <form action = "contact2.php" method = "POST">
                                    <div class = "form-group mb-2">
                                        <label>Name</label>
                                        <input id = "name" name = "name" class = "form-control" placeholder="Enter your name">
                                    </div>
                                    <div class = "form-group mb-2">
                                        <label>Email</label>
                                        <input id = "email" name = "email" class = "form-control"placeholder="Enter your Email">
                                    </div>
                                    <div class = "form-group mb-2">
                                        <label>Message</label>
                                        <textarea class="form-control rounded-0" id="messageArea" name = "messageArea" rows="10"></textarea>
                                    </div>
                                    <button class = "btn btn btn-outline-primary">Leave a Message</button>
                                </form>
                            </div>
                        </div>
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