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
    <link rel="stylesheet" href="src/styles/bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-lg-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card" style="border: none; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.18);">
                            <div class="card-body">
                                <div class="m-sm-4">

                                <?php

                                    if(isset($_GET['student_id'])){
                                        $student_id = $_GET['student_id'];

                                        ?>

                                        <form action="" method="POST">
                                            <input type="hidden" name="student_id" value="<?php echo $student_id?>">
                                        <span class="d-flex align-items-center justify-content-between">
                                            <p class="lead m-0 p-0">1. Are you a picker eater?</p>   
                                            <span>
                                                <input type="radio" name="surveyAnswer[0]" value="1">
                                                <label for="yes">Yes</label>
                                                <input type="radio" name="surveyAnswer[0]" value="0">
                                                <label for="no">No</label>
                                            </span> 
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center justify-content-between">
                                            <p class="lead m-0 p-0">2. Do you eat vegetables?</p>   
                                            <span>
                                                <input type="radio" name="surveyAnswer[1]" value="1">
                                                <label for="yes">Yes</label>
                                                <input type="radio" name="surveyAnswer[1]" value="0">
                                                <label for="no">No</label>
                                            </span> 
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center justify-content-between">
                                            <p class="lead m-0 p-0">3. Do you play video games?</p>   
                                            <span>
                                                <input type="radio" name="surveyAnswer[2]" value="1">
                                                <label for="yes">Yes</label>
                                                <input type="radio" name="surveyAnswer[2]" value="0">
                                                <label for="no">No</label>
                                            </span> 
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center justify-content-between">
                                            <p class="lead m-0 p-0">4. Do you exercise?</p>   
                                            <span>
                                                <input type="radio" name="surveyAnswer[3]" value="1">
                                                <label for="yes">Yes</label>
                                                <input type="radio" name="surveyAnswer[3]" value="0">
                                                <label for="no">No</label>
                                            </span> 
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center justify-content-between">
                                            <p class="lead m-0 p-0">5. Do you sleep well?</p>   
                                            <span>
                                                <input type="radio" name="surveyAnswer[4]" value="1">
                                                <label for="yes">Yes</label>
                                                <input type="radio" name="surveyAnswer[4]" value="0">
                                                <label for="no">No</label>
                                            </span> 
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center justify-content-between">
                                            <p class="lead m-0 p-0">6. Do you have phone ?</p>   
                                            <span>
                                                <input type="radio" name="surveyAnswer[5]" value="1">
                                                <label for="yes">Yes</label>
                                                <input type="radio" name="surveyAnswer[5]" value="0">
                                                <label for="no">No</label>
                                            </span> 
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center justify-content-between">
                                            <p class="lead m-0 p-0">6. Do you have internet connection?</p>   
                                            <span>
                                                <input type="radio" name="surveyAnswer[6]" value="1">
                                                <label for="yes">Yes</label>
                                                <input type="radio" name="surveyAnswer[6]" value="0">
                                                <label for="no">No</label>
                                            </span> 
                                        </span>
                                        <br>
                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </form>


                                        <?php
                                    }


                                ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="src/styles/custom/app.js"></script>
</body>
</html>


<?php

