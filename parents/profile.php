<?php
include('../connection.php');
session_start();
include('security-parent.php');
ob_start();

$email = $_SESSION['email'];

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
<main class="main-container container-fluid-lg" style="width: 100%;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #3F4E4F;">
        <div class="container-fluid">
            <a class="navbar-brand" class="text-dark" style="cursor:pointer;" id="sidenavCollapse">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-list" viewBox="4 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
        </a>
        </div>
    </nav>
    <main class="content">
        <div class="container-fluid p-5 bg-white">

            <?php

            $query = "SELECT users.first_name AS 'users_first_name', users.middle_name AS 'users_middle_name', users.last_name AS 'users_last_name' , users.room AS 'users_room', users.house AS 'users_house', users.street AS 'users_street' , users.subdivision AS 'users_subdivision' , users.barangay AS 'users_barangay', users.city AS 'users_city', users.zip AS 'users_zip', users.image AS 'users_image', students.first_name AS 'students_first_name', students.middle_name  AS 'students_middle_name', students.last_name  AS 'students_last_name', students.date_of_birth AS 'students_date_of_birth', students.gender AS 'students_gender', students.student_id
            AS 'students_student_id' FROM users 
            LEFT JOIN students ON  users.student_id = students.student_id WHERE email = '$email'";
            $run = mysqli_query($conn,$query);

            if(mysqli_num_rows($run) > 0){
            foreach ($run as $row) {
                ?>

                    <!-----hindi pa tapos yung profile---->

                    <label for="">Name:</label>
                    <p><?php echo $row ['users_first_name'] . " " . $row ['users_middle_name'] . " "  . $row ['users_last_name']  ?></p>
                    <br>

                    <label for="">Address:</label>
                    <label for="">Room / Floor / Unit No. & Building Name</label>
                    <p><?php echo $row ['users_room'] ?></p>
                    <br>

                    <label for="">House / Lot & Block No.</label>
                    <p><?php echo $row ['users_house']?></p>
                    <br>

                    <label for="">Street</label>
                    <p><?php echo $row ['users_street']?></p>
                    <br>

                    <label for="">Subdivision</label>
                    <p><?php echo $row ['users_subdivision']?></p>
                    <br>

                    <label for="">Barangay </label>
                    <p><?php echo $row ['users_barangay']?></p>
                    <br>

                    <label for="">City/Municipality </label>
                    <p><?php echo $row ['users_city']?></p>
                    <br>

                    <label for="">Zip</label>
                    <p><?php echo $row ['users_zip']?></p>

                <?php
            }
            }

            ?>    
                         
        </div>
    </main>
    <div class="footer">
        
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../styles/custom/sidenav.js"></script>
</body>
</html>


<?php

ob_end_flush();

?>