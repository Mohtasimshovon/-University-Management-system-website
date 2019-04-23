<?php
    $connection = mysqli_connect('localhost', 'root', '', 'school');
    $username = $_POST['username'];
    $studentid = $_POST['studentid'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $department = $_POST['dept'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    mysqli_query($connection,
        "INSERT INTO student(name, email, username, dept, studentid, phone)
                VALUES('$name', '$email', '$username', '$department', '$studentid', '$phone')");
    mysqli_query($connection, "INSERT INTO studentlogin(username, password, status) 
                VALUES('$username', '$password', 0)");
    header("Location:student.php");
?>