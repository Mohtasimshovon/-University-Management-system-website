<?php
    $connection = mysqli_connect('localhost', 'root', '', 'school');
    $notice = $_POST['notice'];
    mysqli_query($connection, "INSERT INTO notice(notice) VALUES('$notice')");
    header("Location:adminpanel.php");
?>