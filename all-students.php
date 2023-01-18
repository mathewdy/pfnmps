<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        box-sizing:border-box;
        margin:0;
        padding:0;
    } 
    body{
        font-size: 11pt;
    }
    .wrapper{
        padding: 1em 2em 5em 2em;
    }
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td{
        padding: 0px 12px;
    }
</style>
<body>
<span style="text-align: center; padding-top: 4em; margin-bottom: 2em;">
<h1>Bucal Elementary School</h1>
<p style="opacity: 60%;">El pueblo condo, King Christian St., Kingspoint Subdivision Brgy. Bagbag, Novaliches,QC</p>
</span>
<hr style="opacity: 65%;">
<div class="wrapper">

<table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Section</th>
                <th>Birthday</th>
                <th>Age</th>
                <th>4ps Member</th>
                <th>Address</th>
                <th>Parent / Guardian</th>
                <th>Contact Number</th>
                <th>LRN</th>
                <th>Height</th>
                <th>Weight</th>
                <th>BMI</th>
            </tr>
        </thead>

<?php

$query_students = "SELECT students.first_name AS student_first_name,students.middle_name AS student_middle_name,students.last_name AS student_last_name,students.grade AS student_grade,students.section AS student_section,students.date_of_birth AS student_date_of_birth,students.age AS student_age ,students.four_ps AS student_four_ps,students.room AS student_room,students.house AS student_house,students.student_id AS student_student_id, students.street AS student_street ,students.subdivision AS student_subdivision ,students.barangay AS student_barangay,students.city AS student_city, users.first_name AS user_first_name, users.middle_name AS user_middle_name,users.last_name AS user_last_name, users.contact_number AS user_contact_number,
health_infos.height AS health_infos_height,health_infos.weight AS health_infos_weight,health_infos.bmi AS health_infos_bmi
FROM students
LEFT JOIN users 
ON students.student_id = users.student_id
LEFT JOIN health_infos 
ON students.student_id = health_infos.student_id ";
$run_students = mysqli_query($conn,$query_students);
if(mysqli_num_rows($run_students) > 0){
    foreach($run_students as $row){
        ?>

            <tbody>
                <tr>
                    <td><?=$row['student_first_name']. " " . $row['student_middle_name'] . " " . $row['student_last_name']?></td>
                    <td><?=$row['student_grade']?></td>
                    <td><?=$row['student_section']?></td>
                    <td><?=$row['student_date_of_birth']?></td>
                    <td><?=$row['student_age'] ?></td>
                    <td style="text-align: center;"><?php
                        if($row['student_four_ps'] == '0'){
                            echo "<b> No <span></b>";
                        }else{
                            echo "<b> Yes <span></b>";
                        }
                    ?>
                    </td>
                    <td>
                        <?=$row['student_room']." ". $row['student_house'] . " " . $row['student_street'] . " " . $row['student_subdivision'] . " " . $row['student_barangay'] . " " . $row['student_city']?>
                    </td>
                    <td>
                        <?=$row['user_first_name'] . " " . $row['user_middle_name'] . " " . $row['user_last_name']?>
                    </td>
                    <td><?=$row['user_contact_number']?></td>
                    <td><?=$row['student_student_id'] ?></td>
                    <td><?=$row['health_infos_height']?></td>
                    <td><?=$row['health_infos_weight']?></td>
                    <td><?=$row['health_infos_bmi']?></td>
                </tr>
            </tbody>
        <?php
    }
}
?>
    </table>
</div>
</body>
</html>