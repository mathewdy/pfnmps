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

                <a href="view-students.php">Back</a>
                <?php
                
                

                //to be continued to 
                if(isset($_GET['student_id'])){
                    $student_id = $_GET['student_id'];

                    //pagination

                    // if(isset($_GET['page'])){
                    //     $page = $_GET['page'];
                    //     $student_id = $_GET['student_id'];

                    // }else{
                    //     $page = 1;

                    // }

                    // $num_per_page = 05;
                    // $start_from = ($page-1)*05;

                    // $query = "SELECT exercises,exercise_acknowledge, id FROM program_records
                    // WHERE student_id = '$student_id' LIMIT $start_from , $num_per_page " ;
                    // $run_page = mysqli_query($conn,$query);

                        $query = "SELECT * FROM students WHERE student_id = '$student_id'";
                        $run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($run) > 0){
                            foreach($run as $row ){
                                ?>


                                    <form action="" method="POST"  enctype="multipart/form-data">

                                        <label for="">Update Image</label>
                                        <br>
                                        <img src="student_image/<?php echo $row ['image']?>" width="200px" height="200px" alt="student image">
                                        <br>

                                        <input type="file" name="image">

                                        <br>
                                        <input type="submit" name="update_image" value="Update">
                                        <input type="hidden" name="student_id" value="<?php echo $row ['student_id']?>">
                                    </form>


                                <?php   
                            }
                        }

                    

                    $query = "SELECT students.student_id AS student_student_id, students.first_name AS student_first_name, students.last_name AS student_last_name ,students.middle_name AS student_middle_name, students.date_of_birth AS student_date_of_birth, students.gender AS student_gender ,students.room AS student_room,students.house AS student_house,students.street AS student_street,students.subdivision AS student_subdivison,students.barangay AS student_barangay,students.city AS student_city,students.zip AS student_zip,students.grade AS student_grade,students.section AS student_section,students.date_time_created AS student_date_time_created,users.first_name AS user_first_name , users.middle_name AS user_middle_name , users.last_name AS user_last_name, users.room AS user_room, users.house AS user_house , users.street AS user_street, users.subdivision AS user_subdivision, users.barangay AS user_barangay, users.city AS user_city , users.zip AS user_zip , users.image AS user_image , users.student_id AS user_student_id, users.user_id AS user_user_id FROM students LEFT JOIN users
                    ON students.student_id = users.student_id WHERE students.student_id = '$student_id'";
                    $run = mysqli_query($conn,$query);

                    if(mysqli_num_rows($run) > 0){
                        foreach($run as $row ){
                            ?>

                                <form action="edit-student.php" method="POST" enctype="multipart/form-data">


                                    <h2>Personal Info</h2>
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" value="<?php echo $row ['student_first_name']?>">

                                    <br>

                                    <label for="">Middle Name</label>
                                    <input type="text" name="middle_name" value="<?php echo $row ['student_middle_name']?>">

                                    <br>

                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" value="<?php echo $row ['student_last_name']?>">
                                    <br>

                                    <label for="">Date of Birth</label>
                                    <input type="date" name="date_of_birth" value="<?php echo $row ['student_date_of_birth']?>" id="">
                                    <br>

                                    <br>


                                    
                                    <a href="edit-student-image.php?student_id=<?php echo $row ['student_student_id']?>">Edit Photo</a>

                                    <a href="edit-guardian-details.php?student_id=<?php echo $row ['student_student_id']?>">Edit Guardian Details</a>

                            

                                    <br>
                                    <h2>Address</h2>
                                    <label for="">Room / Floor / Unit No. & Building Name</label>
                                    <input type="text" name="room" value="<?php echo $row ['student_room'] ?>">

                                    <br>
                                    <label for="">House / Lot & Block No.</label>
                                    <input type="text" name="house" value="<?php echo $row ['student_house']?>">

                                    <br>
                                    <label for="">Street</label>
                                    <input type="text" name="street" value="<?php echo $row ['student_street']?>">

                                    <br>
                                    <label for="">Subdivision</label>
                                    <input type="text" name="subdivision" value="<?php echo $row ['student_subdivison']?>">


                                    <br>
                                    <label for="">Barangay</label>
                                    <input type="text" name="barangay" value="<?php echo $row ['student_barangay']?>"> 


                                    <br>
                                    <label for="">City</label>
                                    <input type="text" name="city" value="<?php echo $row ['student_city']?>">

                                    
                                    <br>
                                    <label for="">Zip Code</label>
                                    <input type="number" name="zip_code" value="<?php echo $row ['student_zip']?>"> 

                                    <input type="hidden" name="gender" value="<?php echo $row ['student_gender']?>">
                                    <br>
                                    

                                    <br>

                                    <label for="">Grade</label>
                                    <input type="text" name="grade" value="<?php echo $row ['student_grade']?>" readonly>
                                    <select name="grade" id="">
                                        <option value="Grade 1">Grade 1</option>
                                        <option value="Grade 2">Grade 2</option>
                                        <option value="Grade 3">Grade 3</option>
                                        <option value="Grade 4">Grade 4</option>
                                        <option value="Grade 5">Grade 5</option>
                                        <option value="Grade 6">Grade 6</option>
                                    </select>

                                    <br>
                                    <label for="">Section</label>
                                    <input type="text" name="section" value="<?php echo $row ['student_section']?>">

                                    <input type="hidden" name="date_time_created" value="<?php echo $row ['student_date_time_created']?>">

                                    <br>
                                    <input type="submit" name="update" value="Update">
                                    <input type="hidden" name="student_id" value="<?php echo $row ['student_student_id']?>">

                                </form>

                            <?php
                        }
                    }

                    ?>

                        <br>
                        <h3>Student Activities</h3>
                        <br>

                    <?php

                        $sql_program_records_date = "SELECT date_started FROM program_records WHERE student_id = '$student_id' LIMIT 1";
                        $run_program_records_date = mysqli_query($conn,$sql_program_records_date);

                        if(mysqli_num_rows($run_program_records_date) > 0){
                            foreach($run_program_records_date as $row){
                                ?>


                                    <h4>Date Started</h4>
                                    <p><?php echo $row['date_started']?></p>

                                <?php
                            }
                        }

                        //gagawa naman ako ng page ination

                        $sql_daily_activities = "SELECT exercises,exercise_acknowledge, id FROM program_records WHERE student_id = '$student_id' LIMIT 15";
                        $run_daily_activities = mysqli_query($conn,$sql_daily_activities);

                        if(mysqli_num_rows($run_daily_activities) > 0){
                            foreach ($run_daily_activities as $row2){
                                ?>
                                
                                    <label for="">Acitivies:</label>
                                    <p><?php echo $row2['exercises'] ?></p>
                                    <label for="">Duration:</label>
                                    <p>30 min.</p>
                                    <form action="" method="POST">
                                        <?php

                                            if($row2['exercise_acknowledge'] == 0){
                                                ?>

                                                <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                                                <input type="hidden" name="id" value="<?php echo $row2['id']?>">
                                                <input type="hidden" name="daily_task" value="1">
                                            
                                                <input type="submit" name="acknowledge_task" value="Acknowledge">
                                                <input type="text" name="student_id" value="<?php echo $student_id ?>">
                                        

                                                <?php
                                            }else{
                                                echo "<div style='color:green;'>Acknowledged </div>";
                                            }

                                        ?>
                                        
                                       
                                    
                                    </form>
                                    
                                <?php
                            }
                        }

                    // //pagination continiues
                    // $pr_query = "SELECT exercises,exercise_acknowledge, id FROM program_records WHERE student_id = '$student_id' LIMIT 15";
                    // $pr_result= mysqli_query($conn,$pr_query);

                    // $total_records = mysqli_num_rows($pr_result);
                    // $total_page = ceil($total_records/$num_per_page);

                    // for($i=1;$i<$total_page;$i++){
                    
                    //    echo "<a href='edit-student.php?page=".$i." class='btn btn-primary'>$i</a>";

                    // }


                    //ETO YUNG SA PAG KAIN NYA RIRI

                    ?>
                        <br>
                            <h3>Daily Meal</h3>
                        <br>

                    <?php
                    $sql_program_records = "SELECT * FROM program_records WHERE student_id = '$student_id'";
                    $run_program_records = mysqli_query($conn,$sql_program_records);

                    if(mysqli_num_rows($run_program_records) > 0){
                        foreach($run_program_records as $row1){
                            ?>


                                <label for="">Day: </label>
                                <p><?php echo $row1['day']?></p>
                                <label for="">Foods:</label>
                                <p><?php echo $row1['foods']?></p>
                                <form action="" method="POST">
                                <p>
                                    <?php

                                        if($row1['food_acknowledge'] == 0){
                                            ?>      
                                                <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                                                <input type="hidden" name="id" value="<?php echo $row1['id']?>">
                                                <input type="hidden" name="daily_meal" value="1">
                                                <input type="submit" name="acknowledge_meal" value="Acknowledge">
                                            <?php
                                        }else{
                                            echo "<div style='color: green;'>Acknowledged </div> ";
                                        }
                                
                                    ?>
                                </p>
                                </form>

                            <?php
                        }
                    }

                }

                ?>
				</div>


                <!---eto yung sa excercises nya haha-->
                
			</main>
		</div>
	</div>


    

