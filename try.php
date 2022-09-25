<?php
include ('connection.php');
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
    <form action="" method="POST">
        <input type="text" name="age" placeholder="Age">
        <select name="gender" id="">
            <option value="0">Male</option>
            <option value="1">Female</option>
        </select>
        <input type="text" name="weight" placeholder="Weight">
        <input type="text" name="height" placeholder="Height">
        <select name="actlevel" id="">
            <option value="1">Sedentary</option>
            <option value="2">Low Active</option>
            <option value="3">Active</option>
            <option value="4">Very Active</option>
        </select>
        <br>
        <span>1. Are you a picker eater?
            <input type="radio" name="surveyAnswer[0]" value="1">
            <label for="yes">Yes</label>
            <input type="radio" name="surveyAnswer[0]" value="0">
            <label for="no">No</label>
        </span>
        <br>
        <span>2. Do you eat vegetables?
            <input type="radio" name="surveyAnswer[1]" value="1">
            <label for="yes">Yes</label>
            <input type="radio" name="surveyAnswer[1]" value="0">
            <label for="no">No</label>
        </span>
        <br>
        <span>3. Do you play video games?
            <input type="radio" name="surveyAnswer[2]" value="1">
            <label for="yes">Yes</label>
            <input type="radio" name="surveyAnswer[2]" value="0">
            <label for="no">No</label>
        </span>
        <br>
        <span>4. Do you exercise?
            <input type="radio" name="surveyAnswer[3]" value="1">
            <label for="yes">Yes</label>
            <input type="radio" name="surveyAnswer[3]" value="0">
            <label for="no">No</label>
        </span>
        <br>
        <span>5. Do you sleep well?
            <input type="radio" name="surveyAnswer[4]" value="1">
            <label for="yes">Yes</label>
            <input type="radio" name="surveyAnswer[4]" value="0">
            <label for="no">No</label>
        </span>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit'])){
    date_default_timezone_set("Asia/Manila");
    $date_time_created = date("Y-m-d h:i:s");
    $date = date("Y-m-d");
    $ended_date = date("Y-m-d", strtotime($date . '+ 30 days'));

    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = ($_POST['height']);
    $weight = $_POST['weight'];
    $actlevel = $_POST['actlevel'];

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
    
    if($gender == 0 && $age >= 3 && $age <= 8){ // Boys 3-8 Years old
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
        
    }else if($gender == 0 && $age >= 9 && $age <= 18){ // Boys 9-18 Years old
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
    }else if($gender == 1 && $age >= 3 && $age <= 8){ // Girls 3-8 Years old
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
    }else if($gender == 1 && $age >= 9 && $age <= 18){ // Girls 9-18 Years old
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
    // echo $total . "<br>";
    // echo $bmi . " ";
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

    $check_stdnt_bmi = "SELECT * FROM `health_infos` WHERE `student_id` = 'mathew123'";
    $query_check_stdnt_bmi = mysqli_query($conn, $check_stdnt_bmi);
    if(mysqli_num_rows($query_check_stdnt_bmi) > 0){
        echo "Request Failed, Your health info is already inserted. <br>";
    }else{
   
    }
    $insert_bmi = "INSERT INTO `health_infos` (`student_id`, `height`, `weight`, `bmi`, `status`, `date_time_created`)
    VALUES ('mathew123', '$height_', '$weight_', '$bmi', '$status', '$date')";
    $query_bmi = mysqli_query($conn, $insert_bmi);
    if($query_bmi == true){
        echo "bmi inserted <br>";
    }else{
        echo $conn->error;
    }
    

    // Survey
    $question = array(1, 2, 3, 4, 5);
    $surveyAnswer = $_POST['surveyAnswer'];
    if(empty($_POST['surveyAnswer'])){
        echo "tite";
    }else{
        $check_stdnt_srvey = "SELECT * FROM `students_survery_answers` WHERE `student_id` = 'mathew123'";
        $query_check_stdnt_srvey = mysqli_query($conn, $check_stdnt_srvey);
        if(mysqli_num_rows($query_check_stdnt_srvey) > 0){
            echo "You already submitted your information <br>";
            exit();
        }else{
            for($i=0;$i<count($question);$i++){
                $sql = "INSERT INTO `students_survery_answers` (`student_id`, `question`, `answer`) 
                VALUES ('mathew123','".$question[$i]."','".$surveyAnswer[$i]."')";
                $sql_query = mysqli_query($conn, $sql);
                }
                if($sql_query == true){
                    $surveyResult = "SELECT COUNT(answer) AS 'yes_answer' FROM students_survery_answers 
                    WHERE student_id = 'mathew123' AND answer = 1";
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
    }
    

        // Foods
        $days = array(1, 2, 3, 4, 5, 6, 7);

        for($i=0;$i<count($days);$i++){

        $rand_foods = "SELECT distinct name FROM foods WHERE food_type_id = 1 ORDER BY RAND()";
        $query_rand_foods = mysqli_query($conn, $rand_foods);
        $rand_meals = mysqli_fetch_array($query_rand_foods);
        $meals = ucwords($rand_meals['name']);
        $meals = implode(',',array_unique(explode(',', $meals)));

        $random_foods = "SELECT distinct name FROM foods WHERE food_type_id = 2 ORDER BY RAND()";
        $query_random_foods = mysqli_query($conn, $random_foods);
        $random_meals = mysqli_fetch_array($query_random_foods);
        $rand_meals = ucwords($random_meals['name']);
        $rand_meals = implode(',',array_unique(explode(',', $rand_meals)));

        $go_foods = "SELECT distinct name FROM foods WHERE food_type_id = 1 ORDER BY RAND()";
        $query_go_foods = mysqli_query($conn, $go_foods);
        $go_meals = mysqli_fetch_array($query_go_foods);
        $go = ucwords($go_meals['name']);
        $go = implode(',',array_unique(explode(',', $go)));

        $glow_foods = "SELECT distinct name FROM foods WHERE food_type_id = 2 ORDER BY RAND()";
        $query_glow_foods = mysqli_query($conn, $glow_foods);
        $glow_meals = mysqli_fetch_array($query_glow_foods);
        $glow = ucwords($glow_meals['name']);
        $glow = implode(',',array_unique(explode(',', $glow)));

        $grow_foods = "SELECT distinct name FROM foods WHERE food_type_id = 3 ORDER BY RAND()";
        $query_grow_foods = mysqli_query($conn, $grow_foods);
        $grow_meals = mysqli_fetch_array($query_grow_foods);
        $grow = ucwords($grow_meals['name']);
        $grow = implode(',',array_unique(explode(',', $grow)));
        // echo "Day ".$days[$i].": ".$go." , ".$glow.", ".$grow.", ".$meals.", ".$rand_meals." " . "<br>";
        
        $array_meals = array($go, $glow, $grow, $meals, $rand_meals);
        $meal_per_day = implode(", ", $array_meals);


        $sql_insert_program_record = "INSERT INTO `program_records`(`student_id`, `date_started`,
        `foods`, `day`, `ended_day`, `date_time_created`) 
        VALUES ('mathew123','$date_time_created','$meal_per_day','".$days[$i]."','$ended_date','$date_time_created')";
        $query_sql_insert_program_record = mysqli_query($conn, $sql_insert_program_record) or die (mysqli_error($conn));
    }
        if($query_sql_insert_program_record == true){
            echo "program record inserted";
        }else{
            echo $conn->error;
        }
}
?>