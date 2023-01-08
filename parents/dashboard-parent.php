<?php
include('../connection.php');
session_start();
include('security-parent.php');
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
        <!---logo-->
        <img src="../logo.jpg" alt="" class="card-img-top" style="border-radius: 50px;">
    </a>
    <ul class="list nav nav-flush mb-auto text-center">
      <li class="nav-item">
        <a href="home-parent.php" class="nav-link active py-3 d-flex flex-column align-items-center text-start border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Home</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
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
<main class="main-container container-fluid-lg bg-light" style="width: 100%; position: relative">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-0" style="box-shadow: none;">
        <div class="container-fluid justify-content-end">
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['email']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser3">
                    <li><a class="dropdown-item" href="logout-parent.php    ">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content starts here -->
    <main class="content pb-5 pt-3">
        <div class="container-fluid" style="height: 100%;">
            <div class="row">
                <!-- <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Section</th>
                        <th>Status</th>
                    </tr>
                    
                </thead> -->
            <div class="col-lg-5">
                <div class="card shadow p-5" style="border-radius: 0; border: none;">
            <!----ikaw na bahala dito--->
            <?php

                date_default_timezone_set("Asia/Manila");
                $time= date("h:i:s", time());
                $date = date('y-m-d');
                $total_date_time = $date ." ". $time;
        
                $query_name_year_status = "SELECT DISTINCT students.first_name, students.image , students.middle_name , students.last_name , students.grade, students.section , program_records.ended_day
                FROM students 
                LEFT JOIN program_records
                ON students.student_id = program_records.student_id WHERE students.student_id = '$student_id' ";
                $run_neme_year_status = mysqli_query($conn,$query_name_year_status);

                if(mysqli_num_rows($run_neme_year_status) > 0){
                    $no = 1;
                    foreach($run_neme_year_status as $row2){
                        ?>
                            <!-- <?php echo $no ?>  -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <img class="card-img-top" src="<?php echo "student_image/" . $row2['image'] ?>" height="450" width="450" alt="Student IMG">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <p class="text-muted p-0 m-0">Name</p>
                                    <?php echo $row2['first_name'] . " " . $row2['middle_name'] . " " . $row2['last_name']?>        
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <p class="text-muted p-0 m-0">Grade</p>
                                    <?php echo $row2['grade']?>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <p class="text-muted p-0 m-0">Section</p>
                                    <?php echo $row2['section']?>
                                </div>
                                
                            </div>
                        <?php
                    
                $no++;
                    }
                }

                    ?>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow p-5" style="border-radius: 0; border: none">
                        <!-- date dito -->
                        <?php

                        $query_date_started = "SELECT DISTINCT date_started , ended_day FROM program_records WHERE student_id = '$student_id'";
                        $run_date_started = mysqli_query($conn,$query_date_started);

                        if(mysqli_num_rows($run_date_started) > 0){
                            foreach($run_date_started as $row3){
                                ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="text-muted p-0 m-0">Date Started</p>
                                        <p class="p-0 m-0"><?php echo $row3['date_started']?></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-muted p-0 m-0">End Date</p>
                                        <p class="p-0 m-0"><?php echo $row3['ended_day']?></p>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <p class="text-muted p-0 m-0">Status</p>
                                        <?php
                                            if($total_date_time == $row3['ended_day']){
                                            echo "<p class='text-success'> Ended</p>"; //gawin mong green
                                            }else{
                                                echo "<p class='text-warning'> On going</p>"; // gawin mong yellow;
                                            }
                                        ?>

                                    </div>
                                </div>                                    
                                <?php
                            }
                        }else{
                            echo "no records" . $conn->error;
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer bg-white p-2 pt-5 w-100">
        <p class="text-center text-muted">PFNMPS@2022</p>
    </footer>
</main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="../src/styles/custom/sidenav.js"></script> -->
<script src="../admin-template/js/app.js"></script>
</body>
</html>