<script src="./admin-template/js/app.js"></script>
<script src="./styles/bootstrap/js/bootstrap.js"></script>
</body>
</html>

<?php
if(isset($_POST['update'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    //student or patient info
    $student_id = ($_POST['student_id']);
    $first_name = ucfirst($_POST['first_name']);
    $middle_name = ucfirst($_POST['middle_name']);
    $last_name = ucfirst($_POST['last_name']); 
    $date_of_birth = date('Y-m-d',strtotime($_POST['date_of_birth']));
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $gender = $_POST['gender'];
    //image
    // $image = $_FILES['image']['name'];
    // $allowed_extension = array('gif' , 'png' , 'jpeg', 'jpg' , 'PNG' , 'JPEG' , 'JPG' , 'GIF');
    // $filename = $_FILES ['image']['name'];
    // $file_extension = pathinfo($filename , PATHINFO_EXTENSION);
     $date_time_created = $_POST['date_time_created'];


    //address
    $room = strtoupper($_POST['room']);
    $house = strtoupper($_POST['house']);
    $street = strtoupper($_POST['street']);
    $subdivision = strtoupper($_POST['subdivision']);
    $barangay = strtoupper($_POST['barangay']);
    $city = strtoupper($_POST['city']);
    $zip_code = strtoupper($_POST['zip_code']);


    // if(!in_array($file_extension, $allowed_extension)){
    //     echo "image not added"  ;
    //    exit();
    // }else
    {

        $query_update = "UPDATE students SET first_name = '$first_name' , middle_name = '$middle_name', last_name = '$last_name', date_of_birth = '$date_of_birth', gender = '$gender' , room = '$room', house = '$house' , street = '$street' , subdivision = '$subdivision' , barangay = '$barangay' , city ='$city' , zip = '$zip_code'  , grade = '$grade' , section = '$section', date_time_created = '$date_time_created' , date_time_updated = '$date $time' WHERE student_id = '$student_id'";
        $run_update = mysqli_query($conn,$query_update);

        if($run_update){
            echo "<script>window.location.href='edit-student.php?student_id=$student_id' </script>";
        }else{
            echo "error" . $conn->error;
        }

    }

}


if(isset($_POST['acknowledge_task'])){
    $daily_task = $_POST['daily_task'];
    $id = $_POST['id'];
    $sql_update = "UPDATE program_records SET exercise_acknowledge='$daily_task' WHERE id = '$id'";
    $run = mysqli_query($conn,$sql_update);

    if($run){
        echo "Acknowledged";
        echo "<script>window.location.href='edit-student.php?student_id=$student_id'</script>";
    }else{
        echo "error" . $conn->error;
    }
}



//di pa to tapos

if(isset($_POST['acknowledge_meal'])){
    $daily_meal = $_POST['daily_meal'];
    $id = $_POST['id'];
    $sql_update = "UPDATE program_records SET food_acknowledge='$daily_meal' WHERE id = '$id'";
    $run = mysqli_query($conn,$sql_update);
    if($run){
        echo "<script>window.location.href='edit-student.php?student_id=$student_id' </script>";

    }else{
        echo "error" . $conn->error;
    }
}



if(isset($_POST['update_image'])){

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
            echo "<script>window.location.href='edit-student.php?student_id=$student_id' </script>";
        }else{
            echo "error" . $conn->error; 
        }
    }
}





ob_end_flush();

?>