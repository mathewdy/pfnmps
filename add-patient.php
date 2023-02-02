<?php

ob_start();
include('connection.php');
session_start();
include('security-admin.php');

//Ryan, pakilagyan dito ng stepper dito, after ng name ng student
//mareredirect dapat sa magulang nya naman

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap/css/bootstrap.css">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="./admin-template/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
                <img src="logo.jpg" alt="" height="50" style="border-radius: 50px;">
					<span class="align-middle px-3 text-dark">Bucal ES</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item ">
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
                            <i class="align-middle " data-feather="book-open"></i> <span class="align-middle">History</span>
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

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
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
                        <div class="row">
                            <form action="add-patient.php" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12">
                                <h2 class="text-decoration-underline mb-4">Guardian Information</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                              <!----name of parent--->
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="guardian_first_name" required>
                                        <br>

                                        <label for="">Middle Name</label>
                                        <input type="text" class="form-control" name="guardian_middle_name" required>

                                        <br>
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="guardian_last_name" required>
                                        
                                        <br>
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                        <br>
                                        <label for="">Contact Number</label>
                                        <input type="text" class="form-control" name="contact_number" placeholder="+63**********" required>

                                        <!-----ADDRESS---->

                                        <br>
                                        <!-- <label for="">Address</label> -->
                                        <label for="">Room / Floor / Unit No. & Building Name</label>
                                        <input type="text" class="form-control" name="room" required>
                                        <br>
                                        <label for="">House / Lot & Block No.</label>
                                        <input type="text" class="form-control" name="house" required>

                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Street</label>
                                        <input type="text" class="form-control" name="street" required>

                                        <br>
                                        <label for="">Subdivision</label>
                                        <input type="text" class="form-control" name="subdivision" required>


                                        <br>
                                        <label for="">Barangay</label>
                                        <input type="text" class="form-control" name="barangay" required>


                                        <br>
                                        <label for="">City</label>
                                        <input type="text" class="form-control" name="city" required>

                                        
                                        <br>
                                        <label for="">Zip Code</label>
                                        <input type="number" class="form-control" name="zip_code" required> 

                                        <br>
                                        <span class="d-flex flex-column justify-content-between mb-2">
                                            
                                            <label for="">Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="guardian_gender" id="flexRadioDefault1" value="Female" required>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Female
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="guardian_gender" id="flexRadioDefault2" value="Male" required>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Male
                                                </label>
                                            </div>
                                            <!-- <span>
                                                <label for="">Male</label>
                                                <input type="radio" name="" >
                                                <label for="">Female</label>
                                                <input type="radio" name=""  >
                                            </span> -->
                                        </span>
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="guardian_image" required>
                                    </div>
                                </div>
                            </div>
                            <hr class="featurette-divider">
                            <div class="col-lg-12 my-4">
                                <h2 class="text-decoration-underline mb-4">Student Information</h2>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">LRN</label>
                                        <input type="text" class="form-control" name="student_id" required>

                                        <br>

                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="first_name" required>
                                        <br>

                                        <label for="">Middle Name</label>
                                        <input type="text" class="form-control" name="middle_name" required>

                                        <br>
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" required>



                                        <br>
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth" id="custom_date" min="2005-01-01" required>
                                        
                                        <br>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <span>
                                            <label for="">Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="g1" value="Male" required>
                                                <label class="form-check-label" for="g1">
                                                    Male
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="g2" value="Female" required>
                                                <label class="form-check-label" for="g2">
                                                    Female
                                                </label>
                                            </div>
                                        </span>

                                        <br>
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="image" required>

                                        <br>

                                        <label for="">Grade</label>
                                        <select name="grade" class="form-select" id="" required>
                                            <option value="Kinder">Kinder</option>
                                            <option value="Grade 1">Grade 1</option>
                                            <option value="Grade 2">Grade 2</option>
                                            <option value="Grade 3">Grade 3</option>
                                            <option value="Grade 4">Grade 4</option>
                                            <option value="Grade 5">Grade 5</option>
                                        </select>
                                        <br>
                                        <span>
                                            <label for="">4PS Member?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four_ps" id="fps1"value="1" required>
                                                <label class="form-check-label" for="fps1">
                                                    Yes
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four_ps" id="fps2" value="0" required>
                                                <label class="form-check-label" for="fps2">
                                                    No
                                                </label>
                                            </div>
                                        </span>
                                        <label for="">Section</label>
                                        <input type="text" class="form-control" name="section" required>
                                    </div>
                                </div>
                                <hr class="featurette-divider">
                                <div class="col-lg-6">
                                    <h2 class="text-decoration-underline mb-4">Health Info</h2>
                                        <!----dito health info nya naman---BMI-->
                                        <label for="">Height</label>
                                        <input type="number" class="form-control" name="height" placeholder="Weight (kg)" required>
                                        <br>

                                        <label for="">Weight</label>
                                        <input type="number" class="form-control" name="weight" placeholder="Height (cm)" required>

                                        <br>

                                        <label for="">Activity Level</label>
                                        <select name="actlevel" class="form-select" id="" required>
                                        <option value="1">Sedentary</option>
                                        <option value="2">Low Active</option>
                                        <option value="3">Active</option>
                                        <option value="4">Very Active</option>
                                        </select>

                                        <br>
                                        <label for="">Health History</label>
                                        <input type="text" class="form-control" name="health_history" required>

                                        <!-----riri ikaw na bahala mag adjust sa stepper--->
                                        <br>
                                        <a href="view-students.php" class="btn btn-danger">Cancel</a>
                                        <input type="submit" class="btn btn-primary" name="add_patient" value="Next">
                                    </div>
                            </div>
                            </form>
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
<script src="./styles/bootstrap/@popperjs/core/dist/umd/popper.js"></script>
<script src="./admin-template/js/app.js"></script>
<script src="src/styles/custom/app.js"></script>

