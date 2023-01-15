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
    <title>Document</title>
</head>
<body>
    
    <h2>History of Records</h2>
    <?php


    if(isset($_GET['student_id'])){
        $student_id = $_GET['student_id'];


        
        $query_bmi = "SELECT bmi , date_created FROM history WHERE student_id = '$student_id'";
        $run_bmi = mysqli_query($conn,$query_bmi);

        if(mysqli_num_rows($run_bmi) > 0){
            foreach($run_bmi as $row1){
                ?>
                    <p>Previous BMI: <?php echo $row1['bmi']?></p>  
                    <p>Date: <?php $date = date("M-d-Y", strtotime($row1['date_created'])); 
                    echo $date;?></p>


                <?php
            }
        }



        $sql = "SELECT program_records.student_id , program_records.date_started, program_records.foods, program_records.exercises, program_records.day, program_records.ended_day , program_records.food_acknowledge , program_records.exercise_acknowledge
        FROM program_records WHERE program_records.student_id = '$student_id'";
        $run = mysqli_query($conn,$sql);

        if(mysqli_num_rows($run) > 0){
            foreach($run as $row){
                ?>
                <label for="">Date Started</label>
                <p><?php echo $row['date_started']?></p>
                <label for="">Day</label>
                <p><?php echo $row ['day']?></p>
                <label for="">Daily Meals</label>
                <p><?php echo $row['foods']?></p>

                <label for="">Status</label>
                <p>
                    <?php 
                    //kulay green kapag na acknowledge
                    // red kapag hindi

                    if($row['food_acknowledge'] == '1'){
                        echo "Acknowledged";
                    }else{
                        echo "Unfinished";
                    }

                    ?>
                    
                </p>


                <label for="">Daily Activities</label>
                <p><?php echo $row['exercises']?></p>
                <label for="">Status</label>
                <p>
                    <?php if($row ['exercise_acknowledge']== '1'){
                        echo "Acknowledged";
                    }else{
                        echo "Unfinished";
                    }
                    
                    ?>
                </p>

                <?php
            }
        }



    }


    ?>


</body>
</html>

<?php

ob_end_flush();

?>