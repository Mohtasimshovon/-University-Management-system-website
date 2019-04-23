<?php
    $connection = mysqli_connect('localhost', 'root', '', 'school');
    mysqli_query($connection, "UPDATE adminlogin SET status = 0 WHERE status = 1");
    header("Location:login.php");
?>