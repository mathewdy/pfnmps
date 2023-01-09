<?php
include('connection.php');
session_start();
ob_start();
include('security-admin.php');

include('opacity.js');

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
                <?php

                    if(isset($_GET['student_id'])){
                        $student_id = $_GET['student_id'];

                        $query = "SELECT * FROM students WHERE student_id = '$student_id'";
                        $run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($run) > 0){
                            foreach($run as $row ){
                                ?>


                                    <form action="edit-student-image.php" method="POST"  enctype="multipart/form-data">

                                        <a href="edit-student.php?student_id=<?php echo $row ['student_id']?>">Back</a>

                                        <label for="">Update Image</label>
                                        <br>
                                        <img src="student_image/<?php echo $row ['image']?>" width="200px" height="200px" alt="student image">
                                        <br>

                                        <input type="file" name="image">

                                        <br>
                                        <input type="submit" name="update" value="Update">
                                        <input type="hidden" name="student_id" value="<?php echo $row ['student_id']?>">
                                    </form>


                                <?php   
                            }
                        }
                    }

                    ?>
                    <script src="opacity.js"> </script>

                    </body>
                    </html>


                    <?php

                    if(isset($_POST['update'])){

                        $image = $_FILES['image']['name'];
                        $allowed_extension = array('gif' , 'png' , 'jpeg', 'jpg' , 'PNG' , 'JPEG' , 'JPG' , 'GIF');
                        $filename = $_FILES ['image']['name'];
                        $file_extension = pathinfo($filename , PATHINFO_EXTENSION);

                        $student_id = $_POST['student_id'];
                        if(!in_array($file_extension, $allowed_extension)){
                            echo "image not added"  ;
                            exit();
                        }else{
                            $update = "UPDATE students SET image = '$image' WHERE student_id = '$student_id'";
                            $run_update = mysqli_query($conn,$update);
                            move_uploaded_file($_FILES["image"]["tmp_name"], "student_image/" . $_FILES["image"] ["name"]);


                            if($run_update){
                                echo "image updated"; 
                                echo "<script>window.location.href='view-students.php' </script>";
                            }else{
                                echo "error" . $conn->error; 
                            }
                        }
                    }


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