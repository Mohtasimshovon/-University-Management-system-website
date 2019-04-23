<?php
$connection = mysqli_connect('localhost', 'root', '', 'school');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['messageArea'];

mysqli_query($connection, "INSERT INTO contactus(name, email, message) VALUES('$name', '$email', '$message')");
header("Location: contactus.php");
?>