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
    <title>Document</title>
</head>
<body>
    <h1>Add Patient Info</h1>
    <a href="home-admin.php">Back</a>

    <h2>Name of Patient</h2>

    <!----mamaya lagyan natin to ng mga REQUIRED INPUT FIELD---->

    <form action="add-patient.php" method="POST" enctype="multipart/form-data">
        <label for="">Student ID</label>
        <input type="text" name="student_id">

        <br>

        <label for="">First Name</label>
        <input type="text" name="first_name">
        <br>

        <label for="">Middle Name</label>
        <input type="text" name="middle_name">

        <br>
        <label for="">Last Name</label>
        <input type="text" name="last_name">



        <br>
        <label for="">Date of Birth</label>
        <input type="date" name="date_of_birth">

        <br>
        <label for="">Gender</label>
        <br>
        <label for="">Male</label>
        <input type="radio" name="gender" value="Male">
        <label for="">Female</label>
        <input type="radio" name="gender" value="Female">

        <br>
        <label for="">Image</label>
        <input type="file" name="image">

        <br>

        <label for="">Grade</label>
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
        <input type="text" name="section">


        <!----name of parent--->
        <h2>Name of Guardian</h2>
        <br>
        <label for="">First Name</label>
        <input type="text" name="guardian_first_name">
        <br>

        <label for="">Middle Name</label>
        <input type="text" name="guardian_middle_name">

        <br>
        <label for="">Last Name</label>
        <input type="text" name="guardian_last_name">
        
        <br>
        <label for="">Email</label>
        <input type="email" name="email">


        <!-----ADDRESS---->

        <br>
        <label for="">Address</label>
        <label for="">Room / Floor / Unit No. & Building Name</label>
        <input type="text" name="room">

        <br>
        <label for="">House / Lot & Block No.</label>
        <input type="text" name="house">

        <br>
        <label for="">Street</label>
        <input type="text" name="street">

        <br>
        <label for="">Subdivision</label>
        <input type="text" name="subdivision">


        <br>
        <label for="">Barangay</label>
        <input type="text" name="barangay">


        <br>
        <label for="">City</label>
        <input type="text" name="city">

        
        <br>
        <label for="">Zip Code</label>
        <input type="number" name="zip_code"> 

        <br>

        <label for="">Gender</label>
        <br>
        <label for="">Male</label>
        <input type="radio" name="guardian_gender" value="Male">
        <label for="">Female</label>
        <input type="radio" name="guardian_gender" value="Female">

        <br>
        <label for="">Image</label>
        <input type="file" name="guardian_image">

        <br>

        <br>

        <h2>Health Info</h2>
        <!----dito health info nya naman---BMI-->
        <label for="">Height</label>
        <input type="number" name="height">
        <br>

        <label for="">Weight</label>
        <input type="number" name="weight">

        <br>

        <label for="">BMI</label>
        <input type="number" name="bmi">

        <br>
        <br>
        <label for="">BMI Categories / Status</label>

        <br>
        <label for="">Underweight</label>
        <input type="radio" name="category" id="Underweigth" value="Underweigth">

        <br>
        <label for="">Normal Weight</label>
        <input type="radio" name="category" id="Normal_Weight" value="Normal Weight">
        
        <br>
        <label for="">Over Weight</label>
        <input type="radio" name="category" id="Over_Weight" value="Over Weight">

        <br>
        <label for="">Obesity</label>
        <input type="radio" name="category" id="Obesity" value="obesity">

        <br>
        <label for="">Health History</label>
        <input type="text" name="health_history">

        <!-----riri ikaw na bahala mag adjust sa stepper--->
        <br>
        <input type="submit" name="add_patient" value="Next">
    </form>
</body>
</html>


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
    
    $gender = $_POST['gender'];

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
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bmi = $_POST['bmi'];
    $category = $_POST['category'];
    $health_history = $_POST['health_history'];

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
    $query_insert_health_info = "INSERT INTO health_infos (student_id,height,weight,bmi,status,health_history,date_time_created,date_time_updated) VALUES ('$student_id', '$height', '$weight' , '$bmi' , '$category' , '$health_history', '$date $time', '$date $time')";
    $run_insert_health_info = mysqli_query($conn,$query_insert_health_info);

    if($run_insert_health_info){
        echo "added to database insert_health_info" . '<br>';
    }else{
        echo "error health info" . $conn->error;
    }


    //Si USER is parent  nya yon kaya may user_type sa table nya
    


ob_end_flush();
}

?>