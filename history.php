<?php

include('connection.php');
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="admin-template/css/app.css" rel="stylesheet">
	<link rel="./stylesheet" href="./styles/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="home-admin.php">
                <img src="logo.jpg" alt="" height="50" style="border-radius: 50px;">
					<span class="align-middle px-3 text-dark">Bucal ES</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="home-admin.php">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                         </a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="view-students.php">
                            <i class="align-middle text-dark" data-feather="user"></i> <span class="align-middle">Students</span>
                        </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="add-patient.php">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Patient</span>
                        </a>
					</li>
				
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
        <span class="d-flex align-items-center">
			<h4 class="fw-bold">
				Bucal Elementary School Nutritional Profiling System
			</h4>
		</span>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                <span class="text-dark">ADMIN</span>
                            </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="admin-profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout-admin.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">

                <div class="row">
                    <div class="col-lg-12">

                   
                        <div class="card p-5">
                         
                        <h2>History of Records</h2>
                            <?php


                            if(isset($_GET['student_id'])){
                                $student_id = $_GET['student_id'];


                                
                                $query_bmi = "SELECT bmi , date_created FROM history WHERE student_id = '$student_id'";
                                $run_bmi = mysqli_query($conn,$query_bmi);

                                if(mysqli_num_rows($run_bmi) > 0){
                                    foreach($run_bmi as $row1){
                                        ?>
                                            <p>Previous BMI: <?php echo $row1['bmi']?></p>  
                                            <p>Date: <?php $date = date("M-d-Y", strtotime($row1['date_created'])); 
                                            echo $date;?></p>


                                        <?php
                                    }
                                }



                                $sql = "SELECT program_records.student_id , program_records.date_started, program_records.foods, program_records.exercises, program_records.day, program_records.ended_day , program_records.food_acknowledge , program_records.exercise_acknowledge
                                FROM program_records WHERE program_records.student_id = '$student_id'";
                                $run = mysqli_query($conn,$sql);

                                if(mysqli_num_rows($run) > 0){
                                    ?>
                                    <?php

                                    foreach($run as $row){
                                        ?>
                                        <label for="">Date Started</label>
                                        <p><?php echo $row['date_started']?></p>
                                        <label for="">Day</label>
                                        <p><?php echo $row ['day']?></p>
                                        <label for="">Daily Meals</label>
                                        <p><?php echo $row['foods']?></p>

                                        <label for="">Status</label>
                                        <p>
                                            <?php 
                                            //kulay green kapag na acknowledge
                                            // red kapag hindi

                                            if($row['food_acknowledge'] == '1'){
                                                echo "Acknowledged";
                                            }else{
                                                echo "Unfinished";
                                            }

                                            ?>
                                            
                                        </p>


                                        <label for="">Daily Activities</label>
                                        <p><?php echo $row['exercises']?></p>
                                        <label for="">Status</label>
                                        <p>
                                            <?php if($row ['exercise_acknowledge']== '1'){
                                                echo "Acknowledged";
                                            }else{
                                                echo "Unfinished";
                                            }
                                            
                                            ?>
                                        </p>

                                        <?php
                                    }
                                }



                            }


                            ?>

                            
                        </div>
                    </div>
                </div>

                <!---eto yung sa excercises nya haha-->
                
			</main>
		</div>
	</div>
<script src="./admin-template/js/app.js"></script>
<script src="./styles/bootstrap/js/bootstrap.js"></script>

</body>
</html>

<?php

ob_end_flush();

?>