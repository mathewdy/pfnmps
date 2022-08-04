<?php
include('../connection.php');
session_start();
include('security-parent.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../styles/custom/custom-layout.style.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="../styles/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body style="font-family: var(--poppins);">
    <div class="container-fluid-lg">
        <nav class="sidebar nav">
            <a  href="Home.php">Home</a></span>
            <a  href="Dashboard.php">Dashboard</a>
            <a class="active" href="#">Settings</a>
        </nav>
        <div class="content">
            <nav class="navbar topnav bg-white">
                <div class="container-fluid p-0 justify-content-end">
                    <a class="navbar-brand" href="#">
                        <img src="" alt="...    ">
                    </a>
                </div>
            </nav>
            <div class="container-fluid-sm p-lg-5">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Account Settings</a>
                        <a class="nav-link" href="logout-parent.php">Sign out</a>
                    </li>
                   
                </ul>
            </div>
           
        </div>
    </div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../styles/custom/sidenav.js"></script> -->
</body>
</html>