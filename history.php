<?php

include('connection.php');
session_start();
ob_start();
$student_id = $_GET['student_id'];

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

					<li class="sidebar-item ">
						<a class="sidebar-link" href="view-students.php">
                            <i class="align-middle " data-feather="user"></i> <span class="align-middle">Students</span>
                        </a>
					</li>


					<li class="sidebar-item active">
						<a class="sidebar-link" href="view-history.php">
                            <i class="align-middle text-dark" data-feather="book-open"></i> <span class="align-middle">History</span>
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

                   
                        <div class="card p-5 pt-0">
                            
                         <span class="d-flex flex-row justify-content-between align-items-center mt-4">
                            <span>
                                <a href="view-students.php" class="btn btn-md btn-danger"><i class="align-middle" data-feather="corner-down-left"></i> Go Back</a>
                            </span>
                            <span><a class="btn btn-md btn-primary" href="student-history.php?student_id=<?= $student_id; ?>"><i class="align-middle" data-feather="download"></i> Download PDF</a></span>
                         </span>
                         <h2 class="mt-4">History of Records</h2>


                        <?php

                       

                        ?>
                            <?php


                            if(isset($_GET['student_id'])){
                                $student_id = $_GET['student_id'];

                                $query_bmi = "SELECT bmi , date_created FROM history WHERE student_id = '$student_id'";
                                $run_bmi = mysqli_query($conn,$query_bmi);

                                if(mysqli_num_rows($run_bmi) > 0){
                                    foreach($run_bmi as $row1){
                                        ?>
                                            <p class="m-0 p-0">Previous BMI: <strong><?php echo $row1['bmi']?></strong></p>
                                            <p class="m-0 p-0">Date Started: <?php $date = date("F d, Y", strtotime($row1['date_created'])); 
                                            echo $date;?></p>

                                           

                                        <?php
                                    }
                                }

                                $query_end_day = "SELECT DISTINCT ended_day FROM program_records WHERE student_id = '$student_id'";
                                $run_end_day = mysqli_query($conn,$query_end_day);
                                
                                if(mysqli_num_rows($run_end_day) > 0){
                                    foreach($run_end_day as $row_end){
                                        ?>

                                            <p class="m-0 p-0">Date Ended: <?php $date = date("F d, Y", strtotime($row_end['ended_day'])); 
                                            echo $date;?></p>


                                        <?php
                                    }
                                }

                                

                                
                                



                                $sql = "SELECT program_records.student_id , program_records.date_started, program_records.foods, program_records.exercises, program_records.day, program_records.ended_day , program_records.food_acknowledge , program_records.exercise_acknowledge
                                FROM program_records WHERE program_records.student_id = '$student_id'";
                                $run = mysqli_query($conn,$sql);

                                if(mysqli_num_rows($run) > 0){
                                    ?>
                                    <div class="row">

                                        <hr class="mt-4">
                                    <?php

                                    foreach($run as $row){
                                        ?>
                                        
                                        <div class="col-lg-3">
                                        <div class="card border border-light rounded-0 shadow p-4" style="width: 15rem; min-height: 16rem;">

                                        <!-- <label for="">Date Started</label>
                                        <p><?php echo $row['date_started']?></p> -->
                                        <p class="m-0 p-0" style="font-size:18px;">Day <?php echo $row ['day']?></p>
                                        <hr class="featurette-divider">
                                        <span class="d-flex flex-row justify-content-between align-items-center">
                                        <p class="m-0 p-0"  style="font-size:16.7px;">Meals</p>
                                        <?php 
                                            //kulay green kapag na acknowledge
                                            // red kapag hindi

                                            if($row['food_acknowledge'] == '1'){
                                                echo "<span class='badge bg-success'>Done</span>";
                                            }else{
                                                echo "<span class='badge bg-danger'>Unfinished</span>";
                                            }

                                            ?>
                                        </span>
                                        <p class="m-0 p-0"><?php echo $row['foods']?></p>
                                        <!-- <p class="m-0 p-0" style="font-size: 18px;">Status</p> -->
                                        <p>
                                           
                                        </p>
                                          
                                        <span class="d-flex justify-content-between align-items-center">
                                            <p class="m-0 p-0" style="font-size:16.7px;">Activities</p>

                                            <?php if($row ['exercise_acknowledge']== '1'){
                                                echo "<span class='badge bg-success'>Done</span>";
                                            }else{
                                                echo "<span class='badge bg-danger'>Unfinished</span>";
                                            }
                                            
                                            ?>
                                        </span>
                                        <p class="m-0 p-0"> <?php echo $row['exercises']?></p>

                                        <!-- <p class="m-0 p-0" style="font-size: 18px;">Status</p> -->
                                        <p class="m-0 p-0">
                                            
                                        </p>
                                        
                                        </div>
                                        </div>

                                        <?php
                                    }
                                }


                                ?>
                                <?php
                                $query_remarks = "SELECT exercise_acknowledge FROM program_records WHERE program_records.student_id ='$student_id' AND program_records.exercise_acknowledge = '1'";
                                $run_remarks = mysqli_query($conn,$query_remarks);
                                $row_remarks = mysqli_num_rows($run_remarks);
                                ?>
                                <span class="d-flex justify-content-between align-items-center">
                                <?php
                                echo "<span class='h4' style='color:blue;'>Completed Exercises:" . ' ' . $row_remarks . '<br> </span>';
                                
                                if($row_remarks == 10 || $row_remarks >= 10){
                                    echo "<span class='badge bg-success'>Completed" . "<br></span>";
                                }else{
                                    echo "<span class='badge bg-danger'>Incomplete" . "<br> </span>";
                                }
                                ?>
                                </span>
                                <?php
                                $query_remarks_food = "SELECT food_acknowledge FROM program_records WHERE program_records.student_id ='$student_id' AND program_records.food_acknowledge = '1'";
                                $run_remarks_food = mysqli_query($conn,$query_remarks_food);
                                $row_remarks_food = mysqli_num_rows($run_remarks_food);
                                ?>
                                <span class="d-flex w-100 flex-row justify-content-between align-items-center">
                                <?php
                                echo "<span class='h4' style='color:blue;'>Completed Meals:" . ' ' . $row_remarks_food . "<br></span>";

                                if($row_remarks_food == 30){
                                    echo "<span class='badge bg-success'>Completed" . "<br></span>";
                                }else{
                                    echo "<span class='badge bg-danger'>Incomplete" . "<br> </span>";
                                }
                                ?>
                                </span>
                               
                                <span class="text-end">
                                <hr>
                                <?php
                                 if($row_remarks >= 8 && $row_remarks_food == 30){
                                    echo "<span class='px-2' style='color: green;'> Success" . "<br> </span>";
                                }else{
                                    echo "<span class='px-3' style='color: red;'>Failed ". "<br> </span>";
                                }
                                ?>
                                </span>
                                <?php
                            }


                            ?>
                                    </div>
                            
                        </div>
                    </div>
                </div>

                <!---eto yung sa excercises nya haha-->
                
			</main>
            <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>@PFNMPS</strong></a> 
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<small>Copyright &copy; 2023</small>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
<script src="./admin-template/js/app.js"></script>
<script src="./styles/bootstrap/js/bootstrap.js"></script>

</body>
</html>

<?php

ob_end_flush();

?>