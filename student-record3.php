<?php $id = $_GET['id']?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width:100%;
        text-align: center;
    }
    th, td{
        padding: 2px 20px;

        text-align: center;
    }
</style>
<body>
    <hr>
    <span style="text-align: center;">
        <h2>Student Personal Information</h2>
    </span>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Grade & Section</th>
                <th>Date Of Birth</th>
                <th>4ps Member</th>
                <th>Email Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $rows['student_first_name'] .' '. $rows['student_middle_name'] .' '. $rows['student_last_name'] ?></td>
                <td><?= $rows['student_grade'] .'-'. $rows['student_section'] ?></td>
                <td><?= $rows['student_date_of_birth']?></td>
                <td><?php if($rows['student_four_ps'] == 0){
                    echo 'No';
                } else {
                    echo 'Yes';
                }
                ?></td>
                <td><?= $rows['user_email']?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <table>
        <thead>
        <tr>
            <th>Current BMI</th>
            <th>Current Height</th>
            <th>Current Weight</th>
            <th>Current Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $rows['health_infos_bmi']?></td>
            <td><?= $rows['health_infos_height']?></td>
            <td><?= $rows['health_infos_weight']?></td>
            <td><?= $rows['health_infos_status']?></td>
        </tr>
        </tbody>
    </table>
    <br>
    <hr>
    <span style="text-align: center;">
        <h2>Activities & Meals (Day 15-21)</h2>
    </span>
    <hr>
    <table>
        <tr>
            <th>Activities</th>
            <th>Meals</th>
        </tr>
        <td>
     <?php 
     $sql_daily_activities = "SELECT exercises,exercise_acknowledge, id FROM program_records WHERE student_id = '$id' LIMIT 14, 7";
     $run_daily_activities = mysqli_query($conn,$sql_daily_activities);
     if(mysqli_num_rows($run_daily_activities) > 0){
        foreach ($run_daily_activities as $row2){
            ?>

        <p><?= $row2['exercises'] ?> -
        <?php 
            if($row2['exercise_acknowledge'] == 0){
                 echo 'Missed';                               
            }else{
                echo 'Done';
            }
            ?>
        </p>

    <?php
        }
    }
    ?>
    </td>
    <td>
    <?php
    $sql_program_records = "SELECT * FROM program_records WHERE student_id = '$id' LIMIT 14,7";
    $run_program_records = mysqli_query($conn,$sql_program_records);

    if (mysqli_num_rows($run_program_records) > 0) {
        foreach ($run_program_records as $row3) {
            ?>
            <p><?= $row3['foods'] ?> - 
            <?php 
            if($row3['food_acknowledge'] == 0){
                 echo 'Missed';                               
            }else{
                echo 'Done';
            }
            ?>
        </p>
    <?php
        }
    }
    ?>
    </td>
    </table>

</body>
</html>