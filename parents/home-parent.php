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
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="../styles/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../styles/custom/sidenav.css">
    <title>Document</title>
</head>
<body>
<div class="d-flex flex-column flex-shrink-0 sidenav" id="sidenav" style="width: 260px;">
    <div class="navbar-brand pt-2" style="padding: 1.5em 0 0 4.2em;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
            <i class='bx bxs-baguette bx-md' type="logo" style='color:#e4e6eb' ></i>
            <span class="fs-4">Logo</span>
        </a>
    </div>
    
    <hr class="featurette-divider text-white">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="home-parent.php" class="nav-link">
            <i class='bx bxs-home icon' style='color:#FFFBE7;' ></i>
            Home
        </a>
      </li>
      <li class="nav-item">
        <a href="profile.php" class="nav-link">
        <i class='bx bxs-face icon' style='color:#FFFBE7;'></i>
          Profile
        </a>
      </li>
    </ul>
    <hr class="featurette-divider text-white">
    <div class="sidenav-footer">
        <a href="logout-parent.php" style="padding: 0 0 .3em 3.3em;">
            <i class='bx bx-log-out-circle icon' style='color:#FFFBE7'  ></i>
            Sign Out
        </a>
    </div>
  </div>
<main class="main-container container-fluid-lg bg-light" style="width: 100%;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" class="text-dark" style="cursor:pointer;" id="sidenavCollapse">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-list" viewBox="4 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
        </a>
        </div>
    </nav>
    <main class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card" style="border: none; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17);">
                        <div class="card-body">
                            <div class="p-2 pb-0 d-flex flex-column align-items-start">
                                <span class="d-flex flex-row align-middle">
                                    <i class='bx bx-task bx-md' style='color:#000f38'  ></i>
                                    <h1 class="h4 bold" style="padding: 0 0 0 3px;">Daily Task</h1> 
                                </span>
                            </div>    
                            <hr class="featurette-divider">
                            <!-----so dito , dapat nakalagy na yung daily task ni student---->
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class='bx bx-info-circle bx-sm' style='color:crimson'></i>
                                No tasks available.
                            </div>
                        </div>   
                    </div>     
                </div>
                <div class="col-lg-8 mt-4">
                    <div class="card" style="border: none; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17); height: 18rem;">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="footer">
        
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../styles/custom/sidenav.js"></script>
</body>
</html>