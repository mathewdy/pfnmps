<?php
include ("connection.php");
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
    <form action="" method="post">
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
    if(isset($_POST['submit'])){
        $question = array(1, 2, 3, 4, 5);
        $surveyAnswer = $_POST['surveyAnswer'];
        if(empty($_POST['surveyAnswer'])){
            echo "tite";
        }
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
                    echo "Survey Result: Bad";
                }else if($rows['yes_answer'] >= 4){
                    echo "Survey Result: Good";
                }else if($rows['yes_answer'] == 2 || $rows['yes_answer'] == 3){
                    echo "Survey Result: Neutral";
                }
            }else{
                echo $conn->error;
            }
    }
?>