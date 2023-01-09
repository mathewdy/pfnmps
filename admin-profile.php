<?php

include('connection.php');
session_start();
ob_start();
$user_id = $_SESSION['user_id'];
 $user_id;


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
			
			<main class="content">
				<div class="container-fluid p-0">
					<div class="card p-5">
                        <!----profile ni admin--->

                        <!-- riri gawa ka na lang modal para sa edit profile para di na mahirap---->

                        <?php

                            $sql = "SELECT * FROM admins WHERE user_id = '$user_id'";
                            $run = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($run) > 0){
                                foreach($run as $row){
                                    ?>
                                        <div class="row g-5">
                                            <div class="col-lg-5">
                                                <img class="card-img-top" src="<?php echo "admin_image/". $row['image']; ?>" alt="" width="200px" height="200px" alt="">
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">User Id:</label>
                                                        <p><?php echo $row['user_id']?></p>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">Name:</label>
                                                        <p><?php echo $row['first_name'] . " " . $row['last_name']?> </p>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">Address:</label>
                                                        <p><?php echo $row['address']?></p>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <p class="p-0 m-0" >Email:</p>
                                                        <p><?php echo $row['email']?></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                                    
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="" method="POST" enctype="multipart/form-data">

                                                            <div class="modal-body">
                                                            <?php
                                                            $sql = "SELECT * FROM admins WHERE user_id = '$row[user_id]'";
                                                            $run = mysqli_query($conn,$sql);

                                                            if(mysqli_num_rows($run) > 0){
                                                                
                                                                foreach($run as $row){
                                                                    ?>
                                                    
                                                                            <div class="row">
                                                                                <div class="col-lg-12 mb-2">
                                                                                    <img class="card-img-top" src="<?php echo "admin_image/". $row['image']; ?>" alt="" width="200px" height="200px">
                                                                                    <input type="file" class="form-control" name="image">
                                                                                </div>
                                                                                <div class="col-lg-12 mb-2">
                                                                                    <label for="">First Name:</label>
                                                                                    <input type="text" class="form-control py-1" name="first_name" value="<?php echo $row['first_name'] ?>">
                                                                                </div>
                                                                                <div class="col-lg-12 mb-2">
                                                                                    <label for="">Last Name:</label>
                                                                                    <input type="text" class="form-control py-1" name="last_name" value="<?php echo $row['last_name']?>">
                                                                                </div>
                                                                                <div class="col-lg-12 mb-2">
                                                                                    <label for="">Address:</label>
                                                                                    <input type="text" class="form-control py-1" name="address" value="<?php echo $row['address']?>">
                                                                                </div>
                                                                                <div class="col-lg-12 mb-2">
                                                                                    <p class="p-0 m-0">Email</p>
                                                                                    <input type="email" class="form-control py-1" value="<?php echo $row['email']?>" name="email">
                                                                                    <input type="hidden" name="old_image" value="<?php echo $row ['image']?>">
                                                                                </div>
                                                                                <div class="col-lg-12 mb-2">
                                                                                    <label for="">Password:</label>
                                                                                    <input type="password" class="form-control py-1" name="password" value="<?php echo $row['password']?>">
                                                                                    <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>">
                                                                                </div>
                                                                            </div>
                                                                        

                                                                    <?php
                                                                }


                                                            }
                                                            ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <input type="submit" class="btn btn-primary" name="update" value="Update">
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <a class="btn btn-secondary" href="home-admin.php">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        
                                        
                                        


                                    <?php
                                }
                            }

                        ?>
					</div>
				</div>
			</main>
		</div>
	</div>
<!-- Bootstrap js -->
<script src="./styles/bootstrap/@popperjs/core/dist/umd/popper.js"></script>
<script src="./admin-template/js/app.js"></script>
<script src="opacity.js"> </script>

</body>
</html>
<?php

if(isset($_POST['update'])){
    $user_id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != ''){
        $update_filename = $_FILES['image']['name'];
    }else{
        $update_filename = $old_image;
    }


    if(empty($new_image)){
        $query_update_1 = "UPDATE admins SET first_name = '$first_name' , last_name = '$last_name', address='$address', email = '$email', password='$password' WHERE user_id = '$user_id'";
        $run_1 = mysqli_query($conn,$query_update_1);
        if($run_1){
            echo  "<script>window.location.href='admin-profile.php' </script>";
        }else{
            echo "error update_1" . $conn->error; 
        }
    }


    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension)){
        echo "<script>alert('File not allowed'); </script>";
        echo "<script>window.location.href='profile.php' </script>";
    }else{
        $sql_update = "UPDATE admins SET first_name = '$first_name' , last_name = '$last_name', address='$address', email = '$email', password='$password', image = '$update_filename' WHERE user_id = '$user_id'";
        $run_update = mysqli_query($conn,$sql_update);
    
        if($run_update){
            move_uploaded_file($_FILES["image"]["tmp_name"], "admin_image/".$_FILES["image"]["name"]);
            unlink("admin_image/". $old_image);
            echo "<script>window.location.href='admin-profile.php' </script>";

        }else{
            echo "error";
        }
    }
    

   
}

ob_end_flush();

?>