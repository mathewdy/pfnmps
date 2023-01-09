<?php
ob_start();
session_start();
include('connection.php');
include('security-admin.php');
$_SESSION['user_id'];

// echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="admin-template/css/app.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="src/styles/bootstrap/css/bootstrap.css"> -->
	<!-- <link rel="stylesheet" href="./styles/bootstrap/js/bootstrap.bundle.min.js"> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
					<!--lagyan to ng logo-->
					<img src="logo.jpg" alt="" height="50" style="border-radius: 50px;">
					<span class="align-middle px-3 text-muted">Bucal ES</span>
				</a>
				<ul class="sidebar-nav ">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="home-admin.php">
                            <i class="align-middle text-dark" data-feather="home"></i> <span class="align-middle">Home</span>
                         </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="view-students.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Students</span>
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
		<span class="mt-2">
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

							<a class="nav-link dropdown-toggle no-arrow d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								
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

			<!---Total number of students-->

			<?php

			$sql_total_students = "SELECT id FROM students";
			$query_total_students = mysqli_query($conn,$sql_total_students);

			$row = mysqli_num_rows($query_total_students);
			?>
			<div class="container p-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="card p-3">
						<?= "Total students: " . $row. "";?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card p-3">

					
					<!---total # of new added students--->

					<?php

					//year month date
					date_default_timezone_set("Asia/Manila");
					$time= date("h:i:s", time());
					$date = date('Y-m-d');
					$total_date_time = $date ." ". $time;

					?>
					
					<?php

					$sql_new_students = "SELECT id FROM students WHERE date_created  = '$date'";
					$query_new_students = mysqli_query($conn,$sql_new_students);
					$row1 = mysqli_num_rows($query_new_students);

					echo "New Students: " . $row1 . "";

					?>
					</div>
				</div>
			</div>

			<div class="card">
			<!-----table recent view--->
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Student's Name</th>
						<th>Grade / Level</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>

				<?php


					$query_name_year_status = "SELECT DISTINCT students.first_name , students.middle_name , students.last_name , students.grade, program_records.ended_day
					FROM students 
					LEFT JOIN program_records
					ON students.student_id = program_records.student_id ";
					$run_neme_year_status = mysqli_query($conn,$query_name_year_status);

					if(mysqli_num_rows($run_neme_year_status) > 0){
						$no = 1;
						foreach($run_neme_year_status as $row2){
							?>

							<tr>
								<td><?php echo $no?></td>
								<td><?php echo $row2['first_name'] . " " . $row2['middle_name'] . " " . $row2['last_name']?></td>
								<td>
									<?php echo $row2['grade']?>
								</td>
								<td>
									<?php
									if($total_date_time == $row2['ended_day']){
										echo "<span style='color:green;'>Ended <span>"; //gawin mong green
									}else{
										echo "<span style='color: red;'> On going <span>"; // gawin mong yellow;
									}
									?>
									
								</td>
							</tr>



							<?php
						
					$no++;
						}
					}


				?>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
			</div>
			</div>
			<main class="content">
				<div class="container-fluid p-0">
					<div class="card">

					</div>
				</div>
			</main>
		</div>
	</div>
<!-- Bootstrap js -->
<script src="opacity.js"> </script>
<script src="./styles/bootstrap/@popperjs/core/dist/umd/popper.js"></script>
<script src="./admin-template/js/app.js"></script>

</body>
</html>