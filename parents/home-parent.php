<?php
include('../connection.php');
session_start();
echo $_SESSION['email'];
include('security-parent.php');

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
    
<h1>Parent Dashboard</h1>
<a href="logout-parent.php">Log out</a>
<a href="profile.php">Profile</a>

    <!-----so dito , dapat nakalagy na yung daily task ni student---->
    <h1>Daily Task</h1>



</body>
</html>