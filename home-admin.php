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
						<a class="sidebar-link" href="view-history.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">History</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="bmi-records.php">
                            <i class="align-middle" data-feather="heart"></i> <span class="align-middle">BMI of Students</span>
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
			Personalized Food and Nutritional  Metabolic  Profiling System
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

			<?php

			$query_lrn = "SELECT student_id FROM users";
			$run_lrn = mysqli_query($conn,$query_lrn);
			$row_1 = mysqli_fetch_assoc($run_lrn);


			?>

			<!---Total number of students-->
			<main class="content">
			<span>
				<span class="d-flex justify-content-end">
					<a href="download-all-students.php?student_id=<?php echo $row_1['student_id']?>" class="btn btn-md btn-primary" ><i class="align-middle" data-feather="download"></i> Download List</a>
				</span>
			</span>
			

			<?php

			$sql_total_students = "SELECT id FROM students";
			$query_total_students = mysqli_query($conn,$sql_total_students);

			$row = mysqli_num_rows($query_total_students);
			?>
			<div class="container p-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="card border border-start border-3 border-bottom-0 border-top-0 border-end-0 border-success p-3 py-4" style="border-radius: 0;">
						<h4>
							<?= "Total students: " . $row. "";?>
						</h4>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card border border-start border-3 border-bottom-0 border-top-0 border-end-0 border-info p-3 py-4" style="border-radius: 0;">

					
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
					?>
					<h4>
						<?php
						echo "New Students: " . $row1 . "";

						?>
					</h4>
					
					</div>
				</div>
			</div>

			<div class="card">
			<form action="" method="POST">
				<span class="d-flex justify-content-end py-4 px-3">
					<input type="text" class="form-control w-25" name="name_lrn">
					<input type="submit" class="btn btn-secondary btn-md" name="enter_date" value="Search">
				</span>
					
				</form>
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
				if(isset($_POST['enter_date'])){

					$name_lrn = $_POST['name_lrn'];
				
					$query_date = "SELECT DISTINCT students.first_name , students.middle_name , students.last_name , students.grade, students.date_created ,program_records.ended_day FROM students LEFT JOIN program_records
					ON students.student_id = program_records.student_id WHERE students.first_name =  '$name_lrn' OR students.last_name = '$name_lrn' OR students.middle_name = '$name_lrn' OR students.student_id ='$name_lrn'";
					$run_date = mysqli_query($conn,$query_date);
					// date_default_timezone_set("Asia/Manila");
					// $time= date("h:i:s", time());
					// $date = date('Y-m-d');
					// $total_date_time = $date ." ". $time;				
					if(mysqli_num_rows($run_date)> 0){
						foreach($run_date as $row_date){
						$no = 1;

							?>
				
										<tr>	
											<td><?php echo $no++?></td>
											<td><?php echo $row_date['first_name'] . " " . $row_date['middle_name'] . " " . $row_date['last_name']?></td>
											<td>
												<?php echo $row_date['grade']?>
											</td>
											<td>
												<?php
													if($row_date['ended_day'] < $date){
														echo "Inactive";
													}else{
														echo "Active";
													}
												?> 		
											</td>
											<td>
												<?php if($row_date['date_created'] < $date){
													echo "";
												}else{
													echo "<span>Recently Added</span>";
												}
													?>
											</td>
										</tr>
							<?php
						$no++;
						}
					}else{
						echo "<span style='color: red;'>Results not found<span>";
					}
				
				
				}else{
					$query_name_year_status = "SELECT DISTINCT students.first_name , students.middle_name , students.last_name , students.grade, students.date_created, program_records.ended_day
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

										if($row2['ended_day'] < $date){
											echo "Inactive";
										}else{
											echo "Active";
										}
									
									
									?>
									
								</td>
								<td>
									<!----check muna kung lagpas sya sa date---->
									<?php

																					
										if($row2['date_created'] < $date){
												echo "";
										}else{
											echo "<span>Recently Added </span>";
										}

									?>
								</td>
							</tr>



							<?php
						
					$no++;
						}
					}


				
				}
				?>

					
				</tbody>
			</table>
			<?php 
			
			
			?>
			</div>
			</div>
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
		
	
	
	<?php if(isset($_GET['m'])){ ?>
        <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div> 
    <?php }?>
<!-- Bootstrap js -->
<script src="src/styles/custom/app.js"></script>
<script src="./styles/bootstrap/@popperjs/core/dist/umd/popper.js"></script>
<script src="./admin-template/js/app.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const flashdata = $('.flash-data').data('flashdata')
    if(flashdata){
        Swal.fire({
            icon: 'success',
            title: 'Registration Successful!',
            text: 'A new record has been added!',
            showConfirmButton: true
        })
    }
</script>
</body>
</html>


<?php


ob_end_flush();



?>