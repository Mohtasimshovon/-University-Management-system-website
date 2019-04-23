<?php
    $Error = "";
    $username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = mysqli_connect('localhost', 'root', '', 'school');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($connection, "SELECT * from adminlogin WHERE username = '$username'");
    if (!$result) {
        $Error = "username/password do not exist!";
    } else {
        $row = mysqli_fetch_assoc($result);
        $pass = $row['password'];
        if ($pass != $password) {
            $Error = "username/password do not exist!";
        } else {
            mysqli_query($connection, "UPDATE adminlogin SET status = 1 WHERE username = '$username'");
            header("Location: adminpanel.php");
        }
    }
}

?>