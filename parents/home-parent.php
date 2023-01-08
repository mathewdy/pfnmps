<?php
include('../connection.php');
session_start();
include('security-parent.php');
$email = $_SESSION['email'];

$student_id = $_SESSION['student_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../admin-template/css/app.css"> -->
    <link rel="stylesheet" href="../src/styles/custom/stickynav.css">
    <!-- <link rel="stylesheet" href="../src/styles/custom/sidenav.css"> -->
    <title>Document</title>
</head>
<body>

 
<div class="outer-container d-flex flex-row">

<!-- Sidebar -->
  <div class="sticky-nav bg-white vh-100 shadow">
    <a href="#" class="brand p-3 link-dark text-decoration-none bg-white text-center" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
        <img src="../logo.jpg" alt="" class="card-img-top" style="border-radius: 50px;">
    </a>
    <ul class="list nav nav-flush mb-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link active py-3 d-flex flex-column align-items-center text-start border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Home</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="dashboard-parent.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="profile-parent.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Settings</p>
        </a>
      </li>
    </ul>
  </div>

  <!-- Content container -->
<main class="main-container container-fluid-lg bg-light" style="width: 100%; position: relative;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-0" style="box-shadow: none;">
        <div class="container-fluid justify-content-end">
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $email; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser3">
                    <li><a class="dropdown-item" href="logout-parent.php    ">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content starts here -->
    <main class="content">
        <div class="container-fluid" style="height: 100%;">
            <div class="row mb-5 gy-3" style="height: 70vh;">
                <div class="col-lg-4">
                    <div class="card" style="border: none; height: 100%; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17);">
                        <div class="card-body">
                            <div class="p-2 pb-0 d-flex flex-column align-items-start">
                                <span class="d-flex flex-row align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                    </svg>
                                    <h1 class="h4 bold" style="padding: 0 0 0 3px;">Daily Task</h1> 
                                </span>
                            </div>    
                            <hr class="featurette-divider">
                            <!-----so dito , dapat nakalagy na yung daily task ni student---->
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class='bx bx-info-circle bx-sm' style='color:crimson'></i>
                                <p>Note: Must do every other day.</p>
                            </div>

                           <?php




                            $sql_daily_activities = "SELECT exercises,exercise_acknowledge, id FROM program_records WHERE student_id = '$student_id' LIMIT 10";
                            $run_daily_activities = mysqli_query($conn,$sql_daily_activities);

                            if(mysqli_num_rows($run_daily_activities) > 0){
                                foreach ($run_daily_activities as $row2){
                                    ?>

                                        
                                     
                                        <label for="">Acitivies:</label>
                                        <p><?php echo $row2['exercises'] ?></p>
                                        <label for="">Duration:</label>
                                        <p>30 min.</p>
                                        <form action="acknowledge.php" method="POST">
                                            

                                        <?php

                                            if($row2['exercise_acknowledge'] == 0){
                                                ?>

                                                <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                                                <input type="hidden" name="id" value="<?php echo $row2['id']?>">
                                                <input type="hidden" name="daily_task" value="1">
                                                <input type="submit" name="acknowledge_task" value="Acknowledge">
                                        

                                                <?php
                                            }else{
                                                echo "<div style='color:green;'>Acknowledged </div>";
                                            }

                                        ?>
                                        
                                        </form>
                                        
                                    <?php
                                }
                            }

                            ?>

                        </div>   
                    </div>     
                </div>
                <div class="col-lg-8">
                    <div class="card" style="border: none; height: 100%; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17);">
                        <div class="card-body">
                            <div class="p-2 pb-0 d-flex flex-column align-items-start">
                                <span class="d-flex flex-row align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="Purple" class="bi bi-clipboard-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                    <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm4 5.982c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                    </svg>
                                    <h1 class="h4 bold" style="padding: 0 0 0 3px;">Daily Meal</h1> 
                                </span>
                            </div>    
                            <hr class="featurette-divider">
                            <!-----so dito , dapat nakalagy na yung daily task ni student---->
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <p>Note: Must do every day.</p>
                                <i class='bx bx-info-circle bx-sm' style='color:crimson'></i>
                            </div>

                            <?php


                                $sql_program_records_date = "SELECT date_started FROM program_records WHERE student_id = '$student_id' LIMIT 1";
                                $run_program_records_date = mysqli_query($conn,$sql_program_records_date);

                                if(mysqli_num_rows($run_program_records_date) > 0){
                                    foreach($run_program_records_date as $row){
                                        ?>


                                            <label for="">Date Started:</label>
                                            <p>
                                                <?php $new_format = date("Y-M-d", strtotime($row['date_started']))?>
                                                <?php echo $new_format?>
                                            </p>

                                        <?php
                                    }
                                }


                                ?>

                                <?php

                                $sql_program_records = "SELECT * FROM program_records WHERE student_id = '$student_id'";
                                $run_program_records = mysqli_query($conn,$sql_program_records);

                                if(mysqli_num_rows($run_program_records) > 0){
                                    foreach($run_program_records as $row1){
                                        ?>


                                            <label for="">Day: </label>
                                            <p><?php echo $row1['day']?></p>
                                            <label for="">Foods:</label>
                                            <p><?php echo $row1['foods']?></p>
                                            <form action="acknowledge.php" method="POST">
                                            <p>
                                                <?php

                                                    if($row1['food_acknowledge'] == 0){
                                                        ?>      
                                                            <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                                                            <input type="hidden" name="id" value="<?php echo $row1['id']?>">
                                                            <input type="hidden" name="daily_meal" value="1">
                                                            <input type="submit" name="acknowledge_meal" value="Acknowledge">
                                                        <?php
                                                    }else{
                                                        echo "<div style='color: green;'>Acknowledged </div> ";
                                                    }
                                            
                                                ?>
                                            </p>
                                            </form>

                                        <?php
                                    }
                                }

                            ?>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer bg-white p-2 w-100">
        <p class="text-center text-muted">PFNMPS@2022</p>
    </footer>
</main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="../src/styles/custom/sidenav.js"></script> -->
<script src="../admin-template/js/app.js"></script>
</body>
</html>