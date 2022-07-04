<?php
ob_start();
session_start();
include('connection.php');
include('security-admin.php');
echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Home Page Admin</h2>
    <a href="logout-admin.php">Logout</a>
    <a href="">Home</a>
    <a href="view-students.php">Students</a>
    <a href="">Nutritionists</a>
    <a href="add-patient.php">Add Patient</a>

</body>
</html>