if(isset($_POST['submit'])){

    date_default_timezone_set("Asia/Manila");
    $date_time_created = date("Y-m-d h:i:s");
    $date = date("Y-m-d");
    $ended_date = date("Y-m-d", strtotime($date . '+ 30 days'));
        

    // update na mangyayare dito sa may unang mga table neto
    $question = array(0,1, 2, 3, 4, 5,6);
    $surveyAnswer = $_POST['surveyAnswer'];
    if(empty($_POST['surveyAnswer'])){
        echo "Please answer the survey form.";
    }else{
        for($i=0;$i<count($question);$i++){

            // query_update old table

            $query_old_table = "UPDATE students_survery_answers SET question= '".$question[$i]."', answer = '".$surveyAnswer[$i]."', date_time_created =  '".$date_time_created."', date_time_updated = '".$date_time_created."' WHERE student_id = '".$student_id."' ";

            // $sql = "INSERT INTO `students_survery_answers_history` (`student_id`, `question`, `answer`, `date_time_created`, `date_time_updated`) 
            // VALUES ('$student_id','".$question[$i]."','".$surveyAnswer[$i]."', '".$date_time_created."', '".$date_time_created."')";


            $sql_query = mysqli_query($conn, $query_old_table);
            }
            if($sql_query == true){
                $surveyResult = "SELECT COUNT(answer) AS 'yes_answer' FROM students_survey_answers_history 
                WHERE student_id = '$student_id' AND answer = 1";
                $querysurveyResult = mysqli_query($conn, $surveyResult);
                $rows = mysqli_fetch_array($querysurveyResult);

                if($rows['yes_answer'] <= 1){
                    echo "Survey Result: Bad <br>";
                }else if($rows['yes_answer'] >= 4){
                    echo "Survey Result: Good <br>";
                }else if($rows['yes_answer'] == 2 || $rows['yes_answer'] == 3){
                    echo "Survey Result: Neutral <br>";
                }
            }else{
                echo $conn->error;
            }
    }
    


    // // $end = '2020-05-05';
    // // $date = date('Y-m-d', strtotime($_POST['date']));
    // $end = date('Y-m-d',strtotime($final_date. '+30 days'));


    // $day_count = 0;
    // while(0==0){
    //     $day_count++;

    //     echo "<br>";

    //     $final_date = date('Y-m-d',strtotime($final_date. "+1 days"));
    //     if($day_count==31){

            
    //         break;
    //     }
    //     $insert = "INSERT INTO program_records_2 (student_id,date_started,date_created,date_updated) VALUES ('$student_id', '$final_date','$date', '$date') ";
    //     $run = mysqli_query($conn,$insert);

    //     if($run){
    //         echo "added";
    //     }else{
    //         echo "error" . $conn->error;
    //     }
    // }


    //dito mag uupdate to
        // Foods
        // $days = array(1, 2, 3, 4, 5, 6, 7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);


        // for($i=0;$i<count($days);$i++){

        // $rand_foods = "SELECT distinct name FROM foods WHERE food_type_id = 1 ORDER BY RAND()";
        // $query_rand_foods = mysqli_query($conn, $rand_foods);
        // $rand_meals = mysqli_fetch_array($query_rand_foods);
        // $meals = ucwords($rand_meals['name']);
        // $meals = implode(',',array_unique(explode(',', $meals)));

        // $random_foods = "SELECT distinct name FROM foods WHERE food_type_id = 2 ORDER BY RAND()";
        // $query_random_foods = mysqli_query($conn, $random_foods);
        // $random_meals = mysqli_fetch_array($query_random_foods);
        // $rand_meals = ucwords($random_meals['name']);
        // $rand_meals = implode(',',array_unique(explode(',', $rand_meals)));

        // $go_foods = "SELECT distinct name FROM foods WHERE food_type_id = 1 ORDER BY RAND()";
        // $query_go_foods = mysqli_query($conn, $go_foods);
        // $go_meals = mysqli_fetch_array($query_go_foods);
        // $go = ucwords($go_meals['name']);
        // $go = implode(',',array_unique(explode(',', $go)));

        // $glow_foods = "SELECT distinct name FROM foods WHERE food_type_id = 2 ORDER BY RAND()";
        // $query_glow_foods = mysqli_query($conn, $glow_foods);
        // $glow_meals = mysqli_fetch_array($query_glow_foods);
        // $glow = ucwords($glow_meals['name']);
        // $glow = implode(',',array_unique(explode(',', $glow)));

        // $grow_foods = "SELECT distinct name FROM foods WHERE food_type_id = 3 ORDER BY RAND()";
        // $query_grow_foods = mysqli_query($conn, $grow_foods);
        // $grow_meals = mysqli_fetch_array($query_grow_foods);
        // $grow = ucwords($grow_meals['name']);
        // $grow = implode(',',array_unique(explode(',', $grow)));
        // // echo "Day ".$days[$i].": ".$go." , ".$glow.", ".$grow.", ".$meals.", ".$rand_meals." " . "<br>";
        
        // $array_meals = array($go, $glow, $grow, $meals, $rand_meals);
        // $meal_per_day = implode(", ", $array_meals);


        // $select_exercises = "SELECT * FROM `activities` ORDER BY RAND() LIMIT 10";
        // $query_exercises = mysqli_query($conn, $select_exercises);
        // $exercises_array = mysqli_fetch_array($query_exercises);
        // $exercises = ucwords($exercises_array['exercises']);
        // $exercises2 = implode(',', array_unique(explode(',', $exercises)));

        $query_update_record = "UPDATE program_records SET date_started = '".$date_time_created."',food_acknowledge ='".'0'."' , exercise_acknowledge = '".'0'."', ended_day = '".$ended_date."' , date_time_created= '".$date_time_created."', date_time_updated = '".$date_time_created."'";

        // $sql_insert_program_record = "INSERT INTO `program_records`(`student_id`, `date_started`,
        // `foods`, `exercises`, `day`, `food_acknowledge`,`exercise_acknowledge`,`ended_day`, `date_time_created`, `date_time_updated`) 
        // VALUES ('$student_id','$date_time_created','$meal_per_day','$exercises2','".$days[$i]."','".$acknowledge."','".$acknowledge."','$ended_date','$date_time_created', '$date_time_created')";

        $update_record_2 = mysqli_query($conn, $query_update_record) or die (mysqli_error($conn));
        if($update_record_2 == true){
            echo "program record inserted";
            $_SESSION['student_id'];
            // balik na to sa home page
            header("Location: home-admin.php");
            // header("Location: security-questions.php");
            //dapat malipat pa to don sa set up ng password
        }else{
            echo $conn->error;
        }
}





ob_end_flush();

?>