<script>
    var today_date = new Date();
    var month = today_date.getMonth() + 1;
    var year = today_date.getFullYear();
    var t_date = today_date.getDate();

    if(month < 10){
        month = "0" + month;
    }

    if(t_date < 10){
        t_date = "0" + date;
    }

    var max_date = year + "-" + month + "-" + t_date;
    document.getElementById("custom_date").setAttribute("max", max_date);
</script>
</body>
</html>

    

    <!----mamaya lagyan natin to ng mga REQUIRED INPUT FIELD---->


<?php

if(isset($_POST['add_patient'])){

    //year month date
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');


    //info ni patient or student
    $student_id = $_POST['student_id'];
    $first_name = ucfirst($_POST['first_name']);
    $middle_name = ucfirst($_POST['middle_name']);
    $last_name = ucfirst($_POST['last_name']); 

    $email = $_POST['email'];
    $default_password = "Welcome@12345";
    $date_of_birth = ($_POST['date_of_birth']);
    

    //address nya naman to 
    $room = strtoupper($_POST['room']);
    $house = strtoupper($_POST['house']);
    $street = strtoupper($_POST['street']);
    $subdivision = strtoupper($_POST['subdivision']);
    $barangay = strtoupper($_POST['barangay']);
    $city = strtoupper($_POST['city']);
    $zip_code = strtoupper($_POST['zip_code']);

    //contact info
    $contact_number = $_POST['contact_number'];


    $image = $_FILES['image']['name'];
    $allowed_extension = array('gif' , 'png' , 'jpeg', 'jpg' , 'PNG' , 'JPEG' , 'JPG' , 'GIF');
    $filename = $_FILES ['image']['name'];
    $file_extension = pathinfo($filename , PATHINFO_EXTENSION);

    $guardian_image = $_FILES['guardian_image']['name'];
    $allowed_extension = array('gif' , 'png' , 'jpeg', 'jpg' , 'PNG' , 'JPEG' , 'JPG' , 'GIF');
    $filename = $_FILES ['guardian_image']['name'];
    $file_extension = pathinfo($filename , PATHINFO_EXTENSION);

    $grade = $_POST['grade'];
    $section = $_POST['section'];

    //SA HISTORY ____ 
    $program_id = 0;
    
    $four_ps = $_POST['four_ps'];

    //HEALTH INFO
    $age = date_diff(date_create($date_of_birth),date_create($date))->y;
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $actlevel = $_POST['actlevel'];
    $health_history = $_POST['health_history'];

    if($actlevel == 1){
        $actLevel_ = number_format(rand(1.0*10,1.39*10)/10,2);
    }else if($actlevel == 2){
        $actLevel_ = number_format(rand(1.4*10,1.59*10)/10,2);
    }else if($actlevel == 3){
        $actLevel_ = number_format(rand(1.6*10,1.89*10)/10,2);
    }else if($actlevel == 4){
        $actLevel_ = number_format(rand(1.9*10,2.5*10)/10,2);
    }else{
        echo "<script>alert('Input Valid Number') </script>";
    }
    
    if($gender == 'Male' && $age >= 3 && $age <= 8){ // Boys 3-8 Years old
        $compute_height =  $height / 100;
        $total_height = $compute_height * $compute_height;
        $compute_BMI = $weight / $total_height;

        // $height_and_weight_ = $weight_ + $height_;
        // $PAL_and_HW = $actLevel_ * $height_and_weight_;
        // $age_ = 61.9 * $age;
        // $PAL_HW = $PAL_and_HW + 20;
        // $age_PAL_HW = $age_ + $PAL_HW;
        // $total = number_format(($age_PAL_HW - $eer)/1.5,4);
        // $rootHeight = $height * $height;
    
        
    }else if($gender == 'Male' && $age >= 9 && $age <= 18){ // Boys 9-18 Years old
        $compute_height =  $height / 100;
        $total_height = $compute_height * $compute_height;
        $compute_BMI = $weight / $total_height;
        // $height_and_weight_ = $weight_ + $height_;
        // $PAL_and_HW = $actLevel_ * $height_and_weight_;
        // $age_ = 61.9 * $age;
        // $PAL_HW = $PAL_and_HW + 20;
        // $age_PAL_HW = $age_ + $PAL_HW;
        // $total = number_format(($age_PAL_HW - $eer)/1.5,4);
        // $rootHeight = $height * $height;
        // $eer = 88.5;
        // $weight_ = 26.7 * $weight;
        // $height_ = 903 * $height;
        // $height_and_weight_ = $weight_ + $height_;
        // $PAL_and_HW = $actLevel_ * $height_and_weight_;
        // $age_ = 61.9 * $age;
        // $PAL_HW = $PAL_and_HW + 25;
        // $age_PAL_HW = $age_ + $PAL_HW;
        // $total = number_format(($age_PAL_HW - $eer)/2.5,4);
        // $rootHeight = $height * $height;
        // $bmi = number_format(($weight / $rootHeight),3);
    }else if($gender == 'Female' && $age >= 3 && $age <= 8){ // Girls 3-8 Years old
        $compute_height =  $height / 100;
        $total_height = $compute_height * $compute_height;
        $compute_BMI = $weight / $total_height;
        // $eer = 135.3;
        // $weight_ = 10.0 * $weight;
        // $height_ = 934 * $height;
        // $height_and_weight_ = $weight_ + $height_;
        // $PAL_and_HW = $actLevel_ * $height_and_weight_;
        // $age_ = 30.8 * $age;
        // $PAL_HW = $PAL_and_HW + 20;
        // $age_PAL_HW = $age_ + $PAL_HW;
        // $total = number_format(($age_PAL_HW - $eer)/1.5,4);
        // $rootHeight = $height * $height;
        // $bmi = number_format(($weight / $rootHeight),3);
    }else if($gender == 'Female' && $age >= 9 && $age <= 18){ // Girls 9-18 Years old

        $compute_height =  $height / 100;
        $total_height = $compute_height * $compute_height;
        $compute_BMI = $weight / $total_height;
        // $eer = 135.3;
        // $weight_ = 10.0 * $weight;
        // $height_ = 934 * $height;
        // $height_and_weight_ = $weight_ + $height_;
        // $PAL_and_HW = $actLevel_ * $height_and_weight_;
        // $age_ = 30.8 * $age;
        // $PAL_HW = $PAL_and_HW + 25;
        // $age_PAL_HW = $age_ + $PAL_HW;
        // $total = number_format(($age_PAL_HW - $eer)/2.5,4);
        // $rootHeight = $height * $height;
        // $bmi = number_format(($weight / $rootHeight),3);
    }else{
        echo "<script>alert('Invalid Age') </script>";
        exit();
    }

    if($compute_BMI <= 18.5){
        echo "Under Weight <br>";
        $status = "Under Weight";
    }else if($compute_BMI >= 18.5 || $compute_BMI <= 24.9){
        echo "Healthy Weight <br>";
        $status = "Healthy Weight";
    }else if($compute_BMI >= 25 || $compute_BMI <= 29.9){
        echo "Over Weight <br>";
        $status = "Over Weight";
    }else if($compute_BMI == 30 || $compute_BMI <= 34.9){
        echo "Obese Class 1 <br>";
        $status = "Obese Class 1";
    }else if($compute_BMI == 35 || $compute_BMI <= 39.9){
        echo "Obese Class 2 <br>";
        $status = "Obese Class 2";
    }else if($compute_BMI >= 40){
        echo "Obese Class 3 <br>";
        $status = "Obese Class 3";
    }

    //random number sa user_id
    $user_id = "2022" . rand('00000', '99999');
    $user_type = "2";

    $guardian_first_name = ucfirst($_POST['guardian_first_name']);
    $guardian_middle_name = ucfirst($_POST['guardian_middle_name']);
    $guardian_last_name = ucfirst($_POST['guardian_last_name']);
    $guardian_gender = ucfirst($_POST['guardian_gender']);


    //verification naman if already added na sa database hindi na sya papasok XD or validation

    $validation = "SELECT * FROM students WHERE student_id = '$student_id' ";
    $run_validation = mysqli_query($conn,$validation);
    if(mysqli_num_rows($run_validation) > 0){
        echo "<script>alert('Student Already Added') </script>";
        exit();
    }
    

    //query ni student info
    if(!in_array($file_extension, $allowed_extension)){
        echo "<script>alert('Image not added') </script>" ;
       exit();
    }else{
        $query_insert_student = "INSERT INTO students (student_id,first_name,middle_name,last_name,date_of_birth,age,gender,room,house,street,subdivision,barangay,city,zip,`image`,grade,section,date_created, date_time_created,date_time_updated) VALUES ('$student_id', '$first_name', '$middle_name', '$last_name', '$date_of_birth','$age','$gender','$room', '$house' ,'$street' ,'$subdivision' ,'$barangay', '$city', '$zip_code', '$image', '$grade', '$section', '$date','$date $time' , '$date $time')";
        $run_insert_student = mysqli_query($conn,$query_insert_student);
        move_uploaded_file($_FILES["image"]["tmp_name"], "parents/student_image/" . $_FILES["image"]["name"]);

        if($run_insert_student){

            //mareredirect para sa magulang nya naman hahaha
            echo "added to database query_insert_student" . '<br>';
           
        }else{
            echo "error" . $conn->error;
        }

    }

    //USER NAMAN DITOOO
    if(!in_array($file_extension, $allowed_extension)){
        echo "image not added"  ;
       exit();
    }else{

    $query_insert_user = "INSERT INTO users (user_id,email,password,first_name,middle_name,last_name,contact_number,room,house,street,subdivision,barangay,city,zip,gender,user_type,image,student_id,date_time_created,date_time_updated) VALUES('$user_id', '$email','$default_password', '$guardian_first_name', '$guardian_middle_name' , '$guardian_last_name' ,'$contact_number', '$room', '$house' ,'$street' ,'$subdivision' ,'$barangay', '$city', '$zip_code', '$guardian_gender', '$user_type', '$guardian_image', '$student_id', '$date $time' , '$date $time' )";
    $run_insert_user = mysqli_query($conn,$query_insert_user);
    move_uploaded_file($_FILES["guardian_image"]["tmp_name"], "parents/guardian_image/" . $_FILES["guardian_image"] ["name"]);

    if($run_insert_user){
        echo "insert into database insert_user" . '<br>';
    }

    }

    // papasok na to sa history

    $query_history = "INSERT INTO history (student_id,program_id,bmi,date_created,date_time_updated) VALUES ('$student_id','$program_id','$compute_BMI', '$date' , '$date $time' ) ";
    $run_history = mysqli_query($conn,$query_history);

    if($run_history) {
        echo "added";
    }else{
        echo "error";
    }

    $query_history = "INSERT INTO history_bmi (student_id,program_id,bmi,date_created,date_updated) VALUES ('$student_id','$program_id','$compute_BMI', '$date' , '$date' ) ";
    $run_history = mysqli_query($conn,$query_history);

    if($run_history) {
        echo "added";
    }else{
        echo "error";
    }

    //DITO NA ATA YUNG SA STEPPER RIRI
    //HEALTH INFO
    // dito mamaya yung BMI chururut nya
    //insert na to
    // $query_insert_health_info = "INSERT INTO health_infos (student_id,height,weight,bmi,status,health_history,date_time_created,date_time_updated) VALUES ('$student_id', '$height', '$weight' , '$bmi' , '$status' , '$health_history', '$date $time', '$date $time')";
    // $run_insert_health_info = mysqli_query($conn,$query_insert_health_info);

    // if($run_insert_health_info){
    //     echo "added to database insert_health_info" . '<br>';
    // }else{
    //     echo "error health info" . $conn->error;
    // }

    // Store the cipher method
    $ciphering = "AES-128-CTR";

    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '1234567891011121';

    // Store the encryption key
    $encryption_key = "TeamAgnat";

    // Use openssl_encrypt() function to encrypt the data
    $encryption = openssl_encrypt($student_id, $ciphering,
                $encryption_key, $options, $encryption_iv);
    $check_stdnt_bmi = "SELECT * FROM `health_infos` WHERE `student_id` = '$student_id'";
    $query_check_stdnt_bmi = mysqli_query($conn, $check_stdnt_bmi);
    if(mysqli_num_rows($query_check_stdnt_bmi) > 0){
        echo "Request Failed, Your health info is already inserted. <br>";
        exit();
    }else{
    $insert_bmi = "INSERT INTO `health_infos` (`student_id`, `height`, `weight`, `bmi`, `status`, `active_level`, `health_history`, `date_time_created` , `date_time_updated`)
    VALUES ('$student_id', '$height', '$weight', '$compute_BMI', '$status', '$actlevel', '$health_history', '$date $time' , '$date $time')";
    $query_bmi = mysqli_query($conn, $insert_bmi);
    if($query_bmi == true){
        echo "added to database insert_health_info" . '<br>';
        $_SESSION['student_id'] = $student_id;
        header("location:survey.php?id=$encryption");
        exit();
    }else{
        echo $conn->error;
    }
    }


    //Si USER is parent  nya yon kaya may user_type sa table nya
    


ob_end_flush();
}

?>