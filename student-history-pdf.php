<?php $student_id = $_GET['student_id']?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td{
            padding: 2px 12px; 
            text-align: center;
        }
        table, td, th {
            border: 1px solid black;
        }
        th{
            padding: 5px 12px;
        }
    </style>
    <body>

        <p style="padding: 0; margin: 0; font-size: 20px; text-align:center;">Bucal Elementary School</p>  
        <p style="padding: 0; margin: 0; font-size: 13px; text-align:center;">Manila S Rd, Calamba, 4027 Laguna</p>  
        <br>
        <table style="border: none;">
            <tr style="border: none;">
                <td style="border: none; text-align: start;">
                    <?php
                        $query = "SELECT students.student_id AS student_student_id, students.first_name AS student_first_name, students.last_name AS student_last_name ,students.middle_name AS student_middle_name,  students.gender AS student_gender , 
                        students.grade AS student_grade,students.section AS student_section,users.first_name AS user_first_name , users.middle_name AS user_middle_name , 
                        users.last_name AS user_last_name, users.room AS user_room, users.house AS user_house , users.street AS user_street, 
                        users.student_id AS user_student_id, users.user_id AS user_user_id FROM students LEFT JOIN users
                        ON students.student_id = users.student_id 
                        LEFT JOIN health_infos ON students.student_id = health_infos.student_id
                        WHERE students.student_id = '$student_id'";
                        $run = mysqli_query($conn,$query);
                        if(mysqli_num_rows($run) > 0){
                            foreach($run as $row ){
                            ?>
                            <p style="padding: 0; margin: 0; font-size: 20px;"><?= $row['student_first_name'] . ' ' . $row['student_last_name']?></p>
                            <p style="padding: 0; margin: 0; font-size: 20px;"><?= $row['student_grade'] . ' ' . '-' . ' ' . $row['student_section']?></p>
                        <?php
                            }
                        }
                        ?>
                </td>
                <td style="border: none; text-align: right;">
                <?php
                $query_bmi = "SELECT bmi , date_created FROM history WHERE student_id = '$student_id'";
                $run_bmi = mysqli_query($conn,$query_bmi);

                if(mysqli_num_rows($run_bmi) > 0){
                    foreach($run_bmi as $row1){
                        ?>
                            <p style="padding: 0; margin: 0; font-size: 20px;">Previous BMI: <strong><?php echo $row1['bmi']?></strong></p>
                            <p style="padding: 0; margin: 0; font-size: 20px;">Date Started: <?php $date = date("F d, Y", strtotime($row1['date_created'])); 
                            echo $date;?></p>


                        <?php
                    }
                }
                ?>
                </td>
            </tr>
        </table>
        <hr style="margin: 1em 0 2.5em 0;">
        <?php
        $sql = "SELECT program_records.student_id , program_records.date_started, program_records.foods, program_records.exercises, program_records.day, program_records.ended_day , program_records.food_acknowledge , program_records.exercise_acknowledge
        FROM program_records WHERE program_records.student_id = '$student_id'";
        $run = mysqli_query($conn,$sql);

        if(mysqli_num_rows($run) > 0){
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Meals</th>
                        <th>Meals Status</th>
                        <th>Activities</th>
                        <th>Activities Status</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            foreach($run as $row){
                ?>
                <tr>
                <td><?php echo $row ['day']?></td>
                <td><?php echo $row['foods']?></td>
                <td> 
                    <?php 
                        //kulay green kapag na acknowledge
                        // red kapag hindi

                        if($row['food_acknowledge'] == '1'){
                            echo "<span class='badge bg-success'>Done</span>";
                        }else{
                            echo "<span class='badge bg-danger'>Unfinished</span>";
                        }
                    ?>
                </td>
                <td><?php echo $row['exercises']?></td>
                <td> 
                    <?php 
                        if($row ['exercise_acknowledge']== '1'){
                            echo "<span class='badge bg-success'>Done</span>";
                        }else{
                            echo "<span class='badge bg-danger'>Unfinished</span>";
                        }
                        
                    ?>
                </td>
            </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
            <?php
        }


        ?>  
        
        <?php
        $query_remarks = "SELECT exercise_acknowledge FROM program_records WHERE program_records.student_id ='$student_id' AND program_records.exercise_acknowledge = '1'";
        $run_remarks = mysqli_query($conn,$query_remarks);
        $row_remarks = mysqli_num_rows($run_remarks);
        ?>
        <span>
        <table style="border:none; margin-top: 20px;">
            <tbody>
                <tr style="border:none;">
                    <td style="text-align:start; border:none;"><?php echo "<span class='h4' style='color:blue;'>Completed Exercises:" . ' ' . $row_remarks . '<br> </span>';?></td>
                    <td style="text-align: right; border:none;"> 
                        <?php
                        if($row_remarks == 10 || $row_remarks >= 10){
                            echo "<span style='color: green;'>Completed" . "<br></span>";
                        }else{
                            echo "<span style='color:red;'>Incomplete" . "<br> </span>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
       
        </span>
        <?php
        $query_remarks_food = "SELECT food_acknowledge FROM program_records WHERE program_records.student_id ='$student_id' AND program_records.food_acknowledge = '1'";
        $run_remarks_food = mysqli_query($conn,$query_remarks_food);
        $row_remarks_food = mysqli_num_rows($run_remarks_food);
        ?>
        <span>
        <table style="border:none;">
            <tbody>
                <tr style="border:none;">
                    <td style="text-align: start; border:none;"><?php echo "<span style='color: blue;'>Completed Meals:" . ' ' . $row_remarks_food . "<br></span>";?></td>
                    <td style="text-align: right; border:none;"> 
                    <?php
                            if($row_remarks_food == 30){
                                echo "<span style='color:green;'>Completed" . "<br></span>";
                            }else{
                                echo "<span style='color:red;'>Incomplete" . "<br> </span>";
                            }
                        ?>
                    </td>
                </tr>
                <tr style="border:none;">
                    <td style="border:none;"></td>
                    <td style="border:none; text-align: right;"> 
                        <?php
                            if($row_remarks >= 8 && $row_remarks_food == 30){
                                echo "<span class='px-2' style='color: green;'> Success" . "<br> </span>";
                            }else{
                                echo "<span class='px-3' style='color: red;'>Failed ". "<br> </span>";
                            }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
    </body>
</html>