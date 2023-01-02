<?php
ob_start();
include('../connection.php');
session_start();

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
    <!-- <link href="./admin-template/css/app.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../src/styles/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

			<main class="content">
				<div class="container p-0">
                    <div class="row d-flex justify-content-center p-5">
                        <div class="col-lg-5">

                        
                        <h2>Name of Patient</h2>
                        <form action="registration.php" method="POST" enctype="multipart/form-data">
                            <label for="">Student ID</label>
                            <input type="text" class="form-control py-1" name="student_id">

                            <br>

                            <label for="">First Name</label>
                            <input type="text" class="form-control py-1" name="first_name">
                            <br>

                            <label for="">Middle Name</label>
                            <input type="text" class="form-control py-1" name="middle_name">

                            <br>
                            <label for="">Last Name</label>
                            <input type="text" class="form-control py-1" name="last_name">



                            <br>
                            <label for="">Date of Birth</label>
                            <input type="date" class="form-control py-1" name="date_of_birth">
                            
                            <br>
                            <label for="">Age</label>
                            <input type="text" class="form-control py-1" name="age" placeholder="Age">
                            <br>
                            <label for="">Gender</label>
                            <br>
                            <label for="">Male</label>
                            <input type="radio" name="gender" value="Male">
                            <label for="">Female</label>
                            <input type="radio" name="gender" value="Female">

                            <br>
                            <label for="">Image</label>
                            <input type="file" class="form-control py-1" name="image">

                            <br>

                            <label for="">Grade</label>
                            <select name="grade" class="form-select py-1" id="">
                                <option value="Grade 1">Grade 1</option>
                                <option value="Grade 2">Grade 2</option>
                                <option value="Grade 3">Grade 3</option>
                                <option value="Grade 4">Grade 4</option>
                                <option value="Grade 5">Grade 5</option>
                                <option value="Grade 6">Grade 6</option>
                            </select>

                            <br>
                            <label for="">Section</label>
                            <input type="text" class="form-control py-1"name="section">
                            </div>
                            <div class="col-lg-5">

                            
                            <!----name of parent--->
                            <h2>Name of Guardian</h2>
                            <label for="">First Name</label>
                            <input type="text" class="form-control py-1" name="guardian_first_name">
                            <br>

                            <label for="">Middle Name</label>
                            <input type="text" class="form-control py-1" name="guardian_middle_name">

                            <br>
                            <label for="">Last Name</label>
                            <input type="text" class="form-control py-1" name="guardian_last_name">
                            
                            <br>
                            <label for="">Email</label>
                            <input type="email" class="form-control py-1" name="email">


                            <!-----ADDRESS---->

                            <br>
                            <label for="">Address</label>
                            <label for="">Room / Floor / Unit No. & Building Name</label>
                            <input type="text" class="form-control py-1" name="room">

                            <br>
                            <label for="">House / Lot & Block No.</label>
                            <input type="text" class="form-control py-1" name="house">

                            <br>
                            <label for="">Street</label>
                            <input type="text" class="form-control py-1" name="street">

                            <br>
                            <label for="">Subdivision</label>
                            <input type="text" class="form-control py-1" name="subdivision">


                            <br>
                            <label for="">Barangay</label>
                            <input type="text" class="form-control py-1" name="barangay">


                            <br>
                            <label for="">City</label>
                            <input type="text" class="form-control py-1" name="city">

                            
                            <br>
                            <label for="">Zip Code</label>
                            <input type="number" class="form-control py-1" name="zip_code"> 

                            <br>

                            <label for="">Gender</label>
                            <br>
                            <label for="">Male</label>
                            <input type="radio" name="guardian_gender" value="Male">
                            <label for="">Female</label>
                            <input type="radio" name="guardian_gender" value="Female">

                            <br>
                            <label for="">Image</label>
                            <input type="file" class="form-control py-1" name="guardian_image">

                            <br>
                            </div>
                            <hr class="featurette-divider">
                            <br>
                            <div class="container px-5">
                                <h2>Health Info</h2>
                                <!----dito health info nya naman---BMI-->
                                <label for="">Height</label>
                                <input type="number" class="form-control w-50 py-1" name="height">
                                <br>

                                <label for="">Weight</label>
                                <input type="number" class="form-control w-50 py-1" name="weight">

                                <br>

                                <select name="actlevel" class="form-select w-50 py-1" id="">
                                <option value="1">Sedentary</option>
                                <option value="2">Low Active</option>
                                <option value="3">Active</option>
                                <option value="4">Very Active</option>
                                </select>

                                <br>
                                <label for="">Health History</label>
                                <input type="text" class="form-control w-50 py-1" name="health_history">
                            </div>
                          
                            <!-----riri ikaw na bahala mag adjust sa stepper--->
                            <span class="text-center mt-5">
                                <a href="login-parent.php" class="btn btn-secondary">Log In</a>
                                <input type="submit" class="btn btn-primary" name="add_patient" value="Next">
                            </span>
                        </form>
                    </div>
				</div>
			</main>
		</div>
	</div>
