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
    <div class="container-fluid-xl">
        <nav class="sidebar nav">
            <a class="active" href="#">Home</a></span>
            <a href="Dashboard.php">Dashboard</a>
            <a href="Settings.php">Settings</a>
        </nav>

        <div class="content">
            <nav class="navbar topnav bg-white">
                <div class="container-fluid p-0 justify-content-end">
                    <a class="navbar-brand" href="#">
                        <img src="" alt="...    ">
                    </a>
                </div>
            </nav>
            <div class="container-fluid p-sm-5">
                <h2 class="h1">Daily Meal Plan</h2>
                <div class="row g-5">
                    
                    <div class="col-lg-12">
                        <div class="card bg-green" style="min-height: 7rem; background: var(--success);">
                            <h3 class="h4">Breakfast</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card bg-red" style="min-height: 7rem; background: var(--warning);">
                            <h3 class="h4">Brunch</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card" style="min-height: 7rem; background: var(--danger);">
                            <h3 class="h4">Elevenses</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card" style="min-height: 7rem; background: var(--pink);">
                            <h3 class="h4">Lunch</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card" style="min-height: 7rem; background: var(--purple);">
                            <h3 class="h4">Supper</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card" style="min-height: 7rem; background: var(--success);">
                            <h3 class="h4">Dinner</h3>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../styles/custom/sidenav.js"></script> -->
</body>
</html>