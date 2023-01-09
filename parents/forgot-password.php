<?php
include('opacity.js');
include('../connection.php');
session_start();
ob_start();


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
                <input type="text" name="student_id" placeholder="Student Id" class="form-control">
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
                <input type="submit" name="check_security" value="Next" class="btn btn-primary w-100">
            </div>
        </div>
    </form>
</div>
</body>
</html>

<?php

if(isset($_POST['check_security'])){

    $student_id = $_POST['student_id'];
    $question_1 = $_POST['question_1'];
    $answer1 = $_POST['answer1'];
    $question_2 = $_POST['question_2'];
    $answer2 = $_POST['answer2'];

    // SELECT questions.question_1,questions.question_2,questions.answer_1,questions.answer_2 , users.student_id
    // FROM questions
    // LEFT JOIN users
    // ON questions.student_id = users.student_id
    // WHERE users.student_id = 'Hilary' AND questions.question_1 = 'What is the name of your first pet?' AND questions.question_2 = 'What was your first car?' AND questions.answer_1 = '123' AND questions.answer_2 = '12'

    // SELECT questions.question_1,questions.question_2,questions.answer_1,questions.answer_2 , users.student_id
    // FROM questions
    // LEFT JOIN users
    // ON questions.student_id = users.user_id
    // WHERE users.student_id = '$student_id' AND questions.question_1 = '$question_1' AND questions.question_2 = '$question_2' AND questions.answer_1 = '$answer1' AND questions.answer_2 = '$answer2'


    $query_check = "SELECT questions.question_1,questions.question_2,questions.answer_1,questions.answer_2 , users.student_id
    FROM questions
    LEFT JOIN users
    ON questions.student_id = users.student_id
    WHERE users.student_id = '$student_id' AND questions.question_1 = '$question_1' AND questions.question_2 = '$question_2' AND questions.answer_1 = '$answer1' AND questions.answer_2 = '$answer2'
";
    $run_check = mysqli_query($conn,$query_check);

    
    if(mysqli_num_rows($run_check) > 0){
        foreach($run_check as $row) {

            if($question_1 == $row ['question_1'] && $question_2 == $row ['question_2'] && $answer1 == $row ['answer_1'] && $answer2 == $row['answer_2']){
                $_SESSION['student_id'] = $student_id;
                header('Location: update-password.php');
            }
        }
    }else{
        echo "<script>alert('Did not match our records'); </script>";
    }
    

}

ob_end_flush();

?>