<script src="./styles/bootstrap/@popperjs/core/dist/umd/popper.js"></script>
<script src="./admin-template/js/app.js"></script>
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
    $student_id = ($_POST['student_id']);
    $first_name = ucfirst($_POST['first_name']);
    $middle_name = ucfirst($_POST['middle_name']);
    $last_name = ucfirst($_POST['last_name']); 

    $email = $_POST['email'];
    $default_password = "Welcome@12345";
    $date_of_birth = date('Y-m-d',strtotime($_POST['date_of_birth']));
    

    //address nya naman to 
    $room = strtoupper($_POST['room']);
    $house = strtoupper($_POST['house']);
    $street = strtoupper($_POST['street']);
    $subdivision = strtoupper($_POST['subdivision']);
    $barangay = strtoupper($_POST['barangay']);
    $city = strtoupper($_POST['city']);
    $zip_code = strtoupper($_POST['zip_code']);


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
    

    //HEALTH INFO
    $age = $_POST['age'];
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
        echo "Invalid Input";
    }
    
    if($gender == 'Male' && $age >= 3 && $age <= 8){ // Boys 3-8 Years old
        $eer = 88.5;
        $weight_ = 26.7 * $weight;
        $height_ = 903 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 61.9 * $age;
        $PAL_HW = $PAL_and_HW + 20;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format(($age_PAL_HW - $eer)/1.5,4);
        $rootHeight = $height * $height;
        $bmi = number_format(($weight / $rootHeight),3);
        
    }else if($gender == 'Male' && $age >= 9 && $age <= 18){ // Boys 9-18 Years old
        $eer = 88.5;
        $weight_ = 26.7 * $weight;
        $height_ = 903 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 61.9 * $age;
        $PAL_HW = $PAL_and_HW + 25;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format(($age_PAL_HW - $eer)/2.5,4);
        $rootHeight = $height * $height;
        $bmi = number_format(($weight / $rootHeight),3);
    }else if($gender == 'Female' && $age >= 3 && $age <= 8){ // Girls 3-8 Years old
        $eer = 135.3;
        $weight_ = 10.0 * $weight;
        $height_ = 934 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 30.8 * $age;
        $PAL_HW = $PAL_and_HW + 20;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format(($age_PAL_HW - $eer)/1.5,4);
        $rootHeight = $height * $height;
        $bmi = number_format(($weight / $rootHeight),3);
    }else if($gender == 'Female' && $age >= 9 && $age <= 18){ // Girls 9-18 Years old
        $eer = 135.3;
        $weight_ = 10.0 * $weight;
        $height_ = 934 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 30.8 * $age;
        $PAL_HW = $PAL_and_HW + 25;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format(($age_PAL_HW - $eer)/2.5,4);
        $rootHeight = $height * $height;
        $bmi = number_format(($weight / $rootHeight),3);
    }else{
        echo "invalid age input <br>";
        exit();
    }

    if($bmi <= 18.5){
        echo "Under Weight <br>";
        $status = "Under Weight";
    }else if($bmi >= 18.5 || $bmi <= 24.9){
        echo "Healthy Weight <br>";
        $status = "Healthy Weight";
    }else if($bmi >= 25 || $bmi <= 29.9){
        echo "Over Weight <br>";
        $status = "Over Weight";
    }else if($bmi == 30 || $bmi <= 34.9){
        echo "Obese Class 1 <br>";
        $status = "Obese Class 1";
    }else if($bmi == 35 || $bmi <= 39.9){
        echo "Obese Class 2 <br>";
        $status = "Obese Class 2";
    }else if($bmi >= 40){
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
        echo "image not added"  ;
       exit();
    }else{
        $query_insert_student = "INSERT INTO students (student_id,first_name,middle_name,last_name,date_of_birth,gender,room,house,street,subdivision,barangay,city,zip,image,grade,section,date_time_created,date_time_updated) VALUES ('$student_id', '$first_name', '$middle_name', '$last_name', '$date_of_birth','$gender','$room', '$house' ,'$street' ,'$subdivision' ,'$barangay', '$city', '$zip_code', '$image', '$grade', '$section', '$date $time' , '$date $time')";
        $run_insert_student = mysqli_query($conn,$query_insert_student);
        move_uploaded_file($_FILES["image"]["tmp_name"], "student_image/" . $_FILES["image"] ["name"]);

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

    $query_insert_user = "INSERT INTO users (user_id,email,password,first_name,middle_name,last_name,room,house,street,subdivision,barangay,city,zip,gender,user_type,image,student_id,date_time_created,date_time_updated) VALUES('$user_id', '$email','$default_password', '$guardian_first_name', '$guardian_middle_name' , '$guardian_last_name' , '$room', '$house' ,'$street' ,'$subdivision' ,'$barangay', '$city', '$zip_code', '$guardian_gender', '$user_type', '$guardian_image', '$student_id', '$date $time' , '$date $time' )";
    $run_insert_user = mysqli_query($conn,$query_insert_user);
    move_uploaded_file($_FILES["guardian_image"]["tmp_name"], "guardian_image/" . $_FILES["guardian_image"] ["name"]);

    if($run_insert_user){
        echo "insert into database insert_user" . '<br>';
    }

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
    $insert_bmi = "INSERT INTO `health_infos` (`student_id`, `height`, `weight`, `bmi`, `status`, `active_level`, `health_history`, `date_time_created`)
    VALUES ('$student_id', '$height_', '$weight_', '$bmi', '$status', '$actlevel', '$health_history', '$date $time')";
    $query_bmi = mysqli_query($conn, $insert_bmi);
    if($query_bmi == true){
        echo "added to database insert_health_info" . '<br>';
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