<?php
include('connection.php');
session_start();
ob_start();
include('security-admin.php');

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

$num_per_page = 05;
$start_from = ($page-1)*05;




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
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Admin</span>
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
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Students</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link disabled" href="#">
                            <i class="align-middle" data-feather="star"></i> <span class="align-middle">Nutritionists</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="add-patient.php">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Patient</span>
                        </a>
					</li>
				
				</ul>
				<a class="text-light text-center btn btn-primary" href="logout-admin.php">Logout</a>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

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
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout-admin.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
                <h1>View Students</h1>

                        <table class="table">
                            <thead>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th colspan="2">Date of Birth</th>
                                <th>Grade</th>
                                <th>Section</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>

                        <?php


                            $query = "SELECT * FROM students";
                            $run = mysqli_query($conn,$query);
                            $no = 1;
                            if(mysqli_num_rows($run) > 0){
                                foreach($run as $row){
                                    ?>

                                        
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><img src="student_image/<?php echo $row ['image']; ?>" alt="" width="80px" height="80px"></td>
                                                    <td><?php echo $row ['first_name']. " " . $row['middle_name'] . " " . $row ['last_name']?></td>
                                                    <td colspan="2"><?php echo $row ['date_of_birth']?></td>
                                                    <td><?php echo $row ['grade']?></td>
                                                    <td><?php echo $row ['section']?></td>
                                                    <td><a href="edit-student.php?student_id=<?php echo $row ['student_id']?>">Edit</a></td>
                                                    <td><a href="delete-student.php?student_id=<?php echo $row ['student_id']?>">Delete</a></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    <?php
                                $no++; 
                                }
                            }


                            // $pr_query = "SELECT * FROM users LEFT JOIN doctors_details ON users.account_id = doctors_details.user_id WHERE doctor_or_secretary ='doctor'";
                            // $pr_results = mysqli_query($conn,$pr_query);
                            // $total_record = mysqli_num_rows($pr_results);
                            
                            // $total_page = ceil($total_record/$num_per_age);

                            // if($page > 1 ){
                            //     echo  "<a href='view-doctors.php?page=".($page-1)."' class='btn btn-danger'>Previous</a> ";
                            // }
                            
                            // for($i=1;$i<$total_page;$i++){
                            //     echo  "<a href='view-doctors.php?page=".$i."' class='btn btn-primary'>$i</a> ";
                            // }

                            // if($i > $page ){
                            //     echo  "<a href='view-doctors.php?page=".($page+1)."' class='btn btn-danger'>Next</a> ";
                            // }

                        ob_end_flush();
                        ?>

				</div>
			</main>
		</div>
	</div>

<script src="./admin-template/js/app.js"></script>
<script src="./styles/bootstrap/js/bootstrap.js"></script>
</body>
</html>

