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
                            <i class="align-middle text-dark" data-feather="clipboard"></i> <span class="align-middle">Report</span>
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

			<!---Total number of students-->
			<main class="content">
				<div class="card">
                <?php

                $sql_total_students = "SELECT id FROM students";
                $query_total_students = mysqli_query($conn,$sql_total_students);
                $row = mysqli_num_rows($query_total_students);
                ?>
                <div class="container p-5">
                <div class="row">
                    <div class="col-lg-12">
                    <table class="w-100 table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>LRN</th>
                                <th>Name</th>
                                <th>Previous BMI</th>
                                <th>Date</th>
                                <th>Recommendation</th>
                            </tr>
                        </thead>
                        <tbody>
                                
                            <?php

                            if(isset($_GET['student_id'])){
                                $student_id = $_GET['student_id'];
                                
                                $query = "SELECT users.first_name, users.middle_name, users.last_name , failed.output, history_bmi.bmi , users.student_id , history_bmi.date_created
                                FROM users
                                LEFT JOIN failed ON
                                users.student_id = failed.student_id
                                LEFT JOIN history_bmi ON
                                users.student_id = history_bmi.student_id
                                WHERE failed.output = 'failed' AND failed.student_id = '$student_id'";
                                $run = mysqli_query($conn,$query);

                                if(mysqli_num_rows($run) > 0){
                                    foreach($run as $row){
                                        ?>

                                            <tr>
                                                <td><?php echo $row['student_id']?></td>
                                                <td><?php echo $row['first_name'] . " ".  $row['middle_name'] . " " . $row['last_name']?> </td>
                                                <td><?php echo number_format((float)$row['bmi'], 2 ,'.', '');  ?></td>
                                                <td><?php echo $row['date_created']?></td>
                                                <td>
                                                    <?php 
                                                        if($row['bmi'] <= 18.5){
                                                            echo "Reprogram";
                                                            ?>

                                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                                            <?php
                                                        }else if($row['bmi'] >= 18.5 || $row['bmi'] <= 24.9){
                                                            echo "Maintain Healthy Weight";
                                                        }else if($row['bmi'] >= 25 || $row['bmi'] <= 29.9){
                                                            echo "Reprogram";
                                                            ?>

                                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                                            <?php
                                                        }else if($row['bmi'] == 30 || $row['bmi'] <= 34.9){
                                                            echo "Reprogram";
                                                            ?>

                                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                                            <?php
                                                        }else if($row['bmi'] == 35 || $row['bmi'] <= 39.9){
                                                            echo "Reprogram";
                                                            ?>

                                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                                            <?php
                                                        }else if($row['bmi'] >= 40){
                                                            echo "Reprogram";
                                                            ?>

                                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                                            <?php
                                                        }

                                                        // loop the questions and file again a program
                                                    ?>
                                                </td>
                                            </tr>

                                        <?php
                                    }
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
    });
</script>
</body>
</html>


<?php


ob_end_flush();



?>
