<?php

include('connection.php');
session_start();


if(isset($_GET['student_id'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');
    
    $student_id = $_GET['student_id'];


    $query_student = "SELECT * FROM students WHERE student_id = '$student_id'";
    $run_student = mysqli_query($conn,$query_student);


    if(mysqli_num_rows($run_student) > 0){
        foreach($run_student as $row){
            $old_student_id = $row['student_id'];
            $first_name = $row['first_name'];
            $middle_name = $row['middle_name'];
            $last_name = $row['last_name'];
            $date_of_birth = $row['date_of_birth'];
            $age = $row['age'];
            $gender = $row['gender'];
            $room = $row['room'];
            $house = $row['house'];
            $street = $row['street'];
            $subdivision = $row['subdivision'];
            $barangay = $row['barangay'];
            $city = $row['city'];
            $zip = $row['zip'];
            $image = $row['image'];
            $grade = $row['grade'];
            $section = $row['section'];
            $four_ps = $row['four_ps'];

            
            

            $insert_data = "INSERT INTO deleted_student (student_id,first_name,middle_name,last_name,date_of_birth,age,gender,room,house,street,subdivision,barangay,city,zip,image,grade,section,four_ps,date_created,date_time_created,date_time_updated) VALUES ('$old_student_id','$first_name','$middle_name', '$last_name','$date_of_birth', '$age', '$gender','$room','$house','$street','$subdivision','$barangay','$city','$zip','$image','$grade','$section', '$four_ps', '$date' ,'$date $time' , '$date $time')";
            $run_insert = mysqli_query($conn,$insert_data);

            if($run_insert){
            echo "ADDED  / deleted";

            $insert_failed = "INSERT INTO failed (student_id,output,date_created,date_updated) VALUES ('$old_student_id','failed', '$date', '$date')";
            $run_failed = mysqli_query($conn,$insert_failed);
            if($run_failed){
                echo "added failed";
                
            }
            }else{
                echo "error" . $conn->error;
            }
            $query = "DELETE FROM students WHERE student_id = '$student_id'";
            $run = mysqli_query ($conn,$query);

            if($run){
                // echo "<script>alert('deleted info') </script>";
                // echo "<script>window.location.href='view-students.php' </script>";
                echo "<script>window.location.href='view-students.php' </script>";

            }else{
                echo "error" . $conn->error;
            }

            
        }
    }

    

    
    

    
}

?>