<?php

include('connection.php');
session_start();

if(isset($_GET['student_id'])){
    $student_id = $_GET['student_id'];
    
    $query = "DELETE FROM students WHERE student_id = '$student_id'";
    $run = mysqli_query ($conn,$query);

    if($run){
        // echo "<script>alert('deleted info') </script>";
        // echo "<script>window.location.href='view-students.php' </script>";
        header('location: view-students.php?m=1');
    }else{
        echo "error" . $conn->error;
    }
}

?>