<?php
include('connection.php');
session_start();
ob_start();
$_SESSION['student_id'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../src/img/icons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/custom.css">
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Document</title>
</head>
<body class="bg-light">
<div class="container">
    <form action="" method="POST" class="d-flex justify-content-center">
        <div class="row card p-5 mt-5">
            <div class="col-lg-12 text-center">
                <p class="h2 mb-5">Security Questions</p>
            </div>
            <div class="col-lg-12 col-md-12 mb-5">
                <select name="question_1" id="" class="form-select mb-2">
                    <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                    <option value="What was your first car?">What was your first car?</option>
                    <option value="Who is your first crush?">Who is your first crush?</option>
                    <option value="What elementary school did you attend?">What elementary school did you attend?</option>
                </select>
                <input type="text" name="answer1" placeholder="answer" class="form-control">
            </div>
            <div class="col-lg-12 col-md-12 mb-5">
                <select name="question_2" id="" class="form-select mb-2">
                    <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                    <option value="What was your first car?">What was your first car?</option>
                    <option value="Who is your first crush?">Who is your first crush?</option>
                    <option value="What elementary school did you attend?">What elementary school did you attend?</option>
                </select>
                <input type="text" name="answer2" placeholder="answer" class="form-control">
            </div>
            <div class="col-lg-12">
                <input type="submit" name="add_security" value="Next" class="btn btn-primary w-100">
            </div>
        </div>
    </form>
</div>




</body>
</html>

<?php

if(isset($_POST['add_security'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');
    
    $question_1 = $_POST['question_1'];
    $answer1 = $_POST['answer1'];
    $question_2 = $_POST['question_2'];
    $answer2 = $_POST['answer2'];
    $student_id = $_SESSION['student_id'];
    $user_type = 2;
    $user_id = 0;

    if($question_1 == $question_2){
        echo "<script>alert('Choose other question') </script>";
    }elseif($answer1 == $answer2){
        echo "<script>alert('Answer must not be the same') </script>";
    }else{

        $sql = "INSERT INTO questions (user_type,student_id,user_id,question_1,answer_1,question_2,answer_2,date_time_created,date_time_updated) VALUES ('$user_type','$student_id','$user_id' ,'$question_1', '$answer1', '$question_2', '$answer2' , '$date $time', '$date $time')";
        $run = mysqli_query($conn,$sql);
    
        if($run){
            // echo "<script>alert('Registration Successful'); </script>";
            echo "<script>window.location.href= 'home-admin.php?m=1' </script>";
        }else{
            echo "error" . $conn->error;
        }
    }


}


ob_end_flush();


?>