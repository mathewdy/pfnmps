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
	<link rel="./stylesheet" href="src/styles/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="home-admin.php">
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
						<a class="sidebar-link" href="add-patient.php">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Patient</span>
                        </a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link disabled" href="admin-profile.php">
                            <i class="align-middle" data-feather="star"></i> <span class="align-middle">Profile</span>
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
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout-admin.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
                    <div class="card p-5">
                        <h1>View Students</h1>
                        <table class="table" id="dataTable">
                            <thead>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th colspan="2">Date of Birth</th>
                                <th>Grade</th>
                                <th>Section</th>
                                <th>Action</th>
                            </thead>
                            <tbody> 
                        <?php


                            $query = "SELECT * FROM students";
                            $run = mysqli_query($conn,$query);
                            $no = 1;
                            if(mysqli_num_rows($run) > 0){
                                foreach($run as $row){
                                    ?>

                                        
                                            
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><img src= "<?php echo "student_image/" . $row['image'] ;?> " alt="image" width="80px" height="80px"></td>
                                                    <td><?php echo $row ['first_name']. " " . $row['middle_name'] . " " . $row ['last_name']?></td>
                                                    <td colspan="2"><?php echo $row ['date_of_birth']?></td>
                                                    <td><?php echo $row ['grade']?></td>
                                                    <td><?php echo $row ['section']?></td>
                                                    <td><a href="edit-student.php?student_id=<?php echo $row ['student_id']?>">Edit</a></td>
                                                    <td><a href="delete-student.php?student_id=<?php echo $row ['student_id']?>">Delete</a></td>
                                                </tr>
                                         


                                    <?php
                                $no++; 
                                }   ?>
                                </tbody>
                            </table>
                    </div>

                       
                            <?php
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
<!-- Bootstrap -->
<script src="./styles/bootstrap/@popperjs/core/dist/umd/popper.js"></script>
<script src="./admin-template/js/app.js"></script>

<!-- jQuery -->
<script src="src/plugins/jquery/dist/jquery.js"></script>

<!-- Datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
});
</script>


</body>
</html>
