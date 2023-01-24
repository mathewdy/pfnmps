<?php 
include('connection.php');
session_start();
ob_start();
include('security-admin.php');


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
						<a class="sidebar-link" href="view-history.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">History</span>
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
                    <div class="card p-5">
                <?php

                    if(isset($_GET['student_id'])){
                        $student_id = $_GET['student_id'];


                        ?>

                        
                        <?php

                        $student_id = $_GET['student_id'];

                        $query = "SELECT students.student_id AS student_student_id, students.first_name AS student_first_name, students.last_name AS student_last_name ,students.middle_name AS student_middle_name, students.date_of_birth AS student_date_of_birth, students.gender AS student_gender ,students.room AS student_room,students.house AS student_house,students.street AS student_street,students.subdivision AS student_subdivison,students.barangay AS student_barangay,students.city AS student_city,students.zip AS student_zip,students.grade AS student_grade,students.section AS student_section,students.date_time_created AS student_date_time_created,users.first_name AS user_first_name , users.middle_name AS user_middle_name , users.last_name AS user_last_name, users.room AS user_room, users.house AS user_house , users.street AS user_street, users.subdivision AS user_subdivision, users.barangay AS user_barangay, users.city AS user_city , users.zip AS user_zip , users.image AS user_image , users.student_id AS user_student_id , users.date_time_created AS user_date_time_created, users.user_id AS user_user_id FROM students LEFT JOIN users
                        ON students.student_id = users.student_id WHERE students.student_id = '$student_id'";
                        $run = mysqli_query($conn,$query);


                        if(mysqli_num_rows($run) > 0){
                            foreach($run as $row ){
                                ?>  
                                    <form action="edit-guardian-details.php" method="POST">

                                    <h2>Guardian's Info</h2>
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control py-1" name="first_name" value="<?php echo $row ['user_first_name']?>">

                                    <br>

                                    <label for="">Middle Name</label>
                                    <input type="text" class="form-control py-1" name="middle_name" value="<?php echo $row ['user_middle_name']?>">

                                    <br>

                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control py-1" name="last_name" value="<?php echo $row ['user_last_name']?>">
                                    <br>
                                    <br>
                                    <hr>
                                    <br>


                                    <h2>Address</h2>
                                        <label for="">Room / Floor / Unit No. & Building Name</label>
                                        <input type="text" class="form-control py-1" name="room" value="<?php echo $row ['user_room'] ?>">

                                        <br>
                                        <label for="">House / Lot & Block No.</label>
                                        <input type="text" class="form-control py-1" name="house" value="<?php echo $row ['user_house']?>">

                                        <br>
                                        <label for="">Street</label>
                                        <input type="text" class="form-control py-1" name="street" value="<?php echo $row ['user_street']?>">

                                        <br>
                                        <label for="">Subdivision</label>
                                        <input type="text" class="form-control py-1" name="subdivision" value="<?php echo $row ['user_subdivision']?>">


                                        <br>
                                        <label for="">Barangay</label>
                                        <input type="text" class="form-control py-1" name="barangay" value="<?php echo $row ['user_barangay']?>"> 


                                        <br>
                                        <label for="">City</label>
                                        <input type="text" class="form-control py-1" name="city" value="<?php echo $row ['user_city']?>">

                                        
                                        <br>
                                        <label for="">Zip Code</label>
                                        <input type="number" class="form-control py-1" name="zip_code" value="<?php echo $row ['user_zip']?>"> 

                                        <br>
                                        <input type="hidden" name="date_time_created" value="<?php echo $row ['user_date_time_created']?>">
                                        <input type="hidden" name="user_id" value="<?php echo $row ['user_user_id']?>">
                                        <input type="hidden" name="sID" value="<?php echo $student_id?>">
                                        <a class="btn btn-secondary" href="edit-student.php?student_id=<?php echo $row ['student_student_id']?>">Cancel</a>
                                        <input type="submit" class="btn btn-primary updateBtn" name="update" value="Update" id="">
                                        <br>
                                       

                                        </form>
                                <?php
                            }
                        }
                    }


                    ?>
                    </div>
				</div>
			</main>
		</div>
	</div>
    <?php if(isset($_GET['m'])){ ?>
        <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div> 
    <?php }?>
<script src="./admin-template/js/app.js"></script>
<script src="./styles/bootstrap/js/bootstrap.js"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const flashdata = $('.flash-data').data('flashdata')
    if(flashdata){
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'A record has been updated!',
            showConfirmButton: false,
            timer: 2000
        })
    }
</script>
</body>
</html>

<?php

if(isset($_POST['update'])){



    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    //student or patient info
    $first_name = ucfirst($_POST['first_name']);
    $middle_name = ucfirst($_POST['middle_name']);
    $last_name = ucfirst($_POST['last_name']); 
    $user_id = $_POST['user_id'];
    $student_id = $_POST['sID'];

    //address
    $room = strtoupper($_POST['room']);
    $house = strtoupper($_POST['house']);
    $street = strtoupper($_POST['street']);
    $subdivision = strtoupper($_POST['subdivision']);
    $barangay = strtoupper($_POST['barangay']);
    $city = strtoupper($_POST['city']);
    $zip_code = strtoupper($_POST['zip_code']);

    $query_update = "UPDATE users SET first_name = '$first_name' , middle_name = '$middle_name', last_name = '$last_name' , user_id = '$user_id', room = '$room' , house = '$house' , street = '$street', subdivision = '$subdivision' , barangay = '$barangay' , city = '$city' , zip = '$zip_code' ,date_time_updated = '$date $time' WHERE user_id = '$user_id'";
    $run_update = mysqli_query($conn,$query_update);

    if($run_update){
        header("location: edit-guardian-details.php?student_id=$student_id&m=1");
    }else{
        echo "error" . $conn->error;
    }

    
}
ob_end_flush();
?>