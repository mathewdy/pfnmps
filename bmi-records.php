<?php

include('connection.php');
// include('security-admin.php');
session_start();
ob_start();

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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

					<li class="sidebar-item">
						<a class="sidebar-link" href="home-admin.php">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
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

					<li class="sidebar-item active">
						<a class="sidebar-link" href="bmi-records.php">
                            <i class="align-middle text-dark" data-feather="clipboard"></i> <span class="align-middle">Reports</span>
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
				<?php

				$sql_total_students = "SELECT id FROM students";
				$query_total_students = mysqli_query($conn,$sql_total_students);

				$row = mysqli_num_rows($query_total_students);
				?>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="card p-5">

								<?php
									$query_success = "SELECT * FROM status";
									$run_success = mysqli_query($conn,$query_success);
									$row_success = mysqli_num_rows($run_success);


									?>

										<p>Successful Record: <?php echo $row_success?></p>  

										<table class="table table-bordered" id="dataTable">
											<thead>
												<tr>
													<th>Name</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												
													$query_names = "select users.student_id, users.first_name, users.middle_name, users.last_name , status.student_id
													FROM users
													LEFT JOIN status ON
													users.student_id = status.student_id WHERE output= 'success' LIMIT 10";
													$run_names = mysqli_query($conn,$query_names);

													if(mysqli_num_rows($run_names) > 0){
														foreach($run_names as $row){
															?>

																<tr>
																	<td><?php echo $row['first_name']?></td>
																	<td><?php echo $row['middle_name']?></td>
																	<td><?php echo $row['last_name']?></td>
																</tr>

															<?php
														}
													}
												
												?>
												
											</tbody>
										</table>

										
									<!--query kung ilang tao yung hindi success don-->
									<!---query mo yung number ng tao-->
									<!---query din kung sino yung tao na yon- limit mo lang as 5--->

									<!-------comparison nung previous BMI nya ganon------->

									
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card p-5">
								<?php
									$query_failed1 = "SELECT * FROM failed";
									$run_failed1 = mysqli_query($conn,$query_failed1);
									$row_failed1 = mysqli_num_rows($run_failed1);

									?>
										<p>Unsuccessful Record: <?php echo $row_failed1?></p>

									<table class="table table-bordered" id="dataTable2">
										<thead>
											<tr>
												<th>Name</th>
												<th>Options</th>
											</tr>
										</thead>
										<tbody>

											<?php

												$query_failed = "select users.student_id, users.first_name, users.middle_name, users.last_name , failed.student_id
												FROM users
												LEFT JOIN failed ON
												users.student_id = failed.student_id WHERE output= 'failed' LIMIT 10";
												$run_failed = mysqli_query($conn,$query_failed);

												if(mysqli_num_rows($run_failed) > 0){
													foreach($run_failed as $row_failed){

														?>
															<tr>
																<td><?php echo $row_failed['first_name'] . " ".  $row_failed['middle_name'] . " " . $row_failed['last_name']?> </td>
																<td><a href="previous-bmi.php?student_id=<?php echo $row_failed['student_id']?>">Previous BMI</a></td>
															</tr>

														<?php

													}
												}

											?>
										</tbody>
									</table>
							</div>
						</div>
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function() {
        $('#dataTable').DataTable();
        $('#dataTable2').DataTable();
    